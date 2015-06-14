<html>
<head>
	<title>
		String functions(Part 2)!
	</title>
	<body>
		<?php
		$msg = "Have A Great Day Everyone! ";
		echo "The statement after using str_replace is: ";
		echo str_replace(Great, Wonderful, $msg);
		echo "<br />";
		echo "The number of characters it has is ";
		echo strlen($msg);
		echo "<br />";
		echo "str_repeat will cause it to repeat n number of times ";
		echo str_repeat($msg, 3);
		//Here n=3
		echo "Let's check out a substring!";
		echo substr($msg, 7,15);
		?>
	</body>
	</html>

