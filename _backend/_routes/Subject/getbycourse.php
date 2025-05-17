<?php 
    //Add codes here...
    $coursemajor = post("coursemajor");
    $sql = "SELECT a.id 'aid', s.id 'sid', s.`subject`, s.`description`, a.coursemajor FROM assignment a LEFT JOIN `subject` s ON a.`subject` = s.id WHERE a.coursemajor = ? and a.status = 1";
    $param = [$coursemajor];

    $result = execute_select($sql, $param);

    json_response($result);

?>