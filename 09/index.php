<?php

$file = fopen('file.txt', 'r');

$count_of_words = 0;
$count_of_char = 0;
$count_of_spaces = 0;
while (!feof($file)) {
    $line = fgets($file);

    $words = count(explode(' ', $line));
    $count_of_words += $words;

    $count_of_spaces += count(array_filter(str_split($line), function ($item) {
        return $item === ' ';
    }));

    $count_of_char += count(array_filter(str_split($line), function ($item) {
        return $item !== ' ' && $item !== "\n";
    }));
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
    <div class="flex justify-center mt-5">
        <div class="w-1/2 ">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-center">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Words Count</th>
                                        <th scope="col" class="px-6 py-4">Char Counts</th>
                                        <th scope="col" class="px-6 py-4">Space Counts</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $count_of_words ?></td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $count_of_char ?></td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $count_of_spaces ?></td>

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