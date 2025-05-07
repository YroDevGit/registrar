<?php 
    //Add codes here...
    use_library("Validate");
    $coursemajor = post("coursemajor");
    $id = post("id");
    $subject = post("subject");
    $quarter = post("qrt");
    $grade = Validate::check("grade", "Grade", "required|numeric");
    if(Validate::$failed){
        json_response(["code"=>-1, "status"=>"failed", "message"=>"No grade", "data"=>Validate::$errors]);
    }
    $param = [$subject,$id, $quarter];
    $res = execute_query("delete from grades where subject = ? and student = ? and quarter = ?", $param);

    if($res['code']!=SUCCESS){
        json_response(["code"=>$res['code'], 'status'=>"failed", 'message'=>$res['message'], "lastquery"=>$res['lastquery']]);
    }

    $data = array(
        "subject" => $subject,
        "student" => $id,
        "grade" =>$grade,
        "status" => 1,
        "quarter" => $quarter
    );

    $api = execute_insert("grades", $data);
    json_response($api);


?>