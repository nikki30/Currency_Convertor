<html>
<head>
	<title>
		Query String!
	</title>
</head>
	<body>
		<?php
		$Hobby="Reading & Playing Guitar";
        ?>
		<a href="urldestination.php?hob=<?php echo urlencode($Hobby); ?>">Click here to know more!</a>
		
	</body>
</html>

