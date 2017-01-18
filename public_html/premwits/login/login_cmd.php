 <html>
 <head>
 <title>Loging in...</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<style>
	@font-face {
		font-family: "Exo2";
		src: url("font/woff/3.woff") format('woff');
	}

	@font-face {
		font-family: "Exo2";
		src: url("font/woff/4.woff") format('woff');
		font-weight: bold;
	}
	@font-face {
		font-family: "Exo2";
		src: url("font/woff/9.woff") format('woff');
		font-weight: bold;
		font-style: italic;
	}

	@font-face {
		font-family: "Exo2";
		src: url("font/woff/7.woff") format('woff');
		font-style: italic;
	}
	*
	{
		font-family: Exo2
	}
	</style>
	<script type="text/javascript" src="script/site.min.js"></script>
	<link rel="stylesheet" href="css/site.min.css">
</head>
<body>
<?
	session_start();
	$dblocation="localhost";
	$dbuser="vletpaoh_premwit";
	$dbpass="7i4szhbQ5";
	$sq_db=" # DATABASE # ";
	$password=md5($_REQUEST['password']);
	$password1=md5($password);
	$password_new=md5($password1);
	$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
	mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
	$sql="SELECT * 
		  FROM  `user` 
		  WHERE  `user` LIKE  '$_REQUEST[username]'
		  AND  `password` LIKE  '$password_new'
		  LIMIT 0 , 1";
	$res=mysql_query($sql);
	setcookie('permit_cmd', 1234, time() + 16200, "/");
	echo '<br />';
	while($row=mysql_fetch_row($res)) //WILL WORK ONLY ONE TIME BECAUSE WE SET SQL COMMAND AS 'LIMIT 0 , 1'
	{
		echo "USR:: $row[0]<br />";
		echo "PAS:: $row[1]<br />";
		echo "NAME:: $row[2]<br />";
		echo "PERMIT:: $row[3]<br />";
		$tmp_per1=$row[3];
		setcookie('disp_name', $row[2], time() + 16200, "/");
	}
	mysql_close();
    if($tmp_per1=="Administrator")
	{
		echo 'Now you are accessing Administrator Management';
		setcookie('permit_cmd', 'Administrator', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Supervisor")
	{
		echo 'Now you are accessing Supervisor System Panel';
		setcookie('permit_cmd', 'Supervisor', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Staff")
	{
		echo 'Now you are accessing Staff Management';
		setcookie('permit_cmd', 'Staff', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Inspector")
	{
		echo 'Now you are accessing Inspector Menu List';
		setcookie('permit_cmd', 'Inspector', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Bank")
	{
		echo 'Now you are accessing Bank Management';
		setcookie('permit_cmd', 'Bank', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Shop_Innovation")
	{
		echo 'Now you are accessing Shop_Innovation Management';
		setcookie('permit_cmd', 'Shop_Innovation', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Healer")
	{
		echo 'Now you are accessing Healer Management';
		setcookie('permit_cmd', 'Healer', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Shop_Alphabet")
	{
		echo 'Now you are accessing Shop_Alphabet Management';
		setcookie('permit_cmd', 'Shop_Alphabet', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Shop_Card")
	{
		echo 'Now you are accessing Shop_Card Management';
		setcookie('permit_cmd', 'Shop_Card', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Bid")
	{
		echo 'Now you are accessing Bid Management';
		setcookie('permit_cmd', 'Bid', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Card_Drop")
	{
		echo 'Now you are accessing Card_Drop Management';
		setcookie('permit_cmd', 'Card_Drop', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else if($tmp_per1=="Interface")
	{
		echo 'Now you are accessing Interface Management';
		setcookie('permit_cmd', 'Interface', time() + 16200, "/");
		setcookie('pm', 101, time() + 16200, "/");
		header('Location: ../system');
	}
	else
	{
		setcookie('st', 401, time() + 60, "/");
		header('Location: index.php');
	}
?>
</body>
</html>	