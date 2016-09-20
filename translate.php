<?php

$translate = [
    'en_US'=>[
        'Name is empty'=>'Name is empty',
        'Name is to small'=>'Name is to small',
        'Email is empty'=>'Email is empty',
        'Description is empty'=>'Description is empty',
        'Description is to small'=>'Description is to small',
    ],
    'pt_BR'=>[
        'Name is empty'=>'Nome está vazio',
        'Name is to small'=>'Nome é muito curto',
        'Email is empty'=>'Email está vazio',
        'Description is empty'=>'Descrição está vazia',
        'Description is to small'=>'Descriçao é muito curta',
        'Mail hasn\'t been sent.'=>'Email não pode ser enviado',
    ],
];

$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);

return $translate[$locale] ?? null;
