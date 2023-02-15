<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased font-sans">

        <div class="bg-white">

            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl mb-20">Products</h2>

                <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <?php
                    include_once("data.php");
                    foreach($products as $product){
                ?>
                <a href="#" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                        <img src="<?php echo $product['image'] ?>" class="h-full w-full object-cover object-center group-hover:opacity-75"> 
                        <!-- alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." -->
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700"><?php echo $product['name']; ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?php echo $product['price']; ?></p>
                </a>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
</body>
</html>