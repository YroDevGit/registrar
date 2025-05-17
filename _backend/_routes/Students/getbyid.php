<?php 
    //Add codes here...
    $id = input("id");

    $sql = "select * from users where id = ?";
    $param = [$id];

    $result = execute_select($sql, $param);

    json_response($result);
?>