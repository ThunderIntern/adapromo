<?php
return [

    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.sendgrid.net'),

    'port' => env('MAIL_PORT', 587),

    'from' => ['address' => 'id.kidzo@gmail.com', 'name' => 'AdaPromo'],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,
];
?>