<?php
		session_start();
		session_destroy();
?>
<html>
	<head>
		<link href="../css/stile.css" rel="stylesheet" type="text/css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<div id="corpo">
			<?php include("intestazione.php");?>
			<div id="interno">
				<?php include("menu.php");?>
				<div id="contenuto">
				<?php header("Location:home.php");?>
				</div>
			</div>
			<?php include("footer.html");?>
		</div>
	</body>
</html>