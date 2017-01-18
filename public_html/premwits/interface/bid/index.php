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
			background:url(../../script/img/bg2.jpg) top right no-repeat;
			background-attachment:fixed; 
		}
	</style>
	
</head>
	
<body>
    <div>
		<table style="width:100%; height:100%">
		<tr style="height:100%">
			<td style="height:100%; text-align:center"><h3><font cloor="#212121">:: PLEASE WAIT ::</font></h3>
			<?
			if(!isset($_COOKIE['next_time_bid']))
			{
				session_start();
				setcookie("next_time_bid",1451266954, time() + (86400 * 30), "/"); //1451265000
				setcookie("bid_stat",1, time() + (86400 * 30), "/"); //1451265000
				setcookie("bid_count",0, time() + (86400 * 30), "/"); //1451265300
			?>
			
			<div class="col-md-12">
			<h5>
				<b>
					<font color="#D32F2F">PREPARING FOR FIRST-TIME USES [PRESS START TO CONTINUE]</font>
				</b>
			</h5>
			</div>
			<div class="col-md-12"></div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only"></span>
                  </div>
                </div>
              </div>
			<div class="col-md-3"></div>
			<div class="col-md-12"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
                <form action="index2.php" method="POST"><button type="submit" name="button_st" value="10100" class="btn btn-primary btn-block">START</button></form>
              </div>
			<div class="col-md-4"></div>
			<?
			}
			else
			{
			?>
			
			<div class="col-md-12">
			<h5>
				<b>
					<font color="#3C3C3C">PRESS START TO CONTINUE</font>
				</b>
			</h5>
			</div>
			<div class="col-md-12"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
                <form action="index2.php" method="POST"><button type="submit" name="button_st" value="10100" class="btn btn-primary btn-block">START</button></form>
              </div>
			<div class="col-md-4"></div>
			<?
			}
			?>
			</td>
			
		</tr>
		</table>
	</div>
    <footer align="center">
		<font cloor="#212121">System and Design by </font><a href="http://www.facebook.com/gaygames.rayriffy" style="text-decoration:none;"><font color="#1E88E5">RayRiffy</font></a>
    </footer>

</body>
</html>