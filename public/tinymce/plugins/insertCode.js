(function () {
    let codeCounter = 0; // Variable globale pour stocker le compteur

    function generateUniqueId() {
        codeCounter++;
        return `copy-code-${codeCounter}`;
    }

    tinymce.PluginManager.add("insertCode", function (editor) {
        const dialogConfig = {
            title: "Inserer Highlght code",
            body: {
                type: "panel",
                // Le formulaire
                items: [
                    {
                        type: 'listbox', // component type
                        name: 'selectedLanguage', // identifier
                        label: 'Choisissez le language',
                        enabled: true, // enabled state
                        items: [
                            { text: 'Bash', value: 'bash' },
                            { text: 'Python', value: 'python' },
                            { text: 'Php', value: 'php' },
                            { text: 'Java', value: 'java' },
                            { text: 'Sql', value: 'sql' },
                            { text: 'Html', value: 'html' },
                            { text: 'Css', value: 'css' },
                            { text: 'Javascript', value: 'javascript' },
                            { text: 'C', value: 'c' },
                            { text: 'Cmd', items: [
                                { text: 'Bash', value: 'bash' },
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
            // valleur par defaut des champs
            initialData: {
                codeTexte: "",
                selectedLanguage: "",
                isNewLine: false,
            },
            // A la soumission du formulaire
            onSubmit: (api) => {
                const data = api.getData();
                const checkbox = data.isNewLine ? "true" : "false";

                const uniqueId = generateUniqueId(); // Utiliser la fonction pour générer un ID unique

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
                                <code data-language="${data.selectedLanguage}">
${data.codeTexte}
                                </code>
                            </pre>
                        </div>
                    </div><br/>`
                );
                api.close();
            },
        };

        //Ajouter icones : Triangle, note personalier:
        editor.ui.registry.addIcon('triangleUp', '<svg height="24" width="24"><path d="M12 0 L24 24 L0 24 Z" /></svg>');
        editor.ui.registry.addIcon('note', '<svg fill="#000000" width="24" height="24" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><title/><path d="M8,13h8V11H8ZM8,9h8V7H8Zm5,8h3V15H13ZM19.11,2a3.06,3.06,0,0,0-1.75.57,1,1,0,0,1-1.25,0,3,3,0,0,0-3.5,0A1.14,1.14,0,0,1,12,2.8a1.06,1.06,0,0,1-.6-.22A3,3,0,0,0,9.64,2a3,3,0,0,0-1.75.57,1,1,0,0,1-1.25,0A3.06,3.06,0,0,0,4.89,2H4V22h.89a3.06,3.06,0,0,0,1.75-.57,1,1,0,0,1,1.25,0,3,3,0,0,0,3.5,0A1.14,1.14,0,0,1,12,21.2a1.06,1.06,0,0,1,.6.22,3,3,0,0,0,1.74.58,3,3,0,0,0,1.75-.57,1,1,0,0,1,1.25,0,3.06,3.06,0,0,0,1.75.57H20V2ZM18,19.5a3,3,0,0,0-3,.28,1.09,1.09,0,0,1-.62.22,1,1,0,0,1-.6-.22A3,3,0,0,0,12,19.2a3.11,3.11,0,0,0-1.76.58,1,1,0,0,1-1.24,0,3,3,0,0,0-3-.28V4.5a3,3,0,0,0,1.26.3A3.11,3.11,0,0,0,9,4.22,1.09,1.09,0,0,1,9.64,4a1,1,0,0,1,.6.22A3,3,0,0,0,12,4.8a3.11,3.11,0,0,0,1.76-.58,1,1,0,0,1,1.24,0,3.11,3.11,0,0,0,1.76.58A3,3,0,0,0,18,4.5Z"/></svg>');

        // Options Pour le bouton
        editor.ui.registry.addButton("insertCode", {
            icon: "note",
            tooltip: "Insert  Code",
            onAction: () => editor.windowManager.open(dialogConfig),
        });
    });
})();
