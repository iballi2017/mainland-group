class CreateHtmlElement {
    tag_element
    constructor(tagName, content, parentElement) {
        this.tagName = tagName;
        this.content = content;
        this.parentElement = parentElement;
    }

    create() {
        this.tag_element = document.createElement(this.tagName);
        this.tag_element.innerText = this.content;
        this.parentElement ? this.parentElement.appendChild(this.tag_element) : null;
    }

    addAttribute(attribute, value) {
        this.tag_element.setAttribute(attribute, value);
    }

}


export default CreateHtmlElement;