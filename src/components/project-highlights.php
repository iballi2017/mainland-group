<section class="bg-theme-clr-white dark:text-on-theme-clr-light py-12 lg:py-20 animate__animated animate__fadeIn">
    <div class="mg-main-container items-center">


        <h2 class="font-semibold text-sm lg:text-lg text-center fade-in uppercase" data-delay="200">Project
            Highlights</h2>
        <p class="font-bold text-xl lg:text-3xl text-center max-w-[850px] mx-auto fade-in" data-delay="400">
            A Glimpse into what we do
        </p>

        <div class="h-8 md:h-12"></div>

        <ul class="grid grid-cols-12 gap-2 md:gap-8 w-full">
            <li class="col-span-12 lg:col-span-6 relative">
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-lg" src="./assets/images/hero-slider-2-image.png" alt="Mainland Solar and VEICHI Partnership" />
                </div>
                <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                        <span class="sr-only">Open</span>
                        <p class="text-center w-full lg:text-xl leading-5 lg:leading-6 rounded-lg font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">Mainland Solar and VEICHI Partnership</p>
                    </button>
                </div>
            </li>
            <li class="col-span-12 lg:col-span-6 relative">
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-lg" src="./assets/images/1723837431491.png" alt="TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network" />
                </div>
                <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
                    <button data-modal-target="default-modal2" data-modal-toggle="default-modal2" class="absolute top-0 bottom-0 left-0 right-0 flex items-end">
                        <span class="sr-only">Open</span>
                        <p class="text-center w-full lg:text-xl leading-5 lg:leading-6 rounded-lg font-semibold text-white bg-gray-900/50 py-4 mb-4 mx-2">
                            TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network
                        </p>
                    </button>
                </div>
            </li>
        </ul>

        <div class="h-4"></div>
        <div class="h-4"></div>
        <div class="text-center fade-in" data-delay="600">
            <?php
            $label = "View all";
            $target_blank = "";
            $url = "portfolio.php";
            include("./shared/widgets/call-to-action.php"); ?>
        </div>


    </div>

</section>


<!-- Main modal -->
<div id="default-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <button type="button" onclick="videoController.stopVideo('player1')" class="absolute z-40 right-4 top-4 text-gray-300 bg-transparent hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <!-- Modal body -->
            <div class="video-container | p-2 md:p-4 space-y-4">
                <iframe id="player1" width="100%" height="480"
                    src="https://www.youtube.com/embed/mUc14A_ccLE?enablejsapi=1" 
                    title="Mainland Solar and VEICHI Partnership"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <button onclick="videoController.toggleVideo('player1')" class="absolute z-20 top-0 bottom-0 left-0 right-0" aria-label="play">
                    <span class="sr-only">Play</span>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Main modal 2 -->
<div id="default-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <button type="button" onclick="videoController.stopVideo('player2')" class="absolute z-40 right-4 top-4 text-gray-300 bg-transparent hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal2">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <!-- Modal body -->
            <div class="video-container | p-2 md:p-4 space-y-4">
                <iframe id="player2" width="100%" height="480" src="https://www.youtube.com/embed/NMx06VSgCCo?enablejsapi=1" 
                    title="TEPCAN Inauguration: Celebrating the Launch of The Education Project Associate Network"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <button onclick="videoController.toggleVideo('player2')" class="absolute z-20 top-0 bottom-0 left-0 right-0" aria-label="play">
                    <span class="sr-only">Play</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Your JavaScript class and code -->
<script>
    // Step 2: Create the JavaScript Class for YouTube control
    class YouTubeVideoController {
        isPlaying = false;
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

        async playVideo(playerId) {
            if (this.players[playerId]) {
                await this.players[playerId].playVideo();
            }
        }

        async toggleVideo(playerId) {
            let iframe = document.getElementById(`${playerId}`);
            console.log("iframe****: ", iframe)
            if (this.players[playerId]) {
                !this.isPlaying ?
                    (await this.players[playerId].playVideo(), this.isPlaying = true, iframe.nextElementSibling.classList.add('hidden')) :
                    (await this.players[playerId].pauseVideo(), this.isPlaying = false, iframe.nextElementSibling.classList.remove('hidden'));
            }
        }


        async pauseVideo(playerId) {
            if (this.players[playerId]) {
                await this.players[playerId].pauseVideo();
            }
        }

        async stopVideo(playerId) {
            let iframe = document.getElementById(`${playerId}`);
            if (this.players[playerId]) {
                await this.players[playerId].stopVideo();
                iframe.nextElementSibling.classList.remove('hidden')
            }
        }

        async seekTo(playerId, seconds) {
            if (this.players[playerId]) {
                await this.players[playerId].seekTo(seconds, true);
            }
        }
    }

    // Step 3: Initialize the controller and set up the API callback
    const videoController = new YouTubeVideoController();

    function onYouTubeIframeAPIReady() {
        videoController.onYouTubeIframeAPIReady();
    }
</script>