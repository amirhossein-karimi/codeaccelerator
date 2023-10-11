
<?php
$users = [
    [
        'name' => 'amir',
        'family' => 'karimi',
        'status' => true
    ],
    [
        'name' => 'mohamad',
        'family' => 'rezayi',
        'status' => false
    ],
    [
        'name' => 'ali',
        'family' => 'fazaeli',
        'status' => true
    ],
    [
        'name' => 'amir',
        'family' => 'mohamadi',
        'status' => true
    ],
    [
        'name' => 'sasan',
        'family' => 'akbari',
        'status' => false
    ]
];


$active_users = [];
$deactive_users = [];
foreach ($users as $key => $value) {
    if ($value['status']) {
        array_push($active_users, $value);
    }
    else  {
        array_push($deactive_users, $value);
    }
}

var_dump($deactive_users);
