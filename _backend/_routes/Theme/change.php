<?php 
    //Add codes here...
    $theme = get('theme');
    $result = execute_query("update theme set theme = '$theme' where id = 1");
    json_response($result);

?>