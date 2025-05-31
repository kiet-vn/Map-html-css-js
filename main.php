<?php
$lat=$_POST["lat"];
$lon=$_POST["lon"];
$user_agent=$_POST["user_agent"];
$platform=$_POST["platform"];
error_log("\033[32m|Lat: $lat| Lon: $lon|\033[0m");
error_log("\033[32m|user_agent:$user_agent|\033[0m");
error_log("\033[32m|platform:$platform|\033[0m");
exit;
?>
