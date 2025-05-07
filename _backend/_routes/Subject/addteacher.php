<?php 
    //Add codes here...

    $newteach = post("newteach");
    $subid = post("subid");
    $courseid = post("courseid");

    $set = [
        "teacher" => $newteach
    ];

    $where = [
        "`subject`" => $subid,
        "coursemajor" => $courseid
    ];

    $result = execute_update("assignment", $set, $where);
    success_response($result);

?>