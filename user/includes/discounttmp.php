<div class="w-full bg-gray-100 py-10">
    <h2 class="text-2xl font-bold text-center mb-6">Exclusive Discount Offers</h2>
    <div class="relative w-full overflow-hidden">
        <div id="offerSlider" class="flex transition-transform duration-700">
            <?php
            $products = [
                ['name' => 'Smartphone', 'discount' => '20% Off', 'image' => 'path/to/image1.jpg'],
                ['name' => 'Headphones', 'discount' => '30% Off', 'image' => 'path/to/image2.jpg'],
                ['name' => 'Washing Machine', 'discount' => '15% Off', 'image' => 'path/to/image3.jpg'],
                ['name' => 'Refrigerator', 'discount' => '25% Off', 'image' => 'path/to/image4.jpg'],
                ['name' => 'Laptop', 'discount' => '10% Off', 'image' => 'path/to/image5.jpg'],
            ];
            
            foreach ($products as $product) {
                ?>
                <div class="w-full flex-shrink-0 p-6 bg-white flex flex-col items-center">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold"><?php echo $product['name']; ?></h3>
                    <p class="text-red-500 font-bold text-xl"><?php echo $product['discount']; ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<script>
    const slider = document.getElementById('offerSlider');
    const slides = slider.children;
    const slideCount = slides.length;
    let currentIndex = 0;
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slideCount;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 2000);
</script>
<style>
  #offerSlider {
    display: flex;
    width: 100%;
  }
</style>
