<!-- header opens -->
<?php include_once(__DIR__ . "./includes/header.php"); ?>
<!-- header closes -->

<!-- main-toolbar opens -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<main>
    <section>
        <div class="mg-main-container flex flex-wrap items-center justify-between mx-auto md:px-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden h-56 md:h-[567px]">
                    <!-- Slide 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-1-image.jpg" class="absolute x-z-1 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Ignite Innovation">
                        <div class="absolute z-2 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="text-center text-white max-w-2xl mx-auto">
                                <h1 class="text-2xl lg:text-4xl font-bold">Ignite Innovations</h1>
                                <p class="text-lg lg:text-2xl font-semibold">Transforming Visions into Reality: Your Partner in Cutting-Edge Solutions</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-2-image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Slide 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-3-image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-0 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-0 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>



    <section class="bg-theme-white pt-8 pb-4 lg:pt-32 lg:pb-16">
        <div class="mg-main-container flex flex-wrap items-center justify-between mx-auto md:px-4">

            <div class="grid grid-cols-12 gap-4 lg:gap-8 items-center max-w-[1200px] mx-auto">
                <div class="col-span-12 md:col-span-6">
                    <div>
                        <img src="./assets/images/featured-image-1.png" alt="KNOW ABOUT MAINLAND EDGE BUSINESS" class="w-full">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 text-on-theme-white">
                    <h2 class="font-semibold md:text-lg">KNOW ABOUT MAINLAND EDGE BUSINESS</h2>
                    <p class="font-bold text-2xl lg:text-3xl">Welcome to Mainland Group!</p>
                    <div class="h-2 md:h-4"></div>
                    <p>We are a dynamic conglomerate committed to innovation, excellence, and community service. Our mission is to deliver top-quality services and products that enhance the lives of our customers and contribute to sustainable development. </p>
                    <div class="h-2 md:h-4"></div>
                    <a href="#" class="call-to-action | inline-flex bg-primary hover:bg-secondary hover:text-white font-semibold shadow-md rounded-s-full rounded-e-full py-2 px-6">READ MORE</a>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-theme-light text-on-theme-light py-8 lg:py-16">
        <div class="mg-main-container flex flex-col flex-wrap items-center justify-between mx-auto md:px-4">
            <h2 class="font-semibold md:text-lg text-center">OUR SUB - COMPANY</h2>
            <p class="font-bold text-2xl lg:text-3xl text-center max-w-[850px] mx-auto">We proudly oversees a diverse portfolio of businesses, each excelling in its field and contributing uniquely to the market</p>

            <div class="h-12"></div>

            <div class="grid grid-cols-12 gap-8 w-full max-w-[1000px] mx-auto">
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/lagoscart-brand-logo.svg" alt="Lagoscart" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/vanlagos-brand-logo.svg" alt="Vanlagos" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/mainlandsolar-brand-logo.svg" alt="mainlandsolar" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/studiomainland-brand-logo.svg" alt="studiomainland" class="">
                    </div>
                </div>
                <!-- <div class="col-span-6 md:col-span-3">B</div>
                <div class="col-span-6 md:col-span-3">C</div>
                <div class="col-span-6 md:col-span-3">D</div> -->
            </div>

        </div>

    </section>
</main>

<!-- footer opens -->
<?php include_once(__DIR__ . "./includes/footer.php"); ?>
<!-- footer closes -->