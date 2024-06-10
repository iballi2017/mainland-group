<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$galleryTitle = "Officia consectetur nemo, inventore voluptatem";
$textTransform = "uppercase";
$routes = array("Home", $galleryTitle);
include_once("./components/header.php"); ?>
<!-- header closes -->
<main>

    <section class="bg-theme-clr-white text-on-theme-clr-white py-12">
        <div class="mg-main-container">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-7">

                    <!-- Images -->

                    <section>
                        <h2 class="sr-only">Project Images</h2>

                        <div id="gallery" class="relative w-full bg-theme-clr-light text-on-theme-clr-light" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="./assets/images/fuel-scarcity-and-hike-in-price-may-cause-slow-productivity.png" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                </div>
                                <!-- Item 6 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">

                                </div>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>

                    </section>

                    <div class="h-16"></div>

                    <!-- Videos -->
                    <section>
                        <h2 class="sr-only">Videos Images</h2>

                        <video class="w-full" controls>
                            <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                    </section>

                    <div class="h-8"></div>

                    <!-- Pagination -->
                    <ul class="text-sm flex items-center justify-between gap-4">
                        <li>
                            <a href="#">
                                <span class="font-semibold">Previous</span>
                                <div class="flex items-start gap-2">
                                    <div class="rounded-lg w-10 lg:w-12 overflow-hidden hidden lg:block">
                                        <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                    </div>
                                    <div class="text-on-theme-clr-light">
                                        <h4>Lagos Cart</h4>
                                        <p class="font-semibold">Fixing Solar panel of a client</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="block text-right font-semibold">Next</span>
                                <div class="flex items-start gap-2">
                                    <div class="rounded-lg w-10 lg:w-12 overflow-hidden hidden lg:block">
                                        <img src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="">
                                    </div>
                                    <div class="text-on-theme-clr-light">
                                        <h4>Lagos Cart</h4>
                                        <p class="font-semibold">Fixing Solar panel of a client</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-span-12 lg:col-span-5">
                    <div class="bg-theme-clr-light text-on-theme-clr-light p-4 rounded">
                        <h3 class="font-semibold text-lg">Informations</h3>
                        <div class="h-6"></div>
                        <table class="w-full leading-10">
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-left">Sub-company</th>
                                    <td>Mainland Solar</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Client's name</th>
                                    <td>Bees Mann Enterprise</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Project</th>
                                    <td>Fixing Solar panel of a client</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Project</th>
                                    <td>Fixing Solar panel of a client</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Date</th>
                                    <td>Jan 30 2019</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Location</th>
                                    <td>Lagos</td>
                                </tr>
                            </tbody>
                        </table>
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