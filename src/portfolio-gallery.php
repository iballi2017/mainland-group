<!-- head opens -->
<?php include_once("./includes/head.php"); ?>
<!-- head closes -->

<!-- main-toolbar opens -->
<?php include_once("./components/main-toolbar.php"); ?>
<!-- main-toolbar closes -->

<!-- header opens -->
<?php
$routes = array("Home", "Gallery");
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white py-12 lg:py-20">
        <div class="mg-main-container">
            <!-- Filter -->
            <ul class="portfolio-filter-gallery | min-w-[425px] max-w-3xl mx-auto overflow-auto flex items-center justify-between flex-wrap gap-4">
                <li>
                    <input type="radio" name="filter-gallery" id="1" value="1" class="absolute invisible">
                    <label for="1">All</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="2" value="2" class="absolute invisible">
                    <label for="2">Vanlagos</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="3" value="3" class="absolute invisible">
                    <label for="3">Studio Mainland</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="4" value="4" class="absolute invisible">
                    <label for="4">Mainland Solar</label>
                </li>
                <li>
                    <input type="radio" name="filter-gallery" id="5" value="5" class="absolute invisible">
                    <label for="5">Lagoscart</label>
                </li>
            </ul>
            <h2>Gallery</h2>
        </div>
    </section>


</main>









<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->