import ConfigureUiDisplayModes from "./ConfigureUiDisplayModes.js";
import Overlay from "./overlay.js";


document.addEventListener("DOMContentLoaded", () => {
    // alert("Page Loaded!!!");

    var OverlayObj = new Overlay();
    var overlay = document.querySelector(".overlay");
    var closeOverlayBtn = document.querySelector(".close-overlay-btn");

    const Init = () => {
        const configureUiDisplayModes = new ConfigureUiDisplayModes();
        configureUiDisplayModes.handle_switch_theme();
        handlePageSearch();
        hideOverlay();
    };


    function toggleOverlay() {
        OverlayObj.getStatus() ? overlay.classList.add("show") : overlay.classList.remove("show");
    }


    function handlePageSearch() {
        var pageSearch = document.querySelector(".page-search");
        var searchIcon = document.querySelector(".search-icon");

        searchIcon.addEventListener("click", () => {
            OverlayObj.show();
            toggleOverlay();
            pageSearch.classList.add("show")
        })

    }


    function hideOverlay() {
        closeOverlayBtn.addEventListener("click", () => {
            OverlayObj.hide();
            toggleOverlay();
        })
    }


    Init();
});
