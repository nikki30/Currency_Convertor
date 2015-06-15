<html>
<head>
	<title>
		Array pointers!
	</title>
</head>
	<body>
		<?php
		 $arr=[1,4,3,22,34,54,32,3];
		 echo "Displaying all the numbers in array <br />";
		 while (current($arr)!=null)
		  	{echo current($arr);
		     echo "<br />";
		  	 next($arr);
		    }
		 echo "Last array element : ";
         echo end($arr);
         echo "<br />";
         echo "First array element: ";
         echo reset($arr);
		 ?>
	</body>
</html>

