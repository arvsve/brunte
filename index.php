<!DOCTYPE html>
<html>
	<head>

		<link href="/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="/jquery.min.js"></script>
		<script src="/jquery-ui.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#tabs").tabs();
			});

			function popup(url) {
				popupwin = window.open(url, "popwin", "resizable=yes, width=600, height=845, directories=no, location=no, menubar=no, personalbar=no, scrollbars=yes, status=no, titlebar=no, toolbar=no");
				popupwin.focus();
			}

			function popup2(url) {
				popupwin = window.open(url, "popwin", "resizable=yes, width=800, height=800, directories=no, location=no, menubar=no, personalbar=no, scrollbars=yes, status=no, titlebar=no, toolbar=no");
				popupwin.focus();
			}


			$(document).ready(function() {
				$("#accordion").accordion();
			});

			function openTab(index) {
				$('#tabs').tabs('select', index);
			}

			//preload images
			var image1 = new Image();
			image1.src = "/images/bruntegarden.gif";
			var image2 = new Image();
			image2.src = "/images/brunte_n.jpg";
			var image3 = new Image();
			image3.src = "/images/brunte_6b.jpg";

			//-->
		</script>

		<title>Brunteg&aring;rden &amp; G&ouml;rgen p&aring; H&ouml;jden</title>
	</head>

	<!-- bgcolor=#966496 -->
	<body style="font-size:72.5%;" background="/images/oldbg.png">

		<div style="width: 746px; border: #666 1px solid; background-color: #bae4fe; margin: auto;">
			<div style="float:left;"><img src="/images/brunteloga.gif" border="0" width="300" height="160" />
			</div>
			<div style="float:right;"><img src="/images/bruntegarden.gif" name="slide" border="0" width="446" height="160" />
			</div>
			<div style="clear:both"></div>
			<div class="ui-widget">
				<div class="ui-widget-content">
					<div id="tabs">
						<ul>
							<li>
								<a href="#startsida"><span>Startsida</span></a>
							</li>
							<li>
								<a href="#catering"><span>Catering</span></a>
							</li>
							<li>
								<a href="#konferens"><span>Konferens</span></a>
							</li>
							<li>
								<a href="#fest_hogtid"><span>Fest/H&ouml;gtid</span></a>
							</li>
							<li>
								<a href="#rummen"><span>Rummen</span></a>
							</li>
							<li>
								<a href="#om_oss"><span>Om oss</span></a>
							</li>
							<li>
								<a href="#kontakt_hitta_hit"><span>Kontakt/Hitta hit</span></a>
							</li>
							<li>
								<a href="#aktiviteter"><span>Aktiviteter</span></a>
							</li>
						</ul>

						<!-- slide picture script-->
						<script>
							<!--
							//variable that will increment through the images
							var step = 1
							function slideit() {
								//if browser does not support the image object, exit.
								if (!document.images)
									return;
								document.images.slide.src = eval("image" + step + ".src")
								if (step < 3)
									step++;
								else
									step = 1;
								//call function "slideit()" every 2.5 seconds
								setTimeout("slideit()", 3000);
							}

							slideit()
							//-->
						</script>
						<script type="text/javascript">
							function showDescription(text) {
								document.getElementById('information').innerHTML = text;
							}

							function clearDescription() {
								document.getElementById('information').innerHTML = '';
							}
						</script>
						<!------- Startsida ------------------------------------------------------------------------------->

						<div id="startsida">
							<h3>V&auml;lkommen till Pensionat Brunteg&aring;rden och restaurang G&ouml;rgen p&aring; H&ouml;jden</h3>
							<p>
								Brunteg&aring;rden ligger h&ouml;gt bel&auml;get med milsvid utsikt &ouml;ver Siljan med byggnader som har anor sedan 1868.
								Pensionatet sedan 1950 med 14 stycken personligt inredda rum varav inget &auml;r det andra likt.
								F&ouml;r mer info om <a href="javascript:openTab(4)">Rummen</a> och priser klicka fliken ovan.
							</p>
							<p>
								Vi som nu driver verksamheten &auml;r G&ouml;rgen &amp; Carolinne Tid&eacute;n och Urban Svensson i bolag Gustamos AB.
							</p>
							<p>
								Fokus ligger p&aring; god n&auml;rproducerad mat tillagad med en stor portion k&auml;rlek.
							</p>
							<p>
								Vi serverar a&#180;la carte med goda mellanr&auml;tter onsdag - l&ouml;rdag 18:00 - 21:00, f&ouml;r a&#180;la carte
								<br>
								menyn klicka <a href="javascript:popup('/images/2.jpg')"><font color=red>h&auml;r</font></a>
							</p>
							<p>
								Dagens lunch serveras m&aring;ndag-fredag 11.30-14.00, f&ouml;r veckans lunchmeny klicka <a href="javascript:popup('/images/1.jpg')"><font color=red>h&auml;r</font></a>
								<br>
							</p>
							<p>
								V&aring;ra fantastiska avsmakningsmenyer serveras efter f&ouml;rfr&aring;gan.
							</p>
							<p>
								Vi kan &auml;ven erbjuda <a href="javascript:openTab(1)">Catering</a> f&ouml;r b&aring;de stora &amp; sm&aring; evenemang som f&ouml;delsedagar, br&ouml;llop samt konferenser.
							</p>
							<p>
								Vi kan ocks&aring; skr&auml;ddarsy er <a href="javascript:openTab(2)">Konferens</a> eller <a href="javascript:openTab(3)">Fest/H&ouml;gtid</a> h&auml;r p&aring; hotellet.
							</p>
							<p>
								F&ouml;r mer info klicka p&aring; flikarna ovan.
							</p>
							<h3>Hj&auml;rtligt v&auml;lkommen!</h3>
							<a href="http://www.provlas.se/bladdra/9789153437741/" target="_blank"><img src="/images/smak_av_dalarna.jpg"  border="0" width="50" height="50" onmouseover="showDescription('Provl&auml;s boken <b>Smak av Dalarna</b> av Bo Masser, G&ouml;rgen Tid&eacute;n.')" onmouseout="clearDescription();"></a><div id="information"></div>
						</div>

						<!------- Catering ------------------------------------------------------------------------------->

						<div id="catering">

							<h3>Catering till fest och representation - allt fr&aring;n picnickkorgar till Vasaloppsevent</h3>

							<img src="/images/cater1.png" style="float:left;;margin-right:20px;" />
							<p>
								I Vasaloppst&auml;ltet 2012 ansvarade vi f&ouml;r mat och dryck till ca 15 000 g&auml;ster under 12 dagar.
							</p>
							<p>
								P&aring; landsh&ouml;vdingens residence i Falun serveras ibland en hjortrondessert a&#180;la G&ouml;rgen, foto Bruno Ehrs.
							</p>

							<div style="clear:both"></div>

							<p>
								Catering &auml;r en viktig och rolig del i v&aring;r verksamhet.
							</p>
							<p>
								Vi s&auml;tter g&auml;rna en personlig pr&auml;gel tillsammans med er. S&aring;v&auml;l i den mindre familjetillst&auml;llningen, f&ouml;delsedagar, dop, br&ouml;llop som i st&ouml;rre f&ouml;retagsfester eller stora publika event som Vasaloppet.
							</p>
							<p>
								I centrum s&auml;tter vi f&ouml;rutom g&auml;sten lokala r&aring;varor.
							</p>
							<p>
								F&ouml;rst och fr&auml;mst letar vi efter ekologiska producenter runt knuten men vi ser ocks&aring; till andra l&auml;n och andra l&auml;nder f&ouml;r att vara en komplett leverant&ouml;r av god, sp&auml;nnande mat.
							</p>
							<p>
								Vi anpassar din meny efter din budget.
							</p>
							<p>
								<b>V&auml;lkommen med en f&ouml;rfr&aring;gan!</b>
							</p>
						</div>

						<!------- Konferens ------------------------------------------------------------------------------->

						<div id="konferens">
							<p>
								( Konferens / 1/2 dag / 1/1 dag / helpension )
							</p>
							<p>
								Vi skr&auml;ddarsyr er konferens efter era &ouml;nskem&aring;l och prisklasser, det &auml;r viktigt f&ouml;r oss att ni f&aring;r ut det som ni tycker &auml;r viktigt av en konferens. Eftersom vi &auml;r ett litet hotell s&aring; &auml;r ni alltid i centrum och slipper bli ett s&auml;llskap i m&auml;ngden.
							</p>
							<p>
								Just nu har vi ett Konferenserbjudande som g&auml;ller under april och maj m&aring;nad, mer info klicka h&auml;r
							</p>
							<p>
								&ouml;nskar ni ett speciellt tema eller utflyktsm&aring;l s&aring; hj&auml;lper vi er g&auml;rna att planera. V&auml;lkommen att ringa f&ouml;r mer information. Tel, 0248 79 87 70
							</p>
						</div>

						<!------- Fest / H?gtid ------------------------------------------------------------------------------->

						<div id="fest_hogtid">
							<p>
								Text Fest / H&ouml;gtid . . . Till br&ouml;llop ..
								Info l&auml;nkar om H&auml;st o vagn fr&aring;n kyrka till festen h&auml;r...
								eller l&auml;nkar till dom som st&auml;ller upp med stora h&auml;rliga amerikanska &aring;k f&ouml;r transporten..
							</p>
							<p>
								menyer.. priser per kuvert , max antal som f&aring;r plats och min f&ouml;r att det ska g&aring; runt..
							</p>
							<p>
								musik, DJ l&auml;nk? egna mp3 spelare ..
							</p>
							<p>
								Plats f&ouml;r brudvals..
							</p>
						</div>

						<!------- Rummen ------------------------------------------------------------------------------->

						<div id="rummen">
							Bilder / Bildspel ?
							<br/>
							Priser per rum / s&auml;song /event . .

							<p>
								Priser p&aring; v&aring;ra rum?
							</p>
							...Under denna s&auml;song varierar v&aring;ra priser beroende p&aring; helg och veckor.
							Enkelrum-  Enkels&auml;ng, toalett, handfat och dusch i korridor.
							<p>
								Treb&auml;ddsrum- Tre b&auml;ddar, toalett, handfat och dusch i korridor.
								Dubbelrum- Dubbels&auml;ng (vissa rum har tv&aring; enkels&auml;ngar), toalett,handfat och dusch.(Vissa rum har tv.)
							</p>
							Familjerum, fyrb&auml;ddsrum- Dubbels&auml;ng, 2 enkels&auml;ngar, tv&aring; rum, tv&aring; toaletter,handfat, dusch och Tv.
							<br>
							Minisvit- Dubbels&auml;ng, soffh&ouml;rna, Tv, milsvid utsikt &ouml;ver Siljan, Toalett, handfat och Bad.

						</div>

						<!------- Om oss ------------------------------------------------------------------------------->
						<div id="om_oss">

							<img src="/images/gorgen.png" border="0" width="150" height="150" style="float:left;margin-right:20px;" />
							<p>
								<b>G&ouml;rgen Tid&eacute;n</b> K&ouml;kschef och driver restaurangen G&ouml;rgen p&aring; H&ouml;jden.
							</p>
							Kockkarri&auml;ren inleddes p&aring; Star Hotell, Stockholm.
							<br>
							D&auml;refter lagat mat p&aring; bl a restaurang Metaxa, Korfu, I&#180;latino, Florence,
							<br>
							p&aring; Sigtuna Stadshotell, d&auml;r han var souschef, p&aring; Kristina konferens i Sigtuna, k&ouml;kschef,

							Restaurant Chantecler chef Alain L&#180;lorca p&aring; Hotel Negresco i Nice,
							<br>
							F&aring;gelbrohus, samt p&aring; Restaurang G&auml;sslingen och Restaurant GQ i Stockholm
							<br>
							Har bl a &auml;ven g&auml;stspelat i k&ouml;ket p&aring; Restaurant L&#180;Epicurien i Albi, Frankrike.
							<br>
							<div style="clear:both"></div>

							<img src="/images/carolinne.png" border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
							<p>
								<b>Caroline Tid&eacute;n</b>
							</p>
							. . .
							<div style="clear:both"></div>

							<img src="/images/missing.png"  border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
							<p>
								<b>Urban Svensson</b>
							</p>
							. . .

						</div>

						<!------- Kontakt/Hitta hit ------------------------------------------------------------------------------->

						<div id="kontakt_hitta_hit">
							<h2>S&aring; hittar du till oss. . .</h2>
							<p>
								Du kan v&auml;lja att &aring;ka bil, buss eller t&aring;g till R&auml;ttvik, vi ligger h&ouml;gt bel&auml;get ca en kilometer fr&aring;n R&auml;ttviks resecentrum och butiker.Fr&aring;n samh&auml;llet kan man v&auml;lja att ta en taxi fr&aring;n Resecentrum eller en st&auml;rkande promenad uppf&ouml;r Lerdalsberget, vi ligger vid foten av R&auml;ttviks slalombacke. F&auml;rdas du med bil s&aring; tar du sikte mot Lerdal och R&auml;ttviks slalombacke, sen &auml;r det bara att f&ouml;lja v&auml;gskyltarna till oss.
								Pensionat Brunteg&aring;rden
								V&aring;lsvedsv&auml;gen 51
								795 35 R&auml;ttvik
							</p>
							<p>
								Telefon: 0248-798 770
							<p>
							<p>
								Epost: pensionat@bruntegarden.se
							</p>
							<p>
								F&ouml;r karta klicka <a href="javascript:popup('http://www.hitta.se/karta#center=1463428:6751639&zl=8&bounds=6750834:1462632,6752444:1464222&type=map&sm=6&var=V%C3%A5lsvedsv%C3%A4gen%2051&mp=%5B%7B%20%22x%22%3A%221686924%22%2C%20%22y%22%3A%226991924%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22Brunteg%C3%A5rden%22%7D%2C%7B%20%22x%22%3A%221463428%22%2C%20%22y%22%3A%226751639%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22(Brunteg&aring;rden)%22%7D%5D')"><font color=red>h&auml;r</font></a>
							</p>
						</div>

						<!------- Kultur ------------------------------------------------------------------------------->

						<div id="aktiviteter">
							<h2>Kultur</h2>
							<p>
								Siljansringen &auml;r ett mycket kulturrikt omr&aring;de med mycket att se och h&ouml;ra, &quot;man skulle kunna stanna h&auml;r i ett halv&aring;r f&ouml;r att hinna se allt man vill se&quot;, var det en g&auml;st som sa.
								Vi har allt fr&aring;n levande f&auml;bodar till en av v&auml;rldens st&ouml;rsta utomhus konserthall Dalhalla.
								Bes&ouml;k g&auml;rna <a href="javascript:popup2('http://www.rattvik.se')">www.rattvik.se</a> f&ouml;r mer information
							</p>

							<h2>Ta p&aring; dig skidorna utanf&ouml;r entr&eacute;n</h2>
							<p>
								R&auml;ttviks slalombacke ligger ett stenkast fr&aring;n Brunteg&aring;rden och erbjuder utf&ouml;rs&aring;kning,
								uthyrning av utrustning och l&auml;ngd&aring;kning i natursk&ouml;n milj&ouml; i det popul&auml;ra <a href="javascript:popup2('http://www.rattviksbacken.se/skidspar.html')">Tolv&aring;ssp&aring;ret.</a>
							</p>

							<h2>N&ouml;je</h2>
							<p>
								I R&auml;ttvik och dess omnejd finns det mycket att g&ouml;ra, allt fr&aring;n &aring;ngb&aring;tsutflykt med middag och dans till konserter och pubar. H&auml;r kan man &auml;ven ta dagen som den kommer och bara koppla av.
							</p>

							<h2>Skogen runt knuten</h2>
							<p>
								Tag en st&auml;rkande promenad, vi ligger mellan skog och samh&auml;lle i ett omr&aring;de som heter Lerdal, ett perfekt utg&aring;ngsl&auml;ge oavsett vilken milj&ouml; ni v&auml;ljer att promenera i.
							</p>
							<p>
								Bes&ouml;k g&auml;rna <a href="javascript:popup2('http://www.rattvikbowling.se')">www.rattvikbowling.se</a> f&ouml;r en roligare vistelse i R&auml;ttvik.
							</p>
							<p>
								F&ouml;r mer information: <a href="javascript:popup2('http://www.siljan.se')">www.siljan.se</a>
							</p>
						</div>

						<!-------------------------------------------------------------------------------------------------->
						<div id="footer">
							<hr>
							Pensionat Brunteg&aring;rden - V&aring;gen 51, 795 35 R&auml;ttvik - 0248-798 770 - pensionat@bruntegarden.se
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>