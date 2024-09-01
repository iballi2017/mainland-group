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
$title = new Breadcrumb("Portfolio", "");

$routes = array(
    $home,
    $title
);
include_once("./components/header.php"); ?>
<!-- header closes -->

<main>
    <section class="bg-theme-clr-white dark:text-on-theme-clr-light py-12 lg:py-20 animate__animated animate__fadeIn">
        <div class="mg-main-container items-center">

            <ul class="grid grid-cols-12 gap-2 md:gap-8 w-full">
                <li class="col-span-12 lg:col-span-6 relative">
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-lg" src="./assets/images/hero-slider-2-image.png" alt="" />
                    </div>
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
                        <!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="w-full text-lg lg:text-xl font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">Mainland Solar and VEICHI Partnership</p>
                        </button> -->
                        <a href="https://drive.google.com/file/d/1_5UuK9L7OuqJpvcKZVqpbBBcGRBgXpNz/view?usp=sharing" target="_blank" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="text-center w-full lg:text-xl leading-5 lg:leading-6 rounded-lg font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                                TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network
                            </p>
                        </a>
                    </div>
                </li>
                <li class="col-span-12 lg:col-span-6 relative">
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-lg" src="./assets/images/1723837431491.png" alt="" />
                    </div>
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
                        <!-- <button data-modal-target="default-modal2" data-modal-toggle="default-modal2" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="w-full text-lg lg:text-xl font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                                TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network
                            </p>
                        </button> -->
                        <a href="https://drive.google.com/file/d/1hqnSqh9j9kySE6NmdWwMQysk-Bx-TxGe/view?usp=sharing" target="_blank" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="text-center w-full lg:text-xl leading-5 lg:leading-6 rounded-lg font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                                TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network
                            </p>
                        </a>
                    </div>
                </li>
                <li class="col-span-12 lg:col-span-6 relative">
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-lg" src="./assets/images/_MG_1808-min.png" alt="" />
                    </div>
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
                        <!-- <button data-modal-target="default-modal3" data-modal-toggle="default-modal3" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="w-full text-lg lg:text-xl font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                                STUDIOSMAINLAND FILMMAKING TRAINING PROGRAMME
                            </p>
                        </button> -->
                        <a href="https://drive.google.com/file/d/1y27OJ6d94il1hLkdn7FJDjzFB37rrgbK/view?usp=sharing" target="_blank" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                            <span class="sr-only">Open</span>
                            <p class="text-center w-full lg:text-xl leading-5 lg:leading-6 rounded-lg font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                                Studiomainland Filmaking Training Programme
                            </p>
                        </a>
                    </div>
                </li>
            </ul>


        </div>

    </section>





    <!-- Main modal 1 -->
    <div id="default-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <button type="button" onclick="videoController.stopVideo('player1')" class="absolute right-4 top-4 text-gray-300 bg-transparent hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal body -->
                <div class="video-container | p-2 md:p-4 space-y-4">
                    <iframe id="player1" width="100%" height="480"
                        src="https://www.youtube.com/embed/mUc14A_ccLE?enablejsapi=1" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>




    <!-- Main modal 2 -->
    <div id="default-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <button type="button" onclick="videoController.stopVideo('player2')" class="absolute right-4 top-4 text-gray-300 bg-transparent hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal body -->
                <div class="video-container | p-2 md:p-4 space-y-4">
                    <iframe id="player2" width="100%" height="480" src="https://www.youtube.com/embed/NMx06VSgCCo?enablejsapi=1" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>




    <!-- Main modal 3 -->
    <div id="default-modal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <button type="button" onclick="videoController.stopVideo('player3')" class="absolute right-4 top-4 text-gray-300 bg-transparent hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal3">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal body -->
                <div class="video-container | p-2 md:p-4 space-y-4">
                    <!-- <iframe id="player3" width="100%" height="480" src="https://www.youtube.com/embed/NMx06VSgCCo?enablejsapi=1" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->

                    <iframe src="https://drive.google.com/file/d/1y27OJ6d94il1hLkdn7FJDjzFB37rrgbK/preview" width="100%" height="480" allow="autoplay"></iframe>
                    <!-- https://drive.google.com/file/d/1y27OJ6d94il1hLkdn7FJDjzFB37rrgbK/view?usp=sharing -->
                </div>
            </div>
        </div>
    </div>





    <!-- Your JavaScript class and code -->
    <script>
        // Step 2: Create the JavaScript Class for YouTube control
        class YouTubeVideoController {
            constructor() {
                this.players = {};
            }

            // This function creates an <iframe> (and YouTube player) after the API code downloads.
            onYouTubeIframeAPIReady() {
                document.querySelectorAll('.video-container iframe').forEach(iframe => {
                    const playerId = iframe.id;
                    console.log("playerId: ", playerId)
                    this.players[playerId] = new YT.Player(playerId, {
                        events: {
                            'onReady': this.onPlayerReady.bind(this),
                            'onStateChange': this.onPlayerStateChange.bind(this)
                        }
                    });
                });
            }

            onPlayerReady(event) {
                console.log(`Player ready: ${event.target.getIframe().id}`);
            }

            onPlayerStateChange(event) {
                console.log(`Player state changed for ${event.target.getIframe().id}: ${event.data}`);
            }

            playVideo(playerId) {
                console.log("to stop: ", playerId)
                console.log("to stop: ", this.players[playerId])
                if (this.players[playerId]) {
                    this.players[playerId].playVideo();
                }
            }

            pauseVideo(playerId) {
                if (this.players[playerId]) {
                    this.players[playerId].pauseVideo();
                }
            }

            stopVideo(playerId) {
                console.log("to stop: ", playerId)
                console.log("to stop: ", this.players[playerId])
                if (this.players[playerId]) {
                    this.players[playerId].stopVideo();
                    console.log("stopped")
                }
            }

            seekTo(playerId, seconds) {
                if (this.players[playerId]) {
                    this.players[playerId].seekTo(seconds, true);
                }
            }
        }

        // Step 3: Initialize the controller and set up the API callback
        const videoController = new YouTubeVideoController();

        function onYouTubeIframeAPIReady() {
            videoController.onYouTubeIframeAPIReady();
        }
    </script>

</main>









<!-- footer opens -->
<?php include_once("./components/footer.php"); ?>
<!-- footer closes -->
<!-- foot opens -->
<?php include_once("./includes/foot.php"); ?>
<!-- foot closes -->