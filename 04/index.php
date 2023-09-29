<?php

$file = fopen('file.txt', 'r');

$words_count = 0;
$line_with_more_than_four_words = 0;
while (!feof($file)) {

    $line = fgets($file);
    $words = explode(' ', $line);
    $words_count += count($words);

  
    if (count($words) > 4) {
        $line_with_more_than_four_words++;
    }
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
                                        <th scope="col" class="px-6 py-4">Line with more than 4 words</th>
                                    

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $words_count ?></td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $line_with_more_than_four_words ?></td>
                                  
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