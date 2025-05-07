<?php 
    //Add codes here...
    use_model("Students");
    $students = students::getStudents();
    json_response($students);


?>