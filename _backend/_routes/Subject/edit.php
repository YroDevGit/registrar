<?php 
    //Add codes here...
    $id = post("subjectid");
    $subject = post("subject");
    $description = post("description");

    $set = array(
        "subject" => $subject,
        "description" => $description
    );

    $where = array(
        "id" => $id
    );

    $result = execute_update("subject", $set, $where);

    json_response($result);

?>