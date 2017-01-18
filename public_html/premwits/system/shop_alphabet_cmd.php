<?
	session_start();
	$group_id=$_REQUEST['selTeam'];
	$typeCard=$_REQUEST['selCard'];
	$amount=$_REQUEST['amount'];
	$sq_location=" # LOCATION # ";
	if($amount<0)
	{
		$_SESSION['st']=704;
		header('Location: index.php');
		break;
	}
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	$res=mysql_query("SELECT * FROM `alphabet_cost` WHERE `alphabet` LIKE '$typeCard' ");
	while($row=mysql_fetch_row($res))
	{
		$tmp=$row[2];
	}
	$total=$tmp*$amount;
	$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $group_id ");
	while($row=mysql_fetch_row($res))
	{
		$tmp2=$row[1];
	}
	if($tmp2<$total)
	{
		$_SESSION['st']=703;
	}
	else
	{
		$difff=$tmp2-$total;
		$res=mysql_query("UPDATE `vletpaoh_premwit`.`bank_account` 
						  SET `money` = $difff 
						  WHERE CONVERT( `bank_account`.`group_number` USING utf8 ) = $group_id 
						  LIMIT 1 ;");
		$_SESSION['st']=701;
	}
	mysql_close();
	header('Location: index.php');
?>