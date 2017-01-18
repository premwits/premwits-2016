<?
	session_start();
	// TILL PLAYER ATK TITAN@A //
	// START 1450636200 AND + 300 FOR 5 MIN. //
	$tmp2=time();
	setcookie("current0",$tmp2, time() + (86400 * 30), "/");
	$tmp=$_COOKIE['next_time0']-$_COOKIE['current0'];
	setcookie("diff0",$tmp, time() + (86400 * 30), "/");
	if($_COOKIE['diff0']==0)
	{
		$tmp3=$_COOKIE['next_time0'];
		setcookie("next_time0",$tmp3+300, time() + (86400 * 30), "/");
		//CODE COMBINE//
		
		// CONNECT MYSQL //
		$dblocation=" #LOCATION# ";
		$dbuser=" # USER # ";
		$dbpass=" # PASS # ";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		
		// BANK INCOME +10% //
		for($p=1;$p<=24;$p++)
		{
			$res=mysql_query("SELECT * FROM `bank_account` WHERE `group_number` = $p ");
			while($row=mysql_fetch_row($res))
			{
				$crr_money=$row[1];
			}
			$new_money=floor($crr_money*105/100);
			$sql2="UPDATE `bank_account` SET `money`=$new_money WHERE `group_number`=$p";
			$res2=mysql_query($sql2);
		}
		
		//READ TITAN BOSS//
		session_start();
		
		$atk_max_boss=0;
		$atk_max_2=0;
		$atk_max_3=0;
		$atk_max_4=0;
		$atk_max_1=0;
		$group_max_boss=0;
		$group_max_1=0;
		$group_max_2=0;
		$group_max_3=0;
		$group_max_4=0;
		for($group=1;$group<=24;$group++){
			$atk_load_boss=0;
			$sql="SELECT * FROM `card_drop_pool_boss` WHERE `group_id` = $group";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$red1=$row[1];
				$red2=$row[2];
				$red3=$row[3];
				$green1=$row[4];
				$green2=$row[5];
				$green3=$row[6];
				$blue1=$row[7];
				$blue2=$row[8];
				$blue3=$row[9];
				$rg1=$row[10];
				$gb1=$row[11];
				$rb1=$row[12];
				$rg2=$row[13];
				$gb2=$row[14];
				$rb2=$row[15];
				$rg3=$row[16];
				$gb3=$row[17];
				$rb3=$row[18];
				$red4=$row[19];
				$green4=$row[20];
				$blue4=$row[21];
				$rgb1=$row[22];
				$rgb2=$row[23];
				$rgb3=$row[24];
				$poison_per_shot=$row[25];
				$amount_shot=$row[26];
			}
			$attack_upgrade=(100+10*$blue1+25*$blue2+100*$blue3+300*$blue4)/100;
			
			
			
			$atk_load_boss=$poison_per_shot+$atk_load_boss;
			$amount_shot--;
			$sqlpo="UPDATE `card_drop_pool_boss` SET `amount_shot`=$amount_shot WHERE `group_number` = $group";
			$respo=mysql_query($sqlpo);
			if($amount_shot==0)
			{
				$sqlpo1="UPDATE `card_drop_pool_boss` SET `poison_per_shot`=0 WHERE `group_number` = $group";
				$respo1=mysql_query($sqlpo1);
			}
			if($green1!=0)
			{
				$sqlg1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
				while($row=mysql_fetch_row($resg1))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+5000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
			}
			else if($green2!=0)
			{
				$sqlg2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
				while($row=mysql_fetch_row($resg2))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+10000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
			}
			else if($green3!=0)
			{
				$sqlg3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
				while($row=mysql_fetch_row($resg3))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+40000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
			}
			else if($green4!=0)
			{
				for($i=1;$i<=24;$i++)
				{
					$sqlg4="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
					while($row=mysql_fetch_row($resg4))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+50000;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlg4="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
				}
			}
			if($red1!=0)
			{
				$atk_load_boss=$atk_load_boss+5000*$attack_upgrade;
			}
			else if($red2!=0)
			{
				$atk_load_boss=$atk_load_boss+15000*$attack_upgrade;
			}
			else if($red3!=0)
			{
				$atk_load_boss=$atk_load_boss+100000*$attack_upgrade;
			}
			else if($red4!=0)
			{
				$atk_load_boss=$atk_load_boss+400000*$attack_upgrade;
			}
			else if($rg1!=0)
			{
				$atk_load_boss=$atk_load_boss+4000*$attack_upgrade;
			}
			else if($rg2!=0)
			{
				$atk_load_boss=$atk_load_boss+12000*$attack_upgrade;
			}
			else if($rg3!=0)
			{
				$atk_load_boss=$atk_load_boss+60000*$attack_upgrade;
			}
			else if($rb1!=0)
			{
				$atk_load_boss=$atk_load_boss+7000*$attack_upgrade;
				$poison_per_shot=7000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb1="UPDATE `card_drop_pool_boss` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb1=mysql_query($sqlrb1);
			}
			else if($rb2!=0)
			{
				$atk_load_boss=$atk_load_boss+19000*$attack_upgrade;
				$poison_per_shot=19000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb2="UPDATE `card_drop_pool_boss` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb2=mysql_query($sqlrb2);
			}
			else if($rb3!=0)
			{
				$atk_load_boss=$atk_load_boss+140000*$attack_upgrade;
				$poison_per_shot=140000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb3="UPDATE `card_drop_pool_boss` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb3=mysql_query($sqlrb3);
			}
			else if($gb1!=0)
			{
					$atk_load_boss=$atk_load_boss+5000*$attack_upgrade;
					$sqlgb1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
					while($row=mysql_fetch_row($resgb1))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+5000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
			}
			else if($gb2!=0)
			{
					$atk_load_boss=$atk_load_boss+15000*$attack_upgrade;
					$sqlgb2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
					while($row=mysql_fetch_row($resgb2))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+15000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
			}
			else if($gb3!=0)
			{
					$atk_load_boss=$atk_load_boss+100000*$attack_upgrade;
					$sqlgb3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
					while($row=mysql_fetch_row($resgb3))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+100000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
			}
			else if($rgb1!=0)
			{
				$atk_load_boss=$atk_load_boss+10000*5/2*$attack_upgrade;
			}
			else if($rgb2!=0)
			
			{
				$atk_load_boss=$atk_load_boss+45000*5/2*$attack_upgrade;
			}
			else if($rgb3!=0)
			{
				$atk_load_boss=$atk_load_boss+300000*5/2*$attack_upgrade;
			}
			$sqlatk="SELECT `bonus` FROM `player_status` WHERE `group_number` = $group";
			$resatk=mysql_query($sqlatk);
			while($row=mysql_fetch_row($resatk))
			{
				$bonus=$row[0];
			}
			$atk_load_boss=$atk_load_boss *(90+(rand()%20)+$bonus)/100;
			$sql="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=0";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$new_hp=$row[0]-$atk_load_boss;
				$sql2="UPDATE `titan_status` SET `titan_hp`=$new_hp WHERE `titan_name`=0";
				$res2=mysql_query($sql2);
				
			}
			$sql3="UPDATE `player_status` SET `attack_all`=$attack_load_boss WHERE `titan_name`=0";
			$res3=mysql_query($sql3);
			if($atk_load_boss>$atk_max_boss)
			{
				$atk_max_boss=$atk_load_boss;
				$group_max_boss=$group;
			}
			$sqlclrcrd="UPDATE `card_drop_pool_boss` SET `red1`=0,`red2`=0,`red3`=0,
						`green1`=0,`green2`=0,`green3`=0,`rg1`=0,`gb1`=0,`rb1`=0,`rg2`=0,
						`gb2`=0,`rb2`=0,`rb3`=0,`rg3`=0,`gb3`=0,`red4`=0,`green4`=0,`rgb1`=0,
						`rgb2`=0,`rgb3`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			if($atk_load_boss!=0)
			{
				$sqlclrcrd="UPDATE `card_drop_pool_boss` SET `blue1`=0,`blue2`=0,`blue3`=0,`blue4`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			}
		}
		$sqlboss="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=0";
		$resboss=mysql_query($sqlboss);
		while($row=mysql_fetch_row($resboss)) 
		{
			if($row[0]<=0)
			{
				$sqlgboss="UPDATE `killer_annoucement_group` SET `titan_boss` = $group_max_boss";
				$resgboss=mysql_query($sqlgboss);
				$sqlkboss="UPDATE `killer_annoucement_atk` SET `titan_boss` = $atk_max_boss";
				$reskboss=mysql_query($sqlboss);
			}
		}
	
		//TITAN 1//
		
		for($group=1;$group<=24;$group++){
			$atk_load_1=0;
			$sql="SELECT * FROM `card_drop_pool_1` WHERE `group_id` = $group";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$red1=$row[1];
				$red2=$row[2];
				$red3=$row[3];
				$green1=$row[4];
				$green2=$row[5];
				$green3=$row[6];
				$blue1=$row[7];
				$blue2=$row[8];
				$blue3=$row[9];
				$rg1=$row[10];
				$gb1=$row[11];
				$rb1=$row[12];
				$rg2=$row[13];
				$gb2=$row[14];
				$rb2=$row[15];
				$rg3=$row[16];
				$gb3=$row[17];
				$rb3=$row[18];
				$red4=$row[19];
				$green4=$row[20];
				$blue4=$row[21];
				$rgb1=$row[22];
				$rgb2=$row[23];
				$rgb3=$row[24];
				$poison_per_shot=$row[25];
				$amount_shot=$row[26];
			}
			$attack_upgrade=(100+10*$blue1+25*$blue2+100*$blue3+300*$blue4)/100;
			
			
			
			$atk_load_1=$poison_per_shot+$atk_load_1;
			$amount_shot--;
			$sqlpo="UPDATE `card_drop_pool_1` SET `amount_shot`=$amount_shot WHERE `group_number` = $group";
			$respo=mysql_query($sqlpo);
			if($amount_shot==0)
			{
				$sqlpo1="UPDATE `card_drop_pool_1` SET `poison_per_shot`=0 WHERE `group_number` = $group";
				$respo1=mysql_query($sqlpo1);
			}
			if($green1!=0)
			{
				$sqlg1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
				while($row=mysql_fetch_row($resg1))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+5000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
			}
			else if($green2!=0)
			{
				$sqlg2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
				while($row=mysql_fetch_row($resg2))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+10000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
			}
			else if($green3!=0)
			{
				$sqlg3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
				while($row=mysql_fetch_row($resg3))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+40000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
			}
			else if($green4!=0)
			{
				for($i=1;$i<=24;$i++)
				{
					$sqlg4="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
					while($row=mysql_fetch_row($resg4))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+50000;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlg4="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
				}
			}
			if($red1!=0)
			{
				$atk_load_1=$atk_load_1+5000*$attack_upgrade;
			}
			else if($red2!=0)
			{
				$atk_load_1=$atk_load_1+15000*$attack_upgrade;
			}
			else if($red3!=0)
			{
				$atk_load_1=$atk_load_1+100000*$attack_upgrade;
			}
			else if($red4!=0)
			{
				$atk_load_1=$atk_load_1+400000*$attack_upgrade;
			}
			else if($rg1!=0)
			{
				$atk_load_1=$atk_load_1+4000*$attack_upgrade;
			}
			else if($rg2!=0)
			{
				$atk_load_1=$atk_load_1+12000*$attack_upgrade;
			}
			else if($rg3!=0)
			{
				$atk_load_1=$atk_load_1+60000*$attack_upgrade;
			}
			else if($rb1!=0)
			{
				$atk_load_1=$atk_load_1+7000*$attack_upgrade;
				$poison_per_shot=7000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb1="UPDATE `card_drop_pool_1` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb1=mysql_query($sqlrb1);
			}
			else if($rb2!=0)
			{
				$atk_load_1=$atk_load_1+19000*$attack_upgrade;
				$poison_per_shot=19000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb2="UPDATE `card_drop_pool_1` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb2=mysql_query($sqlrb2);
			}
			else if($rb3!=0)
			{
				$atk_load_1=$atk_load_1+140000*$attack_upgrade;
				$poison_per_shot=140000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb3="UPDATE `card_drop_pool_1` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb3=mysql_query($sqlrb3);
			}
			else if($gb1!=0)
			{
					$atk_load_1=$atk_load_1+5000*$attack_upgrade;
					$sqlgb1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
					while($row=mysql_fetch_row($resgb1))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+5000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
			}
			else if($gb2!=0)
			{
					$atk_load_1=$atk_load_1+15000*$attack_upgrade;
					$sqlgb2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
					while($row=mysql_fetch_row($resgb2))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+15000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
			}
			else if($gb3!=0)
			{
					$atk_load_1=$atk_load_1+100000*$attack_upgrade;
					$sqlgb3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
					while($row=mysql_fetch_row($resgb3))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+100000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
			}
			else if($rgb1!=0)
			{
				$atk_load_1=$atk_load_1+10000*5/2*$attack_upgrade;
			}
			else if($rgb2!=0)
			
			{
				$atk_load_1=$atk_load_1+45000*5/2*$attack_upgrade;
			}
			else if($rgb3!=0)
			{
				$atk_load_1=$atk_load_1+300000*5/2*$attack_upgrade;
			}
			$sqlatk="SELECT `bonus` FROM `player_status` WHERE `group_number` = $group";
			$resatk=mysql_query($sqlatk);
			while($row=mysql_fetch_row($resatk))
			{
				$bonus=$row[0];
			}
			$atk_load_1=$atk_load_1 *(90+(rand()%20)+$bonus)/100;
			$sql="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=1";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$new_hp=$row[0]-$atk_load_1;
				$sql2="UPDATE `titan_status` SET `titan_hp`=$new_hp WHERE `titan_name`=1";
				$res2=mysql_query($sql2);
			}
			$sql3="UPDATE `player_status` SET `attack_all`=$attack_load_1 WHERE `titan_name`=1";
			$res3=mysql_query($sql3);
			if($atk_load_1>$atk_max_1)
			{
				$atk_max_1=$atk_load_1;
				$group_max_1=$group;
				
			}
			$sqlclrcrd="UPDATE `card_drop_pool_1` SET `red1`=0,`red2`=0,`red3`=0,
						`green1`=0,`green2`=0,`green3`=0,`rg1`=0,`gb1`=0,`rb1`=0,`rg2`=0,
						`gb2`=0,`rb2`=0,`rb3`=0,`rg3`=0,`gb3`=0,`red4`=0,`green4`=0,`rgb1`=0,
						`rgb2`=0,`rgb3`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			if($atk_load_1!=0)
			{
				$sqlclrcrd="UPDATE `card_drop_pool_1` SET `blue1`=0,`blue2`=0,`blue3`=0,`blue4`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			}
			
		}
		$sqlmon1="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=0";
		$resmon1=mysql_query($sqlmon1);
		while($row=mysql_fetch_row($resmon1)) 
		{
			if($row[0]<=0)
			{
				$sqlgmon1="UPDATE `killer_annoucement_group` SET `titan_1` = $group_max_1";
				$resgmon1=mysql_query($sqlgmon1);
				$sqlkmon1="UPDATE `killer_annoucement_atk` SET `titan_1` = $atk_max_1";
				$reskmon1=mysql_query($sqlkmon1);
			}
		}
		//TITAN 2//
		for($group=1;$group<=24;$group++){
			$atk_load_2=0;
			$sql="SELECT * FROM `card_drop_pool_2` WHERE `group_id` = $group";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$red1=$row[1];
				$red2=$row[2];
				$red3=$row[3];
				$green1=$row[4];
				$green2=$row[5];
				$green3=$row[6];
				$blue1=$row[7];
				$blue2=$row[8];
				$blue3=$row[9];
				$rg1=$row[10];
				$gb1=$row[11];
				$rb1=$row[12];
				$rg2=$row[13];
				$gb2=$row[14];
				$rb2=$row[15];
				$rg3=$row[16];
				$gb3=$row[17];
				$rb3=$row[18];
				$red4=$row[19];
				$green4=$row[20];
				$blue4=$row[21];
				$rgb1=$row[22];
				$rgb2=$row[23];
				$rgb3=$row[24];
				$poison_per_shot=$row[25];
				$amount_shot=$row[26];
			}
			$attack_upgrade=(100+10*$blue1+25*$blue2+100*$blue3+300*$blue4)/100;
			
			
			
			$atk_load_2=$poison_per_shot+$atk_load_2;
			$amount_shot--;
			$sqlpo="UPDATE `card_drop_pool_2` SET `amount_shot`=$amount_shot WHERE `group_number` = $group";
			$respo=mysql_query($sqlpo);
			if($amount_shot==0)
			{
				$sqlpo1="UPDATE `card_drop_pool_2` SET `poison_per_shot`=0 WHERE `group_number` = $group";
				$respo1=mysql_query($sqlpo1);
			}
			if($green1!=0)
			{
				$sqlg1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
				while($row=mysql_fetch_row($resg1))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+5000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
			}
			else if($green2!=0)
			{
				$sqlg2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
				while($row=mysql_fetch_row($resg2))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+10000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
			}
			else if($green3!=0)
			{
				$sqlg3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
				while($row=mysql_fetch_row($resg3))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+40000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
			}
			else if($green4!=0)
			{
				for($i=1;$i<=24;$i++)
				{
					$sqlg4="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
					while($row=mysql_fetch_row($resg4))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+50000;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlg4="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
				}
			}
			if($red1!=0)
			{
				$atk_load_2=$atk_load_2+5000*$attack_upgrade;
			}
			else if($red2!=0)
			{
				$atk_load_2=$atk_load_2+15000*$attack_upgrade;
			}
			else if($red3!=0)
			{
				$atk_load_2=$atk_load_2+100000*$attack_upgrade;
			}
			else if($red4!=0)
			{
				$atk_load_2=$atk_load_2+400000*$attack_upgrade;
			}
			else if($rg1!=0)
			{
				$atk_load_2=$atk_load_2+4000*$attack_upgrade;
			}
			else if($rg2!=0)
			{
				$atk_load_2=$atk_load_2+12000*$attack_upgrade;
			}
			else if($rg3!=0)
			{
				$atk_load_2=$atk_load_2+60000*$attack_upgrade;
			}
			else if($rb1!=0)
			{
				$atk_load_2=$atk_load_2+7000*$attack_upgrade;
				$poison_per_shot=7000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb1="UPDATE `card_drop_pool_2` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb1=mysql_query($sqlrb1);
			}
			else if($rb2!=0)
			{
				$atk_load_2=$atk_load_2+19000*$attack_upgrade;
				$poison_per_shot=19000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb2="UPDATE `card_drop_pool_2` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb2=mysql_query($sqlrb2);
			}
			else if($rb3!=0)
			{
				$atk_load_2=$atk_load_2+140000*$attack_upgrade;
				$poison_per_shot=140000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb3="UPDATE `card_drop_pool_2` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb3=mysql_query($sqlrb3);
			}
			else if($gb1!=0)
			{
					$atk_load_2=$atk_load_2+5000*$attack_upgrade;
					$sqlgb1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
					while($row=mysql_fetch_row($resgb1))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+5000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
			}
			else if($gb2!=0)
			{
					$atk_load_2=$atk_load_2+15000*$attack_upgrade;
					$sqlgb2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
					while($row=mysql_fetch_row($resgb2))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+15000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
			}
			else if($gb3!=0)
			{
					$atk_load_2=$atk_load_2+100000*$attack_upgrade;
					$sqlgb3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
					while($row=mysql_fetch_row($resgb3))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+100000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
			}
			else if($rgb1!=0)
			{
				$atk_load_2=$atk_load_2+10000*5/2*$attack_upgrade;
			}
			else if($rgb2!=0)
			
			{
				$atk_load_2=$atk_load_2+45000*5/2*$attack_upgrade;
			}
			else if($rgb3!=0)
			{
				$atk_load_2=$atk_load_2+300000*5/2*$attack_upgrade;
			}
			$sqlatk="SELECT `bonus` FROM `player_status` WHERE `group_number` = $group";
			$resatk=mysql_query($sqlatk);
			while($row=mysql_fetch_row($resatk))
			{
				$bonus=$row[0];
			}
			$atk_load_2=$atk_load_2 *(90+(rand()%20)+$bonus)/100;
			$sql="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=2";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$new_hp=$row[0]-$atk_load_2;
				$sql2="UPDATE `titan_status` SET `titan_hp`=$new_hp WHERE `titan_name`=2";
				$res2=mysql_query($sql2);
			}
			$sql3="UPDATE `player_status` SET `attack_all`=$attack_load_2 WHERE `titan_name`=2";
				$res3=mysql_query($sql3);
			if($atk_load_2>$atk_max_2)
			{
				$atk_max_2=$atk_load_2;
				$group_max_2=$group;
			}
			$sqlclrcrd="UPDATE `card_drop_pool_2` SET `red1`=0,`red2`=0,`red3`=0,
						`green1`=0,`green2`=0,`green3`=0,`rg1`=0,`gb1`=0,`rb1`=0,`rg2`=0,
						`gb2`=0,`rb2`=0,`rb3`=0,`rg3`=0,`gb3`=0,`red4`=0,`green4`=0,`rgb1`=0,
						`rgb2`=0,`rgb3`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			if($atk_load_2!=0)
			{
				$sqlclrcrd="UPDATE `card_drop_pool_2` SET `blue1`=0,`blue2`=0,`blue3`=0,`blue4`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			}
		}
		$sqlmon2="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=2";
		$resmon2=mysql_query($sqlmon2);
		while($row=mysql_fetch_row($resmon2)) 
		{
			if($row[0]<=0)
			{
				$sqlgmon2="UPDATE `killer_annoucement_group` SET `titan_2` = $group_max_2";
				$resgmon2=mysql_query($sqlgmon2);
				$sqlkmon2="UPDATE `killer_annoucement_atk` SET `titan_2` = $atk_max_2";
				$reskmon2=mysql_query($sqlkmon2);
			}
		}
		//TITAN 3//
		
		for($group=1;$group<=24;$group++){
			$atk_load_3=0;
			$sql="SELECT * FROM `card_drop_pool_3` WHERE `group_id` = $group";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$red1=$row[1];
				$red2=$row[2];
				$red3=$row[3];
				$green1=$row[4];
				$green2=$row[5];
				$green3=$row[6];
				$blue1=$row[7];
				$blue2=$row[8];
				$blue3=$row[9];
				$rg1=$row[10];
				$gb1=$row[11];
				$rb1=$row[12];
				$rg2=$row[13];
				$gb2=$row[14];
				$rb2=$row[15];
				$rg3=$row[16];
				$gb3=$row[17];
				$rb3=$row[18];
				$red4=$row[19];
				$green4=$row[20];
				$blue4=$row[21];
				$rgb1=$row[22];
				$rgb2=$row[23];
				$rgb3=$row[24];
				$poison_per_shot=$row[25];
				$amount_shot=$row[26];
			}
			$attack_upgrade=(100+10*$blue1+25*$blue2+100*$blue3+300*$blue4)/100;
			
			
			
			
			$amount_shot--;
			$sqlpo="UPDATE `card_drop_pool_3` SET `amount_shot`=$amount_shot WHERE `group_number` = $group";
			$respo=mysql_query($sqlpo);
			if($amount_shot==0)
			{
				$sqlpo1="UPDATE `card_drop_pool_3` SET `poison_per_shot`=0 WHERE `group_number` = $group";
				$respo1=mysql_query($sqlpo1);
			}
			if($green1!=0)
			{
				$sqlg1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
				while($row=mysql_fetch_row($resg1))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+5000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
			}
			else if($green2!=0)
			{
				$sqlg2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
				while($row=mysql_fetch_row($resg2))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+10000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
			}
			else if($green3!=0)
			{
				$sqlg3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
				while($row=mysql_fetch_row($resg3))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+40000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
			}
			else if($green4!=0)
			{
				for($i=1;$i<=24;$i++)
				{
					$sqlg4="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
					while($row=mysql_fetch_row($resg4))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+50000;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlg4="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
				}
			}
			if($red1!=0)
			{
				$atk_load_3=$atk_load_3+5000*$attack_upgrade;
			}
			else if($red2!=0)
			{
				$atk_load_3=$atk_load_3+15000*$attack_upgrade;
			}
			else if($red3!=0)
			{
				$atk_load_3=$atk_load_3+100000*$attack_upgrade;
			}
			else if($red4!=0)
			{
				$atk_load_3=$atk_load_3+400000*$attack_upgrade;
			}
			else if($rg1!=0)
			{
				$atk_load_3=$atk_load_3+4000*$attack_upgrade;
			}
			else if($rg2!=0)
			{
				$atk_load_3=$atk_load_3+12000*$attack_upgrade;
			}
			else if($rg3!=0)
			{
				$atk_load_3=$atk_load_3+60000*$attack_upgrade;
			}
			else if($rb1!=0)
			{
				$atk_load_3=$atk_load_3+7000*$attack_upgrade;
				$poison_per_shot=7000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb1="UPDATE `card_drop_pool_3` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb1=mysql_query($sqlrb1);
			}
			else if($rb2!=0)
			{
				$atk_load_3=$atk_load_3+19000*$attack_upgrade;
				$poison_per_shot=19000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb2="UPDATE `card_drop_pool_3` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb2=mysql_query($sqlrb2);
			}
			else if($rb3!=0)
			{
				$atk_load_3=$atk_load_3+140000*$attack_upgrade;
				$poison_per_shot=140000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb3="UPDATE `card_drop_pool_3` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb3=mysql_query($sqlrb3);
			}
			else if($gb1!=0)
			{
					$atk_load_3=$atk_load_3+5000*$attack_upgrade;
					$sqlgb1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
					while($row=mysql_fetch_row($resgb1))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+5000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
			}
			else if($gb2!=0)
			{
					$atk_load_3=$atk_load_3+15000*$attack_upgrade;
					$sqlgb2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
					while($row=mysql_fetch_row($resgb2))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+15000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
			}
			else if($gb3!=0)
			{
					$atk_load_3=$atk_load_3+100000*$attack_upgrade;
					$sqlgb3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
					while($row=mysql_fetch_row($resgb3))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+100000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
			}
			else if($rgb1!=0)
			{
				$atk_load_3=$atk_load_3+10000*5/2*$attack_upgrade;
			}
			else if($rgb2!=0)
			
			{
				$atk_load_3=$atk_load_3+45000*5/2*$attack_upgrade;
			}
			else if($rgb3!=0)
			{
				$atk_load_3=$atk_load_3+300000*5/2*$attack_upgrade;
			}
			$sqlatk="SELECT `bonus` FROM `player_status` WHERE `group_number` = $group";
			$resatk=mysql_query($sqlatk);
			while($row=mysql_fetch_row($resatk))
			{
				$bonus=$row[0];
			}
			$atk_load_3=$atk_load_3 *(90+(rand()%20)+$bonus)/100;
			$sql="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=3";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$new_hp=$row[0]-$atk_load_3;
				$sql2="UPDATE `titan_status` SET `titan_hp`=$new_hp WHERE `titan_name`=3";
				$res2=mysql_query($sql2);
			}
			$sql3="UPDATE `player_status` SET `attack_all`=$attack_load_3 WHERE `titan_name`=3";
			$res3=mysql_query($sql3);
			if($atk_load_3>$atk_max_3)
			{
				$atk_max_3=$atk_load_3;
				$group_max_3=$group;
			}
			$sqlclrcrd="UPDATE `card_drop_pool_3` SET `red1`=0,`red2`=0,`red3`=0,
						`green1`=0,`green2`=0,`green3`=0,`rg1`=0,`gb1`=0,`rb1`=0,`rg2`=0,
						`gb2`=0,`rb2`=0,`rb3`=0,`rg3`=0,`gb3`=0,`red4`=0,`green4`=0,`rgb1`=0,
						`rgb2`=0,`rgb3`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			if($atk_load_3!=0)
			{
				$sqlclrcrd="UPDATE `card_drop_pool_3` SET `blue1`=0,`blue2`=0,`blue3`=0,`blue4`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			}
		}
		$sqlmon3="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=3";
		$resmon3=mysql_query($sqlmon3);
		while($row=mysql_fetch_row($resmon3)) 
		{
			if($row[0]<=0)
			{
				$sqlgmon3="UPDATE `killer_annoucement_group` SET `titan_3` = $group_max_3";
				$resgmon3=mysql_query($sqlgmon3);
				$sqlkmon3="UPDATE `killer_annoucement_atk` SET `titan_3` = $atk_max_3";
				$reskmon3=mysql_query($sqlmon3);
			}
		}
		//TITAN 4//
		
		for($group=1;$group<=24;$group++){
			$atk_load_4=0;
			$sql="SELECT * FROM `card_drop_pool_4` WHERE `group_id` = $group";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$red1=$row[1];
				$red2=$row[2];
				$red3=$row[3];
				$green1=$row[4];
				$green2=$row[5];
				$green3=$row[6];
				$blue1=$row[7];
				$blue2=$row[8];
				$blue3=$row[9];
				$rg1=$row[10];
				$gb1=$row[11];
				$rb1=$row[12];
				$rg2=$row[13];
				$gb2=$row[14];
				$rb2=$row[15];
				$rg3=$row[16];
				$gb3=$row[17];
				$rb3=$row[18];
				$red4=$row[19];
				$green4=$row[20];
				$blue4=$row[21];
				$rgb1=$row[22];
				$rgb2=$row[23];
				$rgb3=$row[24];
				$poison_per_shot=$row[25];
				$amount_shot=$row[26];
			}
			$attack_upgrade=(100+10*$blue1+25*$blue2+100*$blue3+300*$blue4)/100;
			
			
			
			$atk_load_4=$poison_per_shot+$atk_load_4;
			$amount_shot--;
			$sqlpo="UPDATE `card_drop_pool_4` SET `amount_shot`=$amount_shot WHERE `group_number` = $group";
			$respo=mysql_query($sqlpo);
			if($amount_shot==0)
			{
				$sqlpo1="UPDATE `card_drop_pool_4` SET `poison_per_shot`=0 WHERE `group_number` = $group";
				$respo1=mysql_query($sqlpo1);
			}
			if($green1!=0)
			{
				$sqlg1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
				while($row=mysql_fetch_row($resg1))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+5000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg1=mysql_query($sqlg1);
			}
			else if($green2!=0)
			{
				$sqlg2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
				while($row=mysql_fetch_row($resg2))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+10000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg2=mysql_query($sqlg2);
			}
			else if($green3!=0)
			{
				$sqlg3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
				while($row=mysql_fetch_row($resg3))
				{
					$Hp=$row[0];
					$hp_max=$row[1];
				}
				$Hp=$Hp+40000;
				if($Hp>$hp_max)
					$Hp=$hp_max;
				$sqlg3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` = $group";
				$resg3=mysql_query($sqlg3);
			}
			else if($green4!=0)
			{
				for($i=1;$i<=24;$i++)
				{
					$sqlg4="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
					while($row=mysql_fetch_row($resg4))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+50000;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlg4="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $i";
					$resg4=mysql_query($sqlg4);
				}
			}
			if($red1!=0)
			{
				$atk_load_4=$atk_load_4+5000*$attack_upgrade;
			}
			else if($red2!=0)
			{
				$atk_load_4=$atk_load_4+15000*$attack_upgrade;
			}
			else if($red3!=0)
			{
				$atk_load_4=$atk_load_4+100000*$attack_upgrade;
			}
			else if($red4!=0)
			{
				$atk_load_4=$atk_load_4+400000*$attack_upgrade;
			}
			else if($rg1!=0)
			{
				$atk_load_4=$atk_load_4+4000*$attack_upgrade;
			}
			else if($rg2!=0)
			{
				$atk_load_4=$atk_load_4+12000*$attack_upgrade;
			}
			else if($rg3!=0)
			{
				$atk_load_4=$atk_load_4+60000*$attack_upgrade;
			}
			else if($rb1!=0)
			{
				$atk_load_4=$atk_load_4+7000*$attack_upgrade;
				$poison_per_shot=7000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb1="UPDATE `card_drop_pool_4` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb1=mysql_query($sqlrb1);
			}
			else if($rb2!=0)
			{
				$atk_load_4=$atk_load_4+19000*$attack_upgrade;
				$poison_per_shot=19000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb2="UPDATE `card_drop_pool_4` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb2=mysql_query($sqlrb2);
			}
			else if($rb3!=0)
			{
				$atk_load_4=$atk_load_4+140000*$attack_upgrade;
				$poison_per_shot=140000*$attack_upgrade;
				$amount_shot=3;
				$sqlrb3="UPDATE `card_drop_pool_4` SET `amount_shot`=$amount_shot,`poison_per_shot`=$poison_per_shot WHERE `group_number` = $group";
				$resrb3=mysql_query($sqlrb3);
			}
			else if($gb1!=0)
			{
					$atk_load_4=$atk_load_4+5000*$attack_upgrade;
					$sqlgb1="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
					while($row=mysql_fetch_row($resgb1))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+5000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb1="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb1=mysql_query($sqlgb1);
			}
			else if($gb2!=0)
			{
					$atk_load_4=$atk_load_4+15000*$attack_upgrade;
					$sqlgb2="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
					while($row=mysql_fetch_row($resgb2))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+15000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb2="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb2=mysql_query($sqlgb2);
			}
			else if($gb3!=0)
			{
					$atk_load_4=$atk_load_4+100000*$attack_upgrade;
					$sqlgb3="SELECT `Hp`,`hp_max` FROM `player_status` WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
					while($row=mysql_fetch_row($resgb3))
					{
						$Hp=$row[0];
						$hp_max=$row[1];
					}
					$Hp=$Hp+100000*$attack_upgrade;
					if($Hp>$hp_max)
						$Hp=$hp_max;
					$sqlgb3="UPDATE `player_status` SET `Hp`=$Hp WHERE `group_number` LIKE $group";
					$resgb3=mysql_query($sqlgb3);
			}
			else if($rgb1!=0)
			{
				$atk_load_4=$atk_load_4+10000*5/2*$attack_upgrade;
			}
			else if($rgb2!=0)
			
			{
				$atk_load_4=$atk_load_4+45000*5/2*$attack_upgrade;
			}
			else if($rgb3!=0)
			{
				$atk_load_4=$atk_load_4+300000*5/2*$attack_upgrade;
			}
			$atk_load_4=$atk_load_4 *(90+(rand()%20))/100;
			$sql="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=4";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res)) 
			{
				$new_hp=$row[0]-$atk_load_4;
				$sql2="UPDATE `titan_status` SET `titan_hp`=$new_hp WHERE `titan_name`=4";
				$res2=mysql_query($sql2);
			}
			$sql3="UPDATE `player_status` SET `attack_all`=$attack_load_4 WHERE `titan_name`=4";
			$res3=mysql_query($sql3);
			if($atk_load_4>$atk_max_4)
			{
				$atk_max_4=$atk_load_4;
				$group_max_4=$group;
			}
			$sqlclrcrd="UPDATE `card_drop_pool_4` SET `red1`=0,`red2`=0,`red3`=0,
						`green1`=0,`green2`=0,`green3`=0,`rg1`=0,`gb1`=0,`rb1`=0,`rg2`=0,
						`gb2`=0,`rb2`=0,`rb3`=0,`rg3`=0,`gb3`=0,`red4`=0,`green4`=0,`rgb1`=0,
						`rgb2`=0,`rgb3`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			if($atk_load_4!=0)
			{
				$sqlclrcrd="UPDATE `card_drop_pool_4` SET `blue1`=0,`blue2`=0,`blue3`=0,`blue4`=0 WHERE `group_id`=$group ";
			$resclrcrd=mysql_query($sqlclrcrd);
			}
		}
		$sqlti="SELECT `titan_hp` FROM `titan_status` WHERE `titan_name`=4";
		$resti=mysql_query($sqlti);
		while($row=mysql_fetch_row($resti)) 
		{
			if($row[0]<=0)
			{
				$sqlgmon4="UPDATE `killer_annoucement_group` SET `titan_4` = $group_max_4";
				$resgmon4=mysql_query($sqlgmon4);
				$sqlkmon4="UPDATE `killer_annoucement_atk` SET `titan_4` = $atk_max_4";
				$reskmon4=mysql_query($sqlmon4);
			}
		}
	}
	
	$minutes[0]=floor($_COOKIE['diff0']/60);
	$hours[0]=floor($_COOKIE['diff0']/3600);
	
	$real_minutes[0]=floor(($_COOKIE['diff0']-($hours[0]*3600))/60);
	$real_seconds[0]=floor($_COOKIE['diff0']-($minutes[0]*60));
	
	// TILL TITAN_NOR ATK PLAYER //1450636500  1450611300
	setcookie("current1",$tmp2, time() + (86400 * 30), "/");
	$tmp=$_COOKIE['next_time1']-$_COOKIE['current1'];
	setcookie("diff1",$tmp, time() + (86400 * 30), "/");
	
	if($_COOKIE['diff1']==0)
	{
		setcookie("next_time1",$_COOKIE['next_time1']+300, time() + (86400 * 30), "/");
		//CODE COMBINE//
		session_start();
		$dblocation=" #LOCATION# ";
		$dbuser=" # USER # ";
		$dbpass=" # PASS # ";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		
		$sql="SELECT * FROM `player_status`";
		$res=mysql_query($sql);
		$i=0;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$hp_player[$i]=$row[1];
			$i++;
		}
		
		$sql="SELECT * FROM `titan_status` WHERE `titan_name` != 0";
		$res=mysql_query($sql);
		$titan_norm_atk=0;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$INFINITY_BARRIER=0;
			if($row[0]==1){
				$res3=mysql_query("SELECT `rg1`,`rg2`,`rg3` FROM `card_drop_pool_1` WHERE 1");
				while($row3=mysql_fetch_row($res3)){
					if($row3[0]!=0||$row3[1]!=0||$row3[2]!=0) $INFINITY_BARRIER=1;
				}
			}
			else if($row[0]==2){
				$res3=mysql_query("SELECT `rg1`,`rg2`,`rg3` FROM `card_drop_pool_2` WHERE 1");
				while($row3=mysql_fetch_row($res3)){
					if($row3[0]!=0||$row3[1]!=0||$row3[2]!=0) $INFINITY_BARRIER=1;
				}
			}
			else if($row[0]==3){
				$res3=mysql_query("SELECT `rg1`,`rg2`,`rg3` FROM `card_drop_pool_3` WHERE 1");
				while($row3=mysql_fetch_row($res3)){
					if($row3[0]!=0||$row3[1]!=0||$row3[2]!=0) $INFINITY_BARRIER=1;
				}
			}
			else if($row[0]==4){
				$res3=mysql_query("SELECT `rg1`,`rg2`,`rg3` FROM `card_drop_pool_4` WHERE 1");
				while($row3=mysql_fetch_row($res3)){
					if($row3[0]!=0||$row3[1]!=0||$row3[2]!=0) $INFINITY_BARRIER=1;
				}
			}
			if($INFINITY_BARRIER!=1){
				$titan_norm_atk=$row[3];
				for($i=0;$i<6;$i++)
				{
					$random= rand()%24;
					$tmp=$random+1;
					$overall_hp[$random]=$hp_player[$random]-$titan_norm_atk;
					$sql="UPDATE `player_status` SET `Hp`=$overall_hp[$random] WHERE `group_number`=$tmp";
					$res2=mysql_query($sql);
				}
			}
		}
		mysql_close();

	}
	
	$minutes[1]=floor($_COOKIE['diff1']/60);
	$hours[1]=floor($_COOKIE['diff1']/3600);
	
	$real_minutes[1]=floor(($_COOKIE['diff1']-($hours[1]*3600))/60);
	$real_seconds[1]=floor($_COOKIE['diff1']-($minutes[1]*60));
	
	// TILL TITAN_BOSS ATK PLAYER //
	setcookie("current2",$tmp2, time() + (86400 * 30), "/");
	$tmp=$_COOKIE['next_time2']-$_COOKIE['current2'];
	setcookie("diff2",$tmp, time() + (86400 * 30), "/");
	if($_COOKIE['diff2']==0)
	{
		setcookie("next_time2",$_COOKIE['next_time2']+600, time() + (86400 * 30), "/");
		//CODE COMBINE//
		session_start();
		$dblocation=" #LOCATION# ";
		$dbuser=" # USER # ";
		$dbpass=" # PASS # ";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		
		$sql="SELECT * FROM `player_status`";
		$res=mysql_query($sql);
		$i=0;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$hp_player[$i]=$row[1];
			$i++;
		}
		
		$sql="SELECT * FROM `titan_status` WHERE `titan_name` = 0";
		$res=mysql_query($sql);
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$titan_boss_atk=$row[3];
		}
		
		$tmp=1;
		for($i=0;$i<24;$i++)
		{
			$overall_hp[$i]=$hp_player[$i]-$titan_boss_atk;
			$sql="UPDATE `player_status` SET `Hp`=$overall_hp[$i] WHERE `group_number`=$tmp";
			$res=mysql_query($sql);
			$tmp++;
		}
		mysql_close();
	}
	
	$minutes[2]=floor($_COOKIE['diff2']/60);
	$hours[2]=floor($_COOKIE['diff2']/3600);
	
	$real_minutes[2]=floor(($_COOKIE['diff2']-($hours[2]*3600))/60);
	$real_seconds[2]=floor($_COOKIE['diff2']-($minutes[2]*60));
?>
	<div class="col-md-4">
		<div class="well">
			<b><font size="4">GAME STATUS</font></b>
			<br />
			<font size="2.5">
			
			<table class="table">
				<tbody>
				  
				  <tr>
				  <td width="70%">Time Until <i>Boss</i> Hit <i>Player</i></td>
				  <td width="30%"><b>
					<?
						if($hours[2]<=0)
						{
							echo '00:';
						}
						else
						{
						if($hours[2]<10)
						{
							echo '0';
						}
						echo $hours[2].':';
						}
						if($real_minutes[2]<10)
						{
							echo '0';
						}
						echo $real_minutes[2].':';
						if($real_seconds[2]<10)
						{
							echo '0';
						}
						echo $real_seconds[2];
					?>
				  </b></td>
				  </tr>
				  <tr>
				  <td width="70%">Time Until <i>Titan</i> Hit <i>Player</i></td>
				  <td width="30%"><b>
					<?
						if($hours[1]<=0)
						{
							echo '00:';
						}
						else
						{
						if($hours[1]<10)
						{
							echo '0';
						}
						echo $hours[1].':';
						}
						if($real_minutes[1]<10)
						{
							echo '0';
						}
						echo $real_minutes[1].':';
						if($real_seconds[1]<10)
						{
							echo '0';
						}
						echo $real_seconds[1];
					?>
				  </b></td>
				  </tr>
				  <tr>
				  <td width="70%">Time Until <i>Player</i> Hit <i>Titan</i></td>
				  <td width="30%"><b>
					<?
						if($hours[0]<=0)
						{
							echo '00:';
						}
						else
						{
						if($hours[0]<10)
						{
							echo '0';
						}
						echo $hours[0].':';
						}
						if($real_minutes[0]<10)
						{
							echo '0';
						}
						echo $real_minutes[0].':';
						if($real_seconds[0]<10)
						{
							echo '0';
						}
						echo $real_seconds[0];
					?>
				</b></td>
				</tr>
				</tbody>
			</table>
			</font>
		</div>
	</div>
