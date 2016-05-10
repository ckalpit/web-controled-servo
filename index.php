<html>
<head>
	<?php
	header("Access-Control-Allow-Origin: http://localhost");
	?>
	<style>
		* {
			box-sizing:border-box;
		}
		html {height:100%}
		body {
			background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyYWRpYWxHcmFkaWVudCBpZD0iZyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjOTE3YjZjIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMWMxOTE3Ii8+PC9yYWRpYWxHcmFkaWVudD48cmVjdCB4PSIwJSIgeT0iMCUiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9IiMxYzE5MTciIC8+PHJlY3QgeD0iLTIwLjcxMDclIiB5PSItMTQxLjQyMTQlIiB3aWR0aD0iMTQxLjQyMTQlIiBoZWlnaHQ9IjI4Mi44NDI3JSIgZmlsbD0idXJsKCNnKSIgLz48L3N2Zz4=);
			background-image: -webkit-gradient(radial, 50% 0%, 0, 50% 0%, 319, color-stop(0%, #917b6c), color-stop(100%, #1c1917));
			background-image: -webkit-radial-gradient(center top, farthest-corner, #917b6c 0%, #1c1917 100%);
			background-image: -moz-radial-gradient(center top, farthest-corner, #917b6c 0%, #1c1917 100%);
			background-image: -ms-radial-gradient(center top, farthest-corner, #917b6c 0%, #1c1917 100%);
			background-image: -o-radial-gradient(center top, farthest-corner, #917b6c 0%, #1c1917 100%);
			background-image: radial-gradient(farthest-corner at center top, #917b6c 0%, #1c1917 100%);
		}
		#wall_socket {
			width:840px;
			height:350px;
			position:relative;
			margin:50px auto;
			background: rgb(244,241,238);
			background: -moz-linear-gradient(top,  rgba(244,241,238,1) 0%, rgba(225,217,210,1) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(244,241,238,1)), color-stop(100%,rgba(225,217,210,1)));
			background: -webkit-linear-gradient(top,  rgba(244,241,238,1) 0%,rgba(225,217,210,1) 100%);
			background: -o-linear-gradient(top,  rgba(244,241,238,1) 0%,rgba(225,217,210,1) 100%);
			background: -ms-linear-gradient(top,  rgba(244,241,238,1) 0%,rgba(225,217,210,1) 100%);
			background: linear-gradient(to bottom,  rgba(244,241,238,1) 0%,rgba(225,217,210,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f1ee', endColorstr='#e1d9d2',GradientType=0 );
			border-radius:5px;
			box-shadow:inset 3px -1px 7px #736259, inset -3px -1px 7px #736259,0 12px 15px #17110a,0 20px 25px #372e2c,0 0 10px #17110a;
			overflow:hidden;
		}
		div#switch_container {
			/*display: none;*/
			padding-top: 6px;
			padding-left: 2px;
			background:#544a45;
			width:710px;
			height:40px;
			margin:40px 40px;
			border-radius:5px;
			border-bottom:2px solid #e9e4e1;
			border-top:2px solid #cccac8;
		}

		#submit_angles{
			padding: 15px;
			border-radius: 8px;
		}
		#submit_angles:hover{
			cursor: pointer;
		}
		.stats{
			display: inherit;
			padding-left: 20%;
		}
		.servo_info{
			border: 1px;
			border-style: dotted;
			padding: 1%;
			margin-right: 5%;
		}
	</style>
</head>
<body>
	<div id="wall_socket">
		<!-- <div id="controls" style="display: none;"> -->
		<div id="controls">
			<div id="switch_container">
				<input type="number" min="0" name="servo1" placeholder="Servo 1 angle, e.g.: 80" id="servo1" />
				<input type="number" min="0" name="servo2" placeholder="Servo 2 angle, e.g.: 140" id="servo2" />
				<input type="number" min="0" name="servo3" placeholder="Servo 3 angle, e.g.: 140" id="servo3" />
				<input type="number" min="0" name="servo4" placeholder="Servo 4 angle, e.g.: 140" id="servo4" />
			</div>

			<div style="float: left;width: 250px;" class="info_stats">
				<li class="stats"><b>Temperature</b>: <span style="color: green;">Proper</span><span style="display: none; color: red;">High</span></li>
				<li class="stats"><b>Voltage</b>: <span style="color: green;">Proper</span><span style="display: none; color: red;">High</span></li>
				<li class="stats"><b>Current</b>: <span style="color: green;">Proper</span><span style="display: none; color: red;">High</span></li>
			</div>
			<center>
				<button id="submit_angles">Rotate</button>
			</center>
			<br />
			<br />
			<div class="status" style="width: 100%;display: inline-block;margin-top: 25px;padding-left: 14%;">
				<span class="servo_info">Servo 1 rotated</span>
				<span class="servo_info">Servo 2 rotated</span>
				<span class="servo_info">Servo 3 rotated</span>
				<span class="servo_info">Servo 4 rotated</span>
			</div>
		</div>

		<!-- <div id="access_control">
			<br /><br />
			<center>
				<input type="text" id="username" value="" placeholder="Username">
				<input type="password" id="password" value="" placeholder="Password">
				<button id="login_btn">Login</button>
				</center>
			</div>
		</div> -->
	</body>

	<!-- 1.7.2 -->
	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on('click','#submit_angles',function(){
			var leftValue = $("#servo1").val().trim();
			var rightValue = $("#servo2").val().trim();
			var thirdValue = $("#servo3").val().trim();
			var fourthServo = $("#servo4").val().trim();

			if(leftValue != '' && $.isNumeric(leftValue)){
				if(rightValue != '' && $.isNumeric(rightValue)){
					if(thirdValue != '' && $.isNumeric(thirdValue)){
						if(fourthServo != '' && $.isNumeric(fourthServo)){
							$.ajax({
								type: 'POST',
								data: {leftServo: leftValue, rightServo: rightValue, thirdServo: thirdValue, fourthServo: fourthServo},
								dataType: "json",
								url: "http://<?=$_SERVER['SERVER_ADDR']?>/servo_work.php",
								success: function(response){
									console.log(response);
								}
							});
						} else
						alert("Value for Servo 4 is invalid");
					} else
					alert("Value for Servo 3 is invalid");
				} else
				alert("Value for Servo 2 is invalid");
			}else
			alert("Value for Servo 1 is invalid");
		});

		$(document).on('click','#login_btn',function(){
			var username = $("#username").val().trim();
			var pwd = $("#password").val().trim();

			if(username != '' && pwd != ''){
				if(username == "admin" && pwd == "parrotabcd"){
					$("#controls").show();
					$("#access_control").hide();
				}
			}else
			alert("Username / Password is blank.");
		});

		$(document).on('keyup', "#username, #password", function(e){
			if(e.keyCode == 13){
				$("#login_btn").trigger("click");
			}
		});
	</script>

	</html>