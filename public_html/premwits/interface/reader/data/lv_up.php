<?
	session_start();
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	for($i=1;$i<=24;$i++)
	{
		$sql="SELECT `LV`,`EXP`,`exp_max`,`Hp`,`hp_max` FROM `player_status` WHERE `group_number`=$i";
		$res=mysql_query($sql);
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$LV=$row[0];
			$EXP=$row[1];
			$exp_max=$row[2];
			$Hp=$row[3];
			$hp_max=$row[4];
		}
		
		if($exp_max<=$EXP)
		{
			$new_LV=$LV+1;
			$new_EXP=$EXP-$exp_max;
			if($new_LV==2)
			{
				$new_exp_max=1000;
				$new_bonus=4;
				$new_hp_max=30000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==3)
			{
				$new_exp_max=1500;
				$new_bonus=6;
				$new_hp_max=35000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==4)
			{
				$new_exp_max=2000;
				$new_bonus=8;
				$new_hp_max=40000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==5)
			{
				$new_exp_max=2500;
				$new_bonus=10;
				$new_hp_max=45000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==6)
			{
				$new_exp_max=3000;
				$new_bonus=12;
				$new_hp_max=50000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==7)
			{
				$new_exp_max=3500;
				$new_bonus=14;
				$new_hp_max=55000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==8)
			{
				$new_exp_max=4000;
				$new_bonus=15;
				$new_hp_max=60000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==9)
			{
				$new_exp_max=4500;
				$new_bonus=20;
				$new_hp_max=65000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==10)
			{
				$new_exp_max=5000;
				$new_bonus=25;
				$new_hp_max=70000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==11)
			{
				$new_exp_max=6000;
				$new_bonus=30;
				$new_hp_max=75000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==12)
			{
				$new_exp_max=7000;
				$new_bonus=35;
				$new_hp_max=80000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==13)
			{
				$new_exp_max=8000;
				$new_bonus=40;
				$new_hp_max=85000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==14)
			{
				$new_exp_max=9000;
				$new_bonus=45;
				$new_hp_max=90000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			else if($new_LV==15)
			{
				$new_exp_max=10000;
				$new_bonus=50;
				$new_hp_max=100000;
				$new_Hp=$Hp*$new_hp_max/$hp_max;
			}
			$sql="UPDATE `player_status` SET `LV`=$new_LV,`bonus`=$new_bonus,`hp_max`=$new_hp_max,`exp_max`=$new_exp_max,`EXP`=$new_EXP,`Hp`=$new_Hp WHERE `group_number`=$i";
			$res=mysql_query($sql);
		}
	}
	mysql_close();
?>
