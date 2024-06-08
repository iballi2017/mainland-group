<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$routes = array("Home", "Lagoscart");
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white py-12 lg:py-16">
        <div class="mg-main-container">
            <div class="max-w-4xl mx-auto flex flex-col items-center jusify-center gap-8">
                <h2 class="bg-primary">
                    <span class="sr-only">Lagoscart</span>
                    <img src="./assets/images/our-sub-company-logos/lagoscart-brand-logo.png" alt="">
                </h2>

                <p class="text-center">
                    Lagoscart is your trusted online shopping destination. We offer a wide variety of products including groceries, electronics, fashion, and home goods. Our platform is designed for convenience, ensuring you can shop from the comfort of your home and have your purchases delivered swiftly to your doorstep. At Lagoscart, customer satisfaction is our top priority, and we strive to provide a seamless shopping experience with competitive prices and exceptional service.
                </p>

                <?php
                $label = "Visit website";
                $target_blank = "_blank";
                $url = "https://lagoscart.com/";
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