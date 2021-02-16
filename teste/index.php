



<?php

require __DIR__ . "/../lib_ext/autoload.php";

use Notification\Email;

$body = "
    
";

$novoEmail = new Email(
        2,
        'smtp.gmail.com',
        'eteste369@gmail.com',
        'PgUp1teste369',
        'ssl',
        '465',
        'eteste369@gmail.com',
        'Alex Equipe');

$novoEmail->sendMail(
    "Assunto de teste",
    "E-mail teste",
    "eteste369@gmail.com",
    "Alex Equipe",
    "alexnasscimento99@gmail.com",
    "Alex"
);


var_dump($novoEmail);
