<!DOCTYPE html>
<html>
<head>
	<title>SLIDER</title>
</head>
<style>
	.slider {width: 300px;
		height: 300px;
		overflow: hidden;
		margin: 50px auto;
	}
	.slides {width: calc(300px*3);
		animation: glisse 10s infinite;}
	.slide {float: left;}
	@keyframes glisse
	{
		0% {
			transform: translateX(0);
		}
		10% {
			transform: translateX(0);
		}
		
		33% {
			transform: translateX(-300px);
		}
		43% {
			transform: translateX(-300px);
		}
		
		63% {
			transform: translateX(-600px);
		}
		63% {
			transform: translateX(-600px);
		}
		100% {
			transform: translateX(0);
		}
	}
</style>
<body>
<div class="slider">
	<div class="slides">
		<div class="slide"><a href="https://www.frandroid.com/" target="_blank"><img src="photo/frandroid.png"  alt="" width="300px" height="300px"> </a></div>
		<div class="slide" ><a href="https://www.01net.com/" target="_blank"><img src="photo/01net.png" alt="" width="300px" height="300px"></a></div>
		<div class="slide"><a href="https://www.info24android.com/" target="_blank"><img src="photo/info24android.png" alt="" width="300px" height="300px"></a></div> 
	</div>
	
</div>
</body>
</html>