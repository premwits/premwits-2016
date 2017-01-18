<?
	// START SESSION //
	session_start();
	
	// INPUT //
	$selTeam=$_REQUEST['selTeam'];
	$item=$_REQUEST['selItem'];
	$amount=$_REQUEST['amount'];
	
	// PROCESS //
	if($item=="Newspaper")
	{
		$req_money=50*$amount;
	}
	else if($item=="Rope")
	{
		$req_money=20*$amount;
	}
	else if($item=="Straw")
	{
		$req_money=10*$amount;
	}
	else if($item=="Clay")
	{
		$req_money=100*$amount;
	}
	else if($item=="Chopstick")
	{
		$req_money=40*$amount;
	}
	else if($item=="RubberBand")
	{
		$req_money=10*$amount;
	}
	else if($item=="FeatureBoard")
	{
		$req_money=200*$amount;
	}
	else if($item=="Clip")
	{
		$req_money=15*$amount;
	}
	else if($item=="Scissors")
	{
		$req_money=30*$amount;
	}
	else if($item=="Tape")
	{
		$req_money=50*$amount;
	}
	else if($item=="Papercup")
	{
		$req_money=30*$amount;
	}
	
	// CONNECT TO MYSQL //
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");

	// DEPOSIT MONEY //
	$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $selTeam ");
	while($row=mysql_fetch_row($res))
	{
		$crr_money=$row[1];
	}
	$total_money=$crr_money-$req_money;
	if($total_money<0)
	{
		// STATUS ERROR NO ENOUGH MONEY //
		$_SESSION['st']=603;
	}
	else
	{
		$res=mysql_query("UPDATE `vletpaoh_premwit`.`bank_account` 
						  SET `money` = $total_money 
						  WHERE CONVERT( `bank_account`.`group_number` USING utf8 ) = $selTeam 
						  LIMIT 1 ;");
		$_SESSION['st']=602;
	}
	mysql_close();
?>
<?
/*
REQ_MONEY:: <? echo $req_money; ?>
<br />
CRR_MONEY:: <? echo $crr_money; ?>
<br  />
TOTAL MONEY:: <? echo $total_money; ?>
<br />
GROUP_ID:: <? echo $selTeam; ?>
<br />
ITEM:: <? echo $item; ?>
*/
?>
<?
	header('Location: index.php');
?>