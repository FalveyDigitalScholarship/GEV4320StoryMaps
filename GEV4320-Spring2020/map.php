<?php if ((parse_url($_GET['path'], PHP_URL_HOST) == "arcg.is") ||
	(parse_url($_GET['path'], PHP_URL_HOST) == "villanova.maps.arcgis.com") ||
	(parse_url($_GET['path'], PHP_URL_HOST) == "www.arcgis.com") ||
	(parse_url($_GET['path'], PHP_URL_HOST) == "storymaps.arcgis.com")) { ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/foundation.css">
		<link rel="stylesheet" href="styles/app.css">
		<script src="scripts/jquery.js" type="text/javascript"></script>
		<script src="scripts/app.js" type="text/javascript"></script>
	</head>
	</head>

	<body>
		<nav>
			<p class="back-link">
				<a href="/GEV4320-Spring2020">&larr; Back to all Maps</a>
			</p>
			<h1 id="map-title">GEV 4320/8320 Story Maps</h1>
			<div id="scroll-icon"><img src="images/one_finger_scroll2.png" alt=""></div>
		</nav>
		<iframe id="map-frame" src="<?= $_GET['path']?>" width="100%" height="100%" frameborder="0"></iframe>
	</body>
</html>
	
<?php } else {
    header($_SERVER["SERVER_PROTOCOL"]." 410 Gone"); 
    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
    header("Refresh: 0; url=$url");
    exit;
} ?>
