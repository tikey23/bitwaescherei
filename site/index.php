<?php

require_once('Page.php');
$page = new Page();
?>
<!doctype html>
<html lang="de-CH">
<head>
	<meta charset="UTF-8"/>
	<title>Bitwäscherei - Hackerspace in Zürich (Hardbrücke)</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/static/js/tailwind.js"></script>
	<!-- OpenLayers https://openlayers.org/download/ -->
	<link rel="stylesheet" href="/static/css/ol.css">
	<link rel="stylesheet" href="/static/css/simple-lightbox.css">
	<link rel="stylesheet" href="/static/css/bitw.css">
	<script src="/static/js/ol.js"></script>
	<script src="/static/js/simple-lightbox.js"></script>
</head>
<body class="bgcol">

<div class="relative z-10">
	<header class="page">
		<div class="block lg:flex lg:m-4">
			<div class="w-full lg:w-1/3">
				<a href="/" title="Bitwäscherei" class="hover:animate-pulse">
					<svg width="220" height="220" class="m-auto lg:m-0">
						<image xlink:href="/static/img/bw-logo-2022.svg" src="/static/img/BW-logo-2022.png" width="220" height="220"/>
					</svg>
				</a>
			</div>
			<div class="w-auto lg:w-2/3 mt-12">
				<blockquote class="lg:ml-12 lg:text-right">
					<div class="ml-1 -mt-2 mb-8 text-xl font-bold">Hackerspace-Kollektiv in Zürich</div>
					<p>
						Im Sommer 2020 entstand eine neue Hackerspace Gemeinschaft im Herzen von Zürich, als kollektives Unterfangen im Zusammenschluss von Chaos Computer Club Zürich <span class="text-xs bg-teal-700 text-gray-100 ring-1 ring-purple-400 px-1.5 py-1 mx-1 rounded">CCCZH</span>, Schweizerische Gesellschaft für Mechatronische Kunst <span class="text-xs bg-teal-700 text-gray-100 ring-1 ring-purple-400 px-1.5 py-1 mx-1 rounded">SGMK</span>, Digitale Gesellschaft <span class="text-xs bg-teal-700 text-gray-100 ring-1 ring-purple-400 px-1.5 py-1 mx-1 rounded">DigiGes</span>, Linux User Group Schweiz <span class="text-xs bg-teal-700 text-gray-100 ring-1 bg-teal-700 px-1.5 py-1 mx-1 rounded">LUGS</span>, und später dazugestossen sind dann noch das Real Life Café <span class="text-xs bg-teal-700 text-gray-100 ring-1 ring-purple-400 px-1.5 py-1 mx-1 rounded">RL</span> und Hackteria.
					</p>
				</blockquote>

                    <div style="border-radius: 20px; margin-top: 50px; text-align: center; font-size:1.4em; padding:4px; background: rgba(200,100,100, 0.5)">
                        Erhalte auf der Mailing-Liste: <a href="mailto:bitwascherei@chaostreff.ch" style="color: white;">bitwascherei@chaostreff.ch</a>
                    </div>

			</div>
		</div>
	</header>
	<main class="page mb-5 px-2">
		<div class="w-full py-8">
			<div class="relative w-full">
				<div class="absolute -inset-1 bg-gradient-to-r from-purple-500 via-teal-300 to-blue-500 rounded-lg blur opacity-75 hover:opacity-100 transition duration-1000 hover:duration-200 animate-tilt"></div>
				<div class="relative px-2 py-1 w-full bg-gradient-to-r from-purple-400 via-teal-200 to-blue-400 rounded-lg ">
				</div>
			</div>
		</div>
		<section>
			<h2 class="text-3xl font-bold my-2 neon">Das Projekt</h2>
			<a href="/static/img/PANO_20200822_235452~2.jpg" alt="Panorama der Bitwäscherei"><img src="/static/img/PANO_20200822_235452~2-small.jpg" alt="Panorama der Bitwäscherei" class="w-full rounded">
				<div>
					Panorama der Bitwäscherei
				</div>
			</a>
			<div class="my-8 text-center align-content-center grid grid-cols-1 lg:grid-cols-3 gap-2">
				<a href="https://www.ccczh.ch/" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">Chaos Computer Club Zürich (CCCZH)</div>
					<br>
					<img src="/static/img/logos/ccczh.png" class="m-auto" style="height:80px;">
				</a>
				<a href="https://www.lugs.ch/lugs/" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">Linux User Group Switzerland (LUGS)</div>
					<br>
					<img src="/static/img/logos/lugs.gif" class="m-auto" style="height:80px;">
				</a>
				<a href="https://sgmk-ssam.ch/" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">SGMK - MechArtLab</div>
					<br>
					<img src="/static/img/logos/sgmk.png" class="m-auto" style="height:80px;">
				</a>
				<a href="https://www.digitale-gesellschaft.ch/" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">Digitale Gesellschaft</div>
					<br>
					<img src="/static/img/logos/digiges.png" class="m-auto" style="height:80px;">
				</a>
				<a href="https://www.hackteria.org/" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">Hackteria - Open Science Lab</div>
					<br>
					<img src="/static/img/logos/hackteria.png" class="m-auto" style="height:80px;">
				</a>
				<a href="https://reallifecafe.ch" target="_blank" class="transition bg-gradient-to-bl from-blue-800 to-purple-800 brightness-100 hover:brightness-50 ring-1 ring-purple-400 rounded p-2">
					<div class="font-weight-bold pt-1">Real-life Café</div>
					<br>
					<img src="/static/img/logos/reallife.png" class="m-auto" style="height:80px;">
				</a>
			</div>

			<div class="mt-12">
				<h2 class="text-3xl font-bold my-4 neon">So findest du uns</h2>
				<div class="block lg:flex gap-8">
					<div class="w-full lg:w-2/3" id="bitwMap"></div>
					<div class="w-full lg:w-1/3">Ehemalige Zentralwäscherei Zürich<br/><br/>Verein Bitwäscherei<br/>Neue Hard 12<br/>CH-8005 Zürich<br/>+41 44 520 98 37<br/>
						<div style="font-size:.9em; margin-top:.5rem;">
							(Zugang zum Hof über das grosse Tor, dann gleich rechts zwischen Haus und Garagen entlang und links durch die Glastür ins Haus, dort dann 3. OG rechts)
						</div>
					</div>
				</div>
			</div>

			<div class="mt-12 block lg:flex gap-8">
				<div class="w-full lg:w-2/3">
					<h2 class="text-3xl font-bold my-4 neon">Das läuft gerade</h2>

					<p class="text-sm text-gray-400">Änderungen vorbehalten - Angaben ohne Gewähr. Bitte vergewissere dich beim jeweiligen Veranstalter, ob und wie das Event stattfindet.</p>
					<div class="overflow-x-scroll overflow-y-hidden flex gap-2 p-2">
						<?php foreach ($page->getNextEvents() as $event) { ?>
							<div class="group bg-gradient-to-br from-blue-800 to-purple-800 my-3 p-2 w-[300px] flex-none relative">
								<div class="text-xs absolute right-2 ml-2 mt-1 inline py-0.5 px-1.5 ring-1 ring-purple-400 bg-purple-900 rounded-xl uppercase"><?= $event['verein'] ?></div>

								<div class="font-bold"><?= $event['startdate'] ?> Uhr</div>
								<?php if (substr($event['startdate'], 0, 10) != substr($event['enddate'], 0, 10)) { ?>
									<div class="h-6 text-sm"><?= $event['enddate'] ?> Uhr</div>
								<?php } else { ?>
									<div class="h-6"></div>
								<?php } ?>
								<div class="mb-2 text-xl">
									<?= $event['title'] ?>
								</div>
								<div class="text-sm min-h-[100px] h-24 transition-all duration-500 ease-in-out overflow-hidden group-hover:h-full"><?= $event['description'] ?></div>
							</div>
						<?php } ?>
					</div>
					<br>
					<!--										<div class="block lg:flex bg-gradient-to-bl from-blue-800 to-purple-800 my-2">-->
					<!--											<div class="bg-blue-100/30 lg:w-1/4 p-4 text-right">-->
					<!--												<div class="text-4xl font-bold">15. Okt.</div>-->
					<!--												<div class="text-2xl">ab 15 Uhr</div>-->
					<!--											</div>-->
					<!--											<div class="lg:w-3/4 p-4">-->
					<!--												<div class="text-3xl">Bitwäscherei-Party</div>-->
					<!--												<br>-->
					<!--												<p>-->
					<!--													Vieles hat sich in den letzten Monaten getan in der Bitwäscherei. Unter anderem sind zwei neue Vereine (Real Life Café und Hackteria) der Bitwäscherei beigetreten. Zeit, dies mit einer Party zu begiessen. Die Party findet am 15. Oktober 2022 ab 15.00 Uhr in der Bitwäscherei, 3. Stock ZWZ, Neue Hard 12, in Zürich statt.-->
					<!--												</p>-->
					<!--												<p>-->
					<!--													Wir beginnen die Party mit einer Kurzvorstellung aller Vereine und allfälliger persönlicher Projekte. Danach beginnt der lockere Teil des Anlasses.-->
					<!--												</p>-->
					<!--												<p>Bitte beachtet, dass dies keine offene Publikumsparty ist. Die Veranstaltung ist lediglich für Mitglieder und Anhang, sowie Kolleg:innen der jeweiligen Vereine und Interessent:innen, die sich einem der Vereine anschliessen möchten.-->
					<!--												</p>-->
					<!--											</div>-->
					<!--										</div>-->
					<ul class="event_overview">
						<li><span class="font-bold"><a href="https://mechatronicart.ch/mechartlab/" target="_blank">OpenLab</a> - jeden Dienstag ab 20 Uhr</span><br>
							Das offenes Elektroniklabor mit fachlicher Leitung, aktive Arbeit der Mitglieder an laufenden Projekten. Komm vorbei um Dich mit Gleichgesinnten auszutauschen, an laufenden Projekte mitzuwirken oder auch um z.B. zu lernen, wie man lötet, etwas zum blinken oder Geräusche machen bringt.
						</li>
						<li><span class="font-bold"><a href="https://www.ccczh.ch/" target="_blank">ChaosTreff</a> - jeden Mittwoch&nbsp;ab 19 Uhr</span><br>
							Das offene Treffen des Chaos Computer Club Zürich, bei dem der Spass am Gerät grossgeschrieben wird, ohne aber den gesellschaftlichen Blick zu verlieren. Komm vorbei um verstehen zu lernen, oder aber beteilige Dich direkt an technischen und politischen Projekten.
						</li>
						<li><span class="font-bold"><a href="https://www.lugs.ch/lugs/" target="_blank">Treff der Linux User Group Schweiz</a> - jede zweite Woche iternierend <a href="https://www.lugs.ch/lugs/termine/" target="_blank">Donnerstags oder Freitags</a> von 19 bis 21 Uhr</span><br>
							Treffen und Vorträge rund um Linux und Open Source.&nbsp;Durch&nbsp;den persönlichen Charakter wird der Einstieg in dieses weltweite Netzwerk leichter. 1994 gegründet und ist die erste Vereinigung der Schweiz, die sich ausschliesslich zur Aufgabe gemacht hat, Linux zu unterstützen.
						</li>
						<li><span class="font-bold"><a href="https://www.digitale-gesellschaft.ch/" target="_blank">Digitale Gesellschaft</a> - Jeweils Donnerstags ab 18 Uhr der «Netzpolitik-Treff»</span><br>
							für Austausch
							und Weiterentwicklung der Themen, Ideen, Plänen und Projekte der
							Digitalen Gesellschaft. Hilf mit, für eine nachhaltige, demokratische
							und freie Zivilgesellschaft zu sorgen, und verteidige die Grundrechte in
							einer digital vernetzten Welt. Der «Netzpolitische Treff» findet jeweils
							nicht statt, wenn der Event "Netzpolitischer Abend" im Zentrum Karl der
							Grosse stattfindet (üblicherweise am dritten Donnerstag im Monat)
						</li>
						<li>
							<span class="font-bold"><a href="https://openstreetmap.org" target="_blank">Open Street Map</a> - Stammtisch jeweils am 11. des Monats ab 18:30 Uhr</span><br>
							Beim <a href="https://wiki.openstreetmap.org/wiki/DE:Switzerland:Z%C3%BCrich/OSM-Treffen">Zürcher Stammtisch der OpenStreetMapper/innen</a> wird aktiv an Open Street Map weitergearbeitet, überarbeitet, überprüft und überblickt - ausserdem werden Details und Grundsätze diskutiert und weiter ausgearbeitet. Keine Vorkenntnisse nötig!
						</li>
						<li>
							<span class="font-bold"><a href="https://reallifecafe.ch" target="_blank">Real-Life-Treffen</a> - jeden 2. Freitag 18 - 22 Uhr</span><br>
							Bist du ein Fan von Japan? Bist du ein Game-Nerd? Magst Animes oder liest Mangas? Möchtest dich gerne mit anderen über alles Mögliche austauschen? Dann bist du hier genau richtig! ヽ(*⌒∇⌒*)ﾉ
						</li>
					</ul>
					<br>
					<p><b>Unregelmässig</b></p>
					<ul class="space-y-4">
						<li>Zusätzlich dazu gibt es in der Bitwäscherei einen grossen Haufen Sitzungen und Arbeitstreffen, sowie natürlich auch Aktivitäten von vereinsinternen Arbeitsgruppen - sobald Du an einem der öffentlichen Treffen teilnimmst, wirst Du schnell mitbekommen, was sonst so läuft -- und ehe man sichs versieht steckt man mittendrin.
						</li>
						<li>Daneben laufen immer wieder andere Veranstaltungen, Anlässe und Workshops unterschiedlicher Art, sofern sie nicht von einem Virus boykottiert werden ;)
						</li>
						<li>Zum Beispiel von der <a href="https://www.digitale-gesellschaft.ch/" target="_blank">Digitalen Gesellschaft</a>: öffentliche Workshops/Talks zu Digitalem Aikido (4xJahr) u.ä.; Frühlings- &amp; Herbsttreffen (ganztags, 25-30 Personen &amp; Essen), Vorstandssitzungen &amp; sonstige Besprechungen, Büronutzung ganztags, täglich
						</li>
					</ul>
				</div>
				<div class="w-full lg:w-1/3 mt-12 lg:mt-0">
					<h2 class="text-3xl font-bold my-4 neon">Bleib informiert</h2>
					<p>Tritt mit uns über folgende Kanäle in Verbindung oder komm einfach direkt vorbei!</p>
					<p class="mt-4">Abonniere die Mailingliste: <a href="https://lists.chaostreff.ch/postorius/lists/bitwascherei.chaostreff.ch/">bitwascherei@chaostreff.ch</a>
					<div class="bg-gradient-to-br from-blue-800 to-purple-800 my-3">
						<div class="p-4">
							<div class="text-2xl text-teal-200">Matrix-Chat</div>
							<p class="my-4">
								Als Messenger benutzen wir zunehmend einen Matrix-Server, wo du selbst einen Account eröffnen kannst. Es gibt verschiedene öffentliche Räume. Für nicht-öffentliche Räume wende dich bitte an den jeweiligen Verein.
							</p>
							<a class="inline-block px-6 py-2 border-2 border-teal-400  font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="https://chat.digitale-gesellschaft.ch" target="_blank">chat.digitale-gesellschaft.ch</a>
						</div>
					</div>
					<div class="bg-gradient-to-br from-blue-800 to-purple-800 my-6">
						<div class="p-4">
							<div class="text-2xl text-teal-200">Workadventu.re</div>
							<p class="my-4">
								Du möchtest an einer Veranstaltung teilnehmen, kannst aber nicht vor Ort sein? Schaue einfach digital über workadventu.re rein und kommunizieren im Voice-/Video-Chat mit anderen.
							</p>
							<a class="inline-block px-6 py-2 border-2 border-teal-400 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="https://lab.mechatronicart.ch/" target="_blank">lab.mechatronicart.ch</a>
						</div>
					</div>
					<div class="bg-gradient-to-br from-blue-800 to-purple-800 my-6">
						<div class="p-4">
							<div class="text-2xl text-teal-200">Wiki</div>
							<p>Möchtest du Informationen über die Bitwäscherei haben oder dich aktiv einbringen? Dann kannst du dich als Mitglied eines Vereins registrieren und deinen Account freischalten lassen.</p>
							<a class="inline-block px-6 py-2 border-2 border-teal-400 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="https://wiki.digitale-gesellschaft.ch/" target="_blank">zum Wiki</a>
						</div>
					</div>
					<div class="bg-gradient-to-br from-blue-800 to-purple-800 my-6">
						<div class="p-4">
							<div class="text-2xl text-teal-200">Gut zu wissen</div>
							<ul class="ml-6 list-disc space-y-2">
								<li>Falls die Getränke knapp werden vor Ort, kannst du gerne einen Notstand melden. QR-Code / Link hängt beim Getränkelager an der Wand.</li>
								<li>Ist die Tür unten verschlossen, rufe einfach unter +41 44 520 98 37
									an und jemand macht dir sicher auf.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mt-12">
			<h2 class="text-3xl font-bold my-4 neon">Einblicke in den Space</h2>
			<div class="container gap-2">
				<div class="flex flex-wrap -m-1 md:-m-2" id="gallery">
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/028.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/028.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/027.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/027.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/026.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/026.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/025.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/025.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/024.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/024.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/017.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/017.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/018.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/018.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/019.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/019.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/020.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/020.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/021.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/021.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/022.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/022.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/023.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/023.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/001.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/001.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/003.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/003.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/004.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/004.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/005.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/005.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/006.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/006.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/007.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/007.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/008.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/008.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/009.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/009.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/010.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/010.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/011.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/011.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/012.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/012.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/013.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/013.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/014.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/014.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/015.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/015.jpg">
						</a>
					</div>
					<div class="flex flex-wrap w-1/2 lg:w-1/4">
						<a href="/static/img/gallery/016.jpg" class="w-full h-64 p-1 md:p-2">
							<img alt="gallery" class="hover:brightness-50 transition block object-cover object-center w-full h-full rounded"
								 src="/static/img/gallery/small/016.jpg">
						</a>
					</div>

				</div>
			</div>
		</section>

		<section class="mt-12">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
				<div>
					<h2 class="text-3xl font-bold my-4 neon">Unser Leitbild</h2>
					<div class="container gap-4 space-y-4">
						<div><strong>Ziel</strong><br>
							Die Bitwäscherei ist ein Raum um Kontakte zu knüpfen und den Austausch von Wissen zu
							ermöglichen. Wir möchten ein inspirierender Ort sein um kulturelle, technologische,
							künstlerische und soziale Interaktionen zu ermöglichen. Dazu bieten wir eine umfangreiche
							Infrastruktur und helfen Ideen zu entwickeln und umzusetzen. Wir arbeiten an Hardware,
							Digitalen
							sowie konzeptionellen Themen und wollen auch die Realisierung von ungewöhnlichen Ideen
							ermöglichen.
						</div>
						<div>
							<strong>Nutzungen</strong><br>
							Die Bitwäscherei bietet den Rahmen um den beteiligten Vereinen ihre unterschiedlichen
							Nutzungen
							zu ermöglichen. Individuelles Arbeiten ist ebenso willkommen, wie gemeinsame Projekte in den
							Vereinen und über die Vereine hinaus. Wir sind ein Community Space und haben keine
							persönlichen
							Arbeitsplätze. Wir richten unser Space wohnlich ein aber wohnen nicht hier. Wir bieten Raum
							für
							Experimente und kreative Nutzungen und möchten damit auch Öffentlichkeit schaffen.
						</div>
						<div>
							<strong>Umgang</strong><br>
							Be exellent to each other. Wir gehen wohlwollend und unterstützend miteinander um. Wir
							respektieren unsere eigenen und die physische und emotionale Grenzen anderer. Bei unseren
							Handlung stellen wir die gegenseitige Zustimmung sicher. Dabei setzen wir auf Freiheit und
							Selbstverantwortung.
							<br>
							Diskriminierung, Gewalt sowie übergriffiges oder respektloses Verhalten dulden wir in keiner
							Weise in der Bitwäscherei. Wer sich sexistisch, rassistisch, homo-/transfeindlich,
							ableistisch
							oder sonst menschenfeindlich verhält, muss unseren Space verlassen. Unser Care Team ist
							erste
							Anlaufstelle wenn wir problematischen Verhalten erleben oder beobachten.
						</div>
						<div>
							<strong>Achtsamkeit</strong><br>
							Wir geben aufeinander und uns selber acht und leben eine aktive Willkommenskultur. Menschen
							welche zum ersten mal die Bitwäscherei besuchen, begrüssen wir freundlich und erläutern die
							Organisation der Bitwäscherei und erklären die Regeln.
							<br>
							Wir respektieren die Privatsphäre und achten auf die Balance, wenn eine starke Nutzung von
							einzelnen erfolgt oder diese übermässig viel Raum einnehmen (räumlich und bei
							Entscheidungen).
						</div>
					</div>
				</div>
				<div>
					<h2 class="text-3xl font-bold my-4 neon">Charta</h2>
					<div class="container gap-4 space-y-4">
						<div><strong>Target</strong><br>
							The Bitwäscherei is a space for socialising and exchanging knowledge. We want to be an
							inspiring place for cultural, technological, artistic and social interaction. To this end,
							we offer a comprehensive infrastructure and help to develop and realise ideas. We work on
							hardware, digital and conceptual topics and also want to enable the realisation of unusual
							ideas.
						</div>
						<div>
							<strong>Uses</strong><br>
							The Bitwäscherei provides the framework to enable the participating organisations to use the
							space in different ways. Individual work is just as welcome as joint projects within the
							clubs and beyond. We are a community space and have no personal workplaces. We arrange our
							space in a homely way but do not live here. We offer space for experiments and creative uses
							and also want to create publicity.
						</div>
						<div>
							<strong>Interaction</strong><br>
							Be excellent to each other.

							We treat each other with kindness and support. We respect our own and others' physical and
							emotional boundaries. We ensure mutual consent in our actions. In doing so, we emphasise
							freedom and personal responsibility.

							We do not tolerate discrimination, violence or abusive or disrespectful behaviour in any way
							within Bitwäscherei. Anyone who engages in sexist, racist, homophobic/transphobic, ableist
							or other misanthropic behaviour must leave our space. Our Care Team is the first point of
							contact if we experience or observe problematic behaviour.
						</div>
						<div>
							<strong>Awareness</strong><br>
							We take care of each other and ourselves and live an active welcoming culture. We greet
							people who visit the Bitwäscherei for the first time in a friendly manner and explain the
							organisation of the Bitwäscherei and the rules.
							<br>
							We respect privacy and pay attention to balance when there is heavy use by individuals or
							when they take up an excessive amount of space (spatially and when making decisions).
						</div>
					</div>

				</div>
			</div>
		</section>

		<footer class="pt-4 my-8 text-teal-200">
			<div class="w-full py-8">
				<div class="relative w-full">
					<div class="absolute -inset-1 bg-gradient-to-r from-purple-500 via-teal-300 to-blue-500 rounded-lg blur opacity-75 hover:opacity-100 transition duration-1000 hover:duration-200 animate-tilt"></div>
					<div class="relative px-2 py-1 w-full bg-gradient-to-r from-purple-400 via-teal-200 to-blue-400 rounded-lg ">
					</div>
				</div>
			</div>

			<div class="flex justify-between px-4">
				<div>
					<a data-modal="modal-one" style="cursor:pointer">Impressum &amp; Datenschutz</a>
				</div>
				<div class="w-1/3 text-right">
					<a href="https://github.com/tikey23/bitwaescherei" target="_blank">
						Fork on Github:
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							 width="30" height="30"
							 viewBox="0 0 30 30"
							 style="display:inline; fill:#70eac0;">
							<path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
						</svg>

					</a>
				</div>
			</div>
		</footer>
	</main>
