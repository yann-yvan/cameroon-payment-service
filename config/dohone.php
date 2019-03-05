<?php

return [
    /*
     * Start transaction
     */
    'start' => [
        'rH' => 'XXXXXXXX',
        'rDvs' => 'XAF',
        'source' => env('APP_NAME'),
        'logo' => asset('assets/images/logo.png'),
        "endPage" => "https://www.e-afrika.fr",
        "notifyPage" => "https://www.e-afrika.fr",
        "cancelPage" => "https://www.e-afrika.fr",
        "cmd" => "start"
    ]
];
