<?php
$id = post("id");
$kr = intval(post("toggle"));

$update = array(
    "status" => $kr == 0 ? "1" : "0",
);
$where = array(
    "id" => $id
);


$result = execute_update("subject", $update, $where);

json_response($result);

?>