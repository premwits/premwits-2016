<?
	session_start();
	$group_id=$_REQUEST['selTeam'];
	$typeCard=$_REQUEST['selCard'];
	$amount=$_REQUEST['amount'];
	
	if($amount<0)
	{
		$_SESSION['st']=704;
		header('Location: index.php');
		break;
	}
	
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	$res=mysql_query("SELECT * FROM `card_cost` WHERE `card_type` LIKE '$typeCard' ");
	while($row=mysql_fetch_row($res))
	{
		$tmp=$row[1];
	}
	$total=$tmp*$amount;
	$res2=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $group_id "); //SELECT * FROM `player_card` WHERE `group_number` = 5
	while($row2=mysql_fetch_row($res2))
	{
		$money2=$row2[1];
	}
	if($money2<$total)
	{
		$_SESSION['st']=703;
	}
	else
	{
		$difff=$money2-$total;
		$res=mysql_query("UPDATE `bank_account` 
						  SET `money` = $difff 
						  WHERE `group_number` = $group_id");
		$_SESSION['st']=701;
	}
	mysql_close();
	header('Location: index.php');
?>