<html>
<head>
	<title>
		Array Functions!
	</title>
</head>
	<body>
		<?php
		$arr=array(2,4,3,5,15);
		echo "Number of elements: ".count($arr);
		echo "<br />";
		echo "Maximum number: ".max($arr);
		echo "<br />";
		echo "Minimum number: ".min($arr);
		echo "<br />";
		echo "Sorted in ascending order: ";
		sort($arr);
	    print_r($arr);
		echo "<br />";
		echo "Sorted in Descending order: "; //sort() and rsort() make permanent changes to the $arr
	    rsort($arr);
	    print_r($arr);
		echo "<br />";
		echo "Arranging them with commas: ";
		echo implode(',',$arr);
		echo "<br />";
		echo "Consider the vowels as an array [A E I O U]: ";
		$vowels="A,E,I,O,U";
		print_r(explode(",",$vowels));
		echo "<br />";
		echo "Checking if the number 2 is in array: ";
		echo "<br />";
		echo in_array(2,$arr);
		echo "<br />";
		echo in_array(16,$arr);
		?>
	</body>
</html>

