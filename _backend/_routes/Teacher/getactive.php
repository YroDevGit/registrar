<?php 
    //Add codes here...
    use_model("Teacher");
    $result = Teacher::getActive();
    json_response($result);
?>