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
	<link rel="stylesheet" href="/static/css/ol.css">
	<link rel="stylesheet" href="/static/css/simple-lightbox.css">
	<link rel="stylesheet" href="/static/css/bitw.css">
	<script src="/static/js/ol.js"></script>
	<script src="/static/js/simple-lightbox.js"></script>
</head>
<body class="bgcol">

<div class="relative z-10">
	<h1 class="text-2xl m-8 text-white font-bold">Admin-Bereich</h1>
	<main class="page mb-5 px-2">
		<div class="w-full py-8">
			<?PHP
				try {
				$page->login();

				if (!$page->checkLogin()) {
					throw new Exception('
						<form class="m-4" method="POST">
						<p>Bitte Passwort eingeben</p>
						<input type="password" name="password" class="p-2 text-black">
						<button type="submit" class="bg-green-800 p-2">Einloggen</button>
						</form>
						');
				} else {
					if(isset($_POST['saveEvents'])) $page->saveEvents();
				?>

					<form method="POST">
						<h2 class="block text-white text-xl font-bold">Kalender</h2>

						<template class="template">
							<div class="event mb-1 relative">
								<div onclick="this.parentNode.remove()" class="absolute text-white bg-red-800 right-2 top-1 p-1 rounded px-2">X</div>
								<div class="bg-gray-700 gap-2 p-2 pb-4 grid grid-cols-1 lg:grid-cols-3">
									<div>
										<label class="block font-bold mx-2 mt-2">Titel</label>
										<input type="text" name="title[]" class="p-1 mx-2 text-black">
									</div>
									<div>
										<label class="block font-bold mx-2 mt-2">Startdatum</label>
										<input type="datetime-local" name="startdate[]" class="p-1 mx-2 text-black">
									</div>
									<div>
										<label class="block font-bold mx-2 mt-2">Enddatum</label>
										<input type="datetime-local" name="enddate[]" class="p-1 mx-2 text-black">
									</div>
									<div class="lg:col-span-2">
										<label class="block font-bold mx-2 mt-2">Beschreibung</label>
										<textarea name="description[]" class="p-1 mx-2 h-24 w-full text-black"></textarea>
									</div>
									<div>
										<label class="block font-bold mx-2 mt-2">Verein</label>
										<select name="verein[]" class="p-1 mx-2 text-black">
											<option>- bitte wählen -</option>
											<option value="ccc">CCC</option>
											<option value="digiges">DigiGes</option>
											<option value="lugs">LUGS</option>
											<option value="rl">RL</option>
											<option value="sgmk">SGMK</option>
										</select>
									</div>
								</div>
							</div>
						</template>

						<script>
							function addEvent() {
								let temp = document.querySelector(".template");
								let clon = temp.content.cloneNode(true);
								document.querySelector('#events').appendChild(clon);
							}

							document.addEventListener("DOMContentLoaded", function () {
								addEvent();
							})
						</script>

						<div id="events">
							<?php

							foreach ($page->getEvents() as $event) {
								?>

								<div class="event mb-1 relative">
									<div onclick="this.parentNode.remove()" class="absolute text-white bg-red-800 right-2 top-1 p-1 rounded px-2">X</div>
									<div class="bg-gray-700 gap-2 p-2 pb-4 grid grid-cols-1 lg:grid-cols-3">
										<div>
											<label class="block font-bold mx-2 mt-2">Titel</label>
											<input type="text" value="<?=$event['title'];?>" name="title[]" class="p-1 mx-2 text-black">
										</div>
										<div>
											<label class="block font-bold mx-2 mt-2">Startdatum</label>
											<input type="datetime-local" value="<?=$event['startdate'];?>" name="startdate[]" class="p-1 mx-2 text-black">
										</div>
										<div>
											<label class="block font-bold mx-2 mt-2">Enddatum</label>
											<input type="datetime-local" value="<?=$event['enddate'];?>" name="enddate[]" class="p-1 mx-2 text-black">
										</div>
										<div class="lg:col-span-2">
											<label class="block font-bold mx-2 mt-2">Beschreibung</label>
											<textarea name="description[]" class="p-1 mx-2 h-24 w-full text-black"><?=$event['description'];?></textarea>
										</div>
										<div>
											<label class="block font-bold mx-2 mt-2">Verein</label>
											<select name="verein[]" class="p-1 mx-2 text-black">
												<option>- bitte wählen -</option>
												<option <?=($event['verein'] == "ccc" ? "selected": "")?> value="ccc">CCC</option>
												<option <?=($event['verein'] == "digiges" ? "selected": "")?> value="digiges">DigiGes</option>
												<option <?=($event['verein'] == "lugs" ? "selected": "")?> value="lugs">LUGS</option>
												<option <?=($event['verein'] == "rl" ? "selected": "")?> value="rl">RL</option>
												<option <?=($event['verein'] == "sgmk" ? "selected": "")?> value="sgmk">SGMK</option>
											</select>
										</div>
									</div>
								</div>

								<?php
							}

							?>
						</div>
						<button onclick="addEvent()" class="bg-yellow-600 p-2 block m-2" type="button">weiteres Event +</button>
						<br>

						<button name="saveEvents" class="bg-green-600 p-2 block m-2" type="submit">Speichern</button>
					</form>

				<?php }
			} catch (Exception $exception) {
				echo "<div class='text-xl w-full bg-red-400 p-2 m-8'>" . $exception->getMessage() . "</div>";
			}
			?>
		</div>
	</main>
</body>
</html>
