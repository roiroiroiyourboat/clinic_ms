<?php
// forgot-password.php

require_once 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(50));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $sql = "UPDATE users SET token = ?, token_expiry = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$token, $expiry, $email]);

        $url = 'http://' . $_SERVER['HTTP_HOST'] . '/reset-password.php?token=' . $token;

        // Send email with password reset link
        $to = $email;
        $subject = 'Password Reset Request';
        $message = '
				Please click on the following link to reset your password.<br><br>
				<a href="' . $url . '">' . $url . '</a><br><br>
				This link expires in 1 hour.<br><br>
				If you did not request a password reset, please ignore this email and your password will remain unchanged.
			';
        $headers = 'From: noreply@example.com' . "\r\n" .
            'Reply-To: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo 'A password reset link has been sent to your email address.';
        } else {
            echo 'Error sending the password reset link.';
        }
    } else {
        echo 'User not found.';
    }
}
?>