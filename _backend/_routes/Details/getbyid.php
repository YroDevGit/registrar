<?php 
    //Add codes here...
    $id = post("id");
    $sql = "select * from details where userid = '$id'";
    $result = execute_select($sql);
    json_response($result);

?>