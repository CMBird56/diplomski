
<!DOCTYPE HTML>
<html>
	<head>
		<title>Princip 7: Lukovi</title>
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
			background: url("stage2.png") ;
		}
		
		.running .ball, .running .shadow {
			width: 50px;
			height: 50px;
			background: #00f;
			position: absolute;
			bottom: 25px;
			left: 225px;
			border-radius: 50px;
			z-index: 2;
			
			-webkit-animation: ball-y 2s;
			-webkit-transform-origin: 50% 50%;
			
			-moz-animation: ball-y 2s;
			-moz-transform-origin: 50% 50%;
		}
		
		.running .ball-arc {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			
			-webkit-animation: ball-x 2.5s cubic-bezier(0, 0, 0.35, 1);
			-moz-animation: ball-x 2.5s cubic-bezier(0, 0, 0.35, 1);
		}
		
		.running .shadow {
			background: #000;
			bottom: 0;
			z-index: 1;
			
			-webkit-animation: none;
			-webkit-transform: scaleY(0.25);
			
			-moz-animation: none;
			-moz-transform: scaleY(0.25);
		}
		
		@-webkit-keyframes ball-x {
			0% { -webkit-transform: translateX(-275px); }
			100% { -webkit-transform: translateX(0px); }
		}
		
		@-webkit-keyframes ball-y {
			0% { -webkit-transform: translateY(-205px); -webkit-animation-timing-function: ease-in; }
			
			40% { -webkit-transform: translateY(-100px); -webkit-animation-timing-function: ease-in; }
			65% { -webkit-transform: translateY(-52px); -webkit-animation-timing-function: ease-in; }
			82% { -webkit-transform: translateY(-25px); -webkit-animation-timing-function: ease-in; }
			92% { -webkit-transform: translateY(-12px); -webkit-animation-timing-function: ease-in; }
			
			25%, 55%, 75%, 87%, 97%, 100% { -webkit-transform: translateY(0px); -webkit-animation-timing-function: ease-out; }
		}
		
		
		@-moz-keyframes ball-x {
			0% { -moz-transform: translateX(-275px); }
			100% { -moz-transform: translateX(0px); }
		}
		
		@-moz-keyframes ball-y {
			0% { -moz-transform: translateY(-205px); -moz-animation-timing-function: ease-in; }
			
			40% { -moz-transform: translateY(-100px); -moz-animation-timing-function: ease-in; }
			65% { -moz-transform: translateY(-52px); -moz-animation-timing-function: ease-in; }
			82% { -moz-transform: translateY(-25px); -moz-animation-timing-function: ease-in; }
			92% { -moz-transform: translateY(-12px); -moz-animation-timing-function: ease-in; }
			
			25%, 55%, 75%, 87%, 97%, 100% { -moz-transform: translateY(0px); -moz-animation-timing-function: ease-out; }
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
		
		<div class="ball-arc">
			<div class="shadow"></div>
		</div>
		
		<div class="ball-arc">
			<div class="ball"></div>
		</div>
		
		</div>
		
		<a class="trigger" href="#">Restartuj Animaciju</a>
	</body>
</html>
