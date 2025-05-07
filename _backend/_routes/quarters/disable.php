<?php 
    $id = post("id");

    $sql = "update quarter set status = 0 where id = ?";
    $param = [$id];

    $result = execute_query($sql, $param);

    json_response($result);

?>