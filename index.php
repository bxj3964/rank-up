<?php
	$path='./';
	$css='index';
	$script='<script type="text/javascript" src="'.$path.'assets/js/index.js"></script>';
	$attribute='class="asyncImage" data-source="./assets/media/Velvet.Room.jpg"';
	$background=$path.'assets/media/Velvet.Room_lower2.jpg';
	include $path.'assets/inc/header.php';
?>
			<a href="<?php echo $path?>persona.php?game=3" id="p3">
				<img src="<?php echo $path?>assets/media/p3_alt.png" alt="Persona 3 Logo" onmouseover="this.src='<?php echo $path?>assets/media/p3_alt_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/p3_alt.png';">
			</a>
			<a href="<?php echo $path?>persona.php?game=4" id="p4">
				<img src="<?php echo $path?>assets/media/p4_alt.png" alt="Persona 4 Logo" onmouseover="this.src='<?php echo $path?>assets/media/p4_alt_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/p4_alt.png';">
			</a>
			<a href="<?php echo $path?>persona.php?game=5" id="p5">
				<img src="<?php echo $path?>assets/media/p5_alt.png" alt="Persona 5 Logo" onmouseover="this.src='<?php echo $path?>assets/media/p5_alt_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/p5_alt.png';">
			</a>
			<div id="bottom">
				<h1>I Am Thou, Thou Art I...</h1>
			</div>
<?php include $path.'assests/inc/footer.php';