<?php
$lat = post("lat");
$lon = post("long");
$id = post("id");
$manufacturer = shell_exec('wmic computersystem get manufacturer');
$model = shell_exec('wmic computersystem get model');
$device =trim($manufacturer)." ".trim($model);

$url = "https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=$lat&longitude=$lon&localityLanguage=en";

$options = [
    "http" => [
        "header" => "User-Agent: Basixs/1.0\r\n"
    ]
];
$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);
$data = json_decode($response, true);

$loc[] = $data['continent'] ?? "";
$loc[] = $data['countryCode'] ?? "";
$loc[] = $data['principalSubdivision'] ?? "";
$loc[] = $data['city'] ?? "";

$locate = implode(" ", $loc);
$insertlog = array(
    "user" => $id,
    "lat" => $lat,
    "`long`" => $lon,
    "device" => $device,
    "location" => $locate,
    "date_log" => date("Y-m-d H:i:s")
);

$log = execute_insert("login_logs", $insertlog);

$response = ["code"=>200, "status"=>"success", "data"=>$data, 'log'=>$log];

json_response($response);
?>
