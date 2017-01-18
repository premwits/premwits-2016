<?
	session_start();
	$sq_location=" # LOCATION # ";
	$sq_user=" # USER # ";
	$sq_pass=" # PASS # ";
	$sq_db=" # DATABASE # ";
	$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("Error: could not connect to SQL Server\n");
	mysql_select_db($sq_db) or die("Error: could not connect to database\n");
	$res=mysql_query("UPDATE `player_status` SET `Hp`=0 WHERE `Hp`<0");
	$res=mysql_query("UPDATE `player_status` SET `Hp`=`hp_max` WHERE `Hp`>`hp_max`");
	$res=mysql_query("SELECT * FROM `player_status`");
	$i=0;
	while($row=mysql_fetch_row($res))
	{
		$hp[$i]=$row[1];
		$lv[$i]=$row[2];
		$exp[$i]=$row[3];
		$hp_max[$i]=$row[8];
		$exp_max[$i]=$row[9];
		$progress_hp[$i]=$hp[$i]*100/$hp_max[$i];
		$progress_exp[$i]=$exp[$i]*100/$exp_max[$i];
		$i++;
	}
?>
<div class="col-md-6">
<div class="well">
<b><font size="4">PLAYER STATUS</font></b>
<br />
<font size="2.5">
<table class="table">
<!-- COPYYYY -->
	<tbody>
	  <?
		$j=0;
		$k=1;
		$l=0;
		for($j=0;$j<6;$j++)
		{
	  ?>
	  <tr>
	  <td width="5%"><font size="30"><center><? echo $k; $k++; ?></center></font></td>
	<td width="15%" >
		<div class="progress">
			<div style="width: <? echo $progress_hp[$l]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<?if($hp[$l]<=0){?><font color='red'>DEAD</font><?}else{?> <font color="black">HP:&nbsp;<? echo $hp[$l].' / '.$hp_max[$l]; }?></font><span class="sr-only"></span>
			</div>
		</div>
		<div class="progress" >
			<div style="width: <? echo $progress_exp[$l]; ?>%" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<font color="black">LV:&nbsp;<? echo $lv[$l]; ?>&nbsp;&nbsp;EXP:&nbsp;<? echo $exp[$l].' / '.$exp_max[$l]; ?></font><span class="sr-only"></span>
			</div>
		</div>
	  </td>
	  <td width="5%"><font size="30"><center><? $l++; echo $k;?></center></font></td>
	<td width="15%" >
		<div class="progress">
			<div style="width: <? echo $progress_hp[$l]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<?if($hp[$l]<=0){?><font color='red'>DEAD</font><?}else{?> <font color="black">HP:&nbsp;<? echo $hp[$l].' / '.$hp_max[$l]; }?></font><span class="sr-only"></span>
			</div>
		</div>
		<div class="progress" >
			<div style="width: <? echo $progress_exp[$l]; ?>%" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<font color="black">LV:&nbsp;<? echo $lv[$l]; ?>&nbsp;&nbsp;EXP:&nbsp;<? echo $exp[$l].' / '.$exp_max[$l]; ?></font><span class="sr-only"></span>
			</div>
		</div>
	  </td>
	  </tr>
	  <?
		$k++;
		$l++;
		}
	  ?>
		</tbody>
	<!--END OF COPY -->
</table>
</font>
</div>
</div>
<div class="col-md-6">
<div class="well">
<b><font size="4">PLAYER STATUS</font></b>
<br />
<font size="2.5">
<table class="table">
<!-- COPYYYY -->
	<tbody>
	  <?
		$j=0;
		$k=13;
		$l=12;
		for($j=0;$j<6;$j++)
		{
	  ?>
	  <tr>
	  <td width="5%"><font size="30"><center><? echo $k; $k++; ?></center></font></td>
	<td width="15%" >
		<div class="progress">
			<div style="width: <? echo $progress_hp[$l]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<?if($hp[$l]<=0){?><font color='red'>DEAD</font><?}else{?> <font color="black">HP:&nbsp;<? echo $hp[$l].' / '.$hp_max[$l]; }?></font><span class="sr-only"></span>
			</div>
		</div>
		<div class="progress" >
			<div style="width: <? echo $progress_exp[$l]; ?>%" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<font color="black">LV:&nbsp;<? echo $lv[$l]; ?>&nbsp;&nbsp;EXP:&nbsp;<? echo $exp[$l].' / '.$exp_max[$l]; ?></font><span class="sr-only"></span>
			</div>
		</div>
	  </td>
	  <td width="5%"><font size="30"><center><? $l++; echo $k;?></center></font></td>
	<td width="15%" >
		<div class="progress">
			<div style="width: <? echo $progress_hp[$l]; ?>%" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<?if($hp[$l]<=0){?><font color='red'>DEAD</font><?}else{?> <font color="black">HP:&nbsp;<? echo $hp[$l].' / '.$hp_max[$l]; }?></font><span class="sr-only"></span>
			</div>
		</div>
		<div class="progress" >
			<div style="width: <? echo $progress_exp[$l]; ?>%" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
				<font color="black">LV:&nbsp;<? echo $lv[$l]; ?>&nbsp;&nbsp;EXP:&nbsp;<? echo $exp[$l].' / '.$exp_max[$l]; ?></font><span class="sr-only"></span>
			</div>
		</div>
	  </td>
	  </tr>
	  <?
		$k++;
		$l++;
		}
	  ?>
		</tbody>
	<!--END OF COPY -->
</table>
</font>
</div>
</div>
