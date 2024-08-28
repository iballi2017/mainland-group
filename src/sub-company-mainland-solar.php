<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar-alt.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
include './shared/functions/breadcrumb.php';

$home = new Breadcrumb("Home", "index.php");
$title = new Breadcrumb("Mainland Solar", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white text-on-theme-clr-white py-12 lg:py-16">
        <div class="mg-main-container">
            <div class="max-w-4xl mx-auto flex flex-col items-center jusify-center gap-8">
                <h2 class="bg-primary">
                    <span class="sr-only">Mainland Solar</span>
                    <img src="./assets/images/our-sub-company-logos/mainlandsolar-brand-logo.png" alt="">
                </h2>

                <p class="text-center">Mainlandsolar is dedicated to promoting sustainable energy solutions through advanced solar power technology. We offer comprehensive solar installation services for residential, commercial, and industrial clients. Our goal is to reduce carbon footprints and help you achieve energy independence with high-quality solar panels and expert installation. Trust Mainlandsolar to provide you with clean, efficient, and cost-effective energy solutions tailored to your needs.</p>

                <?php
                $label = "Visit website";
                $target_blank = "_blank";
                $url = "https://mainlandsolar.com/";
                include("./shared/widgets/call-to-action.php"); ?>
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