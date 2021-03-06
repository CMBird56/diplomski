
<!DOCTYPE HTML>
<html>
	<head>
		<title>Princip 6: Ubrzavanje i usporavanje</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<style>
		
		* {	margin: 0; padding: 0 }
		
		body {
			background: #eee;
		}
		
		#stage {
			width: 300px;
			height: 300px;
			margin: 50px auto;
			background: #fff;
			position: relative;
			overflow: hidden;
			background: url("stage.png") ;
		}
		
		.running #ball, .running #shadow {
			width: 50px;
			height: 50px;
			background: #00f;
			position: absolute;
			bottom: 25px;
			left: 125px;
			border-radius: 50px;
			z-index: 2;
			
			-webkit-animation: ball 5s;
			-webkit-transform-origin: 50% 50%;
			
			-moz-animation: ball 5s;
			-moz-transform-origin: 50% 50%;
		}
		
		.running #shadow {
			background: #000;
			bottom: 0;
			z-index: 1;
			
			-webkit-animation: none;
			-webkit-transform: scaleY(0.25);
			
			-moz-animation: none;
			-moz-transform: scaleY(0.25);
		}
		
		@-webkit-keyframes ball {
			0% { -webkit-transform: translateY(-300px); }
			35% { -webkit-transform: translateY(-300px); -webkit-animation-timing-function: ease-in; }
			65% { -webkit-transform: translateY(0px); -webkit-animation-timing-function: ease-out; }
			85% { -webkit-transform: translateY(-100px); -webkit-animation-timing-function: ease-in; }
			100% { -webkit-transform: translateY(0px); }
		}
		
		@-moz-keyframes ball {
			0% { -moz-transform: translateY(-300px); }
			35% { -moz-transform: translateY(-300px); -moz-animation-timing-function: ease-in; }
			65% { -moz-transform: translateY(0px); -moz-animation-timing-function: ease-out; }
			85% { -moz-transform: translateY(-100px); -moz-animation-timing-function: ease-in; }
			100% { -moz-transform: translateY(0px); }
		}
		
		.trigger {
			background: #ffffff;
			background: -moz-linear-gradient(top, #ffffff 0%, #cccccc 100%);
			background: -webkit-linear-gradient(top, #ffffff 0%,#cccccc 100%);
			border: 1px solid #aaa;
			font-family: helvetica, sans-serif;
			font-size: 0.7em;
			font-weight: bold;
			text-decoration: none;
			text-transform: lowercase;
			text-align: center;
			color: #333;
			padding: 10px;
			border-radius: 20px;
			display: block;
			margin: 0 auto;
			width: 100px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.3), inset 0 1px 10px #fff;
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.3), inset 0 1px 10px #fff;
		}
		
		.trigger:active {
			background: -moz-linear-gradient(top, #bbbbbb 0%, #eeeeee 100%);
			background: -webkit-linear-gradient(top, #bbbbbb 0%, #eeeeee 100%);
			position: relative;
			top: 2px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.3), inset 0 1px 5px rgba(0,0,0,0.1);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.3), inset 0 1px 5px rgba(0,0,0,0.1);
			-webkit-transition: 0.1s;
			-moz-transition: 0.1s;
		}
			
		</style>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" type="text/javascript"></script>
		<script>
		
		$(document).ready(function() {
		    $('#stage').addClass('running');
		    
		    $('.trigger').click(function() {
		        $('#stage').removeClass('running').delay(10).queue(function(next){
		            $(this).addClass('running');
		            next();
		        });
		        return false;
		    });
		});
		</script>
		
	</head>
	<body>
		<div id="stage">
		
		<div id="ball"></div>
		<div id="shadow"></div>
		
		</div>
		
		<a class="trigger" href="#">Restartuj Animaciju</a>
	</body>
</html>
