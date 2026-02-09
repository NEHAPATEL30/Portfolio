<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $to = "np1553156@gmail.com";   // aapka email
    $subject = "New Contact Message from Portfolio";

    $body = "
Name: $name
Email: $email
Phone: $phone
Address: $address

Message:
$message
";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message sending failed');</script>";
    }
}
?>
