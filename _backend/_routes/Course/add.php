<?php 
    //Add codes here...
    $course = input('course');
    $major = input('major');
    $year = input('year');
    $section = input('section');
    $quarter = input('quarter');

    $insert = array(
        'course' => $course,
        'major' => $major,
        'year' => $year,
        'section' => $section,
        'sem' => $quarter,
        'status' => 1,
    );
    
    $result = execute_insert("coursemajor", $insert);
    json_response($result);

?>