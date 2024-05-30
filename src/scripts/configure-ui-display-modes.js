class ConfigureUiDisplayModes {
    systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches
    userTheme = localStorage.getItem("theme");
    ui_mode_toggler = document.querySelector(".ui-mode-toggler");
    constructor() {
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && this.systemTheme)) {
            document.documentElement.classList.add('dark');
            this.ui_mode_toggler.setAttribute("checked", true);
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.setAttribute('data-theme', 'light');
        }

        // Whenever the user explicitly chooses light mode
        // localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        // localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        // localStorage.removeItem('theme')
    }


    handle_switch_theme() {
        // console.log("ui_mode_toggler: ", ui_mode_toggler.checked);

        this.ui_mode_toggler.addEventListener("change", ($event) => {
            if ($event.target.checked) {
                document.documentElement.classList.add('dark');
                document.documentElement.setAttribute('data-theme', 'dark');
                document.documentElement.classList.contains('light') ? document.documentElement.classList.remove('light') : null;
                localStorage.setItem("theme", "dark");
                this.ui_mode_toggler.setAttribute("checked", true);
            } else {
                document.documentElement.classList.contains('dark') ? document.documentElement.classList.remove('dark') : null;
                document.documentElement.setAttribute('data-theme', 'light');
                document.documentElement.classList.add('light');
                localStorage.setItem("theme", "light")
                this.ui_mode_toggler.setAttribute("checked", false);
            }
        })

    }
}

export default ConfigureUiDisplayModes;