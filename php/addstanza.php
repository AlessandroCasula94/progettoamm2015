<?php
session_start();
?>

<html>
	<head>
	<title> B&B </title>
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
					if(($_POST['n_posti'])&&($_POST['descrizione'])&&($_POST['prezzo'])&&($_POST['img']))
					{
						if(((preg_match('/[0-9]+.[0-9]{2}/',$_POST['prezzo']))||
						(preg_match('/[0-9]+.[0-9]/',$_POST['prezzo']))||
						(preg_match('/[0-9]+/',$_POST['prezzo'])))&& $_POST['prezzo']>0 )
						{
							$Query="insert into Stanza values
							('','".$_POST['n_posti']."','".$_POST['descrizione']."','".$_POST['prezzo']."','".$_POST['img']."')";
							$Ins =mysql_query($Query);
							echo"<div id='titolo'>Successo</div>";
							echo"<div id='testo'>Dati inseriti correttamente</div>";		
							header("Refresh:3;URL=home.php");	
						}
						else
						{
							echo"<div id='testo'>Si prega di inserire dati corretti</div>";		
							header("Refresh:3;URL=aggiungi.php");	
						}
					}
					else
					{
						echo"<div id='testo'>Si prega di inserire dati corretti</div>";
						header("Refresh:3;URL=aggiungi.php");
					}
					mysql_close($Connessione);
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
	