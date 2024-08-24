import ConfigureUiDisplayFontSizes from "./ConfigureUiDisplayFontSizes.js";
import ConfigureUiDisplayModes from "./ConfigureUiDisplayModes.js";
import CreateHtmlElement from "./CreateHtmlElement.js";
import FileUpload from "./FileUpload.js";
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
        setUploadedFileNameForUI();


    };

    /** */


    function handlePageLoader() {
        /**remove page loader */
        const page_loader = document.querySelector(".page-loader");
        page_loader?.classList.contains("show") ?
            page_loader.classList.remove("show") :
            null;
    }


    function handleIntersectionEffects() {
        /* Page Content Intersection Observer */
        const faders = document.querySelectorAll(".fade-in");
        const sliders = document.querySelectorAll(".slide-in");

        const appearOptions = {
            threshold: 0,
            rootMargin: "0px 0px -100px 0px",
        };
        const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
            entries.forEach((entry) => {
                let dataDelay = entry.target.getAttribute("data-delay");

                if (!entry.isIntersecting) return;
                if (dataDelay) {
                    setTimeout(() => {
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }, parseInt(dataDelay));
                } else {
                    entry.target.classList.add("appear");
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);

        faders.forEach((fader) => {
            appearOnScroll.observe(fader);
        });

        sliders.forEach((slider) => {
            appearOnScroll.observe(slider);
        });

    }
    handleIntersectionEffects();


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

    function setUploadedFileNameForUI() {
        const fileControls = document.querySelectorAll(".file-control");
        const uploadedFileNameOuput = document.querySelectorAll(".uploaded-file-name-ouput");

        for (let i = 0; i < fileControls.length; i++) {
            const control = fileControls[i];
            let id = control.getAttribute('id');

            control.addEventListener('change', ($event) => {
                for (let j = 0; j < uploadedFileNameOuput.length; j++) {
                    const nameOutput = uploadedFileNameOuput[j];
                    let dataAttr = nameOutput.getAttribute('data-file-ui-name');
                    if (id === dataAttr) {
                        const fileUpload = new FileUpload();
                        fileUpload.set_file_name_for_ui(nameOutput, $event);
                    }

                }
            })

        }
    }



    Init();
});
