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
                        echo "<li><a href=\"". $routes[$i]->url ."\">" . $routes[$i]->title . "</a></li>";
                        $i++;
                    }
                    ?>
                    <li>
                        <?php
                        echo  $routes[$length - 1]->title;
                        ?>
                    </li>
                </ul>
                <h1 class=" 
                <?php
                if ($textSize) {
                    echo "$textSize ";
                } else {
                    echo "text-3xl ";
                };
                if ($fontWeight) {
                    echo "$fontWeight ";
                } else {
                    echo "font-bold ";
                };
                if ($textTransform) {
                    echo "$textTransform ";
                }

                ?>
                "><?php echo  $routes[$length - 1]->title; ?></h1>
                <!-- <h1>ABOUT</h1> -->
            </div>
        </div>
    </div>
</header>