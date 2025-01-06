<nav class=" bg-blue-600 px-2 py-2 text-white">
    <div class=" w-full flex lg:space-x-10 sm:space-x-2 items-center justify-center">
        <h3 class=" text-white"><i><b>JituWeb</b></i></h3>
        <div class="input bg-gray-300 rounded-xl border-2 sm:w-4/6 lg:w-1/2">
            <input class="px-4 text-gray-400 py-1 rounded-md outline-none w-full" type="text"
                placeholder="search praduct">
        </div>
        <div class="border-2 px-3 py-1 rounded-md cursor-pointer ">
            <?php

                if(isset($_SESSION['user_data'])){
                 ?>
                <a href="user/includes/profile.php">
                    <span clas="border-2"><i class="fa-regular fa-user"></i></span>
                    <span><?php echo $_SESSION['user_data']['username'] ?></span>
                    </a>
                    <?php
                }else{
                    ?> <a href="login.php">
                    <span>LOGIN</span>
                    </a>
                    <?php
                }
            ?>
        </div>
        <div class="border-2 px-3 py-1 rounded-md cursor-pointer">
            <span clas="border-2"><i class="fa-solid fa-cart-plus"></i></span>
            <span>Cart</span>
        </div>
    </div>
</nav>