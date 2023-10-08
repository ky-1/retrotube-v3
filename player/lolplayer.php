<?php
include("../global.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
			body, html {
				margin: 0;
				padding: 0;
				overflow: hidden;
				height: 100%;
				width: 100%;
            background: white			}
			.vlScreenContainer {
				background: #000;
			}
		</style>
<script src="asset/jquery.js"></script>
<script src="asset/j.js"></script>
<script>window.vlpv = 8845;</script>
<script>swfobject.registerObject("flPlayer", "9.0.0");</script>
</head>
<body>
<?php


$stmt = $mysqli->prepare("SELECT * FROM videos WHERE vid = ?");
$stmt->bind_param("s", $_GET['v']);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) exit('No rows');
while($row = $result->fetch_assoc()) {
    echo '<script>var videoInfo = { adjust: false };</script>
<script id="heightAdjust">
	if (!window.videoInfo)
		var videoInfo = {};

	function adjustHeight(n) {
		var height;
		var par = $("#heightAdjust").parent();
		if (par[0].style.height) {
			height = par.height();
			par.height(height+n);
		}
	}
	
	// Easier way of setting cookies
	function setCookie(name, value) {
		var CookieDate = new Date;
		CookieDate.setFullYear(CookieDate.getFullYear() + 10);
		document.cookie = name+\'=\'+value+\'; expires=\' + CookieDate.toGMTString( ) + \'; path=/\';
	}

	// Easier way of getting cookies
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(\';\');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == \' \') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	
	function getTimeHash() {
		var h = 0;
		var st = 0;
		
		if ((h = window.location.href.indexOf("#t=")) >= 0) {
			st = window.location.href.substr(h+3);
			return parseInt(st);
		}
		
		return 0;
	}
	
	var vlpColors = "teal,white";
	vlpColors = vlpColors.split(",");
	
			var viValues = {
		variable: "vlp",
		src: "'.$sitedomain.'/content/video/'.$row['filename'].'",
		hdsrc: "'.$sitedomain.'/content/video/'.$row['filename'].'",
		img: "/content/thumb/'.$row['thumb'].'",
		url: "'.$row['vid'].'",
		duration: 0,
		autoplay: false,
		skin: "skins/'.$ct_vlpskin.'",
		btcolor: vlpColors[0],
		bgcolor: vlpColors[1],
		adjust: true,
		start: getTimeHash()
	};
	
	for (var i in viValues) {
		if (videoInfo[i] === void(0)) {
			videoInfo[i] = viValues[i];
		}
	}
	</script>

<div class="vlPlayer">
<script>
				window[videoInfo.variable] = new VLPlayer({
					id: videoInfo.id,
					src: videoInfo.src,
					hdsrc: null,
					preview: videoInfo.img,
					videoUrl: "'.$sitedomain.'/watch?v="+videoInfo.url,
					duration: videoInfo.duration,
					autoplay: videoInfo.autoplay,
					skin: "skins/'.$ct_vlpskin.'",
					adjust: videoInfo.adjust,
					btcolor: videoInfo.btcolor,
					bgcolor: videoInfo.bgcolor,
					start: videoInfo.start,
					expand: videoInfo.expand,
					complete: videoInfo.complete,
					ended: videoInfo.ended
				});
				
				$(window).on(\'hashchange\', function() {
					var t = getTimeHash();
					vlp.play();
					vlp.seek(t);
					$(window).scrollTop(0);
				});
			</script>
</div>';
} ?>
</body>
</html>