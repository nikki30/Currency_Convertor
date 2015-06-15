<html>
<head>
	<title>
     Implicit and Explicit conversion!
	</title>
	<body>
		<?php
		$var="100"; //A string
		echo $var; //output the value 
		echo "<br  />";
		echo gettype($var); //should return string
		echo "<br  />";
		settype($var,"integer"); //explicit type conv into int
		echo gettype($var);  //will return int now since conv took place
		echo "<br  />";
		$num="100"; //new variable declared as string
		$num=$num+10; //implicit type conv by php into int
		echo gettype($num); //Now it will return int
		echo "<br  />";	
	    ?>
	</body>
</html>