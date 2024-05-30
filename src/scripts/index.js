import ConfigureUiDisplayModes from "./configure-ui-display-modes.js";


document.addEventListener("DOMContentLoaded", () => {
    // alert("Page Loaded!!!");


    const Init = () => {
        const configureUiDisplayModes = new ConfigureUiDisplayModes();
        configureUiDisplayModes.handle_switch_theme();
    };


    Init();
})