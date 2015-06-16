        <?php 
		$host="localhost";
		$dbuser="admin";
		$pass="12345nik";
		$dbname="members";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if (mysqli_connect_errno())
			{die ("Connection Failed!". mysqli_connect_errno());
		    }
		    else {echo "Connected!";}
		    ?>

