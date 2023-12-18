var cat_status = new Array();
function show_wiki_cat_contents(e, t) {
    var n = null,
        a = null,
        l =
            PATH_TO_ROOT +
            "/wiki/xmlhttprequest.php" +
            (0 != t
                ? "?display_select_link=1&token=" + TOKEN
                : "?token=" + TOKEN);
    if (window.XMLHttpRequest) n = new XMLHttpRequest();
    else {
        if (!window.ActiveXObject) return;
        n = new ActiveXObject("Microsoft.XMLHTTP");
    }
    e > 0 &&
        (null == cat_status[e]
            ? ((a = "id_cat=" + e),
              n.open("POST", l, !0),
              (n.onreadystatechange = function () {
                  4 == n.readyState &&
                      ((document.getElementById("cat-" + e).innerHTML =
                          n.responseText),
                      (document.getElementById("img-folder-" + e).className =
                          "fa fa-folder-open"),
                      document.getElementById("img-subfolder-" + e) &&
                          (document.getElementById(
                              "img-subfolder-" + e
                          ).className = "far fa-minus-square"),
                      (cat_status[e] = 1));
              }),
              n.setRequestHeader(
                  "Content-type",
                  "application/x-www-form-urlencoded"
              ),
              n.send(a))
            : 0 == cat_status[e]
            ? ((document.getElementById("cat-" + e).style.display = "block"),
              (document.getElementById("img-folder-" + e).className =
                  "fa fa-folder-open"),
              document.getElementById("img-subfolder-" + e) &&
                  (document.getElementById("img-subfolder-" + e).className =
                      "far fa-minus-square"),
              (cat_status[e] = 1))
            : ((document.getElementById("cat-" + e).style.display = "none"),
              (document.getElementById("img-folder-" + e).className =
                  "fa fa-folder"),
              document.getElementById("img-subfolder-" + e) &&
                  (document.getElementById("img-subfolder-" + e).className =
                      "far fa-plus-square"),
              (cat_status[e] = 0)));
}
function select_cat(e) {
    var t = null,
        n = null,
        a =
            PATH_TO_ROOT +
            "/wiki/xmlhttprequest.php?select_cat=1&token=" +
            TOKEN;
    if (window.XMLHttpRequest) t = new XMLHttpRequest();
    else {
        if (!window.ActiveXObject) return;
        t = new ActiveXObject("Microsoft.XMLHTTP");
    }
    e >= 0 &&
        e != selected_cat &&
        ((n = "selected_cat=" + e),
        t.open("POST", a, !0),
        (t.onreadystatechange = function () {
            4 == t.readyState &&
                ((document.getElementById("selected_cat").innerHTML =
                    t.responseText),
                (document.getElementById("id_cat").value = e),
                (document.getElementById("class-" + e).className = "selected"),
                (document.getElementById("class-" + selected_cat).className =
                    ""),
                (selected_cat = e));
        }),
        t.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
        t.send(n));
}
function insert_link() {
    var e = prompt(enter_text, title_link);
    if ("" == e) return alert(enter_text), !1;
    tinymce_editor
        ? insertTinyMceContent("[link=" + url_encode_rewrite(e) + "][/link]")
        : insertbbcode(
              "[link=" + url_encode_rewrite(e) + "]",
              "[/link]",
              "contents"
          );
}
function insert_paragraph(e) {
    var t = "-";
    if (e > 5 || e < 1) return !1;
    for (var n = 1; n <= e; n++) t += "-";
    insert_paragraph_title("paragraph", t, t, "contents");
}
function simple_insert_paragraph(e, t, n, a) {
    var l = document.getElementById(a),
        r = l.scrollTop,
        s = prompt(enter_paragraph_name, title_paragraph);
    tinymce_editor
        ? insertTinyMceContent("<br/>" + t + " " + s + " " + n + "<br/>")
        : ("" != n &&
              null != s &&
              s != enter_paragraph_name &&
              (l.value += "\n" + t + " " + s + " " + n + "\n"),
          l.focus(),
          (l.scrollTop = r));
}
function netscape_sel_paragraph(e, t, n, a) {
    var l = t.textLength,
        r = t.selectionStart,
        s = t.selectionEnd,
        c = t.scrollTop;
    (1 != s && 2 != s) || (s = l);
    var o = t.value.substring(0, r),
        i = t.value.substring(r, s),
        d = t.value.substring(s, l),
        u = "" != i ? i : prompt(enter_paragraph_name, title_paragraph);
    tinymce_editor
        ? insertTinyMceContent("<br/>" + n + " " + u + " " + a + "<br/>")
        : (null != u &&
              ("" != a && "" == i
                  ? ((t.value = o + "\n" + n + " " + u + " " + a + "\n" + d),
                    t.setSelectionRange(
                        o.length + (n.length + 2),
                        t.value.length - d.length - (a.length + 2)
                    ),
                    t.focus())
                  : ((t.value = o + "\n" + n + " " + i + " " + a + "\n" + d),
                    t.setSelectionRange(
                        o.length + (n.length + 2),
                        t.value.length - d.length - (a.length + 2)
                    ),
                    t.focus())),
          (t.scrollTop = c));
}
function ie_sel_paragraph(e, t, n, a) {
    selText = !1;
    var l = t.scrollTop;
    selection = document.selection.createRange().text;
    var r =
        "" != selection
            ? selection
            : prompt(enter_paragraph_name, title_paragraph);
    tinymce_editor
        ? insertTinyMceContent("<br/>" + n + " " + r + " " + a + "<br/>")
        : (null != r &&
              ("" != a && "" == selection
                  ? (document.selection.createRange().text =
                        "\n" + n + " " + r + " " + a + "\n")
                  : (document.selection.createRange().text =
                        "\n" + n + " " + selection + " " + a + "\n")),
          (t.scrollTop = l),
          (selText = ""));
}
function insert_paragraph_title(e, t, n, a) {
    var l = document.getElementById(a),
        r = navigator.appName;
    l.focus(),
        "Microsoft Internet Explorer" == r
            ? ie_sel_paragraph(e, l, t, n)
            : "Netscape" == r || "Opera" == r
            ? netscape_sel_paragraph(e, l, t, n)
            : simple_insert_paragraph(e, t, n, a);
}
function open_cat(e) {
    var t = null,
        n = null,
        a =
            PATH_TO_ROOT +
            "/wiki/xmlhttprequest.php?select_cat=1&display_select_link=0" +
            (0 == e ? "&root=1" : "") +
            "&token=" +
            TOKEN;
    if (window.XMLHttpRequest) t = new XMLHttpRequest();
    else {
        if (!window.ActiveXObject) return;
        t = new ActiveXObject("Microsoft.XMLHTTP");
    }
    e >= 0 &&
        e != selected_cat &&
        ((n = "open_cat=" + e),
        t.open("POST", a, !0),
        (t.onreadystatechange = function () {
            4 == t.readyState &&
                ((document.getElementById("cat-contents").innerHTML =
                    t.responseText),
                (document.getElementById("class-" + e).className = "selected"),
                (document.getElementById("class-" + selected_cat).className =
                    ""),
                (selected_cat = e));
        }),
        t.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
        t.send(n));
}
