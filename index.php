<?php
	$path='./';
	$css='index';
	$script='<script type="text/javascript" src="index.js"></script>';
	include $path.'assets/inc/header.php';
?>
	<body class="asyncImage" data-source="assets/media/Velvet.Room.jpg" scroll="no">
		<div class="grid">
			<div id="header">
				<img id="logo" src="assets/media/Gekkogamijin2.0_hollow.png">
				<h1 id="title">Rank Up!</h1>
			</div>
			<a href="persona-3/index.php" id="p3">
				<img src="assets/media/p3_alt.png" alt="Persona 3 Logo" onmouseover="this.src='media/p3_alt_glow.png';" onmouseout="this.src='media/p3_alt.png';">
			</a>
			<a href="persona-4/index.php">
				<img id="p4" src="assets/media/p4_alt.png" alt="Persona 4 Logo" onmouseover="this.src='media/p4_alt_glow.png';" onmouseout="this.src='media/p4_alt.png';">
			</a>
			<a href="persona-5/index.php">
				<img id="p5" src="assets/media/p5_alt.png" alt="Persona 5 Logo" onmouseover="this.src='media/p5_alt_glow.png';" onmouseout="this.src='media/p5_alt.png';">
			</a>
			<div id="bottom">
				<h1>I Am Thou, Thou Art I...</h1>
			</div>
		</div>
    </body>
</html>