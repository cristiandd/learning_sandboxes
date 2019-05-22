<?php 

$ts = strtotime("2001-09-11");
$ts = strtotime("1999/03/18");
$ts = strtotime("99-03-18");
$ts = strtotime("now");
$ts = strtotime("+1 day");
$ts = strtotime("+1 week");
$ts = strtotime("+1 year + 1 month + 1 week + 1 day + 1 hour + 1 minute + 1 second");
$ts = strtotime("-1 day");
$ts = strtotime("day");
$ts = strtotime("tomorrow");
$ts = strtotime("yesterday");
$ts = strtotime("today");

echo date("l(w): d/m/Y H:i:s", $ts);

 ?>