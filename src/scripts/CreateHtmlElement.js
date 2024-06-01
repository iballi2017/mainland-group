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
        // Create a class attribute:
        const att = document.createAttribute(attribute);

        // Set the value of the attribute:
        att.value = value;

        // Add the class attribute to element:
        console.log("this.tagName: ", this.tagName)
        console.log("this.tag_element: ", this.tag_element)
        console.log("this.parentElement: ", this.parentElement)
        console.log("att: ", att)
        // this.tagName ? this.tagName.setAttributeNode(att) : null;
    }

}


export default CreateHtmlElement;