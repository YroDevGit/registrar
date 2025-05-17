<?php 
    //Add codes here...
    $filter = post("filter") ?? "";
    $scourse = post("scourse") ?? "";
    use_model("Students");
    $students = students::getStudents($filter, $scourse);
    json_response($students);


?>