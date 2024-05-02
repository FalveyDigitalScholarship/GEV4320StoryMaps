<?php
	include 'includes/functions.php';
	$showcase = new Showcase();
?>

<html>
	<head>
		<title>GEV 4320/8320: GIS for Conservation Management Story Maps</title>
		<link rel="stylesheet" href="styles/foundation.css">
		<link rel="stylesheet" href="styles/app.css">
	</head>
	<body>

		<header>
			<!-- <div class="row"> -->
				<div class="columns medium-7">
					<h1>GEV 4320/8320: GIS for Conservation Management Esri Story Maps</h1>
					<p class="intro">In Spring of 2020, students in Professor Jennifer Santoro's GEV 4320/8320: GIS for Conservation Management course at Villanova University used Esri Story Maps to tell compelling ecological conservation stories for their final class projects.</p>
				</div>
				<div class="columns medium-2 right">
					<h3 class="partners">Partners</h3>
					<div class="logo"><img src="images/vulogo.png" alt="Villanova University Logo"/>
					</div>
					<p class="logo">Department of Geography and the Environment</p>
					<p class="logo">Falvey Library Digital Scholarship Program</p>
				</div>
			<!-- </div> -->
		</header>
		<div id="main-content">
				<ul class="medium-block-grid-3 large-block-grid-4" id="tiles">
					<?php foreach(array_slice($showcase->showcase_data,1) as $item){ ?>
						<li><a href="map.php?path=<?php echo $item['2'];?>">
							<img src="<?php echo $item['6'] ?>" width="100%" />
							<h2><?php echo $item['0'] ?></h2>
		<div class="meta">
			<h3><span class="author"><?php echo $item['1'] ?></span>
				<span class="pubdate"><?php echo $item['3']; ?></span>
			</h3>
			<p><?php echo $item['7']; ?></p>
</div>
</a>
</li>



        <?php } ?>
</ul>
</div>

		<footer>
		<ul id="sponsors">
				<!--<li><h2>Partners</h2></li>-->
				<!--<li class="logo"><p class="logo">Department of Geography and the Environment</p></li>-->
				<!--<li class="logo"><p class="logo">Falvey Library</p></li>-->
				<li class="logo">

				<p class="logo"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
				<img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
				<br/>
				<br/>
				This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</p>
			</li>
			</ul>
			<!--
			Project open source code originally developed by Erik Olson at the NC State University Libraries.
			This project site is based on the touchscreen exhibit:
			<a href="https://www.lib.ncsu.edu/spaces/lawrence-ella-apple-technology-showcase/exhibits/raleigh-age-model-t">
			Raleigh in the Age of the Model T</a>
			-->
		</footer>

		<script type="text/javascript" src="scripts/jquery.js"></script>
		<script type="text/javascript" src="scripts/website.js"></script>
	</body>
</html>
