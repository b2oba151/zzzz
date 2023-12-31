<script src="{{ asset('tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script type="text/javascript">
    function getEditorStatus(editorId) {
        return tinymce.get(editorId).mode.get();
    }

    function toggleEditorStatus(editorId, currentStatus) {
        if (currentStatus === "design") {
            tinymce.get(editorId).mode.set("readonly");
        } else {
            tinymce.get(editorId).mode.set("design");
        }
    }

    function enableDisable(targetEditor, targetElement) {
        const status = getEditorStatus(targetEditor);
        const button = document.getElementById(targetElement);
        toggleEditorStatus(targetEditor, status);
        if (status === "design") {
            button.innerText = "Enable editor";
        } else {
            button.innerText = "Disable editor";
        }
    }
</script>

<script>
    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        skin: useDarkMode ? 'oxide' : 'oxide-dark',
        content_css:[
                useDarkMode ? 'oxide-dark' : 'default',
                '/templates/default/theme/default.css',
                '/kernel/lib/css/font-awesome/css/font-awesome.css',
                '/kernel/lib/css/font-awesome-animation/css/font-awesome-animation.css',
                '/kernel/lib/js/lightcase/css/lightcase.css',
                '/templates/linuxtricks/themeTinyMce/design.css',
                '/templates/linuxtricks/themeTinyMce/content.css',
                '/templates/linuxtricks/themeTinyMce/table.css',
                '/templates/linuxtricks/themeTinyMce/form.css',
                '/templates/linuxtricks/themeTinyMce/global.css',
                '/templates/linuxtricks/themeTinyMce/cssmenu.css',
                '/templates/linuxtricks/modules/connect/connect_mini.css',
                '/online/templates/online.css',
                '/poll/templates/poll_mini.css',
                '/search/templates/search_mini.css',
                '/BBCode/templates/bbcode.css',
                '/ThemesSwitcher/templates/themeswitcher.css',
                '/ReCaptcha/templates/ReCaptcha.css',
                '/SocialNetworks/templates/SocialNetworks.css',
                '/user/templates/user.css',
                '/user/templates/upload.css',
                '/templates/pages.css',
                '/rainbow/themes/css/github.css',
                'rainbow/src/language/generic.js',
                'rainbow/src/language/python.js',
                'rainbow/src/language/php.js',
                'rainbow/dist/rainbow.js',
        ],


        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
        language: 'fr_FR',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion insertCode',


        // Formats personnaliser
        // style_formats: [
        //     { title: "Headers", items: [
        //         { title: "Header 1", format: "h1" },
        //         { title: "Header 2", format: "h2" },
        //     ]},
        //         { title: 'Custom format', format: 'customformat' },
        //         { title: 'Custom waper', format: 'custom-wrapper' },
        // ],
        // formats: {
        //     // Changes the default format for h1 to have a class of heading
        //     h1: { block: 'h1', classes: 'formatter-title wiki-paragraph-2', attributes: {'id': function () { return 'heading_' + new Date().getTime();  } } },
        //     'custom-wrapper': { block: 'div', classes: 'wrapper', wrapper: true },
        //     customformat: { inline: 'span', styles: { color: '#00ff00', fontSize: '20px' }, attributes: { title: 'My custom format'} , classes: 'example1'},
        //     //     alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'left' },
        //     //     aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'center' },
        //     //     alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'right' },
        //     //     alignfull: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'full' },
        // },



        external_plugins: {
            'insertNote' : 'plugins/insertNote.js',
            'insertCode' : 'plugins/insertCode.js',
            'titres' : 'plugins/titres.js',
            'dates' : 'plugins/date.js',
        },
        editimage_cors_hosts: ['picsum.photos'],
        // menubar: 'file edit view insert format tools table help',
        menu: {
            file: { title: 'File', items: 'newdocument restoredraft | preview | export print | deleteallconversations ' },
            edit: { title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace | fontsize' },
            view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments' },
            insert: { title: 'Insert', items: 'image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime' },
            format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat' },
            tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | a11ycheck code wordcount' },
            table: { title: 'Table', items: 'inserttable | cell row column | advtablesort | tableprops deletetable' },
            help: { title: 'Help', items: 'help' }
        },

        toolbar: "insertfile undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl | splitDateButton insertNote insertCode splitTitreButton splitParagraphMarginLeft",

        // toolbar: "undo redo | aidialog aishortcuts | blocks fontsizeinput | bold italic | align numlist bullist | link image | table media pageembed | lineheight  outdent indent | strikethrough forecolor backcolor formatpainter removeformat | charmap emoticons checklist | code fullscreen preview | save print export | pagebreak anchor codesample footnotes mergetags | addtemplate inserttemplate | addcomment showcomments | ltr rtl casechange | spellcheckdialog a11ycheck",

        toolbar_location: 'top',
        toolbar_sticky: true,
        //toolbar_sticky_offset: 100,
        toolbar_mode: 'wrap', // 'floating', 'sliding', 'scrolling', or 'wrap'
        promotion: false,

        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,

        link_list: [{
                title: 'Lien 1',
                value: 'https://www.lien1.com'
            },
            {
                title: 'Lien 2',
                value: 'http://www.lien2.com'
            }
        ],
        image_list: [{
                title: 'My image 1',
                value: 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.powertrafic.fr%2Fwp-content%2Fuploads%2F2023%2F04%2Fimage-ia-exemple.png&tbnid=mQdKko-yiwTWIM&vet=12ahUKEwjF2sOHxKeDAxU_AfsDHRacCi8QMygAegQIARBG..i&imgrefurl=https%3A%2F%2Fwww.powertrafic.fr%2Foutils-ia-images%2F&docid=KEinTOh_AuNkmM&w=1140&h=570&q=image&ved=2ahUKEwjF2sOHxKeDAxU_AfsDHRacCi8QMygAegQIARBG'
            },
            {
                title: 'My image 2',
                value: 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatusneo.com%2Fwp-content%2Fuploads%2F2023%2F02%2FMicrosoftTeams-image551ad57e01403f080a9df51975ac40b6efba82553c323a742b42b1c71c1e45f1.jpg&tbnid=7I8YRFDqoIMFoM&vet=12ahUKEwjF2sOHxKeDAxU_AfsDHRacCi8QMyglegUIARCaAQ..i&imgrefurl=https%3A%2F%2Fstatusneo.com%2Ffrom-pixels-to-reality-how-ai-generated-images-are-revolutionizing-industries%2F&docid=hxl8Tp9ZhTfgOM&w=1024&h=1024&q=image&ved=2ahUKEwjF2sOHxKeDAxU_AfsDHRacCi8QMyglegUIARCaAQ'
            }
        ],
        image_class_list: [{
                title: 'rien',
                value: ''
            },
            {
                title: 'exemple de classe',
                value: 'class-name'
            }
        ],
        importcss_append: true,

        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', {
                    text: 'My text'
                });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', {
                    alt: 'My alt text'
                });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', {
                    source2: 'alt.ogg',
                    poster: 'https://www.google.com/logos/google.jpg'
                });
            }
        },

        templates: [{
                title: 'New Table',
                description: 'creates a new table',
                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
            },
            {
                title: 'Starting my story',
                description: 'A cure for writers block',
                content: 'Once upon a time...'
            },
            {
                title: 'New list with dates',
                description: 'New List with dates',
                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
            }
        ],

        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        contextmenu: 'link image table templates',
    });
</script>
