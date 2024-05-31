
class Overlay {
    isShow = false;
    controlledElements = document.querySelectorAll(".overlay-ctrl");
    constructor() { }

    show() {
        this.isShow = true;
        this.getStatus();
    }

    hide() {
        this.isShow = false;
        this.getStatus();
        for (let i = 0; i < this.controlledElements.length; i++) {
            const element = this.controlledElements[i];
            element.classList.remove("show");
        }
    }

    getStatus() {
        return this.isShow;
    }
}


export default Overlay;