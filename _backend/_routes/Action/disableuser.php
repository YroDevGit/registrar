<?php
$id = post("id");
$sql = "update users set status = 2 where id = ?";
$param = array(
    $id
);
$result = execute_query($sql, $param);
json_response($result);
?>