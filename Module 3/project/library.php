<?php
    function displayProduct($product){
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