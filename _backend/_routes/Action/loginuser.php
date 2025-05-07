<?php 
    //Add codes here...

    use_library("Validate");
    
    Validate::check("username", "username", "required|email");
    Validate::check("password", "pass", "required");
    if(Validate::$failed){
        json_response(["code"=>4, "message"=>"Validation failed", "errors"=>Validate::$errors]);
    }
    $sql = "select * from users where username = ? and password = ?";
    $param = array(
        input("username"),
        input("password")
    );
    $result = execute_select($sql, $param);
    if($result['code']==SUCCESS && ! empty($result['firstrow'] ?? [])){
        $frow = $result['firstrow'];
        $_SESSION['fullname'] = $frow['firstname']." ".$frow['middlename']." ".$frow['lastname'];
        $_SESSION['id'] = $frow['id'];
        $_SESSION['img'] = $frow['img'];
        $_SESSION['username'] = $frow['username'];
        $_SESSION['coursemajor'] = $frow['coursemajor'];
    }
    if(post("notificationsEnabled") && $result['code']==SUCCESS){
        unset($result['firstrow']['img']);
        unset($result['firstrow']['phone']);
        unset($result['firstrow']['address']);
        unset($result['firstrow']['createdate']);
        unset($result['firstrow']['modifydate']);
        json_response($result);
    }
    
    json_response($result);

?>