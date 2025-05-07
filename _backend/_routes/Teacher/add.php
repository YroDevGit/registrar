<?php 
    //Add codes here...
    $password = generate_token(5);
    $data = array(
        "firstname" => input("firstname"),
        "lastname" => input("lastname"),
        "middlename" => input("middlename"),
        "contact" => input("contact"),
        "address" => input("address"),
        "username" => input("username"),
        "password" => $password
    );


    $result = execute_insert("teachers", $data);
    json_response($result);

?>