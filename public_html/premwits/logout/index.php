 <html>
 <head>
 <title>Loging out...</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<style>
	@font-face {
		font-family: "Exo2";
		src: url("../font/woff/3.woff") format('woff');
	}

	@font-face {
		font-family: "Exo2";
		src: url("../font/woff/4.woff") format('woff');
		font-weight: bold;
	}
	@font-face {
		font-family: "Exo2";
		src: url("../font/woff/9.woff") format('woff');
		font-weight: bold;
		font-style: italic;
	}

	@font-face {
		font-family: "Exo2";
		src: url("../font/woff/7.woff") format('woff');
		font-style: italic;
	}
	*
	{
		font-family: Exo2
	}
	body	
	{ 
		background:url(bg_c.jpg) top right no-repeat;
		background-attachment:fixed; 
		}
	</style>
</head>
<body>
<?
	session_start();
	setcookie('disp_name', NULL, time() - 6969, "/");
	setcookie('permit_cmd', NULL, time() - 6969, "/");
	setcookie('pm', NULL, time() - 6969, "/");
	header('Location: ../login');
?>
</body>