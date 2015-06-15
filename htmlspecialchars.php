<html>
<head>
	<title>
		HTML Special Characters!
	</title>
</head>
	<body>
		<a href="http://www.google.com">
			<?php
		     $str="<click here>";
		     echo htmlspecialchars($str);
		    ?>
		</a>
	</body>
</html>

