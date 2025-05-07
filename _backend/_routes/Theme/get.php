<?php 
    //Add codes here...
    $result = execute_select("select * from theme where id = 1");
    json_response($result);

?>