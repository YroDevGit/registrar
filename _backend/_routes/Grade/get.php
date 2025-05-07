<?php 
    //Add codes here...
    $coursemajor = post("coursemajor");
    $subject = post("subject");
    $quarter = post("quarter");
    $sql = "SELECT u.id AS 'userid', u.firstname, u.lastname, u.middlename, u.username, u.phone, a.coursemajor, a.subject, a.teacher, g.subject AS 'gsubject', u.coursemajor AS 'gcoursemajor', g.student, g.grade, g.quarter FROM users u LEFT JOIN coursemajor c ON u.coursemajor = c.id LEFT JOIN assignment a ON c.id = a.coursemajor AND a.subject = ? LEFT JOIN grades g ON u.id = g.student AND g.subject = ? AND g.quarter = ? LEFT JOIN QUARTER q ON g.quarter = q.id WHERE u.type = 'student' AND u.status = 1 AND u.coursemajor = ? ORDER BY u.lastname, u.firstname ASC;";
    $param = [ $subject, $subject, $quarter,$coursemajor];
    $result = execute_select($sql, $param);
    json_response($result);

?>