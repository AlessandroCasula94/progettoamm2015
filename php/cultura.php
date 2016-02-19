<?php
session_start();
?>

<html>
	<head><title> B&B </title>
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
					La cultura della regione
					</div>
					<div id="testo">
					<p>
						La cultura sarda comprende:
                    <ul>
                        <li>Lingue e dialetti;</li> 
                        <li>Musica; </li> 
                        <li>Costumi; </li> 
                        <li>Feste; </li>
               
                    </ul>
							</div>
					<div id="titolo-min">
					Lingue e dialetti
					</div>
					<div id="testo">
					<p>In Sardegna si parlano diverse lingue romanze: oltre all'italiano,la lingua più
                                  diffusa nell'isola è il sardo.
                                  Parlata in larga parte dell'isola, &egrave generalmente ripartita dagli esperti in
                                  due varianti fondamentali,in quanto risulti oggettivamente difficile tracciarne un
                                  confine netto per via dei numerosi dialetti.<br>
                                  Per questo si facilita la distinzione, dividendo i dialetti in due macro-gruppi:
                               <ul> 
                                  <li>nel cosiddetto "capo di sopra" il sardo logudorese &egrave la variante
                                      rimasta pi&ugrave simile al latino in desinenze e pronuncia, e generalmente 
                                      considerata quella di maggior prestigio letterario;<br>
                                      Nel logudorese viene generalmente compresa come sottovarietà la variante nuorese
                                      e barbaricina</li>
                                  <li>nel cosiddetto "capo di sotto" il sardo campidanese presenta vocaboli di
                                      matrice fenicio-punica oltre che nuragica, ed &egrave parlato nell'intero meridione
                                      isolano, costituendone anche la variante più diffusa;</li>
                               </ul>
                              Accanto alla lingua sarda, nel nord dell'isola sono parlati due dialetti di derivazione
                              corso-toscana:
                                <ul> 
                                    <li>Nella regione nord-occidentale dell'isola, il sassarese &egrave parlato a
                                        Sassari.</li>
                                    <li> Nella regione nord-orientale dell'isola, nella Gallura, &egrave parlato il
                                        gallurese che si avvicina particolarmente al dialetto parlato nella
                                        Corsica del Sud.</li>
                                </ul>
					</div>
					<div id="titolo-min">
					Musica
					</div>
					<div id="testo">
					<p>La musica tradizionale sarda, sia cantata che strumentale, &egrave molto antica.
						 In un vaso risalente alla cultura di Ozieri, circa 3.000 anni a.C., sono raffigurante scene di danza.<br>
						 La caratteristica danza sarda chiamata su ballu tundu viene accompagnata dal
						 suono delle launeddas, un antico strumento formato essenzialmente da tre canne palustri e
						 suonato con la tecnica del fiato continuo.<br>
					</div>
					<div id="titolo-min">
					Costumi
					</div>
					<div id="testo">
					<p>Dai colori vivaci e dalle forme pi&ugrave svariate e originali, i costumi tradizionali rappresentano un
					   chiaro simbolo di appartenenza a specifiche identit&agrave collettive. Sono considerati uno scrigno
					   di tradizioni etnografiche e culturali dalle caratteristiche molto peculiari, frutto di secolari
					   stratificazioni storiche. Sebbene il modello base sia omogeneo e comune in tutta l'isola, ogni paese ha
					   un proprio abbigliamento tradizionale, maschile e femminile, che lo differenzia dagli altri paesi.<br>
					</div>
					<div id="titolo-min">
					Feste
					</div>
					<div id="testo">
					<p>Le feste scandiscono da sempre la vita delle comunit&agrave isolane e oggi pi&ugrave che mai, soprattutto
						  con la rivalutazione di molte sagre minori, sono legate al desiderio di riaffermare la propria unica
						  identit&agrave culturale. In Sardegna, andare per feste significa immergersi in una cultura antica
						  alla scoperta di suoni e di armonie sconosciute, di balli ritmici con ricchi costumi tradizionali, di gare
						  poetiche fuori dal tempo, di sfrenate corse di cavalli, di sfilate folcloristiche - a piedi o a cavallo -
						  con preziosi e coloratissimi abiti d'altri tempi.<br>
						  Le feste popolari pi&ugrave conosciute sono: Sant'Efisio a Cagliari, la Sagra di S.Antioco Martire
						  Patrono della Sardegna a (Sant'Antioco), la Sagra del Redentore a Nuoro, S'Ardia a Sedilo, Pozzomaggiore e
						  Illorai,
						  la Cavalcata sarda e la Faradda a Sassari, Sa Sartiglia a Oristano, San Gavino a Porto Torres, San Michele 
						  ad Alghero, la festa di Santa Vitalia a Serrenti, la nota Festa del Rimedio, la più antica in Sardegna che 
						 si svolge dal 1893, ad Ozieri, San Simplicio a Olbia, i festeggiamenti del carnevale in Barbagia e Ogliastra,
						 il carnevale allegorico di Tempio Pausania e i riti della Settimana Santa in varie parti dell'isola.<br>
					</div>
					</div>
				</div>
			<?php include("footer.html");?>
			</div>
		
	</body>
</html>
	