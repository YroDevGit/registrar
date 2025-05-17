<?php 
    //Add codes here...
    $stat = post("status");
    $id = post("id");
    $course = post("coursemajor");

    $history = array(
        "student" => $id,
        "coursemajor" => $course,
        "date_added" => now(),
        "status" => 1
    );
    $addhistory = execute_insert("coursehistory", $history);

    if($addhistory['code'] != SUCCESS){
        json_response($addhistory);
    }
    
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