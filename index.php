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
	
  </script>
 
 <title>Bruntegårder & Görgen på Höjden</title>
</head>

<!-- bgcolor=#966496 -->
<body style="font-size:72.5%;" background="/oldbg.png">
 
 <table border="0" cellspacing="0" cellpadding="0" width="748" align="center">
 <tr valign=top><td>
 
 <div class="ui-widget">
 <?php 
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; 
$url = str_replace("/", "%2F", $url);
print "<a href=\"http://translate.google.com/translate?hl=en&sl=sv&tl=en&u=http%3A%2F%2F" . $url . "\"><img src=\"/en.gif\"></a>&nbsp;";
print "<a href=\"http://translate.google.com/translate?hl=en&sl=sv&tl=de&u=http%3A%2F%2F" . $url . "\"><img src=\"/de.gif\"></a>&nbsp;";
print "<a href=\"http://" . $url . "\"><img src=\"/sv.gif\"></a>";
?>
<div class="ui-widget-content"><img src="/bruntegarden.gif"> 
<div id="tabs">
    <ul>
        <li><a href="#startsida"><span>Startsida</span></a></li>
        <li><a href="#catering"><span>Catering</span></a></li>
        <li><a href="#konferens"><span>Konferens</span></a></li>
        <li><a href="#fest_högtid"><span>Fest/Högtid</span></a></li>
        <li><a href="#rummen"><span>Rummen</span></a></li>
        <li><a href="#om_oss"><span>Om oss</span></a></li>
        <li><a href="#kontakt_hitta_hit"><span>Kontakt/Hitta hit</span></a></li>
        <li><a href="#aktiviteter"><span>Aktiviteter</span></a></li>
   </ul>
	
<!------- Startsida ------------------------------------------------------------------------------->

<div id="startsida">
<h3>Välkommen till Pensionat Bruntegården och restaurang Görgen på Höjden</h3>
Bruntegården ligger högt beläget med milsvid utsikt över Siljan med byggnader som har anor sedan 1868. Pensionatet sedan 1950 med 14 stycken personligt inredda rum varav inget är det andra likt. För mer info om <font color=darkblue>Rummen</font> och priser klicka fliken ovan.
 <p />
Vi som nu driver verksamheten är Görgen & Carolinne Tidén och Urban Svensson i bolag Gustamos AB.
<p />
Fokus ligger på god närproducerad mat tillagad med en stor portion kärlek.
<p />
Vi serverar a´la carte med goda mellanrätter onsdag - lördag 18:00 - 21:00, för a´la carte<br> menyn klicka <a href="javascript:popup('2.jpg')"><font color=red>här</font></a>
<p />
Dagens lunch serveras måndag-fredag 11.30-14.00, för veckans lunchmeny klicka <a href="javascript:popup('1.jpg')"><font color=red>här</font></a><br>
<p />
Våra fantastiska avsmakningsmenyer serveras efter förfrågan. 
<p />
 Vi kan även erbjuda <font color=darkblue>Catering</font> för både stora & små evenemang som födelsedagar, bröllop samt konferenser.
 <p/>
Vi kan också skräddarsy er <font color=darkblue>Konferens</font> eller <font color=darkblue>Fest/Högtid</font> här på hotellet.
<p />
För mer info klicka på flikarna ovan.
 
<h3>Hjärtligt välkommen!</h3>
<br>


</div>	

<!------- Catering ------------------------------------------------------------------------------->	

<div id="catering">

<h3>Catering till fest och representation – allt från picnickkorgar till Vasaloppsevent</h3>
<table  border="0" cellspacing="8" cellpadding="0" ><tr><td><img src="/cater1.png"></td><td>I Vasaloppstältet 2012 ansvarade vi för mat och dryck till ca 15 000 gäster under 12 dagar.<p />På landshövdingens residence i Falun serveras ibland en hjortrondessert á la Görgen, foto Bruno Ehrs.</td></tr></table>
<p />
Catering är en viktig och rolig del i vår verksamhet.
<p />
Vi sätter gärna en personlig prägel tillsammans med er. Såväl i den mindre familjetillställningen, födelsedagar, dop, bröllop som i större företagsfester eller stora publika event som Vasaloppet.
<p />
I centrum sätter vi förutom gästen lokala råvaror. 
<p />
Först och främst letar vi efter ekologiska producenter runt knuten men vi ser också till andra län och andra länder för att vara en komplett leverantör av god, spännande mat.
<p />
Vi anpassar din meny efter din budget. 
<p />
<b>Välkommen med en förfrågan!</b>

</div>

<!------- Konferens ------------------------------------------------------------------------------->	

<div id="konferens">
		( Konferens  / 1/2 dag / 1/1 dag / helpension ) <br>
<p />
Vi skräddarsyr er konferens efter era önskemål och prisklasser, det är viktigt för oss
att ni får ut det som ni tycker är viktigt av en konferens. Eftersom vi är ett litet 
hotell så är ni alltid i centrum och slipper bli ett sällskap ”i mängden”.
<p />
Just nu har vi ett Konferenserbjudande som gäller under april och maj månad, mer info klicka 
<a href="javascript:popup('2.jpg')"><font color=red>här</font></a>
<p />

Önskar ni ett speciellt tema eller utflyktsmål så hjälper vi er gärna att planera.
Välkommen att ringa för mer information. Tel, 0248 79 87 70

</div>


<!------- Fest / Högtid ------------------------------------------------------------------------------->
	
