<?php 
    //Add codes here...
    $update = array(
        "username" => post("username"),
        "firstname" => post("firstname"),
        "lastname" => post("lastname"),
        "middlename" => post("middlename"),
        "contact" => post("contact"),
        "address" => post("address"),
        "modifydate" => now()
    );

    $where = array(
        "id" => post("id")
    );
    $result = execute_update("teachers", $update, $where);
    //die(json_encode($result));
    json_response($result);

?>