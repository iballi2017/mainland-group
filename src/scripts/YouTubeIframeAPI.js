
class YouTubeIframeAPI {
    constructor() {
        this.players = {};

    }

    onYouTubeIframeAPIReady() {
        document.querySelectorAll('.yt-iframe-wrapper iframe').forEach(iframe => {
            const playerId = iframe.id;
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
        console.log("playerId: ", playerId)
        if (this.players[playerId]) {
            this.players[playerId].playVideo();
        }
    }

    pauseVideo(playerId) {
        if (this.players[playerId]) {
            this.players[playerId].pauseVideo();
        }
    }

}

export default YouTubeIframeAPI;