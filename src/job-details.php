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
$career = new Breadcrumb("Career", "career.php");
$title = new Breadcrumb("FINANCIAL OFFICER", "");

$routes = array(
    $home,
    $career,
    $title
);

include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <div class="bg-theme-clr-white text-on-theme-clr-white py-12">
        <div class="mg-main-container">
            <?php include_once("./shared/widgets/back-button.php"); ?>
            <div class="h-2"></div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-8">
                    <div class="border border-theme-clr-gray-400 rounded-md p-4">
                        <section>
                            <h2 class="text-2xl font-bold">FINANCIAL OFFICER</h2>
                            <p class="text-xl font-semibold">Vanlagos</p>
                            <p class="text-sm border-theme-clr-gray-400">Posted: 23/05/2024</p>
                        </section>
                        <div class="h-4"></div>
                        <section>
                            <h3 class="text-xl font-semibold">JOB DESCRIPTION</h3>
                            <div class="h-4"></div>
                            <div class="h-4"></div>

                            <div class="flex items-center gap-2">
                                <span>Job type:</span>
                                <span class="font-semibold">Onsite</span>
                            </div>

                            <div class="h-4"></div>
                            <div class="h-2"></div>
                            
                            <ul class="list-type-disc">
                                <li class="flex items-center gap-2">
                                    <span>Minimum Qualification:</span>
                                    <span class="font-semibold">Degree</span>
                                </li>
                            </ul>
                        </section>
                    </div>


                </div>
                <div class="col-span-12 md:col-span-4">A</div>
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