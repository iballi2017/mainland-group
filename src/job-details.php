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
                    <section class="border border-theme-clr-gray-400 rounded-md p-4">
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

                            <ul>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    <span>Minimum Qualification:</span>
                                    <span class="font-semibold">Degree</span>
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    <span>Experience Level:</span>
                                    <span class="font-semibold">Mid-level</span>
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    <span>Experience Length:</span>
                                    <span class="font-semibold">5 years</span>
                                </li>
                            </ul>

                            <div class="h-4"></div>
                            <p>We are seeking a motivated and creative Product Design Intern to join our team. As a Product Design Intern, you will gain hands-on experience in the design process, working closely with experienced designers and cross-functional teams to enhance our product's user experience.</p>
                        </section>
                        <div class="h-6"></div>
                        <section>
                            <h4 class="font-semibold">Key Responsibilities:</h4>
                            <div class="h-2"></div>
                            <ul>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Support the design team in creating user interfaces for web and mobile applications.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Assist in conducting user research and usability testing.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Help create wireframes, prototypes, and design mockups.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Collaborate with product managers and engineers to implement design solutions.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Participate in brainstorming sessions and contribute ideas to improve the product.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Learn and apply design best practices and principles.
                                </li>
                            </ul>
                        </section>
                        <div class="h-6"></div>
                        <section>
                            <h4 class="font-semibold">Qualifications:</h4>
                            <div class="h-2"></div>
                            <ul>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Basic understanding of design tools such as Sketch, Figma, Adobe Creative Suite, and prototyping tools.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Passion for user-centered design and a strong desire to learn.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Good communication and teamwork skills.
                                </li>
                                <li class="flex items-center gap-2 before:content[''] before:bg-on-theme-clr-white before:h-[5px] before:w-[5px] before:rounded-full">
                                    Portfolio or samples of work (school projects are acceptable).
                                </li>
                            </ul>
                        </section>
                        <div class="h-6"></div>
                        <section>
                            <h5 class="sr-only">Salary</h5>

                            <div class="flex items-center gap-2">
                                <span>Pay</span>
                                <span class="font-semibold">#300,000</span>
                            </div>
                        </section>
                    </section>


                </div>
                <div class="col-span-12 md:col-span-4">
                    <section class="border border-theme-clr-gray-400 rounded-md overflow-hidden">
                        <h2 class="uppercase font-bold p-4 bg-theme-clr-light">Apply here</h2>
                        <div class="p-4">
                            <form action="/" method="post">
                                <fieldset>
                                    <legend class="font-semibold">Personal Information</legend>
                                    <div class="h-5"></div>
                                    <div class="mb-4">
                                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-white required">Your Name</label>
                                        <input type="email" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                    </div>

                                    <div class="mb-4">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Your Email</label>
                                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                    </div>

                                    <div class="mb-4">
                                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Phone Number</label>
                                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                    </div>

                                    <div class="mb-4">
                                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Address</label>
                                        <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                    </div>
                                </fieldset>

                                <hr class="my-4 border-t border-theme-clr-gray-400">

                                <fieldset>
                                    <legend class="font-semibold">General Information</legend>
                                </fieldset>





                                <div class="mb-4">
                                    <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500 required">Your Name</label>
                                    <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
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