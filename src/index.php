<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<main>
    <section class="bg-theme-clr-white">
        <div class="mg-main-wrapper">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden h-56 md:h-[570px]">
                    <!-- Slide 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-1-image.jpg" class="absolute x-z-1 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Ignite Innovation">
                        <div class="absolute z-2 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="text-center text-white max-w-2xl mx-auto">
                                <h1 class="text-2xl lg:text-5xl font-bold">Corrupti amet nobis repellendus</h1>
                                <p class="text-lg lg:text-2xl font-semibold">
                                    Autem vero suscipit eum iste vel atque architecto, animi quod sint rem natus
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-2-image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        <div class="absolute z-2 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="text-center text-white max-w-2xl mx-auto">
                                <h1 class="text-2xl lg:text-5xl font-bold">Ignite Innovations</h1>
                                <p class="text-lg lg:text-2xl font-semibold">Transforming Visions into Reality: Your Partner in Cutting-Edge Solutions</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img loading="lazy" src="./assets/images/hero-slider-3-image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        <div class="absolute z-2 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="text-center text-white max-w-2xl mx-auto">
                                <h1 class="text-2xl lg:text-5xl font-bold">Nulla quis quasi quia sit,</h1>
                                <p class="text-lg lg:text-2xl font-semibold">
                                    Sunt, aut. Maiores labore doloremque debitis! Nulla voluptatem, culpa quod sint
                                </p>
                            </div>
                        </div>
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

    <section class="bg-theme-clr-white py-12 lg:py-20">
        <div class="mg-main-container">

            <div class="grid grid-cols-12 gap-4 lg:gap-8 items-center max-w-[1200px] mx-auto">
                <div class="col-span-12 md:col-span-6 hidden md:block">
                    <div>
                        <img src="./assets/images/featured-image-1.png" alt="KNOW ABOUT MAINLAND EDGE BUSINESS" class="w-full">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 text-on-theme-clr-white">
                    <h2 class="font-semibold text-sm lg:text-lg">KNOW ABOUT MAINLAND EDGE BUSINESS</h2>
                    <p class="font-bold text-xl lg:text-3xl">Welcome to Mainland Group!</p>
                    <div class="h-2 md:h-4"></div>
                    <p>We are a dynamic conglomerate committed to innovation, excellence, and community service. Our mission is to deliver top-quality services and products that enhance the lives of our customers and contribute to sustainable development. </p>
                    <div class="h-2 md:h-4"></div>
                    <?php
                    $label = "Read more";
                    $url = "#";
                    include("./shared/widgets/call-to-action.php"); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-theme-clr-light dark:text-on-theme-clr-light py-12 lg:py-20">
        <div class="mg-main-container">
            <h2 class="font-semibold text-sm lg:text-lg text-center">OUR SUB - COMPANY</h2>
            <p class="font-bold text-xl lg:text-3xl text-center max-w-[850px] mx-auto">We proudly oversees a diverse portfolio of businesses, each excelling in its field and contributing uniquely to the market</p>

            <div class="h-8 md:h-12"></div>

            <div class="grid grid-cols-12 gap-2 md:gap-8 w-full max-w-[1000px] mx-auto">
                <div class="col-span-6 md:col-span-3">
                    <div tabindex="0" class="focus:border group relative rounded-lg overflow-hidden shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/lagoscart-brand-logo.svg" alt="Lagoscart" class="">
                        <p class="invisible group-hover:visible group-focus:visible bg-black/80 text-white text-sm p-4 absolute top-0 bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center">
                            Your one-stop online marketplace for a wide range of products from groceries to electronics.
                            <span class="text-xs mt-2">
                                <?php
                                $label = "Visit page";
                                $url = "#";
                                $tabIndex="0";
                                include("./shared/widgets/call-to-action.php"); ?>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div tabindex="0" class="focus:border group relative rounded-lg overflow-hidden shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/vanlagos-brand-logo.svg" alt="Vanlagos" class="">
                        <p class="invisible group-hover:visible group-focus:visible bg-black/80 text-white text-sm p-4 absolute top-0 bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center">
                            Offering reliable and efficient van rental services tailored to meet your transportation needs.
                            <span class="text-xs mt-2">
                                <?php
                                $label = "Visit page";
                                $url = "#";
                                include("./shared/widgets/call-to-action.php"); ?>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div tabindex="0" class="focus:border group relative rounded-lg overflow-hidden shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/mainlandsolar-brand-logo.svg" alt="mainlandsolar" class="">
                        <p class="invisible group-hover:visible group-focus:visible bg-black/80 text-white text-sm p-4 absolute top-0 bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center">
                            Leading the way in renewable energy solutions, providing solar power installations and services.
                            <span class="text-xs mt-2">
                                <?php
                                $label = "Visit page";
                                $url = "#";
                                include("./shared/widgets/call-to-action.php"); ?>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div tabindex="0" class="focus:border group relative rounded-lg overflow-hidden shadow-md bg-theme-clr-white px-8 py-12 h-full flex items-center justify-center">
                        <img src="./assets/images/our-sub-company-logos/studiomainland-brand-logo.svg" alt="studiomainland" class="">
                        <p class="invisible group-hover:visible group-focus:visible bg-black/80 text-white text-sm p-4 absolute top-0 bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center">
                            A premier destination for creative professionals, offering state-of-the-art studio spaces and equipment.
                            <span class="text-xs mt-2">
                                <?php
                                $label = "Visit page";
                                $url = "#";
                                include("./shared/widgets/call-to-action.php"); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="bg-theme-clr-white dark:text-on-theme-clr-light py-12 lg:py-20">
        <div class="mg-main-container items-center">
            <h2 class="font-semibold text-sm lg:text-lg text-center">CHECK OUR GALLERY</h2>
            <p class="font-bold text-xl lg:text-3xl text-center max-w-[850px] mx-auto">
                Let's check our Project we have done
            </p>

            <div class="h-8 md:h-12"></div>

            <div class="grid grid-cols-12 gap-2 md:gap-8 w-full">
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/mainlandsolar-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-accent-50 block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <div class="">
                                <h4 class="lg:font-semibold">Mainland Solar</h4>
                                <p class="font-semibold lg:font-bold text-xl">Fixing Solar panel of a client</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/vanlagos-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-accent-50 block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h4 class="lg:font-semibold">Van lagos</h4>
                            <p class="font-semibold lg:font-bold text-xl">Moving our Clent to their various desination</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/studiomainland-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-accent-50 block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h4 class="lg:font-semibold">Studio Mainland</h4>
                            <p class="font-semibold lg:font-bold text-xl">Working on an Adidas Marketing Project</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 lg:pb-12">
                    <div class="relative shadow-md bg-theme-clr-white h-full flex flex-col items-center justify-center">
                        <img loading="lazy" src="./assets/images/lagoscart-gallery-feature-image.png" alt="Mainlandsolar" class="w-full">
                        <a href="#" class="focus:outline-none focus:ring focus:ring-accent-50 block absolute bottom-4 left-2 right-2 lg:left-8 lg:right-8 p-6 lg:p-8 rounded-lg bg-theme-clr-light hover:bg-theme-clr-white text-on-theme-clr-light shadow-md lg:-bottom-12">
                            <h4 class="lg:font-semibold">Lagos Cart</h4>
                            <p class="font-semibold lg:font-bold text-xl">Fixing Solar panel of a client</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-4"></div>
            <div class="h-4"></div>
            <div class="text-center">
                <?php
                $label = "View all";
                $url = "#";
                include("./shared/widgets/call-to-action.php"); ?>
            </div>

        </div>

    </section>



    <section class="bg-theme-clr-secondary text-on-theme-clr-secondary py-12 lg:py-20">
        <div class="mg-main-container flex flex-col flex-wrap items-center justify-between mx-auto md:px-4">
            <h2 class="font-semibold text-sm lg:text-lg text-center">OUR TESTIMONIALS</h2>
            <p class="font-bold text-xl lg:text-3xl text-center max-w-[850px] mx-auto">
                What our clients say about us
            </p>

            <div class="h-8 md:h-12"></div>

            <!-- Testimonials Sliders -->
            <div class="w-full max-w-[1050px] mx-auto text-center">
                <div class="owl-carousel owl-theme | testimonial-carousel" id="testimonial-carousel">
                    <blockquote class="md:h-56 text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Founder of Olasco</h5>
                            <p class="font-semibold">Paul Davids</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 h-full flex items-center overflow-hidden md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4 text-center md:text-left">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, Quis ipsum suspendisse </p>
                        </div>
                    </blockquote>
                    <blockquote class="md:h-56 text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Software Tester</h5>
                            <p class="font-semibold">John Doe</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 h-full flex items-center overflow-hidden md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4 text-center md:text-left">
                            <p>
                                Commodi sapiente sequi voluptas ex quasi, quia mollitia dolorum distinctio at facilis similique aliquid omnis eos aspernatur fuga doloribus minima voluptates nostrum assumenda asperiores veritatis.
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="md:h-56 text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Digital Marketer</h5>
                            <p class="font-semibold">Benjamin Noah</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 h-full flex items-center overflow-hidden md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4 text-center md:text-left">
                            <p>
                                Eaque hic nam voluptate. Voluptatem tempora ab officia et laudantium unde laboriosam corrupti inventore? Iusto expedita molestiae inventore.
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="md:h-56 text-sm grid grid-cols-3 items-center gap-y-4 md:gap-y-0 bg-theme-clr-white text-on-theme-clr-white rounded-md p-4 md:px-4 md:py-8">
                        <div class="col-span-3 md:col-span-1 text-center md:ps-4 md:pe-4">
                            <div class="h-16 w-16 rounded-full overflow-hidden bg-gray-200 mx-auto mb-4">
                                <img src="./assets/images/user-black-avatar.svg" alt="Paul Davids">
                            </div>
                            <h5>Sport Critic</h5>
                            <p class="font-semibold">Lucas Muora</p>
                        </div>
                        <div class="col-span-3 md:col-span-2 h-full flex items-center overflow-hidden md:border-s md:border-on-theme-clr-white md:ps-4 md:pe-4 text-center md:text-left">
                            <p>
                                Sit officiis pariatur natus temporibus cum iure? Reprehenderit culpa, nobis necessitatibus dolor totam nesciunt minus nihil placeat saepe molestias vitae facilis maxime!
                            </p>
                        </div>
                    </blockquote>
                </div>


                <!-- Custom dots -->
                <div class="dots-wrapper relative inline-flex items-center gap-4 mt-8">
                    <div id="custom-dots" class="owl-dots relative">
                        <!-- Custom dots will be appended here -->
                    </div>
                    <div>
                        <button class="play-slider-btn | focus:outline-none focus:ring focus:ring-accent-50 h-[20px] w-[20px] rounded-full border-2 border-[hsl(0, 0%, 74%)] cursor-pointer" aria-label="play"></button>
                        <button class="pause-slider-btn | focus:outline-none focus:ring focus:ring-accent-50 h-[20px] w-[20px] rounded-full border-2 border-[hsl(0, 0%, 74%)] cursor-pointer" aria-label="pause"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-theme-clr-white dark:text-on-theme-clr-light py-12 lg:py-20">
        <div class="mg-main-container flex flex-col flex-wrap mx-auto md:px-4">

            <div class="flex items-center justify-between gap-8">

                <div class="flex items-center gap-6">
                    <div class="h-24 w-[18px] bg-gradient-to-b from-[#AACE48] via-[#12AD58] to-[#1B3512] rounded-t-full rounded-b-full"></div>
                    <div>
                        <h2 class="font-semibold text-sm lg:text-lg">Our Blog</h2>
                        <p class="font-bold text-xl lg:text-3xl max-w-[850px]">
                            News and Updates
                        </p>
                    </div>
                </div>


                <a href="#" class="focus:outline-none focus:ring focus:ring-accent-50 text-sm hover:bg-white/50 block uppercase border border-on-theme-clr-white py-2 px-4 rounded-lg whitespace-nowrap">View all</a>
            </div>

            <div class="h-8 md:h-12"></div>


            <!-- Blogpost Sliders -->
            <div class="w-full text-center">
                <div class="owl-carousel owl-theme | blogpost-carousel" id="blogpost-carousel">


                    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#" class="block h-56 md:h-72 overflow-hidden">
                            <img class="rounded-t-lg" src="./assets/images/power-outage-looms-round-the-nation-after-power-grid-collapse.png" alt="Noteworthy technology acquisitions 2021">
                        </a>
                        <div class="p-5 text-left">
                            <div class="flex items-center justify-between gap-8 text-sm">
                                <span><i class="far fa-calendar me-2"></i>May 10, 2021</span>
                                <span><i class="far fa-user me-2"></i>By Admin</span>
                            </div>
                            <div class="h-2"></div>
                            <a href="#" class="hover:text-primary">
                                <h4 class="mb-2 text-xl md:text-2xl font-bold tracking-tight h-[90px] md:h-[100px] overflow-hidden" title="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui natus amet quam deleniti ipsum praesentium possimus quis vitae eveniet veniam assumenda fugiat, soluta ab minima doloribus veritatis quo eaque? Commodi saepe, inventore sequi optio praesentium iste nemo hic molestiae accusamus!">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui natus amet quam deleniti ipsum praesentium possimus quis vitae eveniet veniam assumenda fugiat, soluta ab minima doloribus veritatis quo eaque? Commodi saepe, inventore sequi optio praesentium iste nemo hic molestiae accusamus!
                                </h4>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#" class="block h-56 md:h-72 overflow-hidden">
                            <img class="rounded-t-lg" src="./assets/images/power-outage-looms-round-the-nation-after-power-grid-collapse.png" alt="Noteworthy technology acquisitions 2021">
                        </a>
                        <div class="p-5 text-left">
                            <div class="flex items-center justify-between gap-8 text-sm">
                                <span><i class="far fa-calendar me-2"></i>May 10, 2021</span>
                                <span><i class="far fa-user me-2"></i>By Admin</span>
                            </div>
                            <div class="h-2"></div>
                            <a href="#" class="hover:text-primary">
                                <h4 class="mb-2 text-xl md:text-2xl font-bold tracking-tight h-[90px] md:h-[100px] overflow-hidden">
                                    Power outage looms round the nation after power grid collapse
                                </h4>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#" class="block h-56 md:h-72 overflow-hidden">
                            <img class="rounded-t-lg" src="./assets/images/fuel-scarcity-and-hike-in-price-may-cause-slow-productivity.png" alt="Fuel Scarcity and hike in price may cause slow productivity.">
                        </a>
                        <div class="p-5 text-left">
                            <div class="flex items-center justify-between gap-8 text-sm">
                                <span><i class="far fa-calendar me-2"></i>May 10, 2021</span>
                                <span><i class="far fa-user me-2"></i>By Admin</span>
                            </div>
                            <div class="h-2"></div>
                            <a href="#" class="hover:text-primary">
                                <h4 class="mb-2 text-xl md:text-2xl font-bold tracking-tight h-[90px] md:h-[100px] overflow-hidden">
                                    Fuel Scarcity and hike in price may cause slow productivity.
                                </h4>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#" class="block h-56 md:h-72 overflow-hidden">
                            <img class="rounded-t-lg" src="./assets/images/food-price-increases-by-200-percent-progression-say-it-may-increase.png" alt="food price increases by 200%, progression say it may increase">
                        </a>
                        <div class="p-5 text-left">
                            <div class="flex items-center justify-between gap-8 text-sm">
                                <span><i class="far fa-calendar me-2"></i>May 10, 2021</span>
                                <span><i class="far fa-user me-2"></i>By Admin</span>
                            </div>
                            <div class="h-2"></div>
                            <a href="#" class="hover:text-primary">
                                <h4 class="mb-2 text-xl md:text-2xl font-bold tracking-tight h-[90px] md:h-[100px] overflow-hidden">
                                    Food price increases by 200%, progression say it may increase.
                                </h4>
                            </a>
                        </div>
                    </div>

                </div>


                <!-- Custom dots -->
                <div class="dots-wrapper relative inline-flex items-center gap-4 mt-8">
                    <div id="blogpost-carousel-dots" class="owl-dots relative">
                        <!-- Custom dots will be appended here -->
                    </div>
                    <div>
                        <button class="play-slider-btn | focus:outline-none focus:ring focus:ring-accent-50 h-[20px] w-[20px] rounded-full border-2 border-[hsl(0, 0%, 74%)] cursor-pointer" aria-label="play"></button>
                        <button class="pause-slider-btn | focus:outline-none focus:ring focus:ring-accent-50 h-[20px] w-[20px] rounded-full border-2 border-[hsl(0, 0%, 74%)] cursor-pointer" aria-label="pause"></button>
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