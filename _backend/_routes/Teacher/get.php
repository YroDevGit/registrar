<?php 
    //Add codes here...
    use_model("Teacher");
    $result = Teacher::getAll();
    json_response($result);
?>