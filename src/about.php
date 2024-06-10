<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$routes = array("Home", "About");
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

    <!-- about-us-subsidiary-company-section -->
    <?php include("./components/about-us-subsidiary-company-section.php"); ?>


</main>



<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->