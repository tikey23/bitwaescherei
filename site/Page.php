<?php

class Page {
	private $db;
	private $dbfile = "../config/events.sqlite3";
	private $config = [];

	public function __construct() {
		session_start();
		date_default_timezone_set('Europe/Zurich');

		$this->selfcheck();
		$this->db = new \PDO("sqlite:" . $this->dbfile);
	}

	private function selfcheck() {
		if (!file_exists("../config/.env")) {
			throw new Exception("Config-File not found");
		}

		$this->config = parse_ini_file("../config/.env");
		if (empty($this->config['ADMINPASSWORD'])) {
			throw new Exception("ADMINPASSWORD missing in .env");
		}

		if (!file_exists($this->dbfile)) {
			$db = new \PDO("sqlite:" . $this->dbfile);
			$db->exec("CREATE TABLE IF NOT EXISTS events(
			   id INTEGER PRIMARY KEY AUTOINCREMENT, 
			   title VARCHAR(255) NOT NULL DEFAULT '',
			   url VARCHAR(255) NOT NULL DEFAULT '',
			   verein VARCHAR(255) NOT NULL DEFAULT '',
			   description TEXT NOT NULL DEFAULT '0',
			   startdate DATETIME NOT NULL,
			   enddate DATETIME NOT NULL
			)");
		}
	}

	public function login() {
		if (isset($_POST['password'])) {
			if ($_POST['password'] === $this->config['ADMINPASSWORD']) {
				$_SESSION['admin'] = "loggedin";
			} else {
				unset($_SESSION['admin']);
			}
		}
	}

	public function checkLogin() {
		return ($_SESSION['admin'] === "loggedin");
	}

	public function getEvents() {
		return $this->db->query("SELECT * FROM events WHERE `enddate` >= '".date("Y-m-d")."' ORDER BY `id`");
	}
	public function getNextEvents() {
		$events = [];

		foreach ($this->db->query("select * from events where enddate >= '" . date("Y-m-d") . " 00:00:01' ORDER BY `startdate` ASC")->fetchAll() as $key => $event) {
			$newKey = strtotime($event['startdate']) ."-". $key;
			$events[$newKey] = $event;
			$startdate = new DateTime($event['startdate'], new DateTimeZone('Europe/Zurich'));
			$events[$newKey]['startdate'] = IntlDateFormatter::formatObject($startdate, 'eee d MMMM y HH:mm', 'de');

			$enddate = new DateTime($event['enddate'], new DateTimeZone('Europe/Zurich'));
			$events[$newKey]['enddate'] = IntlDateFormatter::formatObject($enddate, 'eee d MMMM y HH:mm', 'de');
		}

		$this->addWeeklyEvents($events);
		ksort($events);
		return $events;
	}

	private function addWeeklyEvents(&$events) {
		$timestamp = strtotime('next tuesday');
		$events[$timestamp] = [
			"title" => "Openlab",
			"description" => "Das offenes Elektroniklabor mit fachlicher Leitung, aktive Arbeit der Mitglieder an laufenden Projekten. Komm vorbei um Dich mit Gleichgesinnten auszutauschen, an laufenden Projekte mitzuwirken oder auch um z.B. zu lernen, wie man lötet, etwas zum blinken oder Geräusche machen bringt.",
			"verein" => "SGMK",
			"startdate" => $this->getDate($timestamp) . " 20:00",
			"enddate" => $this->getDate($timestamp) . " 23:30",
		];

		$timestamp = strtotime('next wednesday');
		$events[$timestamp] = [
			"title" => "ChaosTreff",
			"description" => "Das offene Treffen des Chaos Computer Club Zürich, bei dem der Spass am Gerät grossgeschrieben wird, ohne aber den gesellschaftlichen Blick zu verlieren. Komm vorbei um verstehen zu lernen, oder aber beteilige Dich direkt an technischen und politischen Projekten.",
			"verein" => "CCCZH",
			"startdate" => $this->getDate($timestamp) . " 19:00",
			"enddate" => $this->getDate($timestamp) . " 22:00",
		];

		$this->addDigiGesEvents($events);
		$this->addLugsEvents($events);

		// TODO: RL => zu unregelmässig
		// TODO: OSM => zu unregelmässig

	}

