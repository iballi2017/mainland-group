import ConfigureUiDisplayFontSizes from "./ConfigureUiDisplayFontSizes.js";
import ConfigureUiDisplayModes from "./ConfigureUiDisplayModes.js";
import CreateHtmlElement from "./CreateHtmlElement.js";
import History from "./History.js";
import Overlay from "./Overlay.js";


document.addEventListener("DOMContentLoaded", () => {
    // alert("Page Loaded!!!");
    var OverlayObj = new Overlay();
    var overlay = document.querySelector(".overlay");
    var closeOverlayBtn = document.querySelector(".close-overlay-btn");

    const Init = () => {
        handlePageLoader();
        const configureUiDisplayModes = new ConfigureUiDisplayModes();
        configureUiDisplayModes.handle_switch_theme();

        const configureUiDisplayFontSizes = new ConfigureUiDisplayFontSizes();
        configureUiDisplayFontSizes.handle_switch_fontSize();

        handlePageSearch();
        hideOverlay();
        handleHistory();


    };

    /** */


    function handlePageLoader() {
        /**remove page loader */
        const page_loader = document.querySelector(".page-loader");
        page_loader?.classList.contains("show") ?
            page_loader.classList.remove("show") :
            null;
    }


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
        });
    }


    function hideOverlay() {
        closeOverlayBtn.addEventListener("click", () => {
            OverlayObj.hide();
            toggleOverlay();
        })
    }


    function handleHistory() {

        // /**Go back with button clicked */
        const goBackWithButtonClicked = () => {
            const triggers = document.querySelectorAll(".back-history-btn");
            for (let i = 0; i < triggers.length; i++) {
                const button = triggers[i];
                button.addEventListener("click", () => {
                    const history = new History();
                    history.goBack();
                });
            }
        }
        goBackWithButtonClicked();
    }


    Init();
});
