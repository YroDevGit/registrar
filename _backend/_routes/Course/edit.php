<?php 
    //Add codes here...
    $id = post("id");
    $quarter = post("quarter");

    $data = postdata();

    unset($data['id']);
    unset($data['quarter']);

    $data['sem'] = $quarter;

    $set = $data;
    $where = array(
        'id' => $id
    );

    $result = execute_update("coursemajor", $set, $where);

    json_response($result);

?>