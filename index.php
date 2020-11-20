<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date = new DateTime();
$date->sub(new DateInterval('P1D'));
echo "yesterday is:" . $date->format('Y-m-d')."<br>";

echo "Today is: " . date("Y-m-d")."<br>";
  

date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "The time is " . date("h:i:sa");

?>
</body>
</html>