<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
include './shared/functions/breadcrumb.php';

$home = new Breadcrumb("Home", "index.php");
$blog = new Breadcrumb("Blog", "blog.php");
$title = new Breadcrumb("POWER OUTAGE LOOMS ROUND THE NATION AFTER POWER GRID COLLAPSE", "");

$routes = array(
    $home,
    $blog,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white text-on-theme-clr-white py-12">
        <div class="mg-main-container">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-8">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                            <a href="#" class="block max-h-96 overflow-hidden">
                                <img class="rounded-t-lg" src="https://images.pexels.com/photos/733856/pexels-photo-733856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-full" />
                            </a>
                            <div class="p-4 lg:p-6">
                                <div class="flex items-center gap-8 text-sm mb-2">
                                    <span><i class="far fa-calendar me-2"></i>May 10, 2021</span>
                                    <span><i class="far fa-user me-2"></i>By Admin</span>
                                </div>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, Quis ipsum suspendisse Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag.
                                    <br>
                                    <br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, amet id, ab reprehenderit voluptate, placeat earum ut unde sint quaerat perferendis aliquam vel officia deleniti. Atque sequi facere exercitationem reprehenderit, officiis ad optio, doloribus suscipit a hic, quam temporibus quod sit magni fuga voluptatem aliquam ipsam veritatis doloremque veniam qui.
                                </p>

                            </div>
                        </div>

                        <div class="col-span-12 block p-4 lg:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

                            <h5 class="mb-6 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Tags
                            </h5>

                            <ul class="flex flex-wrap gap-2 text-xs">
                                <li>
                                    <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Electricity</a>
                                </li>
                                <li>
                                    <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Nationwide</a>
                                </li>
                                <li>
                                    <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Power grid</a>
                                </li>
                                <li>
                                    <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Collapse</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="h-8"></div>
                    <!-- Pagination -->
                    <ul class="text-sm flex items-center justify-between gap-4">
                        <li class="hidden lg:block">
                            <a href="#">
                                <span class="block font-semibold mb-4">Previous</span>
                                <div class="flex items-center gap-2">
                                    <div class="rounded-lg w-10 lg:w-12 overflow-hidden">
                                        <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                    </div>
                                    <div class="text-on-theme-clr-light">
                                        <p class="font-semibold">Fixing Solar panel of a client</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="lg:text-right block font-semibold mb-4">Next</span>
                                <div class="flex items-center gap-2">
                                    <div class="rounded-lg w-10 lg:w-12 overflow-hidden">
                                        <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                    </div>
                                    <div class="text-on-theme-clr-light">
                                        <p class="font-semibold">Fuel Scarcity and hike in price may cause slow ...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-4">
                    <ul class="grid grid-cols-12 gap-4">
                        <li class="col-span-12">

                            <div class="block p-4 lg:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

                                <h5 class="mb-6 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    Recent post
                                </h5>
                                <ul class="flex flex-col gap-4">
                                    <li>
                                        <a href="#">
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="rounded-lg w-10 lg:w-16 overflow-hidden">
                                                    <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="text-xs flex items-center justify-between flex-wrap gap-2 lg:gap-8">
                                                        <span><i class="fas fa-calendar me-2"></i>May 10, 2021</span>
                                                        <span><i class="fas fa-user me-2"></i>By Admin</span>
                                                    </div>
                                                    <h5 class="font-semibold">Fixing Solar panel of a client</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="rounded-lg w-10 lg:w-16 overflow-hidden">
                                                    <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="text-xs flex items-center justify-between flex-wrap gap-2 lg:gap-8">
                                                        <span><i class="fas fa-calendar me-2"></i>May 10, 2021</span>
                                                        <span><i class="fas fa-user me-2"></i>By Admin</span>
                                                    </div>
                                                    <h5 class="font-semibold">Fixing Solar panel of a client</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="col-span-12">

                            <div class="block p-4 lg:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

                                <h5 class="mb-6 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    Our tags
                                </h5>

                                <ul class="flex flex-wrap gap-2 text-xs">
                                    <li>
                                        <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Electricity</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Nationwide</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Power grid</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block text-nowrap p-2 bg-theme-clr-light hover:bg-theme-clr-light/50 rounded">Collapse</a>
                                    </li>
                                </ul>

                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</main>









<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->