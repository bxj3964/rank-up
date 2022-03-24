<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$path='../';
	$css='persona_home';
	$background=$path.'assets/media/P3D-Stage-5.jpg';
	$assets='';
	include $path.'assets/inc/header.php';
?>
			<a id="p3">
				<img src="<?php echo $path?>assets/media/Persona_3_FES_logo.png" alt="Persona 3 FES Logo" onmouseover="this.src='<?php echo $path?>assets/media/Persona_3_FES_logo_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/Persona_3_FES_logo.png';">
			</a>
			<a id="p3p">
				<img src="<?php echo $path?>assets/media/Persona_3_Portable.png" alt="Persona 5 Logo" onmouseover="this.src='<?php echo $path?>assets/media/Persona_3_Portable_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/Persona_3_Portable.png';">
			</a>
			<div id="bottom">
				<h1>Thou hast established a new bond...</h1>
			</div>
		</div>
    </body>