<?php
$id = post("userid");

$sql = "select firstname, lastname, middlename, phone, coursemajor, address from users where id = ?";
$param = [$id];

$result = execute_select($sql, $param);

json_response($result);

?>