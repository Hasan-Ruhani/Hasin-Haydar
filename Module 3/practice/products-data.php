<?php
    if(isset($_POST['submit'])) {
        // Establish a connection to the database
        $servername = "localhost";
        $username = "root";
        $password = " ";
        $dbname = "practice";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the form data
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        } else {
            // Insert the data into the database
            $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
            if (mysqli_query($conn, $sql)) {
                // Move the uploaded file to the "uploads" directory
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($image)) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Close the database connection
        mysqli_close($conn);
    }
?>

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
            <input type="text" name="price" id="price" placeholder="Product Price"></br>
            <input type="submit" value="Upload Image" name="submit">
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