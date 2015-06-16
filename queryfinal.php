        <?php 
		$host="localhost";
		$dbuser="admin";
		$pass="12345nik";
		$dbname="members";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if (mysqli_connect_errno())
			{die ("Connection Failed!". mysqli_connect_errno());
		    }
		    ?>

<html>
<head>
	<title>
		Query php
	</title>
</head>
	<body>
		<?php 
		$sql="SELECT * FROM members_table";
		$res=mysqli_query($conn,$sql);
		if(!$res)
			{ die ("Query failed!");
	        }
	    while($row=mysqli_fetch_row($res))
	    	{ var_dump($row);
	    	  echo "<br /><hr /><br />";
	    	}
	    	mysqli_free_result($res);
	    ?>
	</body>
</html>

<?php
mysqli_close($conn);
?>