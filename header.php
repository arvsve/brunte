<script>
	//preload images
	var image1 = new Image();
	image1.src = "/images/brt_uppfart.png";
	var image2 = new Image();
	image2.src = "/images/brt_altan.png";
	var image3 = new Image();
	image3.src = "/images/brt_solnedgang.png";		
	var image4 = new Image();
	image4.src = "/images/brunte_6b.jpg";		
	
	function popup(url) {
		popupwin = window.open(url, "popwin", "resizable=yes, width=600, height=845, directories=no, location=no, menubar=no, personalbar=no, scrollbars=yes, status=no, titlebar=no, toolbar=no");
		popupwin.focus();
	}

	function popup2(url) {
		popupwin = window.open(url, "popwin", "resizable=yes, width=800, height=800, directories=no, location=no, menubar=no, personalbar=no, scrollbars=yes, status=no, titlebar=no, toolbar=no");
		popupwin.focus();
	}
	function showDescription(text) {
		document.getElementById('information').innerHTML = text;
	}

	function clearDescription() {
		document.getElementById('information').innerHTML = '';
	}
</script>

<div style="width: 746px; border: #666 1px solid; background-color: #bae4fe; margin: auto;">
	<div style="float:left;"><img src="images/brunteloga.gif" border="0" width="300" height="160" />
	</div>
	<div style="float:right;"><img src="/images/brt_uppfart.gif" name="slide" border="0" width="446" height="160" />
	</div>
	<div style="clear:both"></div>
			
<script>				
	//variable that will increment through the images
	var step = 1
	function slideit() {
	//if browser does not support the image object, exit.
	if (!document.images)
		return;
	document.images.slide.src = eval("image" + step + ".src")
	if (step < 4)
		step++;
	else
		step = 1;
	//call function "slideit()" every 2.5 seconds
		setTimeout("slideit()", 3000);
	}

	slideit()
</script>
</div>