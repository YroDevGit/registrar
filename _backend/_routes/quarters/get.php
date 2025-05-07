<?php
$here = post("here");
if($here){
    $sql = "select * from quarter order by id desc";
}else{
    $sql = "select * from quarter where status = 1 order by id desc";
}


$result = execute_select($sql);

json_response($result);

?>