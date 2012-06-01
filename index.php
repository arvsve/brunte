<!DOCTYPE html>
<html>
	<head>

		<link href="/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="/jquery.min.js"></script>
		<script src="/jquery-ui.min.js"></script>

		<script>
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
			function openTab(index) {
				$('#tabs').tabs('select', index);
			}

		</script>

		<title>Brunteg�rden &amp; G�rgen p� H�jden</title>
	</head>

	<!-- bgcolor=#966496 -->
	<body style="font-size:72.5%;" background="/oldbg.png">

		<table border="0" cellspacing="0" cellpadding="0" width="748" align="center">
			<tr valign=top>
				<td>
				<div class="ui-widget">
					<?php
					$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
					$url = str_replace("/", "%2F", $url);
					print "<a href=\"http://translate.google.com/translate?hl=en&sl=sv&tl=en&u=http%3A%2F%2F" . $url . "\"><img src=\"/en.gif\"></a>&nbsp;";
					print "<a href=\"http://translate.google.com/translate?hl=en&sl=sv&tl=de&u=http%3A%2F%2F" . $url . "\"><img src=\"/de.gif\"></a>&nbsp;";
					?><!--<a href="javascript:history.go(-1)"><img src="/sv.gif"></a>-->

					<div class="ui-widget-content"><img src="/bruntegarden.gif">
					<div id="tabs">
					<ul>
					<li><a href="#startsida"><span>Startsida</span></a></li>
					<li><a href="#catering"><span>Catering</span></a></li>
					<li><a href="#konferens"><span>Konferens</span></a></li>
					<li><a href="#fest_hogtid"><span>Fest/H�gtid</span></a></li>
					<li><a href="#rummen"><span>Rummen</span></a></li>
					<li><a href="#om_oss"><span>Om oss</span></a></li>
					<li><a href="#kontakt_hitta_hit"><span>Kontakt/Hitta hit</span></a></li>
					<li><a href="#aktiviteter"><span>Aktiviteter</span></a></li>
					</ul>

					<!------- Startsida ------------------------------------------------------------------------------->

					<div id="startsida">
					<h3>V�lkommen till Pensionat Brunteg�rden och restaurang G�rgen p� H�jden</h3>
					<p>
					Brunteg�rden ligger h�gt bel�get med milsvid utsikt �ver Siljan med byggnader som har anor sedan 1868.
					Pensionatet sedan 1950 med 14 stycken personligt inredda rum varav inget �r det andra likt.
					F�r mer info om <a href="javascript:openTab(4)">Rummen</a> och priser klicka fliken ovan.
					</p>
					<p>
					Vi som nu driver verksamheten �r G�rgen &amp; Carolinne Tid�n och Urban Svensson i bolag Gustamos AB.
					</p>
					<p>
					Fokus ligger p� god n�rproducerad mat tillagad med en stor portion k�rlek.
					</p>
					<p>
					Vi serverar �la carte med goda mellanr�tter onsdag - l�rdag 18:00 - 21:00, f�r �la carte<br> menyn klicka <a href="javascript:popup('2.jpg')"><font color=red>h�r</font></a>
					</p>
					<p>
					Dagens lunch serveras m�ndag-fredag 11.30-14.00, f�r veckans lunchmeny klicka <a href="javascript:popup('1.jpg')"><font color=red>h�r</font></a><br>
					</p>
					<p>
					V�ra fantastiska avsmakningsmenyer serveras efter f�rfr�gan.
					</p>
					<p>
					Vi kan �ven erbjuda <a href="javascript:openTab(1)">Catering</a> f�r b�de stora &amp; sm� evenemang som f�delsedagar, br�llop samt konferenser.
					</p>
					<p>
					Vi kan ocks� skr�ddarsy er <a href="javascript:openTab(2)">Konferens</a> eller <a href="javascript:openTab(3)">Fest/H�gtid</a> h�r p� hotellet.
					</p>
					<p>
					F�r mer info klicka p� flikarna ovan.
					</p>
					<h3>Hj�rtligt v�lkommen!</h3>
					</div>

					<!------- Catering ------------------------------------------------------------------------------->

					<div id="catering">

					<h3>Catering till fest och representation - allt fr�n picnickkorgar till Vasaloppsevent</h3>
					
					<img src="/cater1.png" style="float:left;;margin-right:20px;" />
					<p>I Vasaloppst�ltet 2012 ansvarade vi f�r mat och dryck till ca 15 000 g�ster under 12 dagar.</p>
					<p>P� landsh�vdingens residence i Falun serveras ibland en hjortrondessert �la G�rgen, foto Bruno Ehrs.</p>
					
					<div style="clear:both"></div>

					<p>
					Catering �r en viktig och rolig del i v�r verksamhet.
					</p>
					<p>
					Vi s�tter g�rna en personlig pr�gel tillsammans med er. S�v�l i den mindre familjetillst�llningen, f�delsedagar, dop, br�llop som i st�rre f�retagsfester eller stora publika event som Vasaloppet.
					</p>
					<p>
					I centrum s�tter vi f�rutom g�sten lokala r�varor.
					</p>
					<p>
					F�rst och fr�mst letar vi efter ekologiska producenter runt knuten men vi ser ocks� till andra l�n och andra l�nder f�r att vara en komplett leverant�r av god, sp�nnande mat.
					</p>
					<p>
					Vi anpassar din meny efter din budget.
					</p>
					<p>
					<b>V�lkommen med en f�rfr�gan!</b>
					</p>
					</div>

					<!------- Konferens ------------------------------------------------------------------------------->

					<div id="konferens">
					<p>
					( Konferens / 1/2 dag / 1/1 dag / helpension )
					</p>
					<p>
					Vi skr�ddarsyr er konferens efter era �nskem�l och prisklasser, det �r viktigt f�r oss att ni f�r ut det som ni tycker �r viktigt av en konferens. Eftersom vi �r ett litet hotell s� �r ni alltid i centrum och slipper bli ett s�llskap �i m�ngden�.
					</p>
					<p>
					Just nu har vi ett Konferenserbjudande som g�ller under april och maj m�nad, mer info klicka h�r
					</p>
					<p>
					�nskar ni ett speciellt tema eller utflyktsm�l s� hj�lper vi er g�rna att planera. V�lkommen att ringa f�r mer information. Tel, 0248 79 87 70
					</p>
					</div>

					<!------- Fest / H?gtid ------------------------------------------------------------------------------->

					<div id="fest_hogtid">
					<p>
					Text Fest / H�gtid . . . Till br�llop ..
					Info l�nkar om H�st o vagn fr�n kyrka till festen h�r...
					eller l�nkar till dom som st�ller upp med stora h�rliga amerikanska �k f�r transporten..
					</p>
					<p>
					menyer.. priser per kuvert , max antal som f�r plats och min f�r att det ska g� runt..
					</p>
					<p>
					musik, DJ l�nk? egna mp3 spelare ..
					</p>
					<p>
					Plats f�r brudvals..
					</p>
					</div>

					<!------- Rummen ------------------------------------------------------------------------------->

					<div id="rummen">
					Bilder / Bildspel ?<br/>
					Priser per rum / s�song /event . .
					</div>

					<!------- Om oss ------------------------------------------------------------------------------->

					<div id="om_oss">
					
					<img src="/gorgen.png" style="float:left;margin-right:20px;" />
					<p>
					<b>G�rgen Tid�n</b> K�kschef och driver restaurangen G�rgen p� H�jden.
					</p>
					Kockkarri�ren inleddes p� Star Hotell, Stockholm.<br>
					D�refter lagat mat p� bl a restaurang Metaxa, Korfu, I�latino, Florence,<br>
					p� Sigtuna Stadshotell, d�r han var souschef, p� Kristina konferens i Sigtuna, k�kschef,
					<br>Restaurant Chantecler chef Alain L�lorca p� Hotel Negresco i Nice,<br>
					F�gelbrohus, samt p� Restaurang G�sslingen och Restaurant GQ i Stockholm<br>
					Har bl a �ven g�stspelat i k�ket p� Restaurant L�Epicurien i Albi, Frankrike.<br>
					<div style="clear:both"></div>

					<img src="/carolinne.png" style="float:left;margin-right:20px;margin-top:10px;" />
					<p>
					<b>Caroline Tid�n</b>
					</p>
					. . . 
					<div style="clear:both"></div>
					
					<img src="/missing.png" style="float:left;margin-right:20px;margin-top:10px;" />
					<p>
					<b>Urban Svensson</b>
					</p>
					. . . 
					</div>

					<!------- Kontakt/Hitta hit ------------------------------------------------------------------------------->

					<div id="kontakt_hitta_hit">
					<h2>S� hittar du till oss�</h2>
					<p>
					Du kan v�lja att �ka bil, buss eller t�g till R�ttvik, vi ligger h�gt bel�get ca en kilometer fr�n R�ttviks resecentrum och butiker.Fr�n samh�llet kan man v�lja att ta en taxi fr�n Resecentrum eller en st�rkande promenad uppf�r Lerdalsberget, vi ligger vid foten av R�ttviks slalombacke. F�rdas du med bil s� tar du sikte mot Lerdal och R�ttviks slalombacke, sen �r det bara att f�lja v�gskyltarna till oss.
					Pensionat Brunteg�rden
					V�lsvedsv�gen 51
					795 35 R�ttvik
					</p>
					<p>
					Telefon: 0248-798 770
					<p>
					<p>
					Epost: pensionat@bruntegarden.se
					</p>
					<p>
					F�r karta klicka <a href="javascript:popup('http://www.hitta.se/karta#center=1463428:6751639&zl=8&bounds=6750834:1462632,6752444:1464222&type=map&sm=6&var=V%C3%A5lsvedsv%C3%A4gen%2051&mp=%5B%7B%20%22x%22%3A%221686924%22%2C%20%22y%22%3A%226991924%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22Brunteg%C3%A5rden%22%7D%2C%7B%20%22x%22%3A%221463428%22%2C%20%22y%22%3A%226751639%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22(Brunteg&aring;rden)%22%7D%5D')"><font color=red>h�r</font></a> 
					</p>
					</div>

					<!------- Kultur ------------------------------------------------------------------------------->

					<div id="aktiviteter">
					<h2>Kultur</h2>
					<p>
					Siljansringen �r ett mycket kulturrikt omr�de med mycket att se och h�ra, "man skulle kunna stanna h�r i ett halv�r f�r att hinna se allt man vill se�, var det en g�st som sa.
					Vi har allt fr�n levande f�bodar till en av v�rldens st�rsta utomhus konserthall Dalhalla.
					Bes�k g�rna <a href="javascript:popup2('http://www.rattvik.se')">www.rattvik.se</a> f�r mer information
					</p>

					<h2>Ta p� dig skidorna utanf�r entr�n</h2>
					<p>
					R�ttviks slalombacke ligger ett stenkast fr�n Brunteg�rden och erbjuder utf�rs�kning,
					uthyrning av utrustning och l�ngd�kning i natursk�n milj� i det popul�ra Tolv�ssp�ret.
					</p>

					<h2>N�je</h2>
					<p>
					I R�ttvik och dess omnejd finns det mycket att g�ra, allt fr�n �ngb�tsutflykt med middag och dans till konserter och pubar. H�r kan man �ven ta dagen som den kommer och bara koppla av.
					</p>

					<h2>Skogen runt knuten</h2>
					<p>
					Tag en st�rkande promenad, vi ligger mellan skog och samh�lle i ett omr�de som heter Lerdal, ett perfekt utg�ngsl�ge oavsett vilken milj� ni v�ljer att promenera i.
					</p>
					<p>
					Bes�k g�rna <a href="javascript:popup2('http://www.rattvikbowling.se')">www.rattvikbowling.se</a> f�r en roligare vistelse i R�ttvik.
					</p>
					<p>
					F�r mer information: <a href="javascript:popup2('http://www.siljan.se')">www.siljan.se</a>
					</p>
					</div>

					<!-------------------------------------------------------------------------------------------------->
					<div id="footer"><hr>Pensionat Brunteg�rden - V�lsvedsv�gen 51, 795 35 R�ttvik - 0248-798 770 - pensionat@bruntegarden.se</div>
					</div>
					</div>
				</div></td>
			</tr>
		</table>
	</body>
</html>