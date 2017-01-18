<?
	session_start();
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	$res=mysql_query("UPDATE `titan_status` SET `titan_hp`=0 WHERE `titan_hp`<0");
	$res=mysql_query("SELECT * FROM `titan_status`");
	$i=0;
	while($row=mysql_fetch_row($res))
	{
		$hp[$i]=$row[1];
		$exp[$i]=$row[2];
		$atk[$i]=$row[3];
		$atk_max[$i]=$row[4];
		$hp_max[$i]=$row[5];
		$progress_hp[$i]=$hp[$i]*100/$hp_max[$i];
		$i++;
	}
?>
<div class="col-md-5">
		<div class="well">
			<b><font size="4">TITAN HEALTH</font></b>
			<div class="col-lg-12">
				<br />
			</div>
			<div class="col-lg-12">
				<div class="progress">
					<div style="width: <? echo $progress_hp[0]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
						<font color="black">BOSS</font><span class="sr-only"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="progress">
					<div style="width: <? echo $progress_hp[1]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
						<font color="black">MOB #1</font><span class="sr-only"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="progress">
					<div style="width: <? echo $progress_hp[2]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
						<font color="black">MOB #2</font><span class="sr-only"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="progress">
					<div style="width: <? echo $progress_hp[3]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
						<font color="black">MOB #3</font><span class="sr-only"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="progress">
					<div style="width: <? echo $progress_hp[4]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
						<font color="black">MOB #4</font><span class="sr-only"></span>
					</div>
				</div>
			</div>
			<br />
			&nbsp;
		</div>
	</div>