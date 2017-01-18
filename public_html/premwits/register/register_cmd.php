<?
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="../script/css/site.min.css">
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
			background:url(../script/img/bg.jpg) top right no-repeat;
			background-attachment:fixed; 
		}
	</style>
</head>
<body>
    <div id="update_time" align="right"></div>
	<br />
	<center>
		<img src="../script/img/logo.svg" width="200px" height=auto; />
		<h3><i>PRE-MWITS 2016 SYSTEM</i></h3>
		<h4><i><b>
		<br />
		<?
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
			$code=$_REQUEST['code'];
			$dis_name=$_REQUEST['dis_name'];
			$password1=md5($password);
			$password2=md5($password1);
			$password_new=md5($password2);
			$sq_location=" # LOCATION # ";
			$sq_user=" # USER # ";
			$sq_pass=" # PASS # ";
			$sq_db=" # DATABASE # ";
			$conn = mysql_connect($sq_location,$sq_user,$sq_pass) or die("<br />Error: could not connect to SQL Server\n");
			mysql_select_db($sq_db) or die("<br />Error: could not connect to database\n");
			$check=0;
			$res=mysql_query("SELECT * FROM `user`");
			while($row=mysql_fetch_row($res))
			{
				if($row[0]==$username)
				{
					$check=2;
				}
			}
			$res=mysql_query("SELECT * FROM `verification_code` ");
			while($row=mysql_fetch_row($res))
			{
				//printf("%s %s\n",$code,$row[1]);
				if($check==2)
				{
					break;
				}
				if($row[1]==$code){
					//mysql_query("insert into user values('$username','$password','$row[0]')");
					mysql_query("INSERT INTO `vletpaoh_premwit`.`user` (`user`, `password`, `name`, `permission`) VALUES ('$username', '$password_new', '$dis_name', '$row[0]');");
					$check=1;
					$tmp=$row[0];
					break;
				}
			}
			if($check==0) printf("ERR: Verification code incorrect\n");
			else if($check==2) printf("ERR: This username is already used!\n");
			//else if($check==3) printf("ERR: Reached the maximum of quota!\n");
			else if($check==1) printf("Submit successful\n");
			mysql_close();
		?>
		</b></i></h4>
	</center>
	<form action="index.php" method="post">
	<div class="col-md-4"></div>
	<div class="col-md-4"><button type="submit"class="btn btn-primary btn-block">Back</button>
	<div class="col-md-4"></div>
	</div>
	</form>
	<br />
	<center>
		<div class="col-md-12">
		<br />
		</div>
	<footer>
	<div class="col-md-12">
		Interface Design by Ray Riffy and SIN_COS_TAN
	</div>
	</footer>
	</center>
</body>
<script language="javascript" type="text/javascript">
function loadlink(){
    $('#update_time').load('../time/time.php',function () {
         $(this).unwrap();
    });
}

loadlink(); // Run on page load
setInterval(function(){
    loadlink() // Run every 1 sec
}, 1000);
</script>
</html>