<?php 
    //Add codes here...
    $username = input("username");
    $password = input("password");

    $sql = "select * from teachers where username = ? and password = ?";
    $param = [$username, $password];

    $result = execute_select($sql, $param);
    json_response($result);

?>