<?php
$date = post("date");
$sql = "SELECT SUM(MONTH(u.createdate) = 1) AS Jan, SUM(MONTH(u.createdate) = 2) AS Feb, SUM(MONTH(u.createdate) = 3) AS Mar, SUM(MONTH(u.createdate) = 4) AS Apr, SUM(MONTH(u.createdate) = 5) AS May, SUM(MONTH(u.createdate) = 6) AS Jun, SUM(MONTH(u.createdate) = 7) AS Jul, SUM(MONTH(u.createdate) = 8) AS Aug, SUM(MONTH(u.createdate) = 9) AS Sep, SUM(MONTH(u.createdate) = 10) AS Oct, SUM(MONTH(u.createdate) = 11) AS Nov, SUM(MONTH(u.createdate) = 12) AS `Dec` FROM users u WHERE u.type = 'student' AND YEAR(u.createdate) = ?;";
$param = [$date];
$result =execute_select($sql, $param);
json_response($result);
?>