<?php
	$path='../';
	$css='persona_home';
	$script='<script type="text/javascript" src="index.js"></script>';
	$attribute=' class="asyncImage" data-source="assets/media/Velvet.Room.jpg" scroll="no"';
	include $path.'assets/inc/header.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>P3 Home | Rank Up!</title>
		<link rel="icon" href="../assets/media/Gekkogamijin2.0_hollow.png">
		<link rel="stylesheet" media="screen and (orientation: landscape)" href="../assets/css/persona_home_desktop.css">
		<link rel="stylesheet" media="screen and (orientation: portrait)" href="../assets/css/persona_home_mobile.css">
		<link rel="stylesheet" href="../assets/css/persona_3_home.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	</head>
	<body scroll="no">
		<div class="grid">
			<div id="header">
				<a href="../index.html">
					<img id="logo" src="../assets/media/Gekkogamijin2.0_hollow.png">
					<h1 id="title">Rank Up!</h1>
				</a>
			</div>
			<img id="p3" src="../media/p3_alt.png" alt="Persona 3 Logo" onmouseover="this.src='media/p3_alt_glow.png';" onmouseout="this.src='media/p3_alt.png';">
			<img id="p4" src="../media/p4_alt.png" alt="Persona 4 Logo" onmouseover="this.src='media/p4_alt_glow.png';" onmouseout="this.src='media/p4_alt.png';">
			<img id="p5" src="../media/p5_alt.png" alt="Persona 5 Logo" onmouseover="this.src='media/p5_alt_glow.png';" onmouseout="this.src='media/p5_alt.png';">
			<div id="bottom">
				<h1>Thou hast established a new bond...</h1>
			</div>
		</div>
    </body>