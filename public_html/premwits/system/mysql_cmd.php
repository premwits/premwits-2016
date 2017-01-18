<?
		session_start();
		$dblocation="localhost";
		$dbuser="vletpaoh_premwit";
		$dbpass="7i4szhbQ5";
		$sq_db=" # DATABASE # ";
		$conn= mysql_connect($dblocation, $dbuser, $dbpass) or die("ERROR: Could not connect to MySQL!");
		mysql_select_db($sq_db) or die("ERROR: Could not connect to Database!");
		$sql=$_REQUEST['cmd'];
		$res=mysql_query($sql);
		if($res)
		{
			$_SESSION['st']=701;
		}
		mysql_close();
		header('Location: index.php');
?>