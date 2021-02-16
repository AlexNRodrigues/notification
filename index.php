



<?php

require __DIR__."/lib_ext/autoload.php";

use Notification\Email;

$body = "
    
";

$novoEmail = new Email();

$novoEmail->sendMail(
    "Assunto de teste",
    "",
    "eteste369@gmail.com",
    "Alex Equipe",
    "alexnasscimento99@gmail.com",
    "Alex"
);


var_dump($novoEmail);
