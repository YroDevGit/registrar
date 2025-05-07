<?php 
    //Add codes here...
    $id = post("id");
    $quarter = post("quarter");
    $coursemajor = post("coursemajor");

    $sql = "SELECT a.coursemajor, s.`subject`, a.teacher, s.id AS 'sid', a.id AS 'aid', s.description, g.id AS 'gid', g.grade, g.student, g.quarter FROM assignment a LEFT JOIN subject s ON a.subject = s.id LEFT JOIN grades g ON s.id = g.subject AND g.student = ? AND g.quarter = ? WHERE a.coursemajor = ?;";
    $param = [$id, $quarter, $coursemajor];
    $result = execute_select($sql, $param);
    json_response($result);

?>