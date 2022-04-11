<?php
$_POST = json_decode(file_get_contents("php://input"),true);

if (!isset($_POST['submit'])) {
    return;
}

$name    = $_POST['name'] ?? '';
$society = $_POST['society'] ?? '';
$phone   = $_POST['phone'] ?? '';
$email   = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$to      = 'contact@jagullo.fr';
$from    = 'noreply@jagullo.fr';
$subject = 'Demande sur jagullo.fr du ' . date('d/m/Y');

$html = <<<EOD
<html>
    <head>
        <title>Nouvelle demande sur jagullo.fr</title>
    </head>
    <body style="width:100vw;height:100vh;display:flex;flex-direction:column;justify-content:flex-start;align-items:center;font-size:62.5%;background-color:#f7f7f7;margin:0;padding:0;">
        <div style="width:500px;font-family:Arial, sans-serif;font-size:.7rem;border:1px solid #d0d0d0;background-color:#fafafa;padding:20px;margin-top:30px;">
            <h1 style="margin-top:0;">Nouvelle demande sur jagullo.fr</h1>
            <h2>Nom :</h2>
            <p style="font-size:.9rem;">$name</p>
            <hr style="height:1px;border:0;border-top:1px solid #d0d0d0;">
            <h2>Société :</h2>
            <p style="font-size:.9rem;">$society</p>
            <hr style="height:1px;border:0;border-top:1px solid #d0d0d0;">
            <h2>Téléphone :</h2>
            <p style="font-size:.9rem;">$phone</p>
            <hr style="height:1px;border:0;border-top:1px solid #d0d0d0;">
            <h2>Email :</h2>
            <p style="font-size:.9rem;">$email</p>
            <hr style="height:1px;border:0;border-top:1px solid #d0d0d0;">
            <h2>Message :</h2>
            <p style="font-size:.9rem;margin-bottom:0;">$message</p>
        </div>
        <div style="font-family:Arial, sans-serif;font-size:1.25rem;color:#a1a1a1;margin-top:20px;">Al Hamdoullilahi</div>
    </body>
</html>
EOD;

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: '.$from;

if (mail($to, $subject, $html, implode("\r\n", $headers))) {
    echo 1;
} else {
    echo 0;
}

return;