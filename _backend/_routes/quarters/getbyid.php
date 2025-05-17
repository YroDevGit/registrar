<?php 
    //Add codes here...
    $id = post('id');
    $result = execute_select("SELECT * FROM quarter WHERE id = '$id' LIMIT 1");

    json_response($result);

?>