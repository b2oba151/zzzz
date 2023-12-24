(function () {
    // Fonction pour extraire le numéro de l'ID
    function extractNumberFromId(id) {
        const match = id.match(/\d+$/);
        return match ? parseInt(match[0]) : null;
    }

    // Fonction pour trouver le dernier ID commençant par "copy-code-" et récupérer son numéro
    function findLastCopyCodeNumber() {
        const editorContent = tinymce.activeEditor.getContent();
        const matches = editorContent.match(/copy-code-(\d+)/g);

        if (matches && matches.length > 0) {
            const lastId = matches[matches.length - 1];
            return extractNumberFromId(lastId);
        }

        return null;
    }

    // Fonction pour générer un nouvel ID en fonction du dernier ID existant
    function generateNextCopyCodeId() {
        const lastNumber = findLastCopyCodeNumber() || 0;
        return `copy-code-${lastNumber + 1}`;
    }

    // Fonction pour mettre à jour le compteur dans le localStorage
    function updateCounterInLocalStorage(newNumber) {
        localStorage.setItem('codeCounter', newNumber);
    }

    tinymce.PluginManager.add("insertCode", function (editor) {
        const dialogConfig = {
            title: "Inserer Highlght code",
            body: {
                type: "panel",
                items: [
                    {
                        type: 'listbox',
                        name: 'selectedLanguage',
                        label: 'Choisissez le language',
                        enabled: true,
                        items: [
                            { text: 'Generic', value: 'generic' },
                            { text: 'Bash', value: 'shell' },
                            { text: 'Php', value: 'php' },
                            { text: 'Python', value: 'python' },
                            { text: 'Java', value: 'java' },
                            { text: 'Sql', value: 'sql' },
                            { text: 'Json', value: 'json' },
                            { text: 'Html', value: 'html' },
                            { text: 'Css', value: 'css' },
                            { text: 'Javascript', value: 'javascript' },
                            { text: 'C', value: 'c' },
                            { text: 'Cmd', items: [
                                { text: 'Bash', value: 'shell' },
                                { text: 'PowerShell', value: 'powershell' }
                            ]}
                            ]
                    },
                    {
                        type: "textarea",
                        name: "codeTexte",
                        label: "Inserer le code",
                    },
                    {
                        type: "checkbox",
                        name: "isNewLine",
                        label: "Retour à la ligne",
                    },
                ],
            },
            buttons: [
                {
                    type: "cancel",
                    name: "closeButton",
                    text: "Annuler",
                },
                {
                    type: "submit",
                    name: "submitButton",
                    text: "Inserer",
                    buttonType: "primary",
                },
            ],
            initialData: {
                codeTexte: "",
                selectedLanguage: "",
                isNewLine: false,
            },
            onSubmit: (api) => {
                const data = api.getData();
                const checkbox = data.isNewLine ? "true" : "false";
                const languageName = data.selectedLanguage;

                const uniqueId = generateNextCopyCodeId();
                if (data.selectedLanguage === 'generic') {
                    data.selectedLanguage = '';
                }
                tinymce.activeEditor.execCommand(
                    "mceInsertContent",
                    false,

                    `<div class="formatter-container formatter-code code-${data.selectedLanguage}">
                        <span id="${uniqueId}" class="copy-code" title="Copier vers le presse-papier">
                            <em class="fa fa-clipboard">
                                <span class="copy-code-txt">Copier vers le presse-papier</span>
                            </em>
                        </span>
                        <span class="formatter-title">Code ${data.selectedLanguage} :</span>
                        <div id="${uniqueId}-content" class="formatter-content copy-code-content">
                            <pre>
                                <code data-language="${languageName}">
${data.codeTexte}
                                </code>
                            </pre>
                        </div>
                    </div><br/>`
                );

                // Mettre à jour le compteur dans le localStorage avec le nouveau numéro
                updateCounterInLocalStorage(extractNumberFromId(uniqueId));
                api.close();
            },
        };

        editor.ui.registry.addButton("insertCode", {
            icon: "note",
            tooltip: "Insert Code",
            onAction: () => editor.windowManager.open(dialogConfig),
        });
    });
})();
