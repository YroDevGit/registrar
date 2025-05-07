<?php 
    //Add codes here...
    $firstname = input('firstname');
    $lastname = input('lastname');
    $middlename = input('middlename');
    $type = decrypt(post("usertype"));

    $id = $firstname[0].$lastname[0].$middlename[0].date("Ymdhis");
    $user = array(
        'id' => $id,
        'username' => input('username'),
        'password' => input('password'),
        'firstname' => $firstname,
        'lastname' => $lastname,
        'middlename' => $middlename,
        'img' => input('img'),
        'coursemajor' => input('coursemajor') || 0,
        'status' => 0,
        'type' => $type,
        'createdate' => date('Y-m-d H:i:s'),
        'modifydate' => date('Y-m-d H:i:s'),
    ); 

    $result = execute_insert("users", $user);
    if($result['code']==SUCCESS){
        if($type=="student"){
            $data = array(
                "userid" => $id,
                "primaryed" => post("primaryed"),
                "pyear" => post("pyear"),
                "secondary" => post("secondary"),
                "syear" => post("syear"),
                "shs" => post("shs"),
                "shsyear" => post("shsyear"),
                "grades" => post("grades"),
            );
            execute_insert("details", $data);
        }
    }
    json_response($result);
?>