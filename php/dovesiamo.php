<?php
session_start();
?>

<html>
	<head>
	<title> B&B </title>
		<link href="../css/stile.css" rel="stylesheet" type="text/css"/>
		<meta charset="utf-8"/>
		<script type="text/javascript" src="../ajax/ajax_go.js"></script>
	</head>
	<body>
		<div id="corpo">
			<?php include("intestazione.php");?>
			<div id="interno">
				<?php include("menu.php");?>
				<div id="contenuto">
					
					<div id="sidebar_right">
					<div id="titolo">
						Vuoi visualizzare la mappa per poter arrivare da noi?
					</div>
					<button type='button' onClick="ajax_go('ajax.php','sidebar_right')">Clicca qui</button>
					</div>
					<div id="testo">
						<p>
					</div>
				</div>
			</div>
			<?php include("footer.html");?>
		</div>
	</body>
</html>
	