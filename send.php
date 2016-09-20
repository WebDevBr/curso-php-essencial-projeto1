<?php

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("This request is invalid");
    }

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $description = filter_input(INPUT_POST, 'description');

    if (!$name) {
        throw new Exception("Name is empty");
    }

    if (strlen($name) <= 3) {
        throw new Exception("Name is to small");
    }

    if (!$email) {
        throw new Exception("Email is empty");
    }

    if (!$description) {
        throw new Exception("Description is empty");
    }

    if (strlen($description) <= 10) {
        throw new Exception("Description is to small");
    }

    include __DIR__.'/vendor/autoload.php';

    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();

    $mail = new PHPMailer;

    $mail->isSMTP();

    $mail->Host = getenv('SMTP_HOST');
    $mail->SMTPAuth = true;
    $mail->Username = getenv('SMTP_USERNAME');
    $mail->Password = getenv('SMTP_PASSWORD');
    $mail->Port= getenv('SMTP_PORT');

    $mail->From = $email;
    $mail->FromName = $name;
    $mail->addAddress(getenv('SMTP_RECIPIENT'));
    $mail->isHTML(true);

    $mail->Subject = getenv('SMTP_SUBJECT');
    $mail->Body = sprintf(file_get_contents(__DIR__.'/body.html'), $name, $email, $description);

    if (!$mail->send()) {
        include __DIR__.'/MailException.php';
        throw new MailException($mail->ErrorInfo);
    }

    header('location: '.getenv('SMTP_SUCCESS_REDIRECT'));
} catch (MailException $e) {
    $translate = include __DIR__.'/translate.php';
    echo $translate['Mail hasn\'t been sent.'];
    echo '<br>';
    echo $e->getMessage();

    die();
} catch (Exception $e) {
    $translate = include __DIR__.'/translate.php';
    echo $translate[$e->getMessage()] ?? $e->getMessage();
    die();
}
