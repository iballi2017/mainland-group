import ConfigureUiDisplayModes from "./configure-ui-display-modes.js";


document.addEventListener("DOMContentLoaded", () => {
    // alert("Page Loaded!!!");


    const Init = () => {
        const configureUiDisplayModes = new ConfigureUiDisplayModes();
        configureUiDisplayModes.handle_switch_theme();
    };


    Init();
})


class ToggleItem {
    isHidden = false;
    constructor(controller, item, controlClass, flexClass, hiddenClass) {

    }


    toggle() {
        alert("hi")
        this.isHidden = !this.isHidden;
    }
}


var pageSearch = document.querySelector(".page-search");
var searchIcon = document.querySelector(".search-icon");

// var toggleItem = new ToggleItem(null, null, null, "flex", "hidden");
// toggleItem.toggle();

searchIcon.addEventListener("click", () => {
    pageSearch.classList.remove("hidden")
    pageSearch.classList.add("flex")
})