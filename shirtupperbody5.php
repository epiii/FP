<?php 
	include 'lib/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pilih Baju (UB)</title>
	
	<script src="js/compatibility.js"></script>
	<script src="js/smoother.js"></script>

	<script src="js/js-objectdetect/objectdetect.js"></script>
	<script src="js/js-objectdetect/objectdetect.upperbody.js">  </script> 
	<script src="js/shirtupperbody5.js"></script>
	<script src="js/jquery.js"></script>
</head>

<body xonload="listProduct();">
	<video id="video" style="float:right; margin-right: 1em;"></video>
	<button id="fullscreenbtn" style="width:40px;height:30px;color:white;background-color:red"> Full </button>

	<div>
		<div style="display:none;font-weight:bold;">Positioning</div>
		<!-- coord x : --> <span id="coord0Info" align="center" style="display:none;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<!-- coord y :  --><span id="coord1Info" align="center" style="display:none;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<!-- width :  --><span id="widthInfo" align="center" style="display:none;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<!-- height :  --><span id="heightInfo" align="center" style="display:none;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<!-- width (Real Time) : --> <span id="widthInfoRT" align="center" style="display:none;font-size:40px;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<!-- width (Average) : --> <span id="widthInfoT" align="center" style="display:none;font-size:40px;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<hr>
		<h2 xclass="font-size:30px;">
			standarisasi ukuran baju (lebar bahu )
		</h2>
		<ul id="sizeList" style="list-style:none;font-size:30px;"></ul>	
	</div>

	<div id="fpsInfo"></div>
	<!-- size -->
		<!-- <div>Size (Real Time):</div> -->
		 	<h1 id="sizeInfoRT" align="center" style="display:none;height:50px;width:100px;padding:2px 2px 2px 2px;margin:2px;background-color:red;color:white;">....</h1>
		<div>Size (Average):</div>
		 	<h1 id="sizeInfoT" align="center" style="height:50px;width:100px;padding:2px 2px 2px 2px;margin:2px;background-color:red;color:white;">....</h1>
	
	<div id="list"></div>
	<img id="shirt" xsrc="img/img2/s001.png" style="position: absolute; display:block;">
	<!-- <img id="shirt" src="img/s001.png" style="position: absolute; display: block; opacity: 1"> -->
</body>
</html>