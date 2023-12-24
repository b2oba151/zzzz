(function () {
    function toSnakeCase(text) {
        return text.replace(/([a-z])([A-Z])/g, '$1_$2').replace(/\s+/g, '_').toLowerCase();
    }

    function getHeadingHTML(level, text) {
        const headingId = toSnakeCase(text);
        const headingClass = `formatter-title wiki-paragraph-${level}`;
        return `<h${level} class="${headingClass}" id="${headingId}">${text}</h${level}>`;
    }

    function getParagraphWithMargin( marginLeft, text) {
        const paragraphStyle = `style="margin-left: ${marginLeft}rem;"`;
        return `<p ${paragraphStyle}>${text}</p>`;
    }

    tinymce.PluginManager.add("titres", function (editor) {
        editor.ui.registry.addSplitButton("splitTitreButton", {
            text: "T1",
            onAction: (_) => editor.insertContent(getHeadingHTML(2, editor.selection.getContent())),
            onItemAction: (buttonApi, value) => editor.insertContent(value),
            fetch: (callback) => {
                const items = [
                    { type: "choiceitem", text: "T2", value: getHeadingHTML(3, editor.selection.getContent()) },
                    { type: "choiceitem", text: "T3", value: getHeadingHTML(4, editor.selection.getContent()) },
                    { type: "choiceitem", text: "T4", value: getHeadingHTML(5, editor.selection.getContent()) },
                    { type: "choiceitem", text: "T5", value: getHeadingHTML(6, editor.selection.getContent()) },
                ];
                callback(items);
            },
        });

            // Add another split button for paragraphs with margin-left
    editor.ui.registry.addSplitButton("splitParagraphMarginLeft", {
        text: "Margin Left N1",
        onAction: (_) => {
            const cursorPos = editor.selection.getRng().startOffset;
            const marginLeft = cursorPos * 1.5; // Adjust this multiplier as needed
            editor.insertContent(getParagraphWithMargin(marginLeft, editor.selection.getContent()));
        },
        onItemAction: (buttonApi, value) => editor.insertContent(value),
        fetch: (callback) => {
            // Fetch items as needed
            // Example items:
            const items = [
                { type: "choiceitem", text: "N2", value: getParagraphWithMargin( 1.5, editor.selection.getContent()) },
                { type: "choiceitem", text: "N3", value: getParagraphWithMargin( 3, editor.selection.getContent()) },
                { type: "choiceitem", text: "N4", value: getParagraphWithMargin( 5, editor.selection.getContent()) },
                { type: "choiceitem", text: "N5", value: getParagraphWithMargin( 7, editor.selection.getContent()) },
            ];
            callback(items);
        },
    });
    });




})();
