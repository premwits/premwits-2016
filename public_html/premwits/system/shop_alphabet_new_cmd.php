<?
	session_start();
	$group_id=$_REQUEST['selTeam'];
	$cmd=$_REQUEST['cmd'];
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	// INPUT cmd //
	$len=0;
	$tmp3=0;
	while(1)
	{
		if($cmd[$tmp3]== NULL) break;
		else $len++;
		$tmp3++;
	}
	$i=0;
	while($i<$len){
		$select=$cmd[$i++];
		$countx=0;
		while($cmd[$i]>='0'&&$cmd[$i]<='9') $countx=$countx*10+($cmd[$i++]-'0');
		$res=mysql_query("SELECT * FROM `alphabet_cost`");
		while($row=mysql_fetch_row($res)){
			if($row[0]==$select) $tmp=$row[2];
		}
		$total=$tmp*$countx;
		$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $group_id ");
		while($row=mysql_fetch_row($res)) $tmp2=$row[1];
		if($tmp2<$total)
		{
			$_SESSION['st']=703;
			break;
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

	}
	header('Location: index.php');
?>