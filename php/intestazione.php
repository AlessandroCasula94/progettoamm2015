

<div id="intest">
	<div id="logo">
		<img src="..\img\logo.png" alt="Logo azienda">
	</div>
	<div id="oval">	
		<div id='login'>
			<?php 
					
					 if(IsSet($_SESSION['User']))
					 {
						$User=$_SESSION['User'];
						echo"<div id='logga'>Ciao, <b>$User</b></div>";
						echo"<table>";						
							echo"<tr>";
								echo"<form action='logout.php' method='post'>";
								echo"<td width='90px'></td><td><button type='submit' color='grey'>Logout</button></td><td></td>";
								echo"</form>";
							echo"</tr>";						
						echo"</table>";	
					 }	 
					 else 
					 {		 
					 echo"<form action='controllo.php' method='post'>";
						echo"<table>";
							echo"<tr id='spazio'>";
								echo"<td><label id='logga' >Username</label></td>";
								echo"<td><input type='text' name='usr' id='corto' /></td>";
							echo"</tr>";
							echo"<tr id='spazio'>";
								echo"<td><label id='logga'>Password</label></td>";
								echo"<td><input type='password' name='pas' id='pswd' /><td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td></td><td><button type='submit' color='grey'>Login</button></td>";
								
							echo"</tr>";
						echo"</table>";
					 echo"</form>";}
			?>
		</div>	
	</div>
</div>