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
	<main class=" mb-5 px-2">

		<div class="block lg:flex gap-2">
			<div class="w-full">
				<h2 class="text-5xl text-center font-bold my-4 neondarker">Das läuft in der BW</h2>
				<div class="w-full py-2">
					<div class="relative w-full">
						<div class="absolute -inset-1 bg-gradient-to-r from-purple-500 via-teal-300 to-blue-500 rounded-lg blur opacity-75 hover:opacity-100 transition duration-1000 hover:duration-200 animate-tilt"></div>
						<div class="relative px-2 py-1 w-full bg-gradient-to-r from-purple-400 via-teal-200 to-blue-400 rounded-lg ">
						</div>
					</div>
				</div>
				<div class="grid grid-cols-2 gap-4 mt-2">
					<?php foreach ($page->getNextEvents() as $event) { ?>
						<div class="h-80 overflow-hidden group bg-gradient-to-br from-blue-800 to-purple-800 p-2  flex-none relative">
							<div class="text-lg absolute right-2 ml-2 mt-1 inline py-0.5 px-1.5 ring-1 ring-purple-400 bg-purple-900 rounded-xl uppercase"><?= $event['verein'] ?></div>

							<div class="font-bold text-2xl"><?= $event['startdate'] ?> Uhr</div>
							<?php if (substr($event['startdate'], 0, 10) != substr($event['enddate'], 0, 10)) { ?>
								<div class="h-6 text-lg"><?= $event['enddate'] ?> Uhr</div>
							<?php } else { ?>
								<div class="h-6"></div>
							<?php } ?>
							<div class="mb-2 text-4xl">
								<?= $event['title'] ?>
							</div>
							<div class="text-lg"><?= $event['description'] ?></div>
						</div>
					<?php } ?>
				</div>
				<br>
			</div>
		</div>
		</section>
	</main>
</div>
<div class="w-full fixed z-5 -top-20 -right-20">
	<div class="neonball"></div>
</div>

<script src="/static/js/bitw.js"></script>
</body>
</html>