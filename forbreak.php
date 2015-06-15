<html>
<head>
	<title>
		Break and Continue!
	</title>
</head>
	<body>
		<?php
		  echo "First we show BREAK stmt";
		  echo "<br />";
		  for($var=1;$var<=20;$var++)
		  	{if ($var==12)
		  		{break;
		  		}
		  		echo "$var";
		  		echo "<br />";
		  	}
		  	echo "We're out of loop!";
		  	echo "<br />";
		  	echo "<br />";
		  	echo "Now we show CONTINUE stmt";
		  	echo "<br />";
		  	 for($var=1;$var<=20;$var++)
		  	{if ($var==12)
		  		{continue;
		  		}
		  		echo "$var";
		  		echo "<br />";
		  	}
		  	echo "We're out of loop!";
		  	 ?>
	</body>
</html>

