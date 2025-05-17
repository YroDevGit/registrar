<?php 
    //Add codes here...
    $sql = "SELECT COUNT(DISTINCT c.course) as total FROM coursemajor c WHERE c.`status` = 1;";
    $result = execute_select($sql);
    json_response($result);

?>