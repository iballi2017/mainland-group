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
$title = new Breadcrumb("About", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white text-on-theme-clr-white py-12 lg:py-20">
        <div class="mg-main-container">

            <div class="grid grid-cols-12 gap-4 lg:gap-8 items-center max-w-[1200px] mx-auto">
                <div class="col-span-12 md:col-span-6 hidden md:block">
                    <div>
                        <img src="./assets/images/featured-image-1.png" alt="KNOW ABOUT MAINLAND EDGE BUSINESS" class="w-full">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <h2 class="font-semibold text-sm lg:text-lg">KNOW ABOUT MAINLAND EDGE BUSINESS</h2>
                    <p class="font-bold text-xl lg:text-3xl">Welcome to Mainland Group!</p>
                    <div class="h-2 md:h-4"></div>
                    <p>We are a dynamic conglomerate committed to innovation, excellence, and community service. Our mission is to deliver top-quality services and products that enhance the lives of our customers and contribute to sustainable development. Guided by our core values of integrity, innovation, and customer satisfaction, we strive to create lasting value across all our ventures.</p>
                    <div class="h-2 md:h-4"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-theme-clr-light dark:text-on-theme-clr-light py-12 lg:py-20">
        <div class="mg-main-container">
            <div class="grid grid-cols-12 gap-8 md:gap-12">
                <div class="col-span-12 md:col-start-1 md:col-end-9 bg-theme-clr-white p-4 lg:p-6 shadow-sm rounded-lg">
                    <div class="flex flex-col items-start jusify-center gap-4">
                        <h2 class="text-3xl font-semibold">Lagoscart </h2>
                        <p class="text-lg">
                            Lagoscart is your trusted online shopping destination. We offer a wide variety of products including groceries, electronics, fashion, and home goods. Our platform is designed for convenience, ensuring you can shop from the comfort of your home and have your purchases delivered swiftly to your doorstep. At Lagoscart, customer satisfaction is our top priority, and we strive to provide a seamless shopping experience with competitive prices and exceptional service.
                        </p>

                        <div class="flex">
                            <?php
                            $label = "Visit website";
                            $target_blank = "_blank";
                            $url = "https://lagoscart.com/";
                            include("./shared/widgets/call-to-action.php"); ?>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 md:col-start-4 md:col-end-13 bg-theme-clr-white p-4 lg:p-6 shadow-sm rounded-lg">
                    <div class="flex flex-col items-start jusify-center gap-4">
                        <h2 class="text-3xl font-semibold">Vanlagos </h2>
                        <p class="text-lg">
                            Vanlagos.com is a reliable vehicle hiring company that provides premium services to our customers at an affordable and competitive market price. In the areas of safety, timeliness, efficiency and excellent customer service, Vanlagos provides outstanding offers for you. We also have tools in place to provide support and assist you in a situation which is why you should choose us.
                            <br />
                            Our rigorous vetting process has ensured that all our drivers are qualified and in compliance with all the regulations of applicable bodies. When you book a bus/van with us, your safety is assured as a result of the trust you have established with us to get you to your location.
                        </p>

                        <div class="flex">
                            <?php
                            $label = "Visit website";
                            $target_blank = "_blank";
                            $url = "https://vanlagos.com/";
                            include("./shared/widgets/call-to-action.php"); ?>
                        </div>
                    </div>
                </div>
                <!--  -->

                <div class="col-span-12 md:col-start-1 md:col-end-9 bg-theme-clr-white p-4 lg:p-6 shadow-sm rounded-lg">
                    <div class="flex flex-col items-start jusify-center gap-4">
                        <h2 class="text-3xl font-semibold">Mainland Solar</h2>
                        <p class="text-lg">Mainlandsolar is dedicated to promoting sustainable energy solutions through advanced solar power technology. We offer comprehensive solar installation services for residential, commercial, and industrial clients. Our goal is to reduce carbon footprints and help you achieve energy independence with high-quality solar panels and expert installation. Trust Mainlandsolar to provide you with clean, efficient, and cost-effective energy solutions tailored to your needs.</p>

                        <div class="flex">
                            <?php
                            $label = "Visit website";
                            $target_blank = "_blank";
                            $url = "https://mainlandsolar.com/";
                            include("./shared/widgets/call-to-action.php"); ?>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!-- <div class="col-span-4 bg-theme-clr-white p-4 lg:p-6 shadow-sm rounded-lg">
                    vv
                </div> -->

                <!-- <div class="col-span-12 md:col-start-4"> -->
                <div class="col-span-12 bg-theme-clr-white p-4 lg:p-6 shadow-sm rounded-lg">
                    <div class="flex flex-col items-start jusify-center gap-4">
                        <h2 class="text-3xl font-semibold">Studios Mainland</h2>

                        <p class="text-lg">
                            At Studios Mainland, we are dedicated to being part of your story by making it memorable. We offer a wide range of services, including event coverage, video production, podcasts, video ads, and editing services. Our commitment to excellence and creativity sets us apart as one of the most reliable studio agencies in Lagos.
                        </p>

                        <section class="">
                            <h3 class="text-2xl font-bold mb-4">Services Provided</h3>
                            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                                <div class="col-span-12 md:col-span-3">
                                    <div class="h-full border px-8 py-10 rounded-md flex flex-col items-center justify-center gap-4 text-center">
                                        <div class="w-20 h-20 block p-2 rounded">
                                            <img src="./assets/icons/icon-video-production.svg" alt="video production" class="w-full">
                                        </div>
                                        <h4 class="text-lg font-semibold">Quality Video Production</h4>
                                        <p>Our talented team is committed to delivering exceptional video production and high-quality content that meets your needs.</p>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-3">
                                    <div class="h-full border px-8 py-10 rounded-md flex flex-col items-center justify-center gap-4 text-center">
                                        <div class="w-20 h-20 block p-2 rounded">
                                            <img src="./assets/icons/icon-video-editing.svg" alt="video editing" class="w-full">
                                        </div>
                                        <h4 class="text-lg font-semibold">Video Editing</h4>
                                        <p>
                                            In visual storytelling, Our expert editors bring your vision to life with precise video editing and creativity that engaging audiences.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-3">
                                    <div class="h-full border px-8 py-10 rounded-md flex flex-col items-center justify-center gap-4 text-center">
                                        <div class="w-20 h-20 block p-2 rounded">
                                            <img src="./assets/icons/icon-video-animation.svg" alt="4K Video and Animation" class="w-full">
                                        </div>
                                        <h4 class="text-lg font-semibold">4K Video and Animation</h4>
                                        <p>
                                            We are at the forefront, setting new standards with our cutting-edge 4K video, innovative visuals and animation services.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-3">
                                    <div class="h-full border px-8 py-10 rounded-md flex flex-col items-center justify-center gap-4 text-center">
                                        <div class="w-20 h-20 block p-2 rounded">
                                            <img src="./assets/icons/icon-high-quality-pictures.svg" alt="High-Quality Pictures" class="w-full">
                                        </div>
                                        <h4 class="text-lg font-semibold">High-Quality Pictures</h4>
                                        <p>
                                            Capture stunning moments with top-tier photography services, ensure that every shot is perfect and every memory is preserved beautifully.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="h-4"></div>

                            <div class="flex">
                                <?php
                                $label = "Visit website";
                                $target_blank = "_blank";
                                $url = "https://studiosmainland.com/";
                                include("./shared/widgets/call-to-action.php"); ?>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- <div class="col-span-12 md:col-span-4 bg-blue-400">AA</div> -->
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