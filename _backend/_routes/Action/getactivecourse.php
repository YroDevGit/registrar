<?php
use_model("Courses");
$activeCourse = Courses::get(1);
json_response($activeCourse);

?>