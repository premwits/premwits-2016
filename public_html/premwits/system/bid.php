 <?
	// START SESSION //
	session_start();
	
	// GET INOUT //
	$group_id=$_REQUEST['selTeam'];
	$bid=$_REQUEST['bid_amount'];
	
	// CONNECT MYSQL //
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	
	// BID //
	$res=mysql_query("SELECT * FROM `bidding_cmd` WHERE 1");
	
	while($row=mysql_fetch_row($res))
	{
		$bid_max=$row[1];
	}
	if($bid>$bid_max)
	{
		$group_number=$group_id;
		$bid_max=$bid;
		$res=mysql_query("UPDATE `bidding_cmd` SET `group_number`=$group_number,`bid_max`=$bid_max WHERE 1");
		$_SESSION['st']=1001;
	}
	else
	{
		$_SESSION['st']=1002;
	}
	
	//FOWARD TO SYSTEM GUI //
	header('Location: index.php');
 ?>