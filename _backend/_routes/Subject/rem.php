<?php 
    //Add codes here...
    $sql = "update subject set status = 0 where id = ?";
    $param = [post("id")];
    $result = execute_query($sql, $param);
    json_response($result);

?>