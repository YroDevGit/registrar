<?php
$id = post("id");
$kr = intval(post("toggle"));

$update = array(
    "status" => $kr == 0 ? "1" : "0",
);
$where = array(
    "subject" => $id
);


$result = execute_update("assignment", $update, $where);

json_response($result);

?>