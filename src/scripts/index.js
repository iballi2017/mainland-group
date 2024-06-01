import ConfigureUiDisplayFontSizes from "./ConfigureUiDisplayFontSizes.js";
import ConfigureUiDisplayModes from "./ConfigureUiDisplayModes.js";
import CreateHtmlElement from "./CreateHtmlElement.js";
import Overlay from "./overlay.js";


document.addEventListener("DOMContentLoaded", () => {
    // alert("Page Loaded!!!");

    var OverlayObj = new Overlay();
    var overlay = document.querySelector(".overlay");
    var closeOverlayBtn = document.querySelector(".close-overlay-btn");

    const Init = () => {
        const configureUiDisplayModes = new ConfigureUiDisplayModes();
        configureUiDisplayModes.handle_switch_theme();

        const configureUiDisplayFontSizes = new ConfigureUiDisplayFontSizes();
        configureUiDisplayFontSizes.handle_switch_fontSize();

        handlePageSearch();
        hideOverlay();


        let greet = new CreateHtmlElement("div", "How are you my love?", document.body);
        greet.create();
        greet.addAttribute("class", "text-primary");
        let response = new CreateHtmlElement("div", "I'm fine sweetheart", document.body);
        response.create();
        // response.addAttribute("class", "font-bold text-2xl");
        response.addAttributes([
            {
                attr: "class",
                val: "text-red-500 font-semibold"
            },
            {
                attr: "data-score",
                val: 4
            }
        ]);


        // let owlDots = document.querySelectorAll(".owl-theme .owl-dots");
        let owThemeList = document.querySelectorAll(".owl-theme");
        // let owlDots = document.querySelectorAll(".owl-theme .owl-dots");
        for (let i = 0; i < owThemeList.length; i++) {
            const owlTheme = owThemeList[i];
            console.log("owlTheme: ", owlTheme);
            console.log("owlTheme children: ", owlTheme.children);
            setTimeout(() => {
                let owlDots = owlTheme.querySelector(".owl-dots");
                console.log("owlDots: ", owlDots);
                let circle = new CreateHtmlElement("div", "", owlDots);
                circle.create();
                circle.addAttributes([
                    {
                        attr: "class",
                        val: "play-slider-btn | h-[20px] w-[20px] rounded-full border-2 border-red-500 absolute right-[-2rem] cursor-pointer"
                    },
                ]);
            }, 0);
        }


        let circle = new CreateHtmlElement("div", "", document.body);
        circle.create();
        circle.addAttributes([
            {
                attr: "class",
                val: "play-slider-btn | h-8 w-8 rounded-full border-2 border-red-500"
            },
            {
                attr: "data-score",
                val: 4
            }
        ]);

        // let sliderPlayBtnWrapper = new CreateHtmlElement("div", "", document.body);
        // sliderPlayBtnWrapper.create();

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
