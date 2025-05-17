<?php 
    //Add codes here...
    $courseid = post("courseid");
    $sql = "SELECT a.id, s.id 'subjectid', t.id 'teacherid', c.id 'courseid', c.course,c.major, c.`year`,a.`status` 'astatus', c.section, t.firstname, t.lastname, s.`subject`, s.`description`, a.date_createdd,a.date_modifieds  FROM assignment a LEFT join coursemajor c ON a.coursemajor = c.id LEFT join `subject` s ON a.`subject` = s.id LEFT join teachers t ON a.teacher = t.id WHERE  c.`status` = 1 and c.id = ? and s.status = 1 ORDER BY c.course, c.major, c.`year`, c.section";
    $param = [$courseid];

    $result = execute_select($sql, $param);

    json_response($result);

?>