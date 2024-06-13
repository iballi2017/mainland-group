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
$title = new Breadcrumb("Contact us", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>

    <section class="bg-theme-clr-white py-12">
        <div class="mg-main-container">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-7">
                    <div class="text-on-theme-clr-white flex flex-col justify-between bg-red-50 h-full">
                        <section>
                            <h2 class="font-semibold text-sm lg:text-lg">OUR CLIENT</h2>
                            <p class="max-w-2xl font-bold text-xl lg:text-3xl">We at Mainland Group are for people, Contact Our Office</p>
                            <div class="h-5"></div>
                            <ul class="grid grid-cols-12 gap-4 lg:gap-6">
                                <li class="col-span-12 md:col-span-6">
                                    <div class="flex items-start gap-4">
                                        <div class="border rounded-md bg-white p-2 h-[50px] w-[50px] flex place-content-center">
                                            <img src="./assets/icons/icon-phone.svg" alt="Place a call">
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-on-theme-clr-light">Phone number</span>
                                            <span class="font-semibold">+234 (9012) 1223 563</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-12 md:col-span-6">
                                    <div class="flex items-start gap-4">
                                        <div class="border rounded-md bg-white p-2 h-[50px] w-[50px] flex place-content-center">
                                            <img src="./assets/icons/icon-envelope.svg" alt="Send an email">
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-on-theme-clr-light">Email Address</span>
                                            <span class="font-semibold">Info.mainlandgroup@gmail.com</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-12 md:col-span-6">
                                    <div class="flex items-start gap-4">
                                        <div class="border rounded-md bg-white p-2 h-[50px] w-[50px] flex place-content-center">
                                            <img src="./assets/icons/icon-location.svg" alt="Our office address">
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-on-theme-clr-light">Address</span>
                                            <span class="font-semibold">6b, Shonibanire, Oshodi, Lagos, Nigeria</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-12 md:col-span-6">
                                    <div class="flex items-start gap-4">
                                        <div class="border rounded-md bg-white p-2 h-[50px] w-[50px] flex place-content-center">
                                            <img src="./assets/icons/icon-clock.svg" alt="Opening time">
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-on-theme-clr-light">Office time</span>
                                            <ul class="font-semibold">
                                                <li><span class="font-medium">Mon - Friday,</span> <span>6:00am - 9:00pm</span></li>
                                                <li><span class="font-medium">Sat - Sunday,</span> <span>10:00am - 2:00pm</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <div class="flex items-center gap-8">

                                <h3>Social Handles:</h3>
                                <ul class="flex items-center gap-4">
                                    <li class="w-8">
                                        <img src="./assets/icons/icon-facebook-box.svg" alt="facebook" class="w-full">
                                    </li>
                                    <li class="w-8">
                                        <img src="./assets/icons/icon-xtwitter-box.svg" alt="x twitter" class="w-full">
                                    </li>
                                    <li class="w-8">
                                        <img src="./assets/icons/icon-instagram-box.svg" alt="instagram" class="w-full">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5">
                    <div class="bg-theme-clr-secondary text-on-theme-clr-secondary rounded-md p-4 md:p-6">
                        <h4 class="text-lg font-semibold text-primary">Write us today</h4>
                        <div class="h-5"></div>
                        <form action="">
                            <div class="mb-4">
                                <label for="name" class="mb-2 font-medium required">Your Name</label>
                                <input type="text" id="name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:text-white dark:focus:ring-primary dark:focus:border-primary" required />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="mb-2 font-medium required">Your Email Address</label>
                                <input type="email" id="email" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:text-white dark:focus:ring-primary dark:focus:border-primary" required />
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="mb-2 font-medium required">Your Phone Number</label>
                                <input type="tel" id="phone" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:text-white dark:focus:ring-primary dark:focus:border-primary" required />
                            </div>
                            <div class="mb-4">
                                <label for="message" class="mb-2 font-medium required">Message</label>
                                <textarea name="message" id="message" rows="5" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:text-white dark:focus:ring-primary dark:focus:border-primary" required></textarea>
                            </div>

                            <button class="focus:outline-none focus:ring-1 focus:ring-accent-50 | block bg-theme-clr-call-to-action hover:bg-primary-alt dark:hover:bg-black/15 text-black dark:hover:text-white dark:hover:border dark:hover:border-white font-semibold shadow-md rounded-s-full rounded-e-full py-2 px-6 uppercase">
                                Send Message
                            </button>
                        </form>
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