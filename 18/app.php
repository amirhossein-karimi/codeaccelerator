<?php

$employee = [

    [
        'name' => 'alireza',
        'unit' => 'it',
        'nationality_code' => '0314320409',
        'family' => 'mohamadi',
        'personal_code' => 413,
        'date_register' => date('Y-m-d'),
        'sallary' => 2563000
    ],
    [
        'name' => 'amir',
        'unit' => 'accounting',
        'nationality_code' => '0314323409',
        'family' => 'farzini',
        'personal_code' => 411,
        'date_register' => date('Y-m-d'),
        'sallary' => 4563000
    ],
    [
        'name' => 'mohamad',
        'unit' => 'accounting',
        'nationality_code' => '0214313409',
        'family' => 'alimi',
        'personal_code' => 415,
        'date_register' => date('Y-m-d'),
        'sallary' => 7563000
    ],
    [
        'name' => 'ali',
        'unit' => 'office',
        'nationality_code' => '0314120409',
        'family' => 'karimi',
        'personal_code' => 412,
        'date_register' => date('Y-m-d'),
        'sallary' => 2533000
    ]

];



foreach ($employee as $emp) {
    if (!is_dir($emp['unit'])) {
        mkdir($emp['unit']);
    }
    $file = fopen("{$emp['unit']}/{$emp['name']}.json", 'w');
    fwrite($file, json_encode($emp, JSON_PRETTY_PRINT));
}
