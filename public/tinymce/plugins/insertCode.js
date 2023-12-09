// Fichier insertCode.js
(function () {
    tinymce.PluginManager.add('insertCode', function (editor) {
        // Fonction pour insérer le code HTML avec des variables
        function insererCodeHTML(title, slot) {
            // var codeHTML = '<div class="formatter-container formatter-blockquote"><span class="formatter-title title-perso">' + title + ' :</span><div class="formatter-content">' + slot + '</div></div><br /><br />';
            var codeHTML = '<div class="formatter-container formatter-blockquote"><span class="formatter-title title-perso"> titre :</span><div class="formatter-content"> contenu</div></div><br /><br />';
            editor.insertContent(codeHTML);
        }

        // Ajouter le bouton à la barre d'outils
        editor.ui.registry.addButton('insertCode', {
            text: 'Insérer le Code',
            onAction: function () {
                // Utiliser SweetAlert pour obtenir les valeurs
                Swal.fire({
                    title: 'Entrez le titre',
                    input: 'text',
                    inputPlaceholder: 'Titre',
                    showCancelButton: true,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Le titre est requis !';
                        }
                    },
                }).then((result) => {
                    if (!result.dismiss && result.value) {
                        var title = result.value;

                        Swal.fire({
                            title: 'Entrez le contenu',
                            input: 'textarea',
                            inputPlaceholder: 'Contenu',
                            showCancelButton: true,
                            inputValidator: (value) => {
                                if (!value) {
                                    return 'Le contenu est requis !';
                                }
                            },
                        }).then((result) => {
                            if (!result.dismiss && result.value) {
                                var slot = result.value;
                                insererCodeHTML(title, slot);
                            }
                        });
                    }
                });
            }
        });

        // Ajouter le bouton à la barre de menus
        editor.ui.registry.addMenuItem('insertCode', {
            text: 'Insérer le Code',
            onAction: function () {
                // Utiliser SweetAlert pour obtenir les valeurs
                Swal.fire({
                    title: 'Entrez le titre',
                    input: 'text',
                    inputPlaceholder: 'Titre',
                    showCancelButton: true,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Le titre est requis !';
                        }
                    },
                }).then((result) => {
                    if (!result.dismiss && result.value) {
                        var title = result.value;

                        Swal.fire({
                            title: 'Entrez le contenu',
                            input: 'textarea',
                            inputPlaceholder: 'Contenu',
                            showCancelButton: true,
                            inputValidator: (value) => {
                                if (!value) {
                                    return 'Le contenu est requis !';
                                }
                            },
                        }).then((result) => {
                            if (!result.dismiss && result.value) {
                                var slot = result.value;
                                insererCodeHTML(title, slot);
                            }
                        });
                    }
                });
            }
        });

        return {
            // D'autres fonctions de plugin peuvent être ajoutées ici
        };
    });
})();
