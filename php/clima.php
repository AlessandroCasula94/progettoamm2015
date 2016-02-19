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
					<div id="titolo">
					Clima
					</div>
					<div id="testo">
					<p>
					Il clima mediterraneo &egrave tipico di gran parte della Sardegna, ma un p&ograve differente a
                      seconda della zona, infatti : 
                    <ul>
                        <li>Lungo le zone costiere grazie alla presenza del mare si hanno inverni miti con le
                               temperature che scendono raramente sotto lo zero. Le estati sono calde e secche,
                               caratterizzate da una notevole ventilazione. Il basso tasso di umidit&agrave e le
                               brezze marine permettono di sopportare le elevate temperature estive che superano                                          normalmente i 30 °C, e raggiungono anche i 35 °C.</li>
                        <li>Nelle zone interne pianeggianti e collinari il clima &egravetipicamente 
                               mediterraneo,anche se a causa della maggior lontananza dal mare si registrano
                               temperature invernali pi&ugrave basse ed estive più alte rispetto alle aree costiere. 
                               Il clima &egrave nel complesso abbastanza mite, ma durante l'arco dell'anno,
                               si passa da valori minimi invernali di alcuni gradi al di sotto dello zero a massimi
                               estivi anche superiori ai +40°.</li>
                        <li>Nelle zone più interne,come gli altopiani e le vallate spesso incastonate tra i 
                               rilievi, il clima acquista caratteri continentali, con forti escursioni termiche;
                               qui risultano particolarmente basse le minime invernali in caso di inversione  
                               termica, con temperature che possono scendere anche al di sotto dei -10/-12 °C. 
                               Addirittura anche durante la stagione estiva,le temperature possono avvicinarsi allo 0 °C.
                               D'estate invece, in altre località di valle o altopiano si possono avere giornate torride
                               con temperature massime che spesso raggiungono e superano i +40 °C.</li>
                       <li>Sui massicci montuosi, invece, nei mesi invernali nevica frequentemente
                              (La zona più nevosa &egrave il Massiccio del Gennargentu)e le temperature scendono
                              sotto lo zero.
                              D'estate si mantiene fresco, soprattutto durante le ore notturne e raramente fa caldo
                              per molti giorni consecutivi.</li></div>
							<div id="titolo">
							Il vento
							</div>
							<div id="testo">
							<p>
							La Sardegna inoltre &egrave una regione molto ventosa.<br>
                             I venti dominanti sono il maestrale e lo scirocco.<br>Il primo,durante l'inverno
                             &egrave freddo e spesso violento, mentre d'estate mitiga le temperature,ma data
                             la sua elevata velocit&agrave pu&ograve arrecare danni non indifferenti all'agricoltura,
                             favorire la propagazione degli incendi e creare problemi alla navigazione marittima;<br>il
                             secondo non di rado rende i cieli "rossicci" per effetto delle polveri provenienti dai 
                             deserti africani e si rivela particolarmente dannoso in tarda primavera.<br>
                             La costante ventilazione ha favorito l'installazione di numerosi impianti eolici sui
                             crinali di alcuni rilievi e in certe aree industriali.
					</div>
				</div>
			</div>
			<?php include("footer.html");?>
			</div>
		
	</body>
</html>
	
	