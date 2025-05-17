<?php 
    //Add codes here...
    $id = post("id");
    $sql = "update teachers set status = 0 where id = $id";
    $result = execute_query($sql);
    json_response($result);


?>