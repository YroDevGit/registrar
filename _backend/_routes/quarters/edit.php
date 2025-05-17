<?php 
    //Add codes here...
    $id = post('id');
    $quarter = post('quarter');
    $description = post('description');

    $set = array(
        //'id' => $quarter,
        'description' => $description
    );

    $where = array(
        'id' => $id
    );

    $result = execute_update('quarter', $set, $where);

    json_response($result);

?>