</div>
<div class="w-full fixed z-5 -top-20 -right-20">
	<div class="neonball"></div>
</div>
<div class="modal" id="modal-one">
	<div class="modal-bg modal-exit"></div>
	<div class="modal-container mx-8 relative">
		<button class="modal-close modal-exit bg-red-500 rounded-2xl p-2 m-2 absolute right-10">X</button>
		<h1 class="text-3xl my-2">Rechtliches</h1>

		<h2 class="text-2xl my-2">Datenschutzerklärung</h2>
		<p>Für uns ist Datenschutz wichtig. Aus diesem Grunde halten wir uns an das geltende Recht und setzen auf Datensparsamkeit. Konkret bedeutet dies:</p>
		<ul class="list-disc space-y-2 ml-4">
			<li>Wir bearbeiten ausschliesslich Personendaten, sofern notwendig und teilen dies konkret mit. Die Daten werden ausserdem nur solange behalten, wie nötig. Sie werden nicht weitergegeben.</li>
			<li>Wir verwenden ausschliesslich Dienste und Server in der Schweiz und in Deutschland.</li>
			<li>Wir verwenden keine Cookies und speichern keine IP-Adressen, die eine Verfolgung von Personen ermöglichen.</li>
		</ul>

		<h2 class="text-2xl my-2">Impressum</h2>
		<p>
			Verein Bitwäscherei<br>
			Neue Hard 12<br>
			8005 Zürich<br>
			Schweiz<br>
			<br>

			+41 44 520 98 37 (unregelmässig besetzt)

	</div>
</div>

<script src="/static/js/bitw.js"></script>
</body>
</html>