<html>
  <head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <style>
      body {
        font-family: 'Tangerine', serif;
        font-size: 48px;
        background:#ADD8E6;
        text-align:center;
      }
    </style>
  </head>
  <body>
<?php
if (isset($_POST['submitted']))
{
  include('mysql-connect.php');
  $curr= $_POST['curr'];
}  
$sql="SELECT curr_name,curr_rate,curr_time FROM mysite Where curr_name='$curr'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==0)
{
$file = 'latest.json';
$appId = '3af838236fe346c79ca01e62c5991caa';
$ch = curl_init("http://openexchangerates.org/api/{$file}?app_id={$appId}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Get the data:
$json = curl_exec($ch);
curl_close($ch);
// Decode JSON response:
$exchangeRates = json_decode($json);
// You can now access the rates inside the parsed object, like so:
printf(
    "<br /><br />1 %s in {$curr}: %s (as of %s)<br /><br /><br />",
    $exchangeRates->base,
    $exchangeRates->rates->{$curr},
    date('H:i jS F, Y', $exchangeRates->timestamp)
);
$exRate=$exchangeRates->rates->{$curr};
$timeRate=date('H:i jS F, Y', $exchangeRates->timestamp);
$sqlinsert= "INSERT INTO mysite (curr_name,curr_rate,curr_time) VALUES ('$curr','$exRate','$timeRate')";
 
    if(!mysqli_query($conn,$sqlinsert))
    {
      die('error in inserting');
    }
    else
    echo "1 record added to DB";
}
else
{$conn=mysqli_connect("localhost","admin","12345nik","members");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT curr_name,curr_rate,curr_time FROM mysite WHERE curr_time > timestampadd(hour, -1, now())";
if ($result=mysqli_query($conn,$sql))
{$sql="SELECT curr_name,curr_rate,curr_time FROM  mysite where curr_name='$curr' ORDER BY curr_time DESC LIMIT 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
printf ("1 USD is %s  %s  as of %s<br />",$row[1],$row[0],$row[2]);
    echo "<br /><br />Hi, Took this from DB";

}
}
mysqli_free_result($result);
mysqli_close($conn);
?>

</body>
</html>