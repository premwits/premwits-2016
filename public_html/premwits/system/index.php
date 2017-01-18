<?
	// STAFF SYSTEM MENU //
	// START SESION //
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="../script/css/site.min.css">
	<link rel="favicon	" href="../script/img/logo.gif">
	<script type="text/javascript" src="../script/js/site.min.js"></script>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- site css -->
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery -->
	<script type="text/javascript" src="../script/css/jquery-1.11.3.js"></script>
	<title>PRE-MWITS 2016 SYSTEM</title>
	<style>
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/3.woff") format('woff');
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/4.woff") format('woff');
			font-weight: bold;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/9.woff") format('woff');
			font-weight: bold;
			font-style: italic;
		}
		@font-face {
			font-family: "Exo2";
			src: url("../script/font/woff/7.woff") format('woff');
			font-style: italic;
		}
		*{
			font-family: Exo2
		}
		body	
		{ 
			background:url(../script/img/bg2.jpg) top right no-repeat;
			background-attachment:fixed; 
		}
		footer 
		{
			position: absolute;
			left: 0;
			bottom: 0;
			height: auto;
			width: 100%;
		}

	</style>
	<script type="text/javascript">

		function init()
		{
		  timeDisplay=document.createTextNode( "" );
		  document.getElementById("clock").appendChild(timeDisplay);
		}

		function updateClock()
		{
		  var currentTime=new Date();

		  var currentHours=currentTime.getHours();
		  var currentMinutes=currentTime.getMinutes();
		  var currentSeconds=currentTime.getSeconds();

		  currentMinutes=(currentMinutes < 10 ? "0" : "")+currentMinutes;
		  currentSeconds=(currentSeconds < 10 ? "0" : "")+currentSeconds;
		  var currentTimeString=currentHours+":"+currentMinutes+":"+currentSeconds;

		  document.getElementById("clock").firstChild.nodeValue=currentTimeString;
		}	
	</script>
