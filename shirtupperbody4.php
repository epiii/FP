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
	<script src="js/shirtupperbody4.js"></script>
	<script src="js/jquery.js"></script>
</head>

<body xonload="listProduct();">
	<video id="video" style="float:right; margin-right: 1em;"></video>
	<!-- <button id="fullscreenbtn" style="width:40px;height:30px;color:white;background-color:red"> Full </button> -->

	<div>
		<div style="font-weight:bold;">Positioning</div>
		coord x : <span id="coord0Info" align="center" style="width:10px;background-color:xxred;color:xwhite;">...</span><br>
		coord y : <span id="coord1Info" align="center" style="width:10px;background-color:xxred;color:xwhite;">...</span><br>
		width : <span id="widthInfo" align="center" style="width:10px;background-color:xxred;color:xwhite;">...</span><br>
		height : <span id="heightInfo" align="center" style="width:10px;background-color:xxred;color:xwhite;">...</span><br>
		width (Real Time) : <span id="widthInfoRT" align="center" style="font-size:40px;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		width (Average) : <span id="widthInfoT" align="center" style="font-size:40px;width:10px;background-color:xxred;color:xwhite;">...</span><br>
		<hr>
		<ul id="sizeList" style="list-style:none;font-size:30px;"></ul>	
	</div>

	<div id="fpsInfo"></div>
	<!-- size -->
		<div>Size (Real Time):</div>
		 	<h1 id="sizeInfoRT" align="center" style="height:50px;width:100px;padding:2px 2px 2px 2px;margin:2px;background-color:red;color:white;">....</h1>
		<div>Size (Average):</div>
		 	<h1 id="sizeInfoT" align="center" style="height:50px;width:100px;padding:2px 2px 2px 2px;margin:2px;background-color:red;color:white;">....</h1>
	
	<!-- <canvas></canvas> -->
	<div id="list">
		<?php 
			// $s= 'SELECT * FROM shirt ';
			
			// $e=mysql_query($s);
			// $o='';
			// $i=1;
			// while ($r=mysql_fetch_assoc($e)) {
			// 	$o.='<img src="img/s00'.$i.'.png" style="width: 117px;">';
			// 	$i++;
			// }echo $o;;
		?>
		<img src="img/img2/s001.png" style="width: 117px;">
		<img src="img/img2/s002.png" style="width: 117px;">
		<img src="img/img2/s003.png" style="width: 117px;">
		<img src="img/img2/s004.png" style="width: 117px;">
		<img src="img/img2/s005.png" style="width: 117px;">
<!-- 		<img src="img/img2/s006.png" style="width: 117px;">
		<img src="img/img2/s007.png" style="width: 117px;">
		<img src="img/img2/s008.png" style="width: 117px;">
 -->	</div>
	
	<img id="shirt" src="img/img2/s001.png" style="position: absolute; display:block;">
	<!-- <img id="shirt" src="img/s001.png" style="position: absolute; display: block; opacity: 1"> -->
</body>
</html>