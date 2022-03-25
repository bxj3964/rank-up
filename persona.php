<?php
	$conn = pg_connect(getenv("DATABASE_URL")) or die('Could not connect: ' . pg_last_error());;
	$games = array("3", "4", "5")
	if($conn && !empty($_GET['game']) && in_array($_GET['game'], $games){
		$result = pg_prepare($conn, "query", 'SELECT * FROM Page WHERE id = $1');
		$result = pg_execute($conn, "query", array($_GET['game']));
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
			
			<div id="bottom">
				<h1>Thou hast established a new bond...</h1>
			</div>
		</div>
    </body>