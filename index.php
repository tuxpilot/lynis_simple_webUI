<html>
	<head>
		<title>LynisWebUI</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="icon" type="image/png" href="images/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>



	<body bgcolor="#ffffff">

<?php
	# We define the global variable to point the folder which contains all the lynis html reports
	$reports_folder = "reports/"
?>

	<div id="container">
	<div id="header">
		<br>
		<div id=logo>
			&emsp;
			<a href='index.php'>
				<img src='images/logo.png' height='70px'>
			</a>
		</div>
	</div>
	<div id="leftstructure"><a href=index.php?page=search>Make a research</a><br></div>
		<div id="rightstructure">&nbsp;</div>
			<div id="middlestructure">

				<?php

				if(isset($_GET['page']))
				{
					$page = $_GET['page'];
					include ($page.".php");
				}else{
					include ("report_listing.php");
				}
				?>
			</div>
		</div>
	</body>
</html>
