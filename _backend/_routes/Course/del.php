<?php 
    //Add codes here...
    $id = post("id");
    $status = post("stat");

    $set = array(
        "status" => $status
    );

    $where = array(
        "id" => $id
    );

    $result = execute_update("coursemajor", $set, $where);

    json_response($result);

?>