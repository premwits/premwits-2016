<?
	// STAFF SYSTEM MENU //
	// START SESION //
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="../../script/css/site.min.css">
	<link rel="favicon	" href="../../script/img/logo.gif">
	<script type="text/javascript" src="../../script/js/site.min.js"></script>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- site css -->
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery -->
	<script type="text/javascript" src="../../script/css/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<? //<script type="text/javascript" src="../../timer/func.js"></script> ?>
	<title>PRE-MWITS 2016 SYSTEM</title>
	<style>
		@font-face {
			font-family: "Exo2";
			src: url("../../script/font/woff/3.woff") format('woff');
		}
		@font-face {
			font-family: "Exo2";
			src: url("../../script/font/woff/4.woff") format('woff');
			font-weight: bold;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../../script/font/woff/9.woff") format('woff');
			font-weight: bold;
			font-style: italic;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../../script/font/woff/7.woff") format('woff');
			font-style: italic;
		}
		*{
			font-family: Exo2
		}
		body	
		{ 
			background:url(../../script/img/bg_c.jpg) top right no-repeat;
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
<body onload="updateClock(); setInterval('updateClock()', 30 )">   
	
<?

	if($_REQUEST['button_st']==10100)
	{
?>
	<div class="col-md-12">
	<font size="6"><b><i>PRE MWITS 2016</i></b></font>
	&nbsp;
	<font size="3">THE NEW WAVE </font><div class="lv_up" id="lv_up"></div><div class="titan_lv_up" id="titan_lv_up"></div>
	</div>
	<br />
	
	<div class="titan" id="titan"></div>
	
	<div class="col-md-3">
		<div class="well">
			<b><font size="4">TIME</font></b>
			<br /><br />
			<font size="20"><center><span id="clock">&nbsp;</span></center></font><br /><br />
			<?
			/*
			<table class="table">
				<tbody>
				  <tr>
				  <td width="70%">Current Time</td>
				  <td width="30%">
					 <span id="clock">&nbsp;</span>
				  </td>
				  </tr>
				  <tr>
				  <td width="70%">Time Left</td>
				  <td width="30%">
					 <div id="timer"></div>
				  </td>
				  </tr>
				  <tr>
				  <td width="70%">Time Until <i>Titan</i> Hit <i>Player</i></td>
				  <td width="30%">N/A</td>
				  </tr>
				</tbody>
			</table>
			*/
			?>
		</div>
	</div>

	<div class="timer" id="timer"></div>
	
	<div class="player" id="player"></div>
	
	<div class="col-md-12" align="center">
		<footer>
			Interface Design by Ray Riffy and SIN_COS_TAN
		</footer>
	</div>
	<?
	}
	else
	{
	?>
		<div>
			<table style="width:100%; height:100%">
			<tr style="height:100%">
				<td style="height:100%; text-align:center"><h3><font cloor="#212121">ERROR</font></h3><h5><b><font color="#D32F2F">SERVER REJECTED</font></b></h5> </td>
			</tr>
			</table>
		</div>
	<?
	}
	?>
</body>
<script language="javascript" type="text/javascript">
	function readerplayer(){
		$('#player').load('../reader/health/player.php',function () {
			 $(this).unwrap();
		});
	}

	readerplayer(); // Run on page load
	setInterval(function(){
		readerplayer() // Run every 1 sec
	}, 2000);
</script>
<script language="javascript" type="text/javascript">
	function readertitan(){
		$('#titan').load('../reader/health/titan.php',function () {
			 $(this).unwrap();
		});
	}

	readertitan(); // Run on page load
	setInterval(function(){
		readertitan() // Run every 1 sec
	}, 2000);
</script>
<script language="javascript" type="text/javascript">
	function readertimer(){
		$('#timer').load('../reader/timer/main_timer.php',function () {
			 $(this).unwrap();
		});
	}

	readertimer(); // Run on page load
	setInterval(function(){
		readertimer() // Run every 1 sec
	}, 1000);
</script>
<script language="javascript" type="text/javascript">
	function readerlv(){
		$('#lv_up').load('../reader/data/lv_up.php',function () {
			 $(this).unwrap();
		});
	}

	readerlv(); // Run on page load
	setInterval(function(){
		readerlv() // Run every 1 sec
	}, 1000);
</script>
<script language="javascript" type="text/javascript">
	function readertitanlv(){
		$('#titan_lv_up').load('../reader/data/titan_lv_up.php',function () {
			 $(this).unwrap();
		});
	}

	readertitanlv(); // Run on page load
	setInterval(function(){
		readertitanlv() // Run every 1 sec
	}, 1000);
</script>
</html>