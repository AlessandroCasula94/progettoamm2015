
<div id="home">
	<ul id="scelte">
		<li><a href="home.php">HOME</a></li>
		<li><a href="dovesiamo.php">DOVE SIAMO</a></li>
		<?php
					
				 if(IsSet($_SESSION['User']))
				 {
					if(!$_SESSION['Liv'])
					{
						echo"<ul id='scelte'>";
						echo"<li><a href=aggiungi.php>AGGIUNGI</a></li>";
						echo"<li><a href=elimina.php>RIMUOVI</a></li>";
						echo"</ul>";
					}
					else{
						echo"<ul id='scelte'>";
						echo"<li><a href=prenota.php>PRENOTA</a></li>";
						echo"<li><a href=visPrenota.php>VISUALIZZA</a></li>";
						echo"</ul>";
						
					}
					echo"</li>";
				}
?>
		<li><a href="info.php">INFORMAZIONI</a>
			<ul>
			<li><a href="clima.php">CLIMA</a></li>
			<li><a href="cultura.php">CULTURA</a></li>
			<li><a href="territorio.php">TERRITORIO</a></li>
			</ul>			
		</li>
	</ul>
</div>