<div id="fest_högtid">
		Text Fest / Högtid . . . 
		Till bröllop ..<br>
		Info länkar om Häst o vagn från kyrka till festen här...<br>
		eller länkar till dom som ställer upp med stora härliga amerikanska åk för transporten..
		<p />
		menyer.. priser per kuvert , max antal som får plats och min för att det ska gå runt..
		<p />
		musik, DJ länk? egna mp3 spelare ..
		<p />
		Plats för brudvals..
	
		
		
		
</div>
	
	
<!------- Rummen ------------------------------------------------------------------------------->
	
<div id="rummen">
		
		Bilder / Bildspel ?
	<p />
	Priser per rum / säsong /event . . 
	<p />
	
	
		
		
		
</div>
	
<!------- Om oss ------------------------------------------------------------------------------->	

<div id="om_oss">
	<table border=0><tr><td nowrap><img src="/gorgen.png"></td><td nowrap>
		<b>Görgen Tidén</b> Kökschef och driver restaurangen Görgen på Höjden.
		<p />
		Kockkarriären inleddes på Star Hotell, Stockholm.<br>
		Därefter lagat mat på bl a restaurang Metaxa, Korfu, I´latino, Florence,<br>
		på Sigtuna Stadshotell, där han var souschef, på Kristina konferens i Sigtuna, kökschef,
		<br>Restaurant Chantecler chef Alain L´lorca på Hotel Negresco i Nice,<br>Fågelbrohus, samt på Restaurang Gässlingen och Restaurant GQ i Stockholm.<br>
		Har bl a även gästspelat i köket på Restaurant L’Epicurien i Albi, Frankrike.
		</td></tr>
		<tr><td nowrap> </td nowrap><td>
		
		<b>Caroline Tidén</b> ...
		</td></tr>
		<tr><td nowrap> </td><td nowrap>
		
		<b>Urban Svensson</b> ..
		
		</td></tr></table>
</div>
	
<!------- Kontakt/Hitta hit ------------------------------------------------------------------------------->

<div id="kontakt_hitta_hit">

<h4>Så hittar du till oss…</h4>
Du kan välja att åka bil, buss eller tåg till Rättvik, vi ligger högt beläget ca en kilometer från 
Rättviks resecentrum och butiker.Från samhället kan man välja att ta en taxi från Resecentrum 
eller en stärkande promenad uppför Lerdalsberget, vi ligger vid foten av Rättviks slalombacke.
Färdas du med bil så tar du sikte mot Lerdal och Rättviks slalombacke, sen är det bara att 
följa vägskyltarna till oss.
<p />
<b>Pensionat Bruntegården</b><br>
Vålsvedsvägen 51<br>
795 35 Rättvik
<p />
Telefon: 0248-798 770
<p />
Epost: pensionat@bruntegarden.se
<p />
För karta klicka 
<a href="javascript:popup('http://www.hitta.se/karta#center=1463428:6751639&zl=8&bounds=6750834:1462632,6752444:1464222&type=map&sm=6&var=V%C3%A5lsvedsv%C3%A4gen%2051&mp=%5B%7B%20%22x%22%3A%221686924%22%2C%20%22y%22%3A%226991924%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22Brunteg%C3%A5rden%22%7D%2C%7B%20%22x%22%3A%221463428%22%2C%20%22y%22%3A%226751639%22%2C%20%22i%22%3A%22%2Fpublic%2Fimages%2Fweb%2Fmap%2Fmap-pin%2Fpoint.png%3F120515-150741%22%2C%20%22t%22%3A%22(Brunteg&aring;rden)%22%7D%5D')"><font color=red>här</font></a>
<p>

</div>

<!------- Rummen ------------------------------------------------------------------------------->
	
<div id="aktiviteter">
	 <b>Kultur</b>
	 <p />
Siljansringen är ett mycket kulturrikt område med mycket att se och höra, "man skulle kunna stanna här i ett halvår för att hinna se allt man vill se”, var det en gäst som sa.<br>
Vi har allt från levande fäbodar till en av världens största utomhus konserthall Dalhalla.<br>Besök gärna <a href="javascript:popup2('http://www.rattvik.se')">www.rattvik.se</a> för mer information
<p />
<b>Ta på dig skidorna utanför entrén</b>
<p />
Rättviks slalombacke ligger ett stenkast från Bruntegården och erbjuder utförsåkning,<br>
uthyrning av utrustning och längdåkning i naturskön miljö i det populära Tolvåsspåret.
<p />
<b>Nöje</b>
<p />
I Rättvik och dess omnejd finns det mycket att göra, allt från ångbåtsutflykt med middag och dans till konserter och pubar. Här kan man även ta dagen som den kommer och bara koppla av.
<p />
<b>Skogen runt knuten</b>
<p />
Tag en stärkande promenad, vi ligger mellan skog och samhälle i ett område 
som heter Lerdal, ett perfekt utgångsläge oavsett vilken miljö ni väljer att promenera i.
<p />
Besök gärna <a href="javascript:popup2('http://www.rattvikbowling.se')">www.rattvikbowling.se</a> för en roligare vistelse i Rättvik.
<p />
För mer information: <a href="javascript:popup2('http://www.siljan.se')">www.siljan.se</a>
	
		
		
		
</div>
	
<!-------------------------------------------------------------------------------------------------->	
<div id="footer"><hr>Pensionat Bruntegården - Vålsvedsvägen 51, 795 35 Rätttvik - 0248-798 770 - pensionat@bruntegarden.se</div>
</div>
</div>
 
</div> 
</td></tr></table>
</body>
</html>

