<?php

$texts = $_POST['words'];
$upper = 0;
$lower = 0;

foreach (str_split($texts) as $char) {

    if (ctype_lower($char)) {
        $lower++;
    } else if (ctype_upper($char)) {
        $upper++;
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
    <div class="w-1/2 ">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light text-center">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Number of Lower Chars</th>
                                    <th scope="col" class="px-6 py-4">Number of Upper Chars</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $lower ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $upper ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>