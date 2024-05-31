<!-- header opens -->
<?php include_once(__DIR__ . "./includes/header.php"); ?>
<!-- header closes -->

<!-- main-toolbar opens -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<main>
    <section class="bg-theme-clr-white">
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



    <section class="bg-theme-clr-white pt-8 pb-4 lg:pt-32 lg:pb-16">
        <div class="mg-main-container flex flex-wrap items-center justify-between mx-auto md:px-4">

            <div class="grid grid-cols-12 gap-4 lg:gap-8 items-center max-w-[1200px] mx-auto">
                <div class="col-span-12 md:col-span-6 hidden md:block">
                    <div>
                        <img src="./assets/images/featured-image-1.png" alt="KNOW ABOUT MAINLAND EDGE BUSINESS" class="w-full">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 text-on-theme-clr-white">
                    <h2 class="font-semibold md:text-lg">KNOW ABOUT MAINLAND EDGE BUSINESS</h2>
                    <p class="font-bold text-2xl lg:text-3xl">Welcome to Mainland Group!</p>
                    <div class="h-2 md:h-4"></div>
                    <p>We are a dynamic conglomerate committed to innovation, excellence, and community service. Our mission is to deliver top-quality services and products that enhance the lives of our customers and contribute to sustainable development. </p>
                    <div class="h-2 md:h-4"></div>
                    <?php
                    $label = "Read more";
                    $url = "#";
                    include(__DIR__ . "./shared/widgets/call-to-action.php"); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-theme-light dark:text-on-theme-light py-8 lg:py-16">
        <div class="mg-main-container flex flex-col flex-wrap items-center justify-between mx-auto md:px-4">
            <h2 class="font-semibold md:text-lg text-center">OUR SUB - COMPANY</h2>
            <p class="font-bold text-2xl lg:text-3xl text-center max-w-[850px] mx-auto">We proudly oversees a diverse portfolio of businesses, each excelling in its field and contributing uniquely to the market</p>

            <div class="h-8 md:h-12"></div>

            <div class="grid grid-cols-12 gap-2 md:gap-8 w-full max-w-[1000px] mx-auto">
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/lagoscart-brand-logo.svg" alt="Lagoscart" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/vanlagos-brand-logo.svg" alt="Vanlagos" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/mainlandsolar-brand-logo.svg" alt="mainlandsolar" class="">
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="rounded-lg shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/studiomainland-brand-logo.svg" alt="studiomainland" class="">
                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="bg-theme-clr-white dark:text-on-theme-light py-8 lg:py-16">
        <div class="mg-main-container flex flex-col flex-wrap items-center justify-between mx-auto md:px-4">
            <h2 class="font-semibold md:text-lg text-center">CHECK OUR GALLERY</h2>
            <p class="font-bold text-2xl lg:text-3xl text-center max-w-[850px] mx-auto">
                Let's check our Project we have done
            </p>

            <div class="h-8 md:h-12"></div>

            <div class="grid grid-cols-12 gap-2 md:gap-8 w-full">
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/mainlandsolar-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <div class="absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-8 rounded-lg bg-theme-clr-white text-on-theme-clr-white shadow-md lg:-bottom-12">
                            <h5 class="font-semibold">Mainland Solar</h5>
                            <p class="font-bold text-xl">Fixing Solar panel of a client</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/vanlagos-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <div class="absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-8 rounded-lg bg-theme-clr-white text-on-theme-clr-white shadow-md lg:-bottom-12">
                            <h5 class="font-semibold">Van lagos</h5>
                            <p class="font-bold text-xl">Moving our Clent to their various desination</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/studiomainland-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <div class="absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-8 rounded-lg bg-theme-clr-white text-on-theme-clr-white shadow-md lg:-bottom-12">
                            <h5 class="font-semibold">Studio Mainland</h5>
                            <p class="font-bold text-xl">Working on an Adidas Marketing Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/lagoscart-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <div class="absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-8 rounded-lg bg-theme-clr-white text-on-theme-clr-white shadow-md lg:-bottom-12">
                            <h5 class="font-semibold">Lagos Cart</h5>
                            <p class="font-bold text-xl">Fixing Solar panel of a client</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-2 md:h-4"></div>
            <div class="h-2 md:h-4"></div>
            <?php
            $label = "View all";
            $url = "#";
            include(__DIR__ . "./shared/widgets/call-to-action.php"); ?>

        </div>

    </section>



    <section class="bg-theme-clr-secondary text-on-theme-clr-secondary py-8 lg:py-20">
        <div class="mg-main-container flex flex-col flex-wrap items-center justify-between mx-auto md:px-4">
            <h2 class="font-semibold md:text-lg text-center">OUR TESTIMONIALS</h2>
            <p class="font-bold text-2xl lg:text-3xl text-center max-w-[850px] mx-auto">
                What our clients say about us
            </p>

            <div class="h-8 md:h-12"></div>

            <!-- Set up your HTML -->
            <div class="w-full max-w-[1050px] mx-auto">
                <div class="owl-carousel owl-theme | testimonial-sliders">
                    <blockquote class="text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Founder of Olasco</h5>
                            <p class="font-semibold">Paul Davids</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, Quis ipsum suspendisse </p>
                        </div>
                    </blockquote>
                    <blockquote class="text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Software Tester</h5>
                            <p class="font-semibold">John Doe</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4">
                            <p>
                                Commodi sapiente sequi voluptas ex quasi, quia mollitia dolorum distinctio at facilis similique aliquid omnis eos aspernatur fuga doloribus minima voluptates nostrum assumenda asperiores veritatis.
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Digital Marketer</h5>
                            <p class="font-semibold">Benjamin Noah</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4">
                            <p>
                                Eaque hic nam voluptate. Voluptatem tempora ab officia et laudantium unde laboriosam corrupti inventore? Iusto expedita molestiae inventore.
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Sport Critic</h5>
                            <p class="font-semibold">Lucas Muora</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4">
                            <p>
                            Sit officiis pariatur natus temporibus cum iure? Reprehenderit culpa, nobis necessitatibus dolor totam nesciunt minus nihil placeat saepe molestias vitae facilis maxime!
                            </p>
                        </div>
                    </blockquote>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- footer opens -->
<?php include_once(__DIR__ . "./includes/footer.php"); ?>
<!-- footer closes -->