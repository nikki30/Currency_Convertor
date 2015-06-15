<html>
<head>
	<title>
		Associative Arrays with foreach!
	</title>
</head>
	<body>
		<?php
		   $arr=array(array("Name"=>"Nikki","Age"=>"18"),
			array("Name"=>"Ninu","Age"=>"19));

		 foreach($arr as $var)
         { 
		
			foreach($var as $attribute=>$info)
		    {
		    echo "$attribute: $info";
		    echo "<br />";
		    }
		    echo "<br />";
		  }
        ?>
	</body>
</html>

