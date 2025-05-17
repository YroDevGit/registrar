<?php

    $sql = "select * from coursemajor";
    $result = execute_select($sql);
    json_response($result);

?>