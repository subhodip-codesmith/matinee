<html>
	<head>
		<title>
			test
		</test>
	</head>
	<body>
	hi
		<?php
			include('dbConnect.php');
			$result1=mysql_query("select * from hall'");
			$row1=mysql_fetch_array($result1);
			while ($row = mysql_fetch_array($result1)) {
			echo $row1.hid;
			}
		?>
	</body>
</html>