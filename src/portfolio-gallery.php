<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$routes = array("Home", "Gallery");
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white py-12">
        <div class="mg-main-container">
            <!-- Filter -->
            <ul class="portfolio-filter-gallery | hidden md:flex w-full max-w-3xl mx-auto overflow-auto flex-nowrap items-center justify-between gap-4">
                <li>
                    <input type="radio" name="filter-gallery" id="1" value="1" class="absolute invisible" checked>
                    <label for="1">All</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="2" value="2" class="absolute invisible">
                    <label for="2">Vanlagos</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="3" value="3" class="absolute invisible">
                    <label for="3">Studio Mainland</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="4" value="4" class="absolute invisible">
                    <label for="4">Mainland Solar</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="5" value="5" class="absolute invisible">
                    <label for="5">Lagoscart</label>
                </li>
            </ul>

            <form class="max-w-sm mx-auto md:hidden">
                <select id="countries" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                    <option selected>Filter portfolio</option>
                    <option value="1">All</option>
                    <option value="2">Vanlagos</option>
                    <option value="3">Studio Mainland</option>
                    <option value="4">Mainland Solar</option>
                    <option value="5">Lagoscart</option>
                </select>
            </form>

            <div class="h-4"></div>
            <div class="h-4"></div>
            <div class="h-4"></div>


            <div class="grid grid-cols-12 gap-2 md:gap-8 w-full">
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/mainlandsolar-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-primary-alt block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <div class="">
                                <h3 class="lg:font-semibold">Mainland Solar</h3>
                                <p class="font-semibold lg:font-bold text-xl">Fixing Solar panel of a client</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/vanlagos-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-primary-alt block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h3 class="lg:font-semibold">Van lagos</h3>
                            <p class="font-semibold lg:font-bold text-xl">Moving our Clent to their various desination</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/studiomainland-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-primary-alt block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h3 class="lg:font-semibold">Studio Mainland</h3>
                            <p class="font-semibold lg:font-bold text-xl">Working on an Adidas Marketing Project</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/lagoscart-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-primary-alt block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h3 class="lg:font-semibold">Lagos Cart</h3>
                            <p class="font-semibold lg:font-bold text-xl">Fixing Solar panel of a client</p>
                        </a>
                    </div>
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