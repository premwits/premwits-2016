<?
	session_start();
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	$sql="SELECT * FROM `bank_account`";
	$res=mysql_query($sql);
	$i=0;
	while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
	{
		$array[$i]=$row[1];
		$i++;
	}
	mysql_close();
?>
	<div class="col-md-6">
		<div class="well">
			<table class="table">
				<thead>
				  <tr>
					<th>GROUP</th>
					<th>MONEY</th>
				  </tr>
				</thead>
				<tbody>
				  <?
					$j=0;
					for($j=0;$j<12;$j++)
					{
				  ?>
				  <tr>
				  <td><? echo $j + 1; ?></td>
				  <td><? echo $array[$j]; ?></td>
				  </tr>
				  <?
					}
				  ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<div class="well">
			<table class="table">
				<thead>
				  <tr>
					<th>GROUP</th>
					<th>MONEY</th>
				  </tr>
				</thead>
				<tbody>
				  <?
					$j=0;
					for($j=12;$j<24;$j++)
					{
				  ?>
				  <tr>
				  <td><? echo $j + 1; ?></td>
				  <td><? echo $array[$j]; ?></td>
				  </tr>
				  <?
					}
				  ?>
				</tbody>
			</table>
		</div>
	</div>

