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
</head>
	
<body>
	<div class="col-md-12">
	<font size="6"><b><i>BID</i></b></font>
	&nbsp;
	<font size="3">4.16% OF CHANGE TO WIN</font>
	</div>
	<br />
	<br />
	
	<div class="item" id="item"></div>
	
	<div class="col-md-12" align="center">
		<footer>
			Interface Design by Ray Riffy and SIN_COS_TAN
		</footer>
	</div>

</body>
<script language="javascript" type="text/javascript">
	function readerbid(){
		$('#item').load('../reader/data/bid.php',function () {
			 $(this).unwrap();
		});
	}

	readerbid(); // Run on page load
	setInterval(function(){
		readerbid() // Run every 1 sec
	}, 1000);
</script>
</html>