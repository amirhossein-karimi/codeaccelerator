<?php

system('clear');

$flag = true;
$users = [];
while ($flag) {


    system('clear');

    echo "Please Insert Name : " . PHP_EOL;
    $name = fgets(STDIN);


    system('clear');

    echo "Please Insert Family : " . PHP_EOL;
    $family = fgets(STDIN);

    system('clear');

    echo "Please Insert Phone Number : " . PHP_EOL;
    $phone = fgets(STDIN);

    system('clear');

    echo "Please Insert Email : " . PHP_EOL;

    $email = fgets(STDIN);

    system('clear');

    echo "If You want to continue Insert 1 else 0" . PHP_EOL;
    $value = fgets(STDIN);


    if ($value == 0) {
        $flag = false;
    }
    $users[trim($name)] = [
        'name' => trim($name),
        'email' => trim($email),
        'phone_number' => trim($phone),
        'family' =>  trim($family)
    ];
}

$file = fopen('users.json', 'w');
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
