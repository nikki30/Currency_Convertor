<html>
<head>
	<title>
    Largest of three numbers!
	</title>
	<body>
		<?php
		$a=70;
		$b=30;
		$c=100;
		if ($a>$b)
			{if ($a>$c)
				echo "Yes, $a is the greatest!";
			else
			    echo "$c is the greatest!";
			}

		elseif($b>$c)
		{echo "$b is the greatest!";
        }
        else 
        {echo "$c is the greatest!";
        }
        echo "<br  />";	
	    ?>
	</body>
</html>