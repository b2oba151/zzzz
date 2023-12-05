<script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

{{-- wyzipin --}}
<script>
    var editor2cfg = {}
	editor2cfg.toolbar = "full"; // default , full ou basic
    editor2cfg.skin = "gray";
	var editor2 = new RichTextEditor("#inp_editor1", editor2cfg);

    // var editor1cfg = {}
	// editor1cfg.toolbar = "default"; // default , full ou basic
	// var editor1 = new RichTextEditor("#div_editor1", editor1cfg);
</script>



<script>
    <!--
    //Variables PHPBoost
    var PATH_TO_ROOT = "";
    var TOKEN = "111b9ff7c7f4589b";
    var THEME = "linuxtricks";
    var LANG = "french";
    //Variables BBCode
    var L_HIDE_MESSAGE = 'Ce message est caché, cliquer ici pour afficher son contenu.';
    var L_HIDE_HIDEBLOCK = 'Cliquer ici pour cacher le message.';
    var L_COPYTOCLIPBOARD = 'Copier vers le presse-papier';
    //Variables CookieBar
    -->
</script>

<script src="{{ asset('kernel/lib/js/jquery/jquery.js') }}"></script>
<script src="{{ asset('kernel/lib/js/global.js') }}"></script>
<script src="{{ asset('templates/default/plugins/dndfiles.js') }}"></script>
<script src="{{ asset('kernel/lib/js/lightcase/lightcase.js') }}"></script>
<script src="{{ asset('wiki/templates/js/wiki.js') }}"></script>

<script>
    function check_search_mini_form_post() {
        var textSearched = document.getElementById('TxTMiniSearched').value;
        if (textSearched.length > 3) {
            textSearched = escape_xmlhttprequest(textSearched);
            return true;
        } else {
            alert('La chaine recherchée doit faire au moins 4 caractères !');
            return false;
        }
    }
    jQuery(document).ready(function() {
        jQuery('#search-token').val(TOKEN);
    });
    jQuery("#cssmenu-1764").menumaker({
        title: "Linuxtricks",
        format: "multitoggle",
        breakpoint: 768
    });
    jQuery('[data-confirmation]').each(function() {
        data_confirmation = jQuery(this).attr('data-confirmation');
        if (data_confirmation == 'delete-element')
            var message = 'Voulez-vous vraiment supprimer cet élément ?';
        else
            var message = data_confirmation;
        this.onclick = function() {
            return confirm(message);
        }
    });
    jQuery(document).ready(function() {
        jQuery('a[rel^=lightbox]').attr('data-rel', 'lightcase:collection');
        jQuery('a[data-lightbox^=formatter]').attr('data-rel', 'lightcase:collection');
        jQuery('a[data-rel^=lightcase]').lightcase({
            labels: {
                'errorMessage': 'L\'élément que vous demandez n\'existe pas.',
                'sequenceInfo.of': ' ' + 'sur' + ' ',
                'close': 'Fermer',
                'navigator.prev': 'Précédent',
                'navigator.next': 'Suivant',
                'navigator.play': 'Lecture',
                'navigator.pause': 'Pause'
            },
            maxHeight: window.innerHeight,
            maxWidth: window.innerWidth,
            shrinkFactor: 0.85
        });
    });
    jQuery('#table').basictable();
    jQuery('#table2').basictable();
    jQuery('#table3').basictable();
    jQuery('#table4').basictable();
    jQuery('#table5').basictable();
    jQuery(function() {
        jQuery(".lined textarea").linedtextarea();
    });
</script>


<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

{{-- <script>
    // Handle form submission
    document.getElementById('googleSearchForm').addEventListener('submit', function (event) {
        event.preventDefault();
        // Get the search query from the form
        const searchQuery = document.getElementById('TxTMiniSearched').value;
        // Build the Google search URL
        const googleSearchURL = `https://www.google.com/search?q=${encodeURIComponent(searchQuery)}`;
        // Set the iframe source to the Google search URL
        document.getElementById('googleResultsFrame').src = googleSearchURL;
        // Show the modal
        $('#googleResultsModal').modal('show');
    });
</script> --}}


<script>
    document.getElementById('googleSearchForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const searchQuery = document.getElementById('TxTMiniSearched').value;
    const routeURL = '{{ route("google.search") }}';

    // Construisez l'URL de la route Laravel avec la requête de recherche
    const googleSearchURL = `${routeURL}?q=${encodeURIComponent(searchQuery)}`;

    // Définissez la source de l'iframe sur l'URL de la route Laravel
    document.getElementById('googleResultsFrame').src = googleSearchURL;
    $('#googleResultsModal').modal('show');
});
</script>
