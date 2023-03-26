<?php
if(isset($_POST['submit'])){
    $to = "paulbringspepper@gmail.com"; // Agrega aquí tu dirección de correo electrónico
    $subject = "Nuevo registro";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    echo "Tu mensaje ha sido enviado correctamente.";
}
?>
