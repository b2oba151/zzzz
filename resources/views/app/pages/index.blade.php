@extends('app')

@section('content')

<textarea id="inp_editor1" >
    {{-- &lt;p&gt;Initial Document Content&lt;/p&gt; --}}
    <p>texte initial</p>
</textarea>
<br>

<button class='' onclick="event.preventDefault();Do_GetHTML();return false;">Get HTML</button>
<button class='' onclick="event.preventDefault();Do_SetHTML();return false;">Set HTML</button>
<button class='' onclick="event.preventDefault();Do_GetText();return false;">Get Text</button>
<button class='' onclick="event.preventDefault();Do_SetText();return false;">Set Text</button>
<button class='' onclick="Do_InsertBASHCode()">BASH Code</button>


<br><br>
<p>
	<textarea id="ta1" class="form-control" rows="3"></textarea>
</p>



<script type="text/javascript">
    function Do_GetText() {
		ta1.value = editor2.getPlainText();
		editor2.focus();
	}
	function Do_GetHTML() {
		ta1.value = editor2.getHTMLCode();
		editor2.focus();
	}
	function Do_SetHTML() {
		editor2.setHTMLCode(ta1.value);
		editor2.focus();
	}
	function Do_SetText() {
		editor2.setPlainText(ta1.value);
		editor2.focus();
	}


// Vous pouvez utiliser maintenant la variable `codeHTML` comme bon vous semble
console.log(codeHTML);

    function Do_InsertBASHCode() {
        var text= Do_SetText();
        var codeBash = `
    <div><div class="formatter-container formatter-code code-BASH" style="margin: auto; font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif; overflow-wrap: break-word; hyphens: auto; position: relative; display: block; width: 899.266px; color: rgb(68, 68, 68); text-align: justify; background-color: rgb(255, 255, 255)"><span id="copy-code-1" class="copy-code" title="Copier vers le presse-papier" style=" padding: 1rem 0px 0px; font-size: 0.8em; outline: none; font-family: 'Nova Square', sans-serif !important; float: right; color: rgb(187, 187, 187); font-style: italic; cursor: copy; transition: all 0.3s linear 0s">
      <i class="fa fa-clipboard" style=" font-size: 10.4px; outline: none; font-family: 'Font Awesome 5 Free'; -webkit-font-smoothing: antialiased; display: inline-block; font-variant: normal; text-rendering: auto; line-height: 1; font-weight: 900">
        <span class="copy-code-txt" style=" padding: 0px 0px 0px 3px; font-size: 10.4px; outline: none; font-family: 'Nova Square', sans-serif !important">Copier vers le presse-papier</span>
      </i>
    </span>
    <span class="formatter-title" style="margin: 1rem 0px 0.5rem; font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; display: inline-block; font-weight: bold">Code BASH :</span><div class="formatter-content copy-code-content" id="copy-code-1-content" style=" padding: 8px; font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; overflow-wrap: break-word; hyphens: auto; background-color: rgb(250, 250, 250); border: 1px solid rgb(221, 221, 221); overflow: auto; max-height: 500px"><pre style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; max-width: 100%; overflow-wrap: break-word; hyphens: auto; white-space: pre-wrap"><pre class="bash" style=" font-size: 13px; outline: none; font-family: monospace; max-width: 100%; overflow-wrap: break-word; hyphens: auto; white-space: pre-wrap"> <span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; color: rgb(194, 12, 185); font-weight: bold">chroot</span> <span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; font-weight: bold">/</span>nouvelle<span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; font-weight: bold">/</span>racine <span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; font-weight: bold">/</span>usb<span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; font-weight: bold">/</span>bin<span style=" font-size: 13px; outline: none; font-family: 'Nova Square', sans-serif !important; font-weight: bold">/</span>commande_a_lancer<br /></pre></pre>
    </div>
  </div>
  <br class="Apple-interchange-newline" /></div>
`;
		editor2.insertHTML(codeBash);
		editor2.focus();
	}
</script>
@endsection
