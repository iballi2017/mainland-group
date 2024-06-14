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
$title = new Breadcrumb("Career", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>


    <section class="bg-theme-clr-white text-on-theme-clr-white py-12">
        <div class="mg-main-container">
            <!-- filter and search section -->
            <h2 class="sr-only">Filter and search blogpost</h2>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm">Showing 1 - 10 of 100</p>
                </div>
                <div class="flex items-center gap-4">
                    <label for="filter-blogpost">Sort</label>
                    <select id="filter-blogpost" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option value="all">All</option>
                        <option value="recent">Recent</option>
                        <option value="...">....</option>
                    </select>
                </div>
            </div>

            <div class="h-8"></div>

            <ul class="flex flex-col gap-4">
                <li>

                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            FINANCIAL OFFICER
                        </h5>
                        <p class="font-semibold text-gray-700 dark:text-gray-400">Vanlagos</p>
                        <p class="text-sm font-normal text-gray-700 dark:text-gray-400">Posted: 20/05/2024</p>
                    </a>

                </li>
                <li>

                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            FINANCIAL OFFICER
                        </h5>
                        <p class="font-semibold text-gray-700 dark:text-gray-400">Vanlagos</p>
                        <p class="text-sm font-normal text-gray-700 dark:text-gray-400">Posted: 20/05/2024</p>
                    </a>

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