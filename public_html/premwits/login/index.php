<html>
<head>
	<link rel="stylesheet" href="../script/css/site.min.css">
	<script type="text/javascript" src="../script/js/site.min.js"></script>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- site css -->
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery -->
	<script type="text/javascript" src="../script/css/jquery-1.11.3.js"></script>
	<title>PRE-MWITS 2016 SYSTEM</title>
	<style>
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/3.woff") format('woff');
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/4.woff") format('woff');
			font-weight: bold;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/9.woff") format('woff');
			font-weight: bold;
			font-style: italic;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/7.woff") format('woff');
			font-style: italic;
		}
		*{
			font-family: Exo2
		}
		body	
		{ 
			background:url(<? if($_COOKIE['st']==401) {?>../script/img/bg_err.png<?} else { ?>../script/img/bg.jpg<? } ?>) top right no-repeat;
			background-attachment:fixed; 
		}
	</style>
	<script type="text/javascript">

		function init()
		{
		  timeDisplay=document.createTextNode( "" );
		  document.getElementById("clock").appendChild(timeDisplay);
		}

		function updateClock()
		{
		  var currentTime=new Date();

		  var currentHours=currentTime.getHours();
		  var currentMinutes=currentTime.getMinutes();
		  var currentSeconds=currentTime.getSeconds();

		  currentMinutes=(currentMinutes < 10 ? "0" : "")+currentMinutes;
		  currentSeconds=(currentSeconds < 10 ? "0" : "")+currentSeconds;
		  var currentTimeString=currentHours+":"+currentMinutes+":"+currentSeconds;

		  document.getElementById("clock").firstChild.nodeValue=currentTimeString;
		}	
	</script>
</head>
<body onload="updateClock(); setInterval('updateClock()', 30 )">   
	<div align="right"><b><font size="3"><span id="clock">&nbsp;</span></font></b></div>
	<br />
	<center>
		<img src="../script/img/logo.svg" width="200px" height=auto; />
		<h3><i>PRE-MWITS 2016 SYSTEM</i></h3>
		<h4>LOGIN</h4>
		<?
			session_start();
			if($_COOKIE['st']==401)
			{
		?>
		<h5><font color="red">INCORRECT USERNAME OR PASSWORD</font></h5>
		<?
			}
			
			setcookie('st', NULL, time() - 3600, "/");
		?>
		<form action="login_cmd.php" method="post">
			<div class="col-md-4">&nbsp;</div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Username" name="username" /></div>
			<div class="col-md-4">&nbsp;</div>
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-4">&nbsp;</div>
			<div class="col-md-4"><input type="password" class="form-control" placeholder="Password" name="password" /></div>
			<div class="col-md-4">&nbsp;</div>
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-5">&nbsp;</div>
			<br /><br /><br /><div class="col-md-2"><button type="submit" class="btn btn-primary btn-block">Login</button></div>
			<div class="col-md-5">&nbsp;</div>
		</form>
			<div class="col-md-12">&nbsp;</div>
		<div class="col-md-12">
		<footer>
			Interface Design by Ray Riffy and SIN_COS_TAN
		</footer>
		</div>
	</center>
</body>
</html>