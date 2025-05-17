<?php

$id = post("id");
$sql = "select * from coursemajor where id = '$id'";
$result = execute_select($sql);
json_response($result);
?>