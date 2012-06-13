<?php

$index       		= "myButtons";
$restaurang    		= "myButtons";
$catering    		= "myButtons";
$konferens	 		= "myButtons";
$fest_hogtid 		= "myButtons";
$rummen      		= "myButtons";
$om_oss				= "myButtons";
$kontakt_hitta_hit	= "myButtons";
$aktiviteter        = "myButtons";

$menuLinkId = basename($_SERVER['PHP_SELF'],".php");

if($menuLinkId == "index"){
 $index = 'myActiveButton';
 }
 else if($menuLinkId == "catering"){
 $catering = 'myActiveButton';
 } 
  else if($menuLinkId == "restaurang"){
 $restaurang = 'myActiveButton';
 } 
 else if($menuLinkId == "konferens"){
 $konferens = 'myActiveButton';
 }
 else if($menuLinkId == "fest_hogtid"){
 $fest_hogtid = 'myActiveButton';
 }
 else if($menuLinkId == "rummen"){
 $rummen = 'myActiveButton';
 }
 else if($menuLinkId == "om_oss"){
 $om_oss = 'myActiveButton';
 }
 else if($menuLinkId == "aktiviteter"){
 $aktiviteter = 'myActiveButton';
 }
 else if($menuLinkId == "kontakt_hitta_hit"){
 $kontakt_hitta_hit = 'myActiveButton';
 }
 
 ?>
 
 <a class="<?php echo $index; ?>"href="index.php">Startsida</a>
 <a class="<?php echo $restaurang; ?>"href="restaurang.php">Restaurang</a>
 <a class="<?php echo $catering; ?>"href="catering.php">Catering</a>
 <a class="<?php echo $konferens; ?>"href="konferens.php">Konferens</a>
 <a class="<?php echo $fest_hogtid; ?>"href="fest_hogtid.php">Fest/H&ouml;gtid</a>
 <a class="<?php echo $rummen; ?>"href="rummen.php">Rummen</a>
 <a class="<?php echo $om_oss; ?>"href="om_oss.php">Om oss</a>
 <a class="<?php echo $kontakt_hitta_hit; ?>"href="kontakt_hitta_hit.php">Kontakt/Hitta_hit</a>
 <a class="<?php echo $aktiviteter; ?>"href="aktiviteter.php">Aktiviteter</a>
 
 
 