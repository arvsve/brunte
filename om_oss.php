<!DOCTYPE html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery.min.js"></script>
<script src="jquery-ui.min.js"></script>
  <script>
  $(document).ready(function() {
    $("#accordion").accordion({event: "mouseover"});
  });
  </script>
  
<title>Bruntegården Om oss</title>
</head>
<body>
<?php include_once("header.php"); ?>

<div id="menuContainer">
<?php include_once("menu_template.php"); ?>
</div>
<div id="bodyContainer">
 <div id="bodyContentContainer">

<div id="accordion">
	<h3><a href="#">G&ouml;rgen Tid&eacute;n</a></h3>
	<div>
		<p>
							<img src="/images/gorgen.png" border="0" width="150" height="150" style="float:left;margin-right:20px;" />
							<p>
							K&ouml;kschef och driver restaurangen G&ouml;rgen p&aring; H&ouml;jden.
							</p>
							<p>
							Kockkarri&auml;ren inleddes p&aring; Star Hotell, Stockholm.
							</p>
							D&auml;refter lagat mat p&aring; bl a restaurang Metaxa, Korfu, I&#180;latino, Florence,
							<br>
							p&aring; Sigtuna Stadshotell, d&auml;r han var souschef,<br>
							p&aring; Kristina konferens i Sigtuna, k&ouml;kschef,
							<p>
							Restaurant Chantecler chef Alain L&#180;lorca p&aring; Hotel Negresco i Nice,
							</p>
							F&aring;gelbrohus, samt p&aring; Restaurang G&auml;sslingen och Restaurant GQ i Stockholm
							<br>
							Har bl a &auml;ven g&auml;stspelat i k&ouml;ket p&aring; Restaurant L&#180;Epicurien i Albi, Frankrike.
		</p>
	</div>
	<h3><a href="#">Caroline Tid&eacute;n</a></h3>
	<div>
		<p>
							<img src="/images/carolinne.png" border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
							<p>
											. . .
							</p>
		</p>
	</div>
	<h3><a href="#">Urban Svensson</a></h3>
	<div>
		<p>
<img src="/images/missing.png"  border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
							<p>
								. . .
							</p>
							
		</p>
	
	</div>
	<h3><a href="#">Fredrik</a></h3>
	<div>
		<p>
		<img src="/images/fredrik.png"  border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
		</p>
		<p>
		Vinkännare . . .
		</p>
	</div>
		<h3><a href="#">Malin</a></h3>
	<div>
		<p>
		<img src="/images/malin.png"  border="0" width="150" height="150" style="float:left;margin-right:20px;margin-top:10px;" />
		</p>
		<p>
		 . . .
		</p>
	</div>

 </div>

 </div>

</div>
  <?php include_once("footer.php"); ?>	

</body>
</html>