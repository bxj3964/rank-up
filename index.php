<?php
	$path='./';
	$css='index';
	$script='<script type="text/javascript" src="index.js"></script>';
	$attribute='background="$path/media/Velvet.Room_lower2.jpg" class="asyncImage" data-source="assets/media/Velvet.Room.jpg" scroll="no"';
	include $path.'assets/inc/header.php';
?>
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
<?php include $path.'assests/inc/footer.php';