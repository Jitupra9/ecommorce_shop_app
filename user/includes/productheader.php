<div class="w-full px-10 py-2 flex overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 space-x-5 text-center">
    <?php
    $categories = [
        'Phones', 'Groceries', 'Fashion', 'Electronics', 'Home',
        'Beauty', 'Ticket Booking', 'Toys', 'Books', 'Fitness', 
        'Health', 'Travel', 'Furniture', 'Stationery', 'Music', 
        'Gaming', 'Pets', 'Watches', 'Jewelry', 'Automobiles'
    ];
    
    foreach ($categories as $category) {
    ?>
    <div class="flex-shrink-0">
        <div class="images w-16 h-16 rounded-lg bg-gray-300 mb-2"></div>
        <p class="text-sm font-semibold"><?php echo $category; ?></p>
    </div>
    <?php
    }
    ?>
</div>
