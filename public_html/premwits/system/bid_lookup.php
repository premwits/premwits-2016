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
			background:url(../script/img/bg.jpg) top right no-repeat;
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
	<?
		session_start();
		$dblocation="localhost";
		$dbuser="vletpaoh_premwit";
		$dbpass="7i4szhbQ5";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		$sql="SELECT * FROM `bidding_cmd`";
		$res=mysql_query($sql);
		$i=0;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$array1[$i]=$row[0];
			$array2[$i]=$row[1];
			$i++;
		}
		mysql_close();
	?>
	<div align="right"><b><font size="3"><span id="clock">&nbsp;</span></font></b></div>
	<br />
	<center>
		<div class="well">
		<table class="table">
                <thead>
                  <tr>
                    <th>Group</th>
                    <th>BID AMOUNT</th>
                  </tr>
                </thead>
                <tbody>
				  <tr>
				  <td><? echo $array1[0]; ?></td>
				  <td><? echo $array2[0]; ?></td>
				  </tr>
                </tbody>
        </table>
		</div>
		<footer>
			Interface Design by Ray Riffy and SIN_COS_TAN
		</footer>
	</center>
</body>
</html>