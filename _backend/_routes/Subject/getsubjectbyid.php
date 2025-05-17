<?php 
    //Add codes here...

    $id = post("id");
    $sql = "SELECT * FROM subject WHERE id = '$id'";
    $result = execute_select($sql);
    json_response($result);

?>