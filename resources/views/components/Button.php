<script>
    class Button
{
    #label
    #onClick
    #customClass

    static new () {
        return new Button()
    }

    #initHtml() {
        const ele = document.createElement("button");

        ele.setAttribute("type", "button");
        ele.setAttribute("class", "py-2 mb-20 w-full flex bg-blue-900 border border-2 rounded-lg border-blue-600 " + this.#customClass);

        ele.onclick = this.#onClick
        ele.innerHTML = this.#label

        return ele
    }

    setLabel(label) {
        this.#label = label
        return this
    }

    setOnClick(onClick) {
        this.#onClick = onClick
        return this
    }

    setCustomClass(customClass) {
        this.#customClass = customClass
        return this
    }

    appendTo(containerId) {
        document
            .getElementById(containerId)
            .appendChild(this.#initHtml())
    }
}

</script>