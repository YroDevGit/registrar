<?php 
    //Add codes here...
    $id = post("id");
    $query = "SELECT s.id, s.`subject`,a.coursemajor, s.`description`, t.id 'teacherid', t.firstname, t.lastname, t.contact, a.date_createdd, a.`status` FROM assignment a, `subject` s, teachers t WHERE a.`subject` = s.id AND a.teacher = t.id and a.coursemajor = ? order by s.`subject` asc";
    $param = [$id];
    $result = execute_select($query, $param);
    json_response($result);

?>