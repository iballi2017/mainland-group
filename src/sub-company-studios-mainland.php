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
$title = new Breadcrumb("Studios Mainland", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <div class="bg-theme-clr-white text-on-theme-clr-white">
        <div class="mg-main-container">
            <div class="py-12 lg:py-16 flex flex-col gap-8 lg:gap-12">
                <section>
                    <div class="max-w-4xl mx-auto flex flex-col items-center jusify-center gap-8">
                        <h2 class="bg-primary">
                            <span class="sr-only">Studios Mainland</span>
                            <img src="./assets/images/our-sub-company-logos/studiomainland-brand-logo.png" alt="">
                        </h2>

                        <p class="text-center">
                            At Studios Mainland, we are dedicated to being part of your story by making it memorable. We offer a wide range of services, including event coverage, video production, podcasts, video ads, and editing services. Our commitment to excellence and creativity sets us apart as one of the most reliable studio agencies in Lagos.
                        </p>

                    </div>
                </section>


                <section>
                    <div class="flex flex-col items-center jusify-center gap-8">
                        <h3 class="text-2xl font-bold">Services Provided</h3>
                        <div class="w-full max-w-7xl mx-auto grid grid-cols-12 gap-4 lg:gap-8">
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

                        <?php
                        $label = "Visit website";
                        $target_blank = "_blank";
                        $url = "https://studiosmainland.com/";
                        include("./shared/widgets/call-to-action.php"); ?>
                    </div>
                </section>
            </div>
        </div>
    </div>



</main>









<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->