	private function addDigiGesEvents(&$events) {
		$timestamp = strtotime('next thursday');
		$date = new DateTime();
		$date->setTimestamp($timestamp);
		$nextEventMonth = IntlDateFormatter::formatObject($date, 'M', 'de');
		$date->sub(DateInterval::createFromDateString('1 week'));
		$thirdThursdayInMonth = FALSE;
		if($nextEventMonth == IntlDateFormatter::formatObject($date, 'M', 'de')) {
			$date->sub(DateInterval::createFromDateString('1 week'));
			if($nextEventMonth == IntlDateFormatter::formatObject($date, 'M', 'de')) {
				$date->sub(DateInterval::createFromDateString('1 week'));
				if($nextEventMonth != IntlDateFormatter::formatObject($date, 'M', 'de')) {
					$thirdThursdayInMonth = TRUE;
				}
			}
		}

		if(!$thirdThursdayInMonth) {
			$events[$timestamp] = [
				"title" => "Netzpolitik-Treff",
				"description" => "für Austausch und Weiterentwicklung der Themen, Ideen, Plänen und Projekte der Digitalen Gesellschaft. Hilf mit, für eine nachhaltige, demokratische und freie Zivilgesellschaft zu sorgen, und verteidige die Grundrechte in einer digital vernetzten Welt. Der «Netzpolitische Treff» findet jeweils nicht statt, wenn der Event \"Netzpolitischer Abend\" im Zentrum Karl der Grosse stattfindet (üblicherweise am dritten Donnerstag im Monat)",
				"verein" => "DigiGes",
				"startdate" => $this->getDate($timestamp) . " 18:00",
				"enddate" => $this->getDate($timestamp) . " 22:00",
			];
		}
	}

	private function addLugsEvents(&$events) {
		$today = date("Y-m-d");
		$timestamp = strtotime('2023-06-15 19:15:00');
		$thursday = new DateTime();
		$thursday->setTimestamp($timestamp);
		while($thursday->format("Y-m-d") < $today) {
			$thursday->add(DateInterval::createFromDateString('4 week'));
		}

		$timestamp = strtotime('2023-06-30 19:15:00');
		$friday = new DateTime();
		$friday->setTimestamp($timestamp);
		while($friday->format("Y-m-d") < $today) {
			$friday->add(DateInterval::createFromDateString('4 week'));
		}

		$nextEventDay = min($thursday, $friday);

		$events[$nextEventDay->getTimestamp()] = [
			"title" => "LUGS-Treff",
			"description" => "Treffen und Vorträge rund um Linux und Open Source. Durch den persönlichen Charakter wird der Einstieg in dieses weltweite Netzwerk leichter. 1994 gegründet und ist die erste Vereinigung der Schweiz, die sich ausschliesslich zur Aufgabe gemacht hat, Linux zu unterstützen.",
			"verein" => "LUGS",
			"startdate" => IntlDateFormatter::formatObject($nextEventDay, 'eee d MMMM y', 'de') . " 19:15",
			"enddate" => IntlDateFormatter::formatObject($nextEventDay, 'eee d MMMM y', 'de') . " 20:45",
		];
	}

	private function getDate($timestamp) {
		$date = new DateTime();
		$date->setTimestamp($timestamp);
		return IntlDateFormatter::formatObject($date, 'eee d MMMM y', 'de');
	}

	public function saveEvents() {
		$this->db->exec("delete from events");
		$sql = 'INSERT INTO events(title,startdate,enddate,description,verein) ' . 'VALUES(:title,:startdate,:enddate,:description,:verein)';
		$stmt = $this->db->prepare($sql);
		for ($i = 0; $i <= count($_POST['title']); $i++) {
			if(empty($_POST['title'][$i])) continue;
			$stmt->execute([
				':title' => htmlspecialchars(strip_tags($_POST['title'][$i])),
				':startdate' => htmlspecialchars(strip_tags($_POST['startdate'][$i])),
				':enddate' => htmlspecialchars(strip_tags($_POST['enddate'][$i])),
				':description' => htmlspecialchars(strip_tags($_POST['description'][$i])),
				':verein' => htmlspecialchars(strip_tags($_POST['verein'][$i])),
			]);
		}
	}
}