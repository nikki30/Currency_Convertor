<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "admin";
$password = "12345nik";
$dbname = "members";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT curr_name, curr_rate FROM mysite";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   " One USD equals " . $row["curr_rate"] ." ". $row["curr_name"]. "<br />";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>  

</body>
</html>