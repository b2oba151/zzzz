(function () {
    // Helper function to convert text to snake case
    function toSnakeCase(text) {
        return text.replace(/([a-z])([A-Z])/g, '$1_$2').replace(/\s+/g, '_').toLowerCase();
    }

    tinymce.PluginManager.add("titres", function (editor) {
        /* Helper functions */
        const toh2 = () =>
            `<h2 class="formatter-title wiki-paragraph-2" id="${toSnakeCase(editor.selection.getContent())}">${editor.selection.getContent()}</h2><br/>`;
        const toh3 = () =>
            `<h3 class="formatter-title wiki-paragraph-3" id="${toSnakeCase(editor.selection.getContent())}">${editor.selection.getContent()}</h3><br/>`;
        const toh4 = () =>
            `<h4 class="formatter-title wiki-paragraph-4" id="${toSnakeCase(editor.selection.getContent())}">${editor.selection.getContent()}</h4><br/>`;
        const toh5 = () =>
            `<h5 class="formatter-title wiki-paragraph-5" id="${toSnakeCase(editor.selection.getContent())}">${editor.selection.getContent()}</h5><br/>`;
        const toIsoHtml = (date) =>
            `<time datetime="${date.toString()}">${date.toISOString()}</time>`;

        editor.ui.registry.addSplitButton("splitTitreButton", {
            text: "T1",
            onAction: (_) => editor.insertContent(toh2()),
            onItemAction: (buttonApi, value) => editor.insertContent(value),
            fetch: (callback) => {
                const items = [
                    {
                        type: "choiceitem",
                        text: "T2",
                        value: toh2(),
                    },
                    {
                        type: "choiceitem",
                        text: "T3",
                        value: toh3(),
                    },
                    {
                        type: "choiceitem",
                        text: "T4",
                        value: toh4(),
                    },
                    {
                        type: "choiceitem",
                        text: "T5",
                        value: toh5(),
                    },
                    {
                        type: "choiceitem",
                        text: "Insert ISO Date",
                        value: toIsoHtml(new Date()),
                    },
                ];
                callback(items);
            },
        });
    });
})();
