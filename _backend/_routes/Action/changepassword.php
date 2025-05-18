<?php
$id = post("userId");
$currentPassword = post("currentPassword");
$newPassword = post("newPassword");
$confirmPassword = post("confirmPassword");

$sql = "SELECT * FROM users WHERE id = ?";
$check = execute_select($sql, array($id));

if($check['code']!=SUCCESS){
    $response = [
        "code" => -1,
        "message" => "User not found",
        "data" => null,
        "error" => "error",
        "result" => $check
    ];
    json_response($check);
}

$response = null;

if ($currentPassword==$check['firstrow']['password']) {
    if ($newPassword === $confirmPassword) {
        $hashedPassword = $newPassword;
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $result = execute_query($sql, array($hashedPassword, $id));
        
        if ($result['code'] == SUCCESS) {
            $response = [
                "code" => SUCCESS,
                "message" => "Password changed successfully",
                "data" => null,
                "error" => null,
                "result" => $result
            ];
        } else {
            $response = [
                "code" => -1,
                "message" => "Failed to change password",
                "data" => null,
                "error" => "error",
                "result" => $result
            ];
        }
    } else {
        $response = [
            "code" => -1,
            "message" => "New password and confirm password do not match",
            "data" => null,
            "error" => null,
            "result" => null
        ];
    }
} else {
    $response = [
        "code" => -1,
        "message" => "Current password is incorrect",
        "data" => null,
        "error" => null,
        "result" => null
    ];
}

json_response($response);


?>