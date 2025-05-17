<?php 
    //Add codes here...
    $sql = "select count(*) as 'total' from users where type = 'student' and status = 1";
    $result = execute_select($sql);
    json_response($result);

?>