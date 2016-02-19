<?php
session_start();
?>

<html>
	<head>
		<link href="../css/stile.css" rel="stylesheet" type="text/css">
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
					$Connessione=mysql_connect("localhost","root","");
					$DataBase=mysql_select_DB("amm15_casulaAlessandro");
					
					if(($_POST['data_i'])&&($_POST['data_f']))
					{
						if(!((preg_match('/[0-9]{4}\/[0-9]{2}\/[0-9]{2}/',$_POST['data_i']))||
							(preg_match('/[0-9]{4}\/[0-9]{2}\/[0-9]{2}/',$_POST['data_f']))))
						{
							$ex=explode('-',($_POST['data_i'])); 
							$todays_date = date("Ymd");
							$datainizio=($ex[0].$ex[1].$ex[2]);
							if((preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/',$_POST['data_i']))
								&& checkdate($ex[1],$ex[2],$ex[0]) 
								&& (($ex[0].$ex[1].$ex[2])>=$todays_date))
							{
								$ex=explode('-',($_POST['data_f']));
								$datafine=($ex[0].$ex[1].$ex[2]);
								if((preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/',($_POST['data_f']))) 
									&& checkdate($ex[1],$ex[2],$ex[0])
									&& (($ex[0].$ex[1].$ex[2])>$todays_date)
									&& $datafine>$datainizio)
								{
									$codice=$_GET['cod'];
									$Query="SELECT * FROM prenotazioni WHERE 
									cod=$codice 
									AND ((data_i<=$datainizio AND data_f>=$datafine)
									OR (data_i<=$datainizio AND (data_f>=$datainizio AND data_f<=$datafine))
									OR((data_i>=$datainizio AND data_i<=$datafine)AND data_f>=$datafine)
									OR(data_i>=$datainizio AND data_f<=$datafine));";
									$ExQuery=mysql_query($Query);
									if(mysql_num_rows($ExQuery)==0)
									{
										$Query="insert into Prenotazioni values
										('','$datainizio','$datafine','".$_SESSION['User']."','".$_GET['cod']."')";
										$Ins=mysql_query($Query);
										if ($Ins)
										{
											echo"<div id='titolo'>Prenotazione Effettuata</div>";
											echo"<div id='testo'>Dati inseriti correttamente</div>";
										}
										else
										{
											echo"<div id='testo'>Si prega di inserire dati corretti</div>";
										}
											header("Refresh:3;URL=prenota.php");
									}
									else
									{
										echo"<div id='testo'>Le date scelte sono indisponibili</div>";		
										header("Refresh:3;URL=prenota.php");	
									}
								}
								else
								{
									echo"<div id='testo'>Si prega di inserire dati corretti</div>";		
									header("Refresh:3;URL=prenota.php");	
								}
							}
							else
							{
								echo"<div id='testo'>Si prega di inserire dati corretti</div>";
								header("Refresh:3;URL=prenota.php");
							}
						}
						else
						{
							echo"<div id='testo'>Si prega di inserire dati corretti</div>";		
									header("Refresh:3;URL=prenota.php");
						}
					}
					else 
					{
						echo"<div id='testo'>Si prega di inserire dati corretti</div>";
						header("Refresh:3;URL=prenota.php");						 
					}
				mysql_close($Connessione);
				}
				 else 
				{
					echo"<div id='testo'>Si prega di accedere prima di continuare</div>";		
					header("Refresh:3;URL=home.php");						 
				}
				
				?>
				</div>
			</div>
			<?php include("footer.html");?>
		</div>
	</body>
</html>
