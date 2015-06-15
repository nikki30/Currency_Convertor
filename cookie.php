<html>
<html>
<head>
	<title>
		Setting Cookie!
	</title>
</head>
	<body>
		<?php
		$name="message";
		$value="Have a nice day!";
		$expire=time()+7*24*60*60;
		setcookie($name,$value,$expire); //to delete, replace $value with null or make the + into -
		?>
	</body>
</html>

