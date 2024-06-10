<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$routes = array("Home", "Vanlagos");
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white text-on-theme-clr-white py-12 lg:py-16">
        <div class="mg-main-container">
            <div class="max-w-4xl mx-auto flex flex-col items-center jusify-center gap-8">
                <h2 class="bg-primary">
                    <span class="sr-only">Vanlagos</span>
                    <img src="./assets/images/our-sub-company-logos/vanlagos-brand-logo.png" alt="">
                </h2>

                <p class="text-center">
                    Vanlagos.com is a reliable vehicle hiring company that provides premium services to our customers at an affordable and competitive market price. In the areas of safety, timeliness, efficiency and excellent customer service, Vanlagos provides outstanding offers for you. We also have tools in place to provide support and assist you in a situation which is why you should choose us.
                    <br />
                    <br />
                    Our rigorous vetting process has ensured that all our drivers are qualified and in compliance with all the regulations of applicable bodies. When you book a bus/van with us, your safety is assured as a result of the trust you have established with us to get you to your location.
                </p>

                <?php
                $label = "Visit website";
                $target_blank = "_blank";
                $url = "https://vanlagos.com/";
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