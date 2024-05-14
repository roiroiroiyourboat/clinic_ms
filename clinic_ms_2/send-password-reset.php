<?php 
    $email = $_POST["email"];
    $code = bin2hex(random_bytes(16));
    $code_hash = hash("sha256", $code);
    
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);
    $mysqli = require __DIR__ . "/connection.php";

    $sql = "UPDATE users
            SET code = ?
                code_expires = ?
            WHERE email = ?";

    $stmt = $mysqli->prepare($sql);

    $stmt-> bind_param("sss", $code, $expiry, $email);

    $stmt->excute();

    if($mysqli->affected_rows) {
        
    }

?>