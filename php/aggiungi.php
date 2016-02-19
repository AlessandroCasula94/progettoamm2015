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
					echo"<div id='titolo'>
						Inserisci una nuova stanza:
						</div>";
						error_reporting(E_ALL ^ E_DEPRECATED);						
						$Connessione=mysql_connect("localhost","casulaAlessandro","dromedario8135");
						$DataBase=mysql_select_DB("amm15_casulaAlessandro");
						$Query="SELECT * FROM Stanza ORDER BY cod;";
						$ExQuery=mysql_query($Query);
						$num=1+mysql_num_rows($ExQuery);
					echo"
						<div>
							<form action='addstanza.php' method='post'>
							<div id='testo-mod'>
								<p>
									<label for='id'>Stanza numero: </label>
								<p>
									<label for='user'>Numero posti: </label>
								<p>
									<label for='descrizione'>Scegli la descrizione: </label>
								<p>							
									<label for='prezzo'>Inserisci prezzo: </label>
								<p>
									<label for='URL'>Inserisci URL: </label>
								<p>
							</div>
							<div id='testo-modd'>
								<p>
									$num
								<p>
									<select name='n_posti' id='n_posti' size='1' >     
										<option value='1'>1</option>
										<option value='2'>2</option>
										<option value='3'>3</option>
										<option value='4'>4</option>
										<option value='5'>5</option>
										<option value='6'>6</option>
										<option value='7'>7</option>
										<option value='8'>8</option>
									</select>
								<p>									
									<select name='descrizione' id='descrizione' >     
										<option value='Economica'>Economica</option>
										<option value='Elegante'>Elegante</option>
										<option value='Standard'>Standard</option>
										<option value='Suite'>Suite</option>
									</select>
								<p>
									<input type='text' name='prezzo'/>
								<p>
									<textarea name='img' id='URL' cols='40' rows='1' max='2000'></textarea>
								<p>
									<center><button type='submit'>Ok</button></center>
							</div>
							</form>
							
						</div>";
							echo"";
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