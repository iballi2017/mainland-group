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
$title = new Breadcrumb("Testimonials", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white py-12 lg:py-20">
        <div class="mg-main-container max-w-4xl mx-auto">
            <h2 class="sr-only">Testimonials</h2>
            <ul class="flex flex-col items-center gap-4">
                <li>
                    <blockquote class="flex flex-col gap-4 text-sm shadow bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="text-center">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h3 class="font-semibold">Paul Davids</h3>
                            <p>Digital marketer</p>
                        </div>
                        <div class="text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, Quis ipsum suspendisse </p>
                        </div>
                    </blockquote>
                </li>
                <li>
                    <blockquote class="flex flex-col gap-4 text-sm shadow bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="text-center">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h3 class="font-semibold">Benjamin Afafa</h3>
                            <p>Software engineer</p>
                        </div>
                        <div class="text-center">
                            <p>Vero, atque qui sint magni, deleniti quisquam repellat eligendi ipsam quis illum, eos repudiandae eius in labore nihil exercitationem! Vel provident fuga unde illum incidunt alias suscipit ipsa officiis laboriosam doloribus temporibus, distinctio quis.</p>
                        </div>
                    </blockquote>
                </li>
            </ul>

            <div class="h-8"></div>
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-sm gap-2">
                    <li>
                        <a href="#" class="flex items-center justify-center rounded px-3 h-8 ms-0 leading-tight text-on-theme-clr-white bg-white hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center rounded-full w-8 h-8 leading-tight text-gray-500 bg-white border border-theme-clr-secondary hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center rounded-full  w-8 h-8 leading-tight text-gray-500 bg-white border border-theme-clr-secondary hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center rounded-full  w-8 h-8 text-on-theme-clr-secondary border border-theme-clr-secondary bg-theme-clr-secondary/50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center rounded-full  w-8 h-8 leading-tight text-gray-500 bg-white border border-theme-clr-secondary hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center rounded-full  w-8 h-8 leading-tight text-gray-500 bg-white border border-theme-clr-secondary hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center rounded px-3 h-8 leading-tight text-on-theme-clr-white bg-white hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </section>


</main>









<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->