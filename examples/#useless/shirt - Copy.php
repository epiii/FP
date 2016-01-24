<?php 
	include 'lib/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pilih Klambi Bos</title>
	
	<script src="js/main.js"></script>
	<script src="js/compatibility.js"></script>
	<script src="js/smoother.js"></script>
	
	<script src="../js/objectdetect.js"></script>
	<script src="../js/objectdetect.frontalface_alt.js">  </script>
	<!--
	<script src="../js/objectdetect.upperbody.js"></script>
	-->
	
	<script>
	/*window.onload = function() {
		// cek compatibility with browser
		var smoother = new Smoother([0.9999999, 0.9999999, 0.999, 0.999], [0, 0, 0, 0]),
			video = document.getElementById('video'),
			shirt = document.getElementById('shirt'),
			detector;
				
		try {
			compatibility.getUserMedia({video: true}, function(stream) {
				try {
					video.src = compatibility.URL.createObjectURL(stream);
				} catch (error) {
					video.src = stream;
				}compatibility.requestAnimationFrame(play);
			}, function (error) {
				alert('WebRTC not available');
			});
		} catch (error) {
			alert(error);
		}
		
		// play animation with webcam 
		function play() {
			// compatibility.requestAnimationFrame(play);
			var x = compatibility.requestAnimationFrame(play); // play video streaming 
			console.log(x); // counter play video streaming 
			// return false;
			
			// compatibility.requestAnimationFrame(play);
			if (video.paused) { // play streaming video
				console.log('masuk play video streaming');
				video.play();
			}

			if (video.readyState === video.HAVE_ENOUGH_DATA && video.videoWidth > 0) {
	          	// Prepare the detector once the video dimensions are known:
	          	if (!detector) {
		      		var width = ~~(60 * video.videoWidth / video.videoHeight);
					var height  =60;
		      		// detector = new objectdetect.detector(width, height, 1.1, objectdetect.upperbody);
		      		detector = new objectdetect.detector(width, height, 1.1, objectdetect.frontalface_alt);
		      	}
          		
          		// Perform the actual detection:
				var coords = detector.detect(video, 1);
				if (coords[0]) {
					var coord = coords[0];
					coord = smoother.smooth(coord);
					
					// Rescale coordinates from detector to video coordinate space:
					coord[0] *= video.videoWidth / detector.canvas.width;
					coord[1] *= video.videoHeight / detector.canvas.height;
					coord[2] *= video.videoWidth / detector.canvas.width;
					coord[3] *= video.videoHeight / detector.canvas.height;
					console.log('kor 0 ='+coord[0]);
					console.log('kor 1 ='+coord[1]);
					console.log('kor 2 ='+coord[2]);
					console.log('kor 3 ='+coord[3]);
					// Display shirt overlay: 
					shirt.style.left    = ~~(coord[0] + coord[2] * 1.0/8 + video.offsetLeft) + 'px';
					shirt.style.top     = ~~(coord[1] + coord[3] * 0.8/8 + video.offsetTop) + 'px';
					shirt.style.width   = ~~(coord[2] * 6/8) + 'px';
					shirt.style.height  = ~~(coord[3] * 6/8) + 'px';
					shirt.style.opacity = 1;
					
				} else { 
					var opacity = shirt.style.opacity - 0.2;
					shirt.style.opacity = opacity > 0 ? opacity : 0;
				}
			}
		}
		
		[].slice.call(document.getElementById('list').children).forEach(function(e) {
			e.addEventListener('click', function() {
				shirt.src = e.src;
			}, false);
		});
		// console.log(resrescaleImage());
	};*/
    </script>
</head>

<body>
	<h1>tes</h1>
	<video id="video" style="float: right; margin-right: 1em;"></video>
	<div id="list">
		<?php 
			$s= 'SELECT * FROM shirt ';
			$e=mysql_query($s);
			$o='';
			$i=1;
			while ($r=mysql_fetch_assoc($e)) {
				$o.='<img src="img/s00'.$i.'.png" style="width: 117px;">';
				$i++;
			}echo $o;;
		?>
<!-- 		<img src="img/s001.png" style="width: 117px;">
		<img src="img/s002.png" style="width: 117px;">
		<img src="img/s003.png" style="width: 117px;">
		<img src="img/s004.png" style="width: 117px;">
		<img src="img/s005.png" style="width: 117px;">
		<img src="img/s006.png" style="width: 117px;">
		<img src="img/s007.png" style="width: 117px;">
		<img src="img/s008.png" style="width: 117px;"> -->
	</div>
	
	<img id="shirt" src="img/s001.png" style="position: absolute; display: block; opacity: 1">
</body>
</html>