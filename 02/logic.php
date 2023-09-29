<?php

$solution = $_POST['solution'];
$reverse_text = '';
if ($solution === 'recursive') {

    $reverse_text = reverseStr($_POST['words']);

} else {

    $str_count = count(str_split($_POST['words']));
    
    for ($i = $str_count - 1; $i >= 0; $i--) {

        $reverse_text .= $_POST['words'][$i];
    }
}


function reverseStr($str)
{
    $str_to_array = str_split($str);
    if (count($str_to_array) === 1) {
        return $str[0];
    }
    array_shift($str_to_array);
    return reverseStr(implode($str_to_array)) . $str[0];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="w-1/2 mt-5 text-center">
            <h1 class="text-[25px]"><?php echo $reverse_text ?></h1>
        </div>
    </div>
</body>

</html>