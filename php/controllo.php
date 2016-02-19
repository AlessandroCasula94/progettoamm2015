<?php
		session_start();
		$user=$_POST['usr'];
		$pass=$_POST['pas'];  	 
			 if(($user=="")||($pass==""))	 
			{ 
			
			}
			 else
			 {  
				 error_reporting(E_ALL ^ E_DEPRECATED);		
				 $Connessione=mysql_connect("localhost","casulaAlessandro","dromedario8135");
				 mysql_select_DB("amm15_casulaAlessandro");
				 $Query="SELECT cf, tipo FROM Utente  WHERE cf='$user' AND password='$pass';";
				 $ExQuery=mysql_query($Query);
				 $Data=mysql_fetch_array($ExQuery);
				 if($Data)
				 {     
			      $_SESSION['User']=$Data[0];//nome utente Admin o User
				  $_SESSION['Liv']=$Data[1];//se user o se admin valore booleano
				  }
				mysql_close($Connessione);
			 }
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
						header("Location:home.php");					 
					 }	 
					 else 
					 {
						echo"<div id='testo'>Utente o Password errati</div>";		
						header("Refresh:2;URL=home.php");					 
					 }
				 
				 
?>
				</div>
			</div>
			<?php include("footer.html");?>
		</div>
	</body>
</html>