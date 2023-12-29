<script>
    class Input {
        #teID
        #name
        #Placeholder = " "
        #customClass
        #type = "text"
        #content
        #label
        #customClassForLabel

        static new() {
            return new Input()
        }

        #initHtml() {
            var outerDivElement = document.createElement("div");
            outerDivElement.setAttribute('class', this.#customClass)

            // Create label element and set its attributes
            var labelElement = document.createElement("label");
            labelElement.setAttribute("for", this.#label);
            labelElement.setAttribute("class", "block text-3xl font-lg text-neutral-600" + this.#customClassForLabel);
            labelElement.textContent = this.#content;

            // Create input element and set its attributes
            var inputElement = document.createElement("input");
            inputElement.setAttribute("id", this.#teID);
            inputElement.setAttribute("name", this.#name);
            inputElement.setAttribute("type", this.#type);
            inputElement.setAttribute("autocomplete", "on");
            inputElement.setAttribute("required", "");
            inputElement.setAttribute("placeholder", " " + this.#Placeholder);
            inputElement.setAttribute("class", `px-5 py-5
                        block text-3xl font-lg text-neutral-600 placeholder-gray-500
                        transition duration-500 ease-in-out transform
                        border border-transparent rounded-lg bg-gray-200
                        focus:outline-none focus:border-transparent
                        focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300
 ` +
                this.#customClass);

            // Append label to inner div
            outerDivElement.appendChild(labelElement);

            // Append input to inner div
            outerDivElement.appendChild(inputElement);

            return outerDivElement;
        }

        // set cho input tag
        setID(teID) {
            this.#teID = teID;
            return this;
        }

        setName(name) {
            this.#name = name
            return this
        }

        setPlaceholder(Placeholder) {
            this.#Placeholder = Placeholder
            return this
        }

        setType(type) {
            this.#type = type
            return this
        }

        setCustomClass(customClass) {
            this.#customClass = customClass
            return this
        }

        // set cho thẻ label
        setCustomClassForLabel(customClassForLabel) {
            this.#customClassForLabel = customClassForLabel
            return this
        }

        setContent(content) {
            this.#content = content;
            return this;
        }

        setLabel(label) {
            this.#label = label;
            return this
        }

        // hàm in và chọn hàm cha để đặt vào
        appendTo(containerId) {
            document
                .getElementById(containerId)
                .appendChild(this.#initHtml())
        }
    }
</script>