<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $from = 'From: BenWalko.com';
    $to = 'bwalko1@gmail.com';
    $subject = 'Contact Form Submission';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
    echo ‘

    Thank you for your email!

    ‘;
    } else {
    echo ‘

    Oops! An error occurred. Try sending your message again.

    ‘;
    }
}
?>