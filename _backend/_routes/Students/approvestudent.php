<?php 
    //Add codes here...
    $stat = post("status");
    $id = post("id");
    $set = array(
        "status" => $stat,
        "modifydate" => date("Y-m-d H:i:s")
    );
    $where = array(
        "id" => $id
    );
    $result = execute_update("users", $set, $where);
    json_response($result);
?>