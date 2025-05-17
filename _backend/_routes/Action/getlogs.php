<?php 
    //Add codes here...
    $sql = "SELECT * FROM login_logs ORDER BY date_log desc";
    $result = execute_select($sql);
    json_response($result);
?>