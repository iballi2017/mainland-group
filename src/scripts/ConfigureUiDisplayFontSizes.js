class ConfigureUiDisplayFontSizes {
    userLargeFont = localStorage.getItem("fontSize");
    ui_fontSizes_toggler = document.querySelector(".ui-font-sizes-toggler");


    constructor() {
        if (localStorage.fontSize === 'lg-font') {
            document.documentElement.classList.add('lg-font');
            this.ui_fontSizes_toggler.setAttribute("checked", true);
            document.documentElement.setAttribute('data-fontSize', 'lg-font');
        } else {
            document.documentElement.classList.remove('lg-font');
            document.documentElement.setAttribute('data-fontSize', 'base-font');
        }


    }


    handle_switch_fontSize() {
        this.ui_fontSizes_toggler.addEventListener("change", ($event) => {

            if ($event.target.checked) {
                document.documentElement.classList.add('lg-font');
                document.documentElement.setAttribute('data-fontSize', 'lg-font');
                document.documentElement.classList.contains('base-font') ? document.documentElement.classList.remove('base-font') : null;
                localStorage.setItem("fontSize", "lg-font");
                this.ui_fontSizes_toggler.setAttribute("checked", true);
            } else {

                document.documentElement.classList.contains('lg-font') ? document.documentElement.classList.remove('lg-font') : null;
                document.documentElement.setAttribute('data-fontSize', 'base-font');
                document.documentElement.classList.add('base-font');
                localStorage.setItem("fontSize", "base-font")
                this.ui_fontSizes_toggler.setAttribute("checked", false);
            }

        });
    }
}

export default ConfigureUiDisplayFontSizes;