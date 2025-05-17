<?php 
    //Add codes here...
    $sql = "select count(*) as 'total' from teachers where status = 1";
    $result = execute_select($sql);
    json_response($result);
?>