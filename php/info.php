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
					<div id="titolo">
					Introduzione sulla Sardegna
					</div>
					<div id="testo">
					<p>
						La Sardegna &egrave la seconda isola pi&ugrave estesa del mar Mediterraneo e una regione italiana  
							a statuto speciale la cui denominazione ufficiale &egrave Regione Autonoma della Sardegna.
							Lo Statuto Speciale,sancito nella Costituzione del 1948, garantisce l'autonomia amministrativa delle 
							istituzioni locali a tutela delle sue peculiarit&agrave linguistiche e geografiche.<p>
							Questa regione possiede 1.641.361 abitanti distribuiti in 8 province e 377 comuni, si posiziona terza
							in Italia per superficie.
							</div>
						<!--<p align=center><img src=cartina.jpeg>-->
						<div id="titolo-min">Curiosita'</div>
						<div id="testo">
							<p>
						   In epoca moderna molti viaggiatori e scrittori hanno esaltato la bellezza della Sardegna, immersa in un
						   ambiente ancora incontaminato con diversi endemismi e in un paesaggio che ospita i reperti della civilt&agrave
						   nuragica.<br>
						   Molto importanti sono i Patrimoni dell'umanit&agrave dell'UNESCO:
						  <ul> 
							  <li>Nuraghi e le espressioni della civilt&agrave nuragica, rappresentati da Su Nuraxi di Barumini, dal
								  1997;</li>
							  <li>Canto a tenore, patrimonio orale e immateriale dal 2005;</li>
							  <li>Dieta mediterranea, patrimonio orale e immateriale dal 2010;</li> 
							  <li>Canto della Sibilla (Cant de la Sibil la), canto gregoriano in catalano eseguito la notte di Natale solo
								  nella Cattedrale di Alghero e di Palma di Maiorca, patrimonio orale e immateriale dal 2010.</li>
						  </ul></div>
					</div>
				</div>
			<?php include("footer.html");?>
			</div>
		
	</body>
</html>
	