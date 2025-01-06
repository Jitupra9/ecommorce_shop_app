<div class="w-full bg-gray-50 py-10 px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Explore Our Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Best Electronics -->
        <div>
            <h3 class="text-xl font-semibold mb-4 text-blue-600">Best Electronics</h3>
            <div class="grid grid-cols-2 gap-4">
                <?php
                $electronics = [
                    ['name' => 'Smartphone X', 'price' => '$699', 'image' => 'path/to/image1.jpg'],
                    ['name' => '4K Smart TV', 'price' => '$899', 'image' => 'path/to/image2.jpg'],
                    ['name' => 'Gaming Laptop', 'price' => '$1200', 'image' => 'path/to/image3.jpg'],
                    ['name' => 'Bluetooth Speaker', 'price' => '$99', 'image' => 'path/to/image4.jpg'],
                ];
                foreach ($electronics as $product) {
                    ?>
                    <div class="bg-white p-4 shadow-lg rounded-lg relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                            class="w-full h-32 object-cover rounded-lg mb-2">
                        <h4 class="font-semibold"><?php echo $product['name']; ?></h4>
                        <p class="text-gray-600"><?php echo $product['price']; ?></p>
                        <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- New Launches -->
        <div>
            <h3 class="text-xl font-semibold mb-4 text-green-600">New Launches</h3>
            <div class="grid grid-cols-2 gap-4">
                <?php
                $newLaunches = [
                    ['name' => 'Smartwatch Pro', 'price' => '$299', 'image' => 'path/to/image5.jpg'],
                    ['name' => 'Noise Cancelling Headphones', 'price' => '$199', 'image' => 'path/to/image6.jpg'],
                    ['name' => 'Portable Power Bank', 'price' => '$49', 'image' => 'path/to/image7.jpg'],
                    ['name' => 'Home Automation Kit', 'price' => '$499', 'image' => 'path/to/image8.jpg'],
                ];
                foreach ($newLaunches as $product) {
                    ?>
                    <div class="bg-white p-4 shadow-lg rounded-lg relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                            class="w-full h-32 object-cover rounded-lg mb-2">
                        <h4 class="font-semibold"><?php echo $product['name']; ?></h4>
                        <p class="text-gray-600"><?php echo $product['price']; ?></p>
                        <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Row 2: Beauty, Fashion, and Makeup -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Beauty Products -->
        <div>
            <h3 class="text-xl font-semibold mb-4 text-pink-600">Beauty Products</h3>
            <div class="space-y-4">
                <?php
                $beauty = [
                    ['name' => 'Moisturizer', 'price' => '$25', 'image' => 'path/to/image9.jpg'],
                    ['name' => 'Face Serum', 'price' => '$35', 'image' => 'path/to/image10.jpg'],
                ];
                foreach ($beauty as $product) {
                    ?>
                    <div class="flex items-center space-x-4 p-4 bg-white shadow-lg rounded-lg relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                            class="w-16 h-16 rounded-lg object-cover">
                        <div>
                            <h4 class="font-semibold"><?php echo $product['name']; ?></h4>
                            <p class="text-gray-600"><?php echo $product['price']; ?></p>
                            <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Fashion -->
        <div>
            <h3 class="text-xl font-semibold mb-4 text-purple-600">Fashion</h3>
            <div class="space-y-4">
                <?php
                $fashion = [
                    ['name' => 'Leather Jacket', 'price' => '$99', 'image' => 'path/to/image11.jpg'],
                    ['name' => 'Sneakers', 'price' => '$79', 'image' => 'path/to/image12.jpg'],
                ];
                foreach ($fashion as $product) {
                    ?>
                    <div class="flex items-center space-x-4 p-4 bg-white shadow-lg rounded-lg relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                            class="w-16 h-16 rounded-lg object-cover">
                        <div>
                            <h4 class="font-semibold"><?php echo $product['name']; ?></h4>
                            <p class="text-gray-600"><?php echo $product['price']; ?></p>
                            <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Makeup -->
        <div>
            <h3 class="text-xl font-semibold mb-4 text-red-600">Makeup</h3>
            <div class="space-y-4">
                <?php
                $makeup = [
                    ['name' => 'Lipstick', 'price' => '$15', 'image' => 'path/to/image13.jpg'],
                    ['name' => 'Eyeshadow Palette', 'price' => '$45', 'image' => 'path/to/image14.jpg'],
                ];
                foreach ($makeup as $product) {
                    ?>
                    <div class="flex items-center space-x-4 p-4 bg-white shadow-lg rounded-lg relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                            class="w-16 h-16 rounded-lg object-cover">
                        <div>
                            <h4 class="font-semibold"><?php echo $product['name']; ?></h4>
                            <p class="text-gray-600"><?php echo $product['price']; ?></p>
                            <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                        </div>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Row 3: Mixed Categories -->
    <div class="w-full bg-gray-100 py-10 px-6">
        <h2 class="text-4xl font-bold text-center mb-10 text-indigo-600">Trending & Best Picks</h2>

        <!-- Mixed Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php
            $mixedProducts = [
                ['name' => 'Smartphone X', 'price' => '$699', 'image' => 'path/to/image1.jpg'],
                ['name' => 'Lipstick', 'price' => '$15', 'image' => 'path/to/image2.jpg'],
                ['name' => 'Gaming Mouse', 'price' => '$59', 'image' => 'path/to/image3.jpg'],
                ['name' => '4K Smart TV', 'price' => '$899', 'image' => 'path/to/image4.jpg'],
                ['name' => 'Camping Tent', 'price' => '$120', 'image' => 'path/to/image5.jpg'],
                ['name' => 'Fitness Band', 'price' => '$149', 'image' => 'path/to/image6.jpg'],
                ['name' => 'Moisturizer', 'price' => '$25', 'image' => 'path/to/image7.jpg'],
                ['name' => 'Bluetooth Speaker', 'price' => '$99', 'image' => 'path/to/image8.jpg'],
                ['name' => 'Noise Cancelling Headphones', 'price' => '$199', 'image' => 'path/to/image9.jpg'],
                ['name' => 'Leather Jacket', 'price' => '$99', 'image' => 'path/to/image10.jpg'],
                ['name' => 'Portable Power Bank', 'price' => '$49', 'image' => 'path/to/image11.jpg'],
                ['name' => 'Face Serum', 'price' => '$35', 'image' => 'path/to/image12.jpg'],
            ];

            foreach ($mixedProducts as $product) {
                ?>
                <!-- Product Card -->
                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold text-lg text-gray-800 truncate"><?php echo $product['name']; ?></h4>
                        <p class="text-indigo-500 font-bold mt-2"><?php echo $product['price']; ?></p>
                        <button
                            class="mt-4 bg-indigo-600 text-white text-sm py-2 px-4 rounded hover:bg-indigo-700 transition duration-300">
                            Add to Cart
                        </button>
                        <button
                            class="absolute top-2 right-2 bg-gray-800 text-white text-xs py-1 px-2 rounded hover:bg-gray-700 transition duration-300">
                            <a href="user/pages/product.php">Quick View</a>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>