<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$games = array("3", "4", "5");
	if($conn && !empty($_GET['game']) && in_array($_GET['game'], $games){
		$result = pg_prepare($conn, "query", "SELECT * FROM Page WHERE id = $1");
		$result = pg_execute($conn, "query", array($_GET['game']));
		$result = $result[0];
	}
	else{
		echo 'Error fetching page';
	}
	pg_close($dbconn);
	$path='./';
	$css='persona_home';
	$background=$path.'assets/media/'.$result[2];
	$assets='';
	include $path.'assets/inc/header.php';
?>
			<a id="base">
				<img src="<?php echo $path?>assets/media/<?php echo $result[4]?>.png" alt="<?php echo $result[3]?>" onmouseover="this.src='<?php echo $path?>assets/media/<?php echo $result[4]?>_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/<?php echo $result[4]?>.png';">
			</a>
			<a id="deluxe">
				<img src="<?php echo $path?>assets/media/<?php echo $result[6]?>.png" alt="<?php echo $result[5]?>" onmouseover="this.src='<?php echo $path?>assets/media/<?php echo $result[6]?>_glow.png';" onmouseout="this.src='<?php echo $path?>assets/media/<?php echo $result[6]?>.png';">
			</a>
			<div id="bottom">
				<h1>Thou hast established a new bond...</h1>
			</div>
		</div>
    </body>