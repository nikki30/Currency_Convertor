<html>
<head>
	<title>
		String functions(Part 3)!
	</title>
	<body>
		<?php
		$msg = "Have A Great Day Everyone! ";
		echo "Original statement : ";
		echo $msg;
		echo "<br />";
		echo "The string from 'Great' onward using 'strstr': ";
		echo strstr($msg,"Great");
		echo "<br />";
		echo "The position of 'G' in Great using 'strpos': ";
		echo strpos($msg, "Great");
		echo "<br />";
		echo "The characters from 'e' in Great onward using 'strchr': ";
		echo "<br />";
		echo strchr($msg,'e');
		?>
	</body>
	</html>

