<?

	$time=time();
	
	// CONNECT MYSQL //
	session_start();
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	
	if($time==1451260680) // PASS 1 HOURS // // USING FAKE TIME // // REAL >> 1451269680 //
	{
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=20000 WHERE `titan_name`=0");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=3000 WHERE `titan_name`=1");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=3000 WHERE `titan_name`=2");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=3000 WHERE `titan_name`=3");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=3000 WHERE `titan_name`=4");
	}
	else if($time==1451273280) // PASS 1 HOURS // // USING REAL TIME //
	{
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=30000 WHERE `titan_name`=0");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=4000 WHERE `titan_name`=1");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=4000 WHERE `titan_name`=2");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=4000 WHERE `titan_name`=3");
		$res=mysql_query("UPDATE `titan_status` SET `titan_atk`=4000 WHERE `titan_name`=4");
	}

	mysql_close();
?>