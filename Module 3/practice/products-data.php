<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Products</title>
    </head>
    <body>
        <form action="products-data.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" id="name" placeholder="Product Name"> </br>
            <input type="file" name="image" id="image" placeholder="Upload File"></br>
            <input type="text" name="price" id="price" placeholder="Product Price">
        </form>
    </body>
        <?php
            $products = [
                [
                    "name" => "Earthen Bottle",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg",
                    "price" => "$45",
                ],
                [
                    "name" => "Nomad Tumbler",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg",
                    "price" => "$60",
                ],
                [
                    "name" => "Focus Paper Refill",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg",
                    "price" => "$50",
                ],
                [
                    "name" => "Machined Mechanical Pencil",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg",
                    "price" => "$70",
                ],
                [
                    "name" => "Focus Card Tray",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-05.jpg",
                    "price" => "$40",
                ],
                [
                    "name" => "Focus Multi-Pack",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-06.jpg",
                    "price" => "$60",
                ],
                [
                    "name" => "Brass Scissors",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-07.jpg",
                    "price" => "$80",
                ],
                [
                    "name" => "Focus Carry Pouch",
                    "image" => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-08.jpg",
                    "price" => "$32",
                ],
            ];
        ?>
    </body>
</html>