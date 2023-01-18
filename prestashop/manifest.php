<?php
$to = '"To Display Name" ';
$subject = 'PHP mail test';
$message = 'This message was sent via PHP!' . PHP_EOL .
    'It should work ... and it does.' . PHP_EOL . PHP_EOL .
    'From Display Name' . PHP_EOL;
$headers = 'From: "From Display Name" ' . PHP_EOL .
    'Cc: "CC Display Name" ' . PHP_EOL .
    'X-Mailer: PHP-' . phpversion() . PHP_EOL;
if (mail($to, $subject, $message, $headers)) {
    echo 'mail() Success!' . "
\n";
}
else {
    echo 'mail() Failure!' . "
\n";
}
?>