</head>
<body onload="updateClock(); setInterval('updateClock()', 30 )">   
	<center>
		<img src="../script/img/logo.svg" width="200px" height=auto; />
		<h3><i>PRE-MWITS 2016 SYSTEM</i></h3>
		<font size="4"><b>Titanones the series - The Final Season -</b></font>
		<h4><i><b><? echo $_COOKIE['permit_cmd']; ?>&nbsp;</b></i><b>|</b><b><i>&nbsp;<? echo $_COOKIE['disp_name']; ?></b></i></h4>
	</center>
	<div class="col-md-6">
            <div class="panel">
              <ul id="myTab1" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#home1" data-toggle="tab"><b>Home</b></a></li>
                <li class=""><a href="#profile1" data-toggle="tab"><b>Account</b></a></li>
                <? if($_COOKIE['permit_cmd']!="Supervisor" && $_COOKIE['permit_cmd']!="Administrator"){ ?>
				<li class=""><a href="#menu" data-toggle="tab"><b>Menu</b></a></li>
				<? } else {?>               
				<li class="dropdown">
                <a href="#" id="myTabDrop1-1" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
						<li><a href="#dropdown1-1" tabindex="-1" data-toggle="tab">@ADM - Database Lookup</a></li>
						<li><a href="#dropdown1-2" tabindex="-1" data-toggle="tab">@SUP - MySQL(er)</a></li>
						<li><a href="#dropdown1-3" tabindex="-1" data-toggle="tab">@SUP - Suicide(er)</a></li>
						<li><a href="#dropdown1-4" tabindex="-1" data-toggle="tab">@SUP - Feedback Lookup</a></li>
						<li><a href="#dropdown1-5" tabindex="-1" data-toggle="tab">@ADM - Bank</a></li>
						<li><a href="#dropdown1-6" tabindex="-1" data-toggle="tab">@ADM - Healer</a></li>
						<li><a href="#dropdown1-7" tabindex="-1" data-toggle="tab">@ADM - Shop_Alphabet</a></li>
						<li><a href="#dropdown1-8" tabindex="-1" data-toggle="tab">@ADM - Shop_Card</a></li>
						<li><a href="#dropdown1-9" tabindex="-1" data-toggle="tab">@ADM - Staff</a></li>
						<li><a href="#dropdown1-10" tabindex="-1" data-toggle="tab">@ADM - Card_Drop</a></li>
						<li><a href="#dropdown1-11" tabindex="-1" data-toggle="tab">@ADM - Interface</a></li>
						<li><a href="#dropdown1-12" tabindex="-1" data-toggle="tab">@ADM - Bid</a></li>
						<li><a href="#dropdown1-13" tabindex="-1" data-toggle="tab">@ADM - Shop_Innovation</a></li>
					</ul>
                </li>
				<? } ?>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home1">
				  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to "PRE-SYSTEM 2016 Titanones the series - The Final Season -". This system was created by Ray Riffy, Sin_Cos_Tan, MirrorCraze and etc</p><br />&nbsp;
				  <?
					if($_SESSION['st']==601 || $_SESSION['st']==602)
					{
				  ?>
						<font color="green">Transfer Sucuessful!</font>
				  <?
						session_destroy();
					}
					else if($_SESSION['st']==603 || $_SESSION['st']==703)
					{
				  ?>
						<font color="red">ERR: NO ENOUGH MONEY!</font>
				  <?
						session_destroy();
					}
					else if($_SESSION['st']==701 || $_SESSION['st']==801 || $_SESSION['st']==901 || $_SESSION['st']==1001)
					{
				  ?>
						<font color="green">Operation Sucuessful!</font>
				  <?
						session_destroy();
					}
					else if($_SESSION['st']==704 || $_SESSION['st']==904)
					{
				  ?>
						<font color="red">ERR: INCORRECT VALUE 'amount'</font>
				  <?
						session_destroy();
					}
					else if($_SESSION['st']==1002)
					{
				  ?>
						<font color="red">ERR: SERVER REJECTED</font>
				  <?
						session_destroy();
					}
				  ?>
				</div>
                <div class="tab-pane fade" id="profile1">
                  <ul>
				  <b>Account Settings</b>
				  <li><a href="#">Change Password</a></li>
				  <li><font color="9B9B9B">Debuging Mode</font></li>
				  </ul>
                </div>
				<? if($_COOKIE['permit_cmd']!="Supervisor" && $_COOKIE['permit_cmd']!="Administrator") { ?>
                <div class="tab-pane fade" id="menu">
                  <ul>
					<? 
					if($_COOKIE['permit_cmd']=="Staff")
					{
					?>
						<form action="staff_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="money" class="form-control search-query" placeholder="Money" data-toggle="tooltip" data-placement="top" title="" data-original-title="Money">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Shop_Innovation")
					{
					?>
						<form action="shop_innovation_cmd.php" method="POST">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;&nbsp;Item:&nbsp;
							<select name="selItem" id="selItem">
								<option value="Newspaper">Newspaper [50 TY per 1 book]</option>
								<option value="Rope">Rope [20 TY per 1 meter]</option>
								<option value="Straw">Straw [10 TY per 1 piece]</option>
								<option value="Clay">Clay [100 TY per 1 piece]</option>
								<option value="Chopstick">Chopstick [40 TY per 1 pair]</option>
								<option value="RubberBand">Rubber Band [10 TY per 1 pair]</option>
								<option value="FeatureBoard">Feature Board [200 TY per 1 sheet]</option>
								<option value="Clip">Clip [15 TY per 1 piece]</option>
								<option value="Scissors">Scissors [30 TY per use]</option>
								<option value="Tape">Tape [50 TY per 1 meter]</option>
								<option value="Papercup">Papercup [30 TY per 1 piece]</option>
							</select>					
							<br /><br />
							<div class="className">
							<div class="input-group form-search" style="width: 60%;">
								<input type="text" name="amount" class="form-control search-query" placeholder="Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amount">
								<span class="input-group-btn">
								<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
								</span>
							</div>
							</div>

						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Bank")
					{
					?>
						<form action="bank_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;&nbsp;Transfer Type:&nbsp;
							<select name="selOut" id="selOut">
								<option value="1">Deposit</option>
								<option value="0">Withdrawal</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="money" class="form-control search-query" placeholder="Money" data-toggle="tooltip" data-placement="top" title="" data-original-title="Money">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Healer")
					{
					?>
						<form action="healer_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="hp" class="form-control search-query" placeholder="Heal" data-toggle="tooltip" data-placement="top" title="" data-original-title="Heal">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('healer_lookup.php');">Open table 'player_status'</a>
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Shop_Alphabet")
					{
					?>
						<form action="shop_alphabet_new_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="cmd" class="form-control search-query" placeholder="Command" data-toggle="tooltip" data-placement="top" title="" data-original-title="Command">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('alphabet_cost_lookup.php');">Open table 'alphabet_cost'</a>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Shop_Card")
					{
					?>
						<form action="shop_card_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>&nbsp;&nbsp;TypeCard:&nbsp;
							<select name="selCard" id="selCard">
								<option value="blue1">Blue1</option>
								<option value="blue2">Blue2</option>
								<option value="blue3">Blue3</option>
								<option value="green1">Green1</option>
								<option value="green2">Green2</option>
								<option value="green3">Green3</option>
								<option value="red1">Red1</option>
								<option value="red2">Red2</option>
								<option value="red3">Red3</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="amount" class="form-control search-query" placeholder="Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amount">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<? //<a OnClick="return popup('alphabet_cost_lookup.php');">Open table 'alphabet_cost'</a>?>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Bid")
					{
					?>
						<form action="bid.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="bid_amount" class="form-control search-query" placeholder="Bid Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bid Amount">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('bid_lookup.php');">Open table 'bid_sys'</a>
							<br />
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Card_Drop")
					{
					?>
						<form action="card_drop_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;TypeCard :&nbsp;
							<select name="selCard" id="selTeam">
								<option value="blue1">Blue1</option>
								<option value="blue2">Blue2</option>
								<option value="blue3">Blue3</option>
								<option value="blue4">Blue4</option>
								<option value="red1">Red1</option>
								<option value="red2">Red2</option>
								<option value="red3">Red3</option>
								<option value="red4">Red4</option>
								<option value="green1">Green1</option>
								<option value="green2">Green2</option>
								<option value="green3">Green3</option>
								<option value="green4">Green4</option>
								<option value="rb1">Blue1 + Red1</option>
								<option value="rb2">Blue2 + Red2</option>
								<option value="rb3">Blue3 + Red3</option>
								<option value="gb1">Blue1 + Green1</option>
								<option value="gb2">Blue2 + Green2</option>
								<option value="gb3">Blue3 + Green3</option>
								<option value="rg1">Green1 + Red1</option>
								<option value="rg2">Green2 + Red2</option>
								<option value="rg3">Green3 + Red3</option>
								<option value="rgb1">Red1 + Green1 + Blue1</option>
								<option value="rgb2">Red2 + Green2 + Blue2</option>
								<option value="rgb3">Red3 + Green3 + Blue3</option>
							</select>
						&nbsp;&nbsp;Target :&nbsp;
							<select name="selTarget" id="selTeam">
								<option value="card_drop_pool_boss">Boss</option>
								<option value="card_drop_pool_1">Mob 1</option>
								<option value="card_drop_pool_2">Mob 2</option>
								<option value="card_drop_pool_3">Mob 3</option>
								<option value="card_drop_pool_4">Mob 4</option>
							</select>
							<br /><br />
							<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
							<br />
						</form>
					<?
					}
					else if($_COOKIE['permit_cmd']=="Interface")
					{
					?>
					<a href="../interface/main">Main Projector</a>
					<br />
					<a href="../interface/rank1">Left Projector [Rank1]</a>
					<br />
					<a href="../interface/rank2">Right Projector [Rank2]</a>
					<br />
					<a href="../interface/bank">Bank Projector</a>
					<br />
					<a href="../interface/bid">Bid Projector</a>
					<?
					}
					else
					{
					?>
					<font color="red">ERR: LOGIN SESSION EXIPRED</font>
					<br />
					<a href="../login">Click here to login</a><br /><br />&nbsp;
					<?
					}
					?>
				  </ul>
                </div>
				
				<?
					///////////////////////
					// SUPERVISE + ADMIN //
					///////////////////////
				?>
				
				<? } else { ?>
				<div class="tab-pane fade" id="dropdown1-1">
					<a OnClick="return popup('bank_lookup.php');">Bank</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Player Status</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">User</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Verification Code</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Biding Cmd</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Titan Status</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Card Drop - Boss</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Card Drop - Titan 1</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Card Drop - Titan 2</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Card Drop - Titan 3</a>
					<br />
					<a OnClick="return popup('bank_lookup.php');">Card Drop - Titan 4</a>
				</div>
                <div class="tab-pane fade" id="dropdown1-2">
				<?
					if($_COOKIE['permit_cmd']=="Supervisor")
					{
				?>
				<b>INSERT COMMAND HERE</b>
				<br />
				<form action="mysql_cmd.php" method="POST">
					<div class="className">
						<div class="input-group form-search" style="width: 60%;">
							<input type="text" name="cmd" class="form-control search-query" placeholder="Command" data-toggle="tooltip" data-placement="top" title="" data-original-title="Command">
							<span class="input-group-btn">
							<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
							</span>
						</div>
					</div>
				</form>
				<?
					}
					else
					{
				?>
					<font color="red">ERR: PERMISSION DENIED</font>
				<?
					}
				?>
                </div>
                <div class="tab-pane fade" id="dropdown1-3">
					<br />
					<br />
					Oops... This function is not available!<br />:P
                </div>
                <div class="tab-pane fade" id="dropdown1-4">
					ETC_FEEDBACK
                </div>
                <div class="tab-pane fade" id="dropdown1-5">
						<form action="bank_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;&nbsp;Transfer Type:&nbsp;
							<select name="selOut" id="selOut">
								<option value="1">Deposit</option>
								<option value="0">Withdrawal</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="money" class="form-control search-query" placeholder="Money" data-toggle="tooltip" data-placement="top" title="" data-original-title="Money">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-6">
						<form action="healer_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="hp" class="form-control search-query" placeholder="Heal" data-toggle="tooltip" data-placement="top" title="" data-original-title="Heal">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('healer_lookup.php');">Open table 'player_status'</a>
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-7">
						<form action="shop_alphabet_new_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="cmd" class="form-control search-query" placeholder="Command" data-toggle="tooltip" data-placement="top" title="" data-original-title="Command">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('alphabet_cost_lookup.php');">Open table 'alphabet_cost'</a>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-8">
						<form action="shop_card_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>&nbsp;&nbsp;TypeCard:&nbsp;
							<select name="selCard" id="selCard">
								<option value="blue1">Blue1</option>
								<option value="blue2">Blue2</option>
								<option value="blue3">Blue3</option>
								<option value="green1">Green1</option>
								<option value="green2">Green2</option>
								<option value="green3">Green3</option>
								<option value="red1">Red1</option>
								<option value="red2">Red2</option>
								<option value="red3">Red3</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="amount" class="form-control search-query" placeholder="Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amount">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<? //<a OnClick="return popup('alphabet_cost_lookup.php');">Open table 'alphabet_cost'</a>?>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
							</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-9">
						<form action="staff_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="money" class="form-control search-query" placeholder="Money" data-toggle="tooltip" data-placement="top" title="" data-original-title="Money">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
							<br />
							<a OnClick="return popup('bank_lookup.php');">Open table 'bank_account'</a>
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-10">
						<form action="card_drop_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;TypeCard :&nbsp;
							<select name="selCard" id="selTeam">
								<option value="blue1">Blue1</option>
								<option value="blue2">Blue2</option>
								<option value="blue3">Blue3</option>
								<option value="blue4">Blue4</option>
								<option value="red1">Red1</option>
								<option value="red2">Red2</option>
								<option value="red3">Red3</option>
								<option value="red4">Red4</option>
								<option value="green1">Green1</option>
								<option value="green2">Green2</option>
								<option value="green3">Green3</option>
								<option value="green4">Green4</option>
								<option value="rb1">Blue1 + Red1</option>
								<option value="rb2">Blue2 + Red2</option>
								<option value="rb3">Blue3 + Red3</option>
								<option value="gb1">Blue1 + Green1</option>
								<option value="gb2">Blue2 + Green2</option>
								<option value="gb3">Blue3 + Green3</option>
								<option value="rg1">Green1 + Red1</option>
								<option value="rg2">Green2 + Red2</option>
								<option value="rg3">Green3 + Red3</option>
								<option value="rgb1">Red1 + Green1 + Blue1</option>
								<option value="rgb2">Red2 + Green2 + Blue2</option>
								<option value="rgb3">Red3 + Green3 + Blue3</option>
							</select>
						&nbsp;&nbsp;Target :&nbsp;
							<select name="selTarget" id="selTeam">
								<option value="card_drop_pool_boss">Boss</option>
								<option value="card_drop_pool_1">Mob 1</option>
								<option value="card_drop_pool_2">Mob 2</option>
								<option value="card_drop_pool_3">Mob 3</option>
								<option value="card_drop_pool_4">Mob 4</option>
							</select>
							<br /><br />
							<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
							<br />
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-11">
					<a href="../interface/main">Main Projector</a>
					<br />
					<a href="../interface/rank1">Left Projector [Rank1]</a>
					<br />
					<a href="../interface/rank2">Right Projector [Rank2]</a>
					<br />
					<a href="../interface/bank">Bank Projector</a>
					<br />
					<a href="../interface/bid">Bid Projector</a>
                </div>
                <div class="tab-pane fade" id="dropdown1-12">
						<form action="bid.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="bid_amount" class="form-control search-query" placeholder="Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amount">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
						</form>
                </div>
                <div class="tab-pane fade" id="dropdown1-13">
						<form action="shop_innovation_cmd.php" method="post">
						Group :&nbsp;
							<select name="selTeam" id="selTeam">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
						&nbsp;&nbsp;&nbsp;Item:&nbsp;
							<select name="selItem" id="selItem">
								<option value="Newspaper">Newspaper [50 TY per 1 book]</option>
								<option value="Rope">Rope [20 TY per 1 meter]</option>
								<option value="Straw">Straw [10 TY per 1 piece]</option>
								<option value="Clay">Clay [100 TY per 1 piece]</option>
								<option value="Chopstick">Chopstick [40 TY per 1 pair]</option>
								<option value="RubberBand">Rubber Band [10 TY per 1 pair]</option>
								<option value="FeatureBoard">Feature Board [200 TY per 1 sheet]</option>
								<option value="Clip">Clip [15 TY per 1 piece]</option>
								<option value="Scissors">Scissors [30 TY per use]</option>
								<option value="Tape">Tape [50 TY per 1 meter]</option>
								<option value="Papercup">Papercup [30 TY per 1 piece]</option>
							</select>					
							<br /><br />
							<div class="className">
								<div class="input-group form-search" style="width: 60%;">
									<input type="text" name="amount" class="form-control search-query" placeholder="Amount" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amount">
									<span class="input-group-btn">
									<button type="submit" class="btn btn-primary" data-type="last">SEND</button>
									</span>
								</div>
							</div>
						</form>
                </div>
				<? } ?>
              </div>
            </div>
          </div>
		<div class="col-md-6">
			<div class="panel panel-default">
              <div class="panel-heading">
                <font size="3" class="panel-title">Account Info</font>
              </div>
              <div class="panel-body">
                Name:&nbsp;<? echo $_COOKIE['disp_name']; ?><br />
                Account Type:&nbsp;<? echo $_COOKIE['permit_cmd']; ?><br />
                Server Status:&nbsp;<font color="green">ONLINE</font><br />
              </div>
            </div>
		</div>
		<br />
	<form action="feedback" method="post">
		<center><div align="center" class="col-md-3"><button type="submit" class="btn btn-danger btn-block disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click here to send feedback!">Feedback</button></div></center>
	</form>
	
	<form action="../logout" method="post">
		<center><div align="center" class="col-md-3"><button type="submit" value='00101' name="sub" class="btn btn-info btn-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click here to logout!">Log Out</button></div></center>
	</form>
	<div class="col-md-12">
	<br />
	<footer>
		<center><b><span id="clock">&nbsp;</span></b>&nbsp;&nbsp;&nbsp;Interface Design by Ray Riffy and SIN_COS_TAN</center>
	</footer>
	</div>
</body>
<script>
	function popup(url) {
		newwindow=window.open(url,'SQL TABLE LOOKUP','height=640,width=360');
		if(window.focus) {newwindow.focus()}
		return false;
	}
</script>
</html>