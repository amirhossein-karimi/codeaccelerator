<?php

$letters = 0;
$digits = 0;
$special = 0;

$words = str_replace(' ', '', $_POST['words']);

foreach (str_split($words) as $char) {

    if (ctype_digit($char)) {
        $digits++;
    } else if (ctype_alpha($char)) {
        $letters++;
    } else {
        $special++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeaccelerator - 01</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center mt-5">
        <div class="w-1/2 ">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-center">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Number of letters</th>
                                        <th scope="col" class="px-6 py-4">Number of Digits</th>
                                        <th scope="col" class="px-6 py-4">Number of Special Char</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $letters ?></td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $digits ?></td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $special ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>