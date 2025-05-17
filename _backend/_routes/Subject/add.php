<?php 
    //Add codes here...
    use_library("validate");
    $coursemajor = post("coursemajor");
    $data = array(
        "subject" => Validate::check("subject", "Subject", "required"),
        "description" => Validate::check("description", "Description", "required")
    );
    if(Validate::$failed){
        $response = [
            "code" => getenv("error_code"),
            "status" => "Validation",
            "message" => "Please fill up all required fields",
            "errors" => Validate::$errors
        ];
        json_response($response);
    }
    start_transaction();
    $response = execute_insert("subject", $data);
    if($response['code']==SUCCESS){
        $id = $response['id'];
        $data = [
            "coursemajor" => $coursemajor,
            "subject" => $id,
            "date_createdd" => date("Y-m-d H:i:s"),
            "date_modifieds" =>date("Y-m-d H:i:s"),
            "status" => 1
        ];
        $resp = execute_insert("assignment", $data);
        if($resp['code'] == SUCCESS){
            commit_transaction();
            json_response([
                "code" => SUCCESS,
                "status" => "Success",
                "message" => "success",
                "subject" =>$response,
                "assignment" => $resp
            ]);
        } else{
            rollback_transaction();
            error_response($resp);
        }
    }else{
        rollback_transaction();
        error_response($response);
    }

    
?>