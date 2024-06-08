<header>

    <div class="bg-theme-clr-secondary text-on-theme-clr-secondary py-12">
        <div class="mg-main-container">
            <div class="flex flex-col items-center gap-4">
                <h1 class="sr-only">Breadcrumb list</h1>
                <ul class="breadcrumb | text-sm flex items-center">
                    <?php
                    $length = count($routes);
                    $i = 0;
                    while ($i < $length - 1) {
                        echo "<li><a href=\"#\">" . $routes[$i] . "</a></li>";
                        $i++;
                    }
                    ?>
                    <li>
                        <?php
                        echo  $routes[$length - 1];
                        ?>
                    </li>
                    <!-- 
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>About</li> -->
                </ul>
                <h1 class="text-3xl font-bold"><?php echo  $routes[$length - 1]; ?></h1>
                <!-- <h1>ABOUT</h1> -->
            </div>
        </div>
    </div>
</header>
