
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


$active_users = array_filter($users, function ($item) {
    return $item['status'] == true;
});

$deactive_users = array_filter($users, function ($item) {
    return $item['status'] == false;
});

var_dump($active_users , $deactive_users);

