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
							$user=$_SESSION['User'];
							$todays_date = date("Ymd");
							$Connessione=mysql_connect("localhost","casulaAlessandro","dromedario8135");
							$DataBase=mysql_select_DB("amm15_casulaAlessandro");
							$Query="SELECT * FROM Stanza as s, Prenotazioni as p 
							WHERE s.cod=p.cod AND p.cf='$user' AND p.data_i>='$todays_date' 
							ORDER BY cod_pren;";
							$ExQuery=mysql_query($Query);
							if(mysql_num_rows($ExQuery)==0)
							{
								echo"<div id='titolo'>Non hai ancora effettuato nessuna prenotazione</div>";	
							}
							else
							{
								echo"<div id='titolo'>Ecco tutte le prenotazioni da te Effettuate:</div>";
								for ($i=0;$i<mysql_num_rows($ExQuery);$i++)
								{
									$Data=mysql_fetch_array($ExQuery);
									echo "<div>";
									echo "<div id='img'><img src='$Data[4]' width='250' height='200' style='border:4px solid grey;' alt='Immagine stanza'></div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Descrizione: </b>$Data[2]</div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Posti: </b>$Data[1]</div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Prezzo: </b>$Data[3] €</div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Data Inizio: </b>$Data[6]</div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Data Fine: </b>$Data[7]</div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Codice prenotazione: </b>$Data[5]</div>";
									echo "</div>";
									echo "<div id='caratteristiche'><form action='elpren.php?codpren=$Data[5]' method='post'>";
									echo "<div id='testo'><button type='submit'>Elimina</button></div>";
									echo "</div></form>";
									echo "<hr align='left' size='3px' width='100%' color='grey'>";
									echo"</div>";
							
								}
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
	