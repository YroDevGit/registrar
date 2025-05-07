<?php

$id = post("id");

$sql = "delete from users where id = '$id'";
$result = execute_query($sql);
json_response($result);

?>