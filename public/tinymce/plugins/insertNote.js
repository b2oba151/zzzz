(function () {
    tinymce.PluginManager.add("insertNote", function (editor) {
        const dialogConfig = {
            title: "Inserer Une note",
            body: {
                type: "panel",
                // Le formulaire
                items: [
                    {
                        type: "input",
                        name: "tittleData",
                        label: "Titre",
                    },
                    {
                        type: "textarea",
                        name: "noteData",
                        label: "Entrez le texte de la note",
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
                noteData: "",
                tittleData: "",
                isNewLine: false,
            },
            // A la soumission du formulaire
            onSubmit: (api) => {
                const data = api.getData();
                const checkbox = data.isNewLine ? "true" : "false";

                tinymce.activeEditor.execCommand(
                    "mceInsertContent",
                    false,
                    
                    `<div class="formatter-container formatter-blockquote"><span class="formatter-title title-perso">${data.tittleData} :</span>
                    <div class="formatter-content">
                            ${data.noteData}
                    </div>
                </div>

                <br />
                <br />`
                );
                api.close();
            },
        };

        //Ajouter icones : Triangle, note personalier:
        editor.ui.registry.addIcon('triangleUp', '<svg height="24" width="24"><path d="M12 0 L24 24 L0 24 Z" /></svg>');
        editor.ui.registry.addIcon('note', '<svg fill="#000000" width="24" height="24" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><title/><path d="M8,13h8V11H8ZM8,9h8V7H8Zm5,8h3V15H13ZM19.11,2a3.06,3.06,0,0,0-1.75.57,1,1,0,0,1-1.25,0,3,3,0,0,0-3.5,0A1.14,1.14,0,0,1,12,2.8a1.06,1.06,0,0,1-.6-.22A3,3,0,0,0,9.64,2a3,3,0,0,0-1.75.57,1,1,0,0,1-1.25,0A3.06,3.06,0,0,0,4.89,2H4V22h.89a3.06,3.06,0,0,0,1.75-.57,1,1,0,0,1,1.25,0,3,3,0,0,0,3.5,0A1.14,1.14,0,0,1,12,21.2a1.06,1.06,0,0,1,.6.22,3,3,0,0,0,1.74.58,3,3,0,0,0,1.75-.57,1,1,0,0,1,1.25,0,3.06,3.06,0,0,0,1.75.57H20V2ZM18,19.5a3,3,0,0,0-3,.28,1.09,1.09,0,0,1-.62.22,1,1,0,0,1-.6-.22A3,3,0,0,0,12,19.2a3.11,3.11,0,0,0-1.76.58,1,1,0,0,1-1.24,0,3,3,0,0,0-3-.28V4.5a3,3,0,0,0,1.26.3A3.11,3.11,0,0,0,9,4.22,1.09,1.09,0,0,1,9.64,4a1,1,0,0,1,.6.22A3,3,0,0,0,12,4.8a3.11,3.11,0,0,0,1.76-.58,1,1,0,0,1,1.24,0,3.11,3.11,0,0,0,1.76.58A3,3,0,0,0,18,4.5Z"/></svg>');

        // Options Pour le bouton
        editor.ui.registry.addButton("insertNote", {
            icon: "comment",
            tooltip: "Insert  Note",
            onAction: () => editor.windowManager.open(dialogConfig),
        });
    });
})();
