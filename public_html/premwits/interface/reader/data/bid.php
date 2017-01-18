<?
	session_start();
	// TILL PLAYER ATK TITAN@A //
	// START 1450636200 AND + 300 FOR 5 MIN. //
	
	// 1 FOR START BID //
	// 0 FOR WAIT BID  //
	$tmp_bid1=time();
	setcookie("current_bid",$tmp_bid1, time() + (86400 * 30), "/");
	$tmp_bid2=$_COOKIE['next_time_bid']-$_COOKIE['current_bid'];
	setcookie("diff_bid",$tmp_bid2, time() + (86400 * 30), "/");
	
	//CALCULATE TIME //
	$minutes_bid=floor($_COOKIE['diff_bid']/60);
	$hours_bid=floor($_COOKIE['diff_bid']/3600);
	
	$real_minutes_bid=floor(($_COOKIE['diff_bid']-($hours_bid*3600))/60);
	$real_seconds_bid=floor($_COOKIE['diff_bid']-($minutes_bid*60));
	
	
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	$sql2="SELECT * FROM `bidding_cmd`";
	$res2=mysql_query($sql2);
	while($row2=mysql_fetch_row($res2))
	{
		$group=$row2[0];
		$bid_amount=$row2[1];
	}
?>
<?
	// TIMER INTERFACE //
?>
	<div class="col-md-6">
		<div class="well" height="80%">	
			<b><font size="5"><? if($_COOKIE['bid_stat']==0){?>TIME UNTIL NEXT BID<?} else{?>TIME UNTIL BID END<?} ?></font></b>
			<br /><br />
			<center><font size="10">
					<?
						if($hours_bid<=0)
						{
							echo '00:';
						}
						else
						{
						if($hours_bid<10)
						{
							echo '0';
						}
						echo $hours_bid.':';
						}
						if($real_minutes_bid<10)
						{
							echo '0';
						}
						echo $real_minutes_bid.':';
						if($real_seconds_bid<10)
						{
							echo '0';
						}
						echo $real_seconds_bid;
					?>
			</font></center>
			<br/><br/><br/>
			<b><font size="5">BID RANKING</font></b>
			<br />
			<table class="table">
				<thead>
				  <tr>
					<th><font size="4">GROUP</font></th>
					<th><font size="4">BID AMOUNT</font></th>
				  </tr>
				</thead>
				<tbody>
					<tr>
						<td><font size="4"><? echo $group; ?></font></td>
						<td><font size="4"><? echo $bid_amount; ?></font></td>
					</tr>
				</tbody>
			</table>
			</font>
		</div>
	</div>
	<div class="col-md-6">
		<div class="well">
			<b><font size="4">BID ITEM</font></b>
			<br />
			<center>
				<?
					if($_COOKIE['diff_bid']==0)
					{
						if($_COOKIE['bid_stat']==1)
						{
							$tmp_bid3=$_COOKIE['next_time_bid'];
							setcookie("next_time_bid",$tmp_bid3+900, time() + (86400 * 30), "/");
							setcookie("bid_stat",0, time() + (86400 * 30), "/");
						}
						else if($_COOKIE['bid_stat']==0)
						{
							$tmp_bid3=$_COOKIE['next_time_bid'];
							setcookie("next_time_bid",$tmp_bid3+300, time() + (86400 * 30), "/");
							setcookie("bid_stat",1, time() + (86400 * 30), "/");
							$tmp_bid4=$_COOKIE['bid_count'];
							setcookie("bid_count",$tmp_bid4+1, time() + (86400 * 30), "/");
						}
					}
					if($_COOKIE['bid_stat']!=0)
					{
						if($_COOKIE['bid_count']==1)
						{
				?>
							<img src="vault.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY MONEY BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==2)
						{
				?>
							<img src="card_box.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY CARD BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==3)
						{
				?>			
							<img src="vault.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY MONEY BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==4)
						{
				?>
							<img src="card_box.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY CARD BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==5)
						{
				?>
							<img src="vault.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY MONEY BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==6)
						{
				?>
							<img src="card_box.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5">LUCKY CARD BOX</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==7)
						{
				?>
							<img src="card_red.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5"><i>THE SUN</i></font>
							<br />
							<font size="3.5"><b>STARS:&nbsp;</b>4 STARS</font>
							<br />
							<font size="3.5"><b>EFFECT:&nvsp;</b>ATTACK 500,000 HP</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==8)
						{
				?>
							<img src="card_green.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5"><i>FOREST</i></font>
							<br />
							<font size="3.5"><b>STARS:&nbsp;</b>4 STARS</font>
							<br />
							<font size="3.5"><b>EFFECT:&nvsp;</b>HEAL 50,000 HP</font>
							<br />
				<?
						}
						else if($_COOKIE['bid_count']==9)
						{
				?>
							<img src="card_blue.jpg" width="45%" height="auto;" />
							<br />
							<br />
							<font size="4.5"><i>TSUNAMI</i></font>
							<br />
							<font size="3.5"><b>STARS:&nbsp;</b>4 STARS</font>
							<br />
							<font size="3.5"><b>EFFECT:&nvsp;</b>MAGIC 200%</font>
							<br />
				<?
						}
					}
					else
					{
						
					}
				?>
			</center>
		</div>
	</div>