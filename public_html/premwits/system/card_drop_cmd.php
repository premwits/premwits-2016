 <?
	session_start();
	$typeCard=$_REQUEST['selCard'];
	$team=$_REQUEST['selTeam'];
	$target=$_REQUEST['selTarget'];
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	
	{
		$new_amount=0;
		if($typeCard=="blue1" ||$typeCard=="blue2" || $typeCard=="blue3" || $typeCard=="blue4" )	
		{	
			$asql="SELECT `blue1`,`blue2`,`blue3`,`blue4` FROM $target WHERE `group_id` LIKE $team";
			$ares=mysql_query($asql);
		
			while($row=mysql_fetch_row($ares))
			{
				$blue1=$row[0];
				$blue2=$row[1];
				$blue3=$row[2];
				$blue4=$row[3];
			}
			if($typeCard=="blue1")
				$new_amount=$blue1;
			else if($typeCard=="blue2")
				$new_amount=$blue2;
			else if($typeCard=="blue3")
				$new_amount=$blue3;
			else if($typeCard=="blue4")
				$new_amount=$blue4;
				
		}
		$new_amount++;
		$sql="UPDATE `$target` SET `$typeCard`=$new_amount WHERE `group_id` LIKE $team";
		$res=mysql_query($sql);
		$_SESSION['st']=901;
	}
	
	mysql_close();
	header('Location: index.php');
 ?>