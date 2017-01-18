 	<?
		session_start();
		$dblocation="localhost";
		$dbuser="vletpaoh_premwit";
		$dbpass="7i4szhbQ5";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		$sql="SELECT * FROM player_status ORDER BY CAST('attack_all' as SIGNED INTEGER) ASC";
		$res=mysql_query($sql);
		$i=23;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$array1[$i]=$row[0];
			$array2[$i]=$row[1];
			$array3[$i]=$row[2];
			$array4[$i]=$row[3];
			$array5[$i]=$row[4];
			$array6[$i]=$row[5];
			$array7[$i]=$row[6];
			$array8[$i]=$row[7];
			$i--;
		}
		$sql="SELECT * FROM `bank_account`";
		$res=mysql_query($sql);
		$i=23;
		while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
		{
			$array9[$i]=$row[1];
			$i--;
		}
		mysql_close();
	?>
	<div class="col-md-12" width="60%" align="center">
		<div class="well">
			<table class="table">
				<thead>
				  <tr>
					<th>RANK</th>
					<th>GROUP</th>
					<th>MONEY</th>
					<th>HP</th>
					<th>EXP</th>
					<th>ATTACK</th>
					<th>BIDS WON</th>
				  </tr>
				</thead>
				<tbody>
				  <?
					$j=23;
					$k=0;
					for($j=23;$j>=12;$j--)
					{
				  ?>
				  <tr>
				  <td width="10%"><? echo $k + 1; ?></td>
				  <td width="10%"><? echo $array1[$j]; ?></td>
				  <td width="20%"><? echo $array9[$j]; ?></td>
				  <td width="10%"><? echo $array2[$j]; ?></td>
				  <td width="10%"><? echo $array4[$j]; ?></td>
				  <td width="10%"><? echo $array8[$j]; ?></td>
				  <td width="10%"><? echo $array7[$j]; ?></td>
				  </tr>
				  <?
					$k++;
					}
				  ?>
				</tbody>
			</table>
		</div>
	</div>
