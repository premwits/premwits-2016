<?
	session_start();
	$group_id=$_REQUEST['selTeam'];
	$typeOut=$_REQUEST['selOut'];
	$money=$_REQUEST['money'];
	$dis_name=$_REQUEST["dis_name"];
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	if($money<0)
	{
		$_SESSION['st']=1002;
		header('Location: index.php');
		break;
	}
	else
	{
			$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	if($typeOut==1)
	{
		$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $group_id ");
		while($row=mysql_fetch_row($res))
		{
			$tmp=$row[1];
		}
		$sum=$tmp+$money;
		$res=mysql_query("UPDATE `vletpaoh_premwit`.`bank_account` 
						  SET `money` = $sum 
						  WHERE CONVERT( `bank_account`.`group_number` USING utf8 ) = $group_id 
						  LIMIT 1 ;");
		$_SESSION['st']=601;
	}
	else if($typeOut==0)
	{
		$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $group_id ");
		while($row=mysql_fetch_row($res))
		{
			$tmp=$row[1];
		}
		$difff=$tmp-$money;
		if($difff<0)
		{
			$_SESSION['st']=603;
		}
		else
		{
			$res=mysql_query("UPDATE `vletpaoh_premwit`.`bank_account` 
							  SET `money` = $difff 
							  WHERE CONVERT( `bank_account`.`group_number` USING utf8 ) = $group_id 
							  LIMIT 1 ;");
			$_SESSION['st']=602;
		}
	}
	mysql_close();
	header('Location: index.php');
	break;
	}
?>