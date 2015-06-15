<html>
<head>
	<title>
		Query String!
	</title>
</head>
	<body>
		<?php
		$name="Nikki";
		$age="18";
		$home="Chennai";
		$str="name={$name}&age={$age}&home={$home}";
        ?>
		<a href="destination.php?<?php echo $str; ?>">Click here to know more!</a>
		
	</body>
</html>

