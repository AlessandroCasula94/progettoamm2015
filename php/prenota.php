<?php
session_start();
?>

<html>
	<head>
		<link href="../css/stile.css" rel="stylesheet" type="text/css"/>
		<meta charset="utf-8">

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
				
				
				 
					echo"<div id='titolo'>
						Nota tariffa:
						</div>
						<div id='testo'>
						<p>
						I nostri prezzi includono:
						<ul>
						  <li>prima colazione;</li>
						  <li>camere con: bagno privato,tv,frigo,veranda ed ingresso indipendente; </li>
						  <li>uso piscina;</li> 
						 </ul>
						</div>";
							error_reporting(E_ALL ^ E_DEPRECATED);
							$Connessione=mysql_connect("localhost","casulaAlessandro","dromedario8135");
							$DataBase=mysql_select_DB("amm15_casulaAlessandro");
							$todays_date = date("Ymd");
							$Query="SELECT * FROM Stanza as s
							ORDER BY cod;";
							$ExQuery=mysql_query($Query);
													
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
									echo "<div id='caratteristiche'><form action='inseriscipren.php?cod=$Data[0]' method='post'>";
									echo "<div id='testo'><b>Data Inizio: (aaaa-mm-gg)</b></br><input align='right' type='text' name='data_i' maxlength='10'></div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><b>Data Fine: (aaaa-mm-gg)</b></br><input align='right' type='text' name='data_f' maxlength='10'></div>";
									echo "</div>";
									echo "<div id='caratteristiche'>";
									echo "<div id='testo'><button type='submit'>Prenota</button></div>";
									echo "</form></div>";
									echo "<hr align='left' size='3px' width='100%' color='grey'>";
									echo"</div>";
								
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