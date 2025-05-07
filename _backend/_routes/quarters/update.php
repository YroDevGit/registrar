<?php
$stat = post("stat");
$id = post("id");

$sql = "update quarter set status = ? where id = ?";
$param = [$stat, $id];

$result = execute_query($sql, $param);

json_response($result);

?>