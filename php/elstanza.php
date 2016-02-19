<?php
session_start();
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
				<?php
				if(IsSet($_SESSION['User']))
				 {				
					error_reporting(E_ALL ^ E_DEPRECATED);
					$Connessione=mysql_connect("localhost","casulaAlessandro","dromedario8135");
					$DataBase=mysql_select_DB("amm15_casulaAlessandro");
					$codice=$_GET['codi'];
					$Query="DELETE FROM Stanza WHERE cod='$codice' ;";
					$ExQuery=mysql_query($Query);
					echo"<div id='testo'>Eliminazione completata correttamente</div>";			
					$Query="DELETE FROM prenotazioni WHERE cod_pren='$codice';";
					$ExQuery=mysql_query($Query);
					mysql_close($Connessione);
					header("Refresh:2;URL=elimina.php");
					
				}
				else 
				{
					echo"<div id='testo'>Si prega di accedere prima di continuare</div>";		
					header("Refresh:2;URL=home.php");						 
		        }
				?>
				</div>
			</div>
			<?php include("footer.html");?>
		</div>
	</body>
</html>
	