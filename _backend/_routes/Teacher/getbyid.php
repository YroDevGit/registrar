<?php 
    //Add codes here...
    $id = post("id");
    $query = "SELECT * FROM teachers WHERE id = '$id'";
    $result = execute_select($query);
    json_response($result);


?>