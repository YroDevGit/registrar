<?php 
    //Add codes here...
    use_library("Validate");
    $password = generate_token(5);
    $data = array(
        "firstname" => Validate::check("firstname", "Firstname","required"),
        "lastname" => Validate::check("lastname", "Lastname","required"),
        "middlename" => Validate::check("middlename", "Middlename","required"),
        "contact" => Validate::check("contact", "Contact","required"),
        "address" => Validate::check("address", "Address","required"),
        "username" => Validate::check("username", "Username","required"),
        "password" => $password
    );

    if(Validate::$failed){
        $err = [
            "code" => 400,
            "message" => "Please fill up all required fields",
            "errors" => Validate::$errors,
            "status" => "error"
        ];
        error_response($err);
    }


    $result = execute_insert("teachers", $data);
    json_response($result);

?>