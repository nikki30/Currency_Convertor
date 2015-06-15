<html>
<head>
	<title>
		Function multiple returns!
	</title>
</head>
	<body>
		<?php
	     function Hypo($b,$p)
		{$H=sqrt(pow($b,2)+$p*$p);
	     $Peri=$H+$b+$p;
	     return array($H,$Peri);
	     		}
	    $arr=Hypo(5,4);
	    echo "The Hypotenuse of this triangle is :".$arr[0];
	    echo "<br />";
		echo "The perimeter is: ".$arr[1];
	   	?>
	</body>
</html>

