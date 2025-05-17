<?php 
    //Add codes here...
    $id = post("id");
    $sql = "update teachers set status = 1 where id = $id";
    $result = execute_query($sql);
    json_response($result);

?>