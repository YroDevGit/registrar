<?php 
    $id = input("quarter");
    $desc = input("description");

    $insert = array(
        "id" => $id,
        "description" => $desc,
        "date_added" => date("Y-m-d H:i:s")
    );

    $result = execute_insert("quarter", $insert);

    json_response($result);

?>