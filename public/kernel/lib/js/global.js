function strpos(e,t){var n=e.indexOf(t,0);return n>=0&&n}function bb_hide(e,t,n){e=void 0!==e?e:0,t=void 0!==t?t:0;n.stopPropagation(),jQuery("#formatter-hide-container-"+e).toggleClass("formatter-show"),1==t?jQuery("#formatter-hide-container-"+e).removeAttr("onClick"):jQuery("#formatter-hide-container-"+e).attr("onClick","bb_hide("+e+", 1, event);")}function copy_code_clipboard(e){Number.isInteger(e)&&(e="copy-code-"+e+"-content");var t=document.getElementById(e);t instanceof HTMLTextAreaElement?t.select():SelectElement(t);try{document.execCommand("copy")}catch(e){alert("Your browser do not authorize this operation")}}function SelectElement(e){var t=document.createRange();t.selectNodeContents(e);var n=window.getSelection();n.removeAllRanges(),n.addRange(t)}function copy_to_clipboard(e){$("<input>").val(e).appendTo("body").select();try{document.execCommand("copy")}catch(e){alert("Your browser do not authorize this operation")}}function open_submenu(e,t,n){t=void 0!==t?t:"opened";0==(n=void 0!==n&&n)?jQuery("#"+e).toggleClass(t):jQuery("#"+e).hasClass(t)?jQuery("."+n).removeClass(t):(jQuery("."+n).removeClass(t),jQuery("#"+e).addClass(t))}function multiple_checkbox_check(e,t,n){var o;n=void 0!==n?n:0;for(o=1;o<=t;o++)$("#multiple-checkbox-"+o)[0]&&o!=n&&($("#multiple-checkbox-"+o)[0].checked=e);try{$(".check-all")[0].checked=e}catch(e){}}function change_progressbar(e,t,n){jQuery("#"+e).children(".progressbar").css("width",t+"%");n?jQuery("#"+e).children(".progressbar-infos").text(n):jQuery("#"+e).children(".progressbar-infos").text(t+"%")}function xmlhttprequest_init(e){var t=null;return window.XMLHttpRequest?t=new XMLHttpRequest:window.ActiveXObject&&(t=new ActiveXObject("Microsoft.XMLHTTP")),t.open("POST",e,!0),t}function xmlhttprequest_sender(e,t){e.setRequestHeader("Content-type","application/x-www-form-urlencoded"),e.send(t)}function escape_xmlhttprequest(e){return e=(e=e.replace(/\+/g,"%2B")).replace(/&/g,"%26")}function XMLHttpRequest_search_members(e,t,n,o){var i=jQuery("#login"+e).val();""!=i?(jQuery("#search_img"+e)&&jQuery("#search_img"+e).append('<i class="fa fa-spinner fa-spin"></i>'),jQuery.ajax({url:PATH_TO_ROOT+"/kernel/framework/ajax/member_xmlhttprequest.php?"+n+"=1",type:"post",dataType:"html",data:{login:i,divid:e,token:TOKEN},success:function(t){jQuery("#search_img"+e)&&jQuery("#search_img"+e).children("i").remove(),jQuery("#xmlhttprequest-result-search"+e)&&jQuery("#xmlhttprequest-result-search"+e).html(t),jQuery("#xmlhttprequest-result-search"+e).fadeIn()},error:function(t){jQuery("#search_img"+e).children("i").remove()}})):alert(o)}function functionExists(e){return"string"==typeof e?"function"==typeof window[e]:e instanceof Function}function include(e){window.document.getElementsByTagName&&(script=window.document.createElement("script"),script.type="text/javascript",script.src=e,document.documentElement.firstChild.appendChild(script))}function insertMoviePlayer(e){playerflowPlayerRequired||(include(PATH_TO_ROOT+"/kernel/lib/flash/flowplayer/flowplayer.js"),playerflowPlayerRequired=!0),flowPlayerDisplay(e)}function flowPlayerDisplay(e){functionExists("flowplayer")?flowplayer(e,PATH_TO_ROOT+"/kernel/lib/flash/flowplayer/flowplayer.swf",{clip:{url:jQuery("#"+e).attr("href"),autoPlay:!1}}):setTimeout("flowPlayerDisplay('"+e+"')",100)}!function(e){e.fn.menumaker=function(t){var n=e(this),o=e.extend({title:"Menu",format:"dropdown",breakpoint:768,sticky:!1,static:!1,actionslinks:!1},t),i=new RegExp("[^A-Za-z0-9]","gi");return this.each(function(){return menu_title=o.title.replace(i,"").toLowerCase(),n.find("li ul").parent().addClass("has-sub"),n.prepend('<div id="menu-button-'+menu_title+'" class="menu-button">'+o.title+"</div>"),e(this).find(".cssmenu-img").prependTo(this),e(this).find(".cssmenu-img").clone().prependTo("#menu-button-"+menu_title),e(this).find("#menu-button-"+menu_title).on("click",function(){e(this).toggleClass("menu-opened");var t=e(this).next("ul");t.hasClass("open")?t.addClass("close").removeClass("open"):t.removeClass("close").addClass("open")}),multiTg=function(){n.find(".has-sub").prepend('<span class="submenu-button"></span>'),n.find(".submenu-button").on("click",function(){e(this).toggleClass("submenu-opened"),e(this).siblings("ul").hasClass("open")?e(this).siblings("ul").addClass("close").removeClass("open"):e(this).siblings("ul").addClass("open").removeClass("close")})},multiTg(),resizeFix=function(){$smallscreen=window.matchMedia("(max-width: "+o.breakpoint+"px)").matches,$smallscreen||(n.find("ul").removeClass("close"),n.find("ul").removeClass("open"),n.removeClass("small-screen"),n.find("#menu-button-"+menu_title).removeClass("menu-opened")),$smallscreen&&!n.hasClass("small-screen")&&(o.static&&(n.find("ul").addClass("open"),n.find("ul").removeClass("close"),n.find("#menu-button-"+menu_title).addClass("menu-opened")),o.actionslinks&&(n.find(".level-0").addClass("close"),n.find(".level-0").removeClass("open")),o.actionslinks||o.static||(n.find("ul").removeClass("open"),n.find("ul").addClass("close")),n.addClass("small-screen"))},resizeFix(),e(window).on("resize",resizeFix)})}}(jQuery),function(e,t,n,o){function i(e,t){return Math.max(0,e[0]-t[0],t[0]-e[1])+Math.max(0,e[2]-t[1],t[1]-e[3])}function s(t,n,o,i){var s=t.length;for(i=i?"offset":"position",o=o||0;s--;){var r=t[s].el?t[s].el:e(t[s]),a=r[i]();a.left+=parseInt(r.css("margin-left"),10),a.top+=parseInt(r.css("margin-top"),10),n[s]=[a.left-o,a.left+r.outerWidth()+o,a.top-o,a.top+r.outerHeight()+o]}}function r(e,t){var n=t.offset();return{left:e.left-n.left,top:e.top-n.top}}function a(e,t,n){t=[t.left,t.top],n=n&&[n.left,n.top];for(var o,s=e.length,r=[];s--;)o=e[s],r[s]=[s,i(o,t),n&&i(o,n)];return r.sort(function(e,t){return t[1]-e[1]||t[2]-e[2]||t[0]-e[0]})}function l(t){this.options=e.extend({},h,t),this.containers=[],this.options.rootGroup||(this.scrollProxy=e.proxy(this.scroll,this),this.dragProxy=e.proxy(this.drag,this),this.dropProxy=e.proxy(this.drop,this),this.placeholder=e(this.options.placeholder),t.isValidTarget||(this.options.isValidTarget=o))}function c(t,n){this.el=t,this.options=e.extend({},d,n),this.group=l.get(this.options),this.rootGroup=this.options.rootGroup||this.group,this.handle=this.rootGroup.options.handle||this.rootGroup.options.itemSelector;var o=this.rootGroup.options.itemPath;this.target=o?this.el.find(o):this.el,this.target.on(u.start,this.handle,e.proxy(this.dragInit,this)),this.options.drop&&this.group.containers.push(this)}var u,d={drag:!0,drop:!0,exclude:"",nested:!0,vertical:!0},h={afterMove:function(e,t,n){},containerPath:"",containerSelector:"ol, ul",distance:0,delay:0,handle:"",itemPath:"",itemSelector:"li",bodyClass:"dragging",draggedClass:"dragged",isValidTarget:function(e,t){return!0},onCancel:function(e,t,n,o){},onDrag:function(e,t,n,o){e.css(t)},onDragStart:function(t,n,o,i){t.css({height:t.outerHeight(),width:t.outerWidth()}),t.addClass(n.group.options.draggedClass),e("body").addClass(n.group.options.bodyClass)},onDrop:function(t,n,o,i){t.removeClass(n.group.options.draggedClass).removeAttr("style"),e("body").removeClass(n.group.options.bodyClass)},onMousedown:function(e,t,n){if(!n.target.nodeName.match(/^(input|select|textarea)$/i))return n.preventDefault(),!0},placeholderClass:"placeholder",placeholder:'<li class="placeholder"></li>',pullPlaceholder:!0,serialize:function(t,n,o){return t=e.extend({},t.data()),o?[n]:(n[0]&&(t.children=n),delete t.subContainers,delete t.sortable,t)},tolerance:0},p={},f=0,g={left:0,top:0,bottom:0,right:0};u={start:"touchstart.sortable mousedown.sortable",drop:"touchend.sortable touchcancel.sortable mouseup.sortable",drag:"touchmove.sortable mousemove.sortable",scroll:"scroll.sortable"},l.get=function(e){return p[e.group]||(e.group===o&&(e.group=f++),p[e.group]=new l(e)),p[e.group]},l.prototype={dragInit:function(t,n){this.$document=e(n.el[0].ownerDocument);var o=e(t.target).closest(this.options.itemSelector);o.length&&(this.item=o,this.itemContainer=n,!this.item.is(this.options.exclude)&&this.options.onMousedown(this.item,h.onMousedown,t)&&(this.setPointer(t),this.toggleListeners("on"),this.setupDelayTimer(),this.dragInitDone=!0))},drag:function(e){if(!this.dragging){if(!this.distanceMet(e)||!this.delayMet)return;this.options.onDragStart(this.item,this.itemContainer,h.onDragStart,e),this.item.before(this.placeholder),this.dragging=!0}this.setPointer(e),this.options.onDrag(this.item,r(this.pointer,this.item.offsetParent()),h.onDrag,e),e=this.getPointer(e);var t=this.sameResultBox,n=this.options.tolerance;(!t||t.top-n>e.top||t.bottom+n<e.top||t.left-n>e.left||t.right+n<e.left)&&!this.searchValidTarget()&&(this.placeholder.detach(),this.lastAppendedItem=o)},drop:function(e){this.toggleListeners("off"),this.dragInitDone=!1,this.dragging&&(this.placeholder.closest("html")[0]?this.placeholder.before(this.item).detach():this.options.onCancel(this.item,this.itemContainer,h.onCancel,e),this.options.onDrop(this.item,this.getContainer(this.item),h.onDrop,e),this.clearDimensions(),this.clearOffsetParent(),this.lastAppendedItem=this.sameResultBox=o,this.dragging=!1)},searchValidTarget:function(e,t){e||(e=this.relativePointer||this.pointer,t=this.lastRelativePointer||this.lastPointer);for(var n=a(this.getContainerDimensions(),e,t),i=n.length;i--;){var s=n[i][0];if((!n[i][1]||this.options.pullPlaceholder)&&!(s=this.containers[s]).disabled){if(!this.$getOffsetParent()){var l=s.getItemOffsetParent();e=r(e,l),t=r(t,l)}if(s.searchValidTarget(e,t))return!0}}this.sameResultBox&&(this.sameResultBox=o)},movePlaceholder:function(e,t,n,o){var i=this.lastAppendedItem;!o&&i&&i[0]===t[0]||(t[n](this.placeholder),this.lastAppendedItem=t,this.sameResultBox=o,this.options.afterMove(this.placeholder,e,t))},getContainerDimensions:function(){return this.containerDimensions||s(this.containers,this.containerDimensions=[],this.options.tolerance,!this.$getOffsetParent()),this.containerDimensions},getContainer:function(e){return e.closest(this.options.containerSelector).data(n)},$getOffsetParent:function(){if(this.offsetParent===o){var e=this.containers.length-1,t=this.containers[e].getItemOffsetParent();if(!this.options.rootGroup)for(;e--;)if(t[0]!=this.containers[e].getItemOffsetParent()[0]){t=!1;break}this.offsetParent=t}return this.offsetParent},setPointer:function(e){if(e=this.getPointer(e),this.$getOffsetParent()){var t=r(e,this.$getOffsetParent());this.lastRelativePointer=this.relativePointer,this.relativePointer=t}this.lastPointer=this.pointer,this.pointer=e},distanceMet:function(e){return e=this.getPointer(e),Math.max(Math.abs(this.pointer.left-e.left),Math.abs(this.pointer.top-e.top))>=this.options.distance},getPointer:function(e){var t=e.originalEvent||e.originalEvent.touches&&e.originalEvent.touches[0];return{left:e.pageX||t.pageX,top:e.pageY||t.pageY}},setupDelayTimer:function(){var e=this;this.delayMet=!this.options.delay,this.delayMet||(clearTimeout(this._mouseDelayTimer),this._mouseDelayTimer=setTimeout(function(){e.delayMet=!0},this.options.delay))},scroll:function(e){this.clearDimensions(),this.clearOffsetParent()},toggleListeners:function(t){var n=this;e.each(["drag","drop","scroll"],function(e,o){n.$document[t](u[o],n[o+"Proxy"])})},clearOffsetParent:function(){this.offsetParent=o},clearDimensions:function(){this.traverse(function(e){e._clearDimensions()})},traverse:function(e){e(this);for(var t=this.containers.length;t--;)this.containers[t].traverse(e)},_clearDimensions:function(){this.containerDimensions=o},_destroy:function(){p[this.options.group]=o}},c.prototype={dragInit:function(e){var t=this.rootGroup;!this.disabled&&!t.dragInitDone&&this.options.drag&&this.isValidDrag(e)&&t.dragInit(e,this)},isValidDrag:function(e){return 1==e.which||"touchstart"==e.type&&1==e.originalEvent.touches.length},searchValidTarget:function(e,t){var n=a(this.getItemDimensions(),e,t),o=n.length,i=this.rootGroup,s=!i.options.isValidTarget||i.options.isValidTarget(i.item,this);if(!o&&s)return i.movePlaceholder(this,this.target,"append"),!0;for(;o--;)if(i=n[o][0],!n[o][1]&&this.hasChildGroup(i)){if(this.getContainerGroup(i).searchValidTarget(e,t))return!0}else if(s)return this.movePlaceholder(i,e),!0},movePlaceholder:function(t,n){var o=e(this.items[t]),i=this.itemDimensions[t],s="after",r=o.outerWidth(),a=o.outerHeight(),l={left:(l=o.offset()).left,right:l.left+r,top:l.top,bottom:l.top+a};this.options.vertical?n.top<=(i[2]+i[3])/2?(s="before",l.bottom-=a/2):l.top+=a/2:n.left<=(i[0]+i[1])/2?(s="before",l.right-=r/2):l.left+=r/2,this.hasChildGroup(t)&&(l=g),this.rootGroup.movePlaceholder(this,o,s,l)},getItemDimensions:function(){return this.itemDimensions||(this.items=this.$getChildren(this.el,"item").filter(":not(."+this.group.options.placeholderClass+", ."+this.group.options.draggedClass+")").get(),s(this.items,this.itemDimensions=[],this.options.tolerance)),this.itemDimensions},getItemOffsetParent:function(){var e=this.el;return"relative"===e.css("position")||"absolute"===e.css("position")||"fixed"===e.css("position")?e:e.offsetParent()},hasChildGroup:function(e){return this.options.nested&&this.getContainerGroup(e)},getContainerGroup:function(t){if((s=e.data(this.items[t],"subContainers"))===o){var i=this.$getChildren(this.items[t],"container"),s=!1;i[0]&&(s=e.extend({},this.options,{rootGroup:this.rootGroup,group:f++}),s=i[n](s).data(n).group),e.data(this.items[t],"subContainers",s)}return s},$getChildren:function(t,n){var o=(i=this.rootGroup.options)[n+"Path"],i=i[n+"Selector"];return t=e(t),o&&(t=t.find(o)),t.children(i)},_serialize:function(t,n){var o=this,i=this.$getChildren(t,n?"item":"container").not(this.options.exclude).map(function(){return o._serialize(e(this),!n)}).get();return this.rootGroup.options.serialize(t,i,n)},traverse:function(t){e.each(this.items||[],function(n){(n=e.data(this,"subContainers"))&&n.traverse(t)}),t(this)},_clearDimensions:function(){this.itemDimensions=o},_destroy:function(){var t=this;this.target.off(u.start,this.handle),this.el.removeData(n),this.options.drop&&(this.group.containers=e.grep(this.group.containers,function(e){return e!=t})),e.each(this.items||[],function(){e.removeData(this,"subContainers")})}};var m={enable:function(){this.traverse(function(e){e.disabled=!1})},disable:function(){this.traverse(function(e){e.disabled=!0})},serialize:function(){return this._serialize(this.el,!0)},refresh:function(){this.traverse(function(e){e._clearDimensions()})},destroy:function(){this.traverse(function(e){e._destroy()})}};e.extend(c.prototype,m),e.fn[n]=function(t){var i=Array.prototype.slice.call(arguments,1);return this.map(function(){var s=e(this),r=s.data(n);return r&&m[t]?m[t].apply(r,i)||this:(r||t!==o&&"object"!=typeof t||s.data(n,new c(s,t)),this)})}}(jQuery,window,"sortable"),function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports&&"function"==typeof require?require("jquery"):jQuery)}(function(e){"use strict";function t(n,o){var i=this;i.element=n,i.el=e(n),i.suggestions=[],i.badQueries=[],i.selectedIndex=-1,i.currentValue=i.element.value,i.timeoutId=null,i.cachedResponse={},i.onChangeTimeout=null,i.onChange=null,i.isLocal=!1,i.suggestionsContainer=null,i.noSuggestionsContainer=null,i.options=e.extend({},t.defaults,o),i.classes={selected:"autocomplete-selected",suggestion:"autocomplete-suggestion"},i.hint=null,i.hintValue="",i.selection=null,i.initialize(),i.setOptions(o)}var n={escapeRegExChars:function(e){return e.replace(/[|\\{}()[\]^$+*?.]/g,"\\$&")},createNode:function(e){var t=document.createElement("div");return t.className=e,t.style.position="absolute",t.style.display="none",t}},o=27,i=9,s=13,r=38,a=39,l=40,c=e.noop;t.utils=n,e.Autocomplete=t,t.defaults={ajaxSettings:{},autoSelectFirst:!1,appendTo:"body",serviceUrl:null,lookup:null,onSelect:null,width:"auto",minChars:1,maxHeight:300,deferRequestBy:0,params:{},formatResult:function(e,t){if(!t)return e.value;var o="("+n.escapeRegExChars(t)+")";return e.value.replace(new RegExp(o,"gi"),"<strong>$1</strong>").replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/&lt;(\/?strong)&gt;/g,"<$1>")},formatGroup:function(e,t){return'<div class="autocomplete-group">'+t+"</div>"},delimiter:null,zIndex:9999,type:"GET",noCache:!1,onSearchStart:c,onSearchComplete:c,onSearchError:c,preserveInput:!1,containerClass:"autocomplete-suggestions",tabDisabled:!1,dataType:"text",currentRequest:null,triggerSelectOnValidInput:!0,preventBadQueries:!0,lookupFilter:function(e,t,n){return-1!==e.value.toLowerCase().indexOf(n)},paramName:"query",transformResult:function(t){return"string"==typeof t?e.parseJSON(t):t},showNoSuggestionNotice:!1,noSuggestionNotice:"No results",orientation:"bottom",forceFixPosition:!1},t.prototype={initialize:function(){var n,o=this,i="."+o.classes.suggestion,s=o.classes.selected,r=o.options;o.element.setAttribute("autocomplete","off"),o.noSuggestionsContainer=e('<div class="autocomplete-no-suggestion"></div>').html(this.options.noSuggestionNotice).get(0),o.suggestionsContainer=t.utils.createNode(r.containerClass),(n=e(o.suggestionsContainer)).appendTo(r.appendTo||"body"),"auto"!==r.width&&n.css("width",r.width),n.on("mouseover.autocomplete",i,function(){o.activate(e(this).data("index"))}),n.on("mouseout.autocomplete",function(){o.selectedIndex=-1,n.children("."+s).removeClass(s)}),n.on("click.autocomplete",i,function(){o.select(e(this).data("index"))}),n.on("click.autocomplete",function(){clearTimeout(o.blurTimeoutId)}),o.fixPositionCapture=function(){o.visible&&o.fixPosition()},e(window).on("resize.autocomplete",o.fixPositionCapture),o.el.on("keydown.autocomplete",function(e){o.onKeyPress(e)}),o.el.on("keyup.autocomplete",function(e){o.onKeyUp(e)}),o.el.on("blur.autocomplete",function(){o.onBlur()}),o.el.on("focus.autocomplete",function(){o.onFocus()}),o.el.on("change.autocomplete",function(e){o.onKeyUp(e)}),o.el.on("input.autocomplete",function(e){o.onKeyUp(e)})},onFocus:function(){var e=this;e.fixPosition(),e.el.val().length>=e.options.minChars&&e.onValueChange()},onBlur:function(){var e=this;e.blurTimeoutId=setTimeout(function(){e.hide()},200)},abortAjax:function(){var e=this;e.currentRequest&&(e.currentRequest.abort(),e.currentRequest=null)},setOptions:function(t){var n=this,o=e.extend({},n.options,t);n.isLocal=Array.isArray(o.lookup),n.isLocal&&(o.lookup=n.verifySuggestionsFormat(o.lookup)),o.orientation=n.validateOrientation(o.orientation,"bottom"),e(n.suggestionsContainer).css({"max-height":o.maxHeight+"px",width:o.width+"px","z-index":o.zIndex}),this.options=o},clearCache:function(){this.cachedResponse={},this.badQueries=[]},clear:function(){this.clearCache(),this.currentValue="",this.suggestions=[]},disable:function(){var e=this;e.disabled=!0,clearTimeout(e.onChangeTimeout),e.abortAjax()},enable:function(){this.disabled=!1},fixPosition:function(){var t=this,n=e(t.suggestionsContainer),o=n.parent().get(0);if(o===document.body||t.options.forceFixPosition){var i=t.options.orientation,s=n.outerHeight(),r=t.el.outerHeight(),a=t.el.offset(),l={top:a.top,left:a.left};if("auto"===i){var c=e(window).height(),u=e(window).scrollTop(),d=-u+a.top-s,h=u+c-(a.top+r+s);i=Math.max(d,h)===d?"top":"bottom"}if(l.top+="top"===i?-s:r,o!==document.body){var p,f=n.css("opacity");t.visible||n.css("opacity",0).show(),p=n.offsetParent().offset(),l.top-=p.top,l.top+=o.scrollTop,l.left-=p.left,t.visible||n.css("opacity",f).hide()}"auto"===t.options.width&&(l.width=t.el.outerWidth()+"px"),n.css(l)}},isCursorAtEnd:function(){var e,t=this.el.val().length,n=this.element.selectionStart;return"number"==typeof n?n===t:!document.selection||((e=document.selection.createRange()).moveStart("character",-t),t===e.text.length)},onKeyPress:function(e){var t=this;if(t.disabled||t.visible||e.which!==l||!t.currentValue){if(!t.disabled&&t.visible){switch(e.which){case o:t.el.val(t.currentValue),t.hide();break;case a:if(t.hint&&t.options.onHint&&t.isCursorAtEnd()){t.selectHint();break}return;case i:if(t.hint&&t.options.onHint)return void t.selectHint();if(-1===t.selectedIndex)return void t.hide();if(t.select(t.selectedIndex),!1===t.options.tabDisabled)return;break;case s:if(-1===t.selectedIndex)return void t.hide();t.select(t.selectedIndex);break;case r:t.moveUp();break;case l:t.moveDown();break;default:return}e.stopImmediatePropagation(),e.preventDefault()}}else t.suggest()},onKeyUp:function(e){var t=this;if(!t.disabled){switch(e.which){case r:case l:return}clearTimeout(t.onChangeTimeout),t.currentValue!==t.el.val()&&(t.findBestHint(),t.options.deferRequestBy>0?t.onChangeTimeout=setTimeout(function(){t.onValueChange()},t.options.deferRequestBy):t.onValueChange())}},onValueChange:function(){if(!this.ignoreValueChange){var t=this,n=t.options,o=t.el.val(),i=t.getQuery(o);return t.selection&&t.currentValue!==i&&(t.selection=null,(n.onInvalidateSelection||e.noop).call(t.element)),clearTimeout(t.onChangeTimeout),t.currentValue=o,t.selectedIndex=-1,n.triggerSelectOnValidInput&&t.isExactMatch(i)?void t.select(0):void(i.length<n.minChars?t.hide():t.getSuggestions(i))}this.ignoreValueChange=!1},isExactMatch:function(e){var t=this.suggestions;return 1===t.length&&t[0].value.toLowerCase()===e.toLowerCase()},getQuery:function(t){var n,o=this.options.delimiter;return o?(n=t.split(o),e.trim(n[n.length-1])):t},getSuggestionsLocal:function(t){var n,o=this.options,i=t.toLowerCase(),s=o.lookupFilter,r=parseInt(o.lookupLimit,10);return n={suggestions:e.grep(o.lookup,function(e){return s(e,t,i)})},r&&n.suggestions.length>r&&(n.suggestions=n.suggestions.slice(0,r)),n},getSuggestions:function(t){var n,o,i,s,r=this,a=r.options,l=a.serviceUrl;if(a.params[a.paramName]=t,!1!==a.onSearchStart.call(r.element,a.params)){if(o=a.ignoreParams?null:a.params,e.isFunction(a.lookup))return void a.lookup(t,function(e){r.suggestions=e.suggestions,r.suggest(),a.onSearchComplete.call(r.element,t,e.suggestions)});r.isLocal?n=r.getSuggestionsLocal(t):(e.isFunction(l)&&(l=l.call(r.element,t)),i=l+"?"+e.param(o||{}),n=r.cachedResponse[i]),n&&Array.isArray(n.suggestions)?(r.suggestions=n.suggestions,r.suggest(),a.onSearchComplete.call(r.element,t,n.suggestions)):r.isBadQuery(t)?a.onSearchComplete.call(r.element,t,[]):(r.abortAjax(),s={url:l,data:o,type:a.type,dataType:a.dataType},e.extend(s,a.ajaxSettings),r.currentRequest=e.ajax(s).done(function(e){var n;r.currentRequest=null,n=a.transformResult(e,t),r.processResponse(n,t,i),a.onSearchComplete.call(r.element,t,n.suggestions)}).fail(function(e,n,o){a.onSearchError.call(r.element,t,e,n,o)}))}},isBadQuery:function(e){if(!this.options.preventBadQueries)return!1;for(var t=this.badQueries,n=t.length;n--;)if(0===e.indexOf(t[n]))return!0;return!1},hide:function(){var t=this,n=e(t.suggestionsContainer);e.isFunction(t.options.onHide)&&t.visible&&t.options.onHide.call(t.element,n),t.visible=!1,t.selectedIndex=-1,clearTimeout(t.onChangeTimeout),e(t.suggestionsContainer).hide(),t.signalHint(null)},suggest:function(){if(this.suggestions.length){var t,n=this,o=n.options,i=o.groupBy,s=o.formatResult,r=n.getQuery(n.currentValue),a=n.classes.suggestion,l=n.classes.selected,c=e(n.suggestionsContainer),u=e(n.noSuggestionsContainer),d=o.beforeRender,h="",p=function(e,n){var s=e.data[i];return t===s?"":(t=s,o.formatGroup(e,t))};return o.triggerSelectOnValidInput&&n.isExactMatch(r)?void n.select(0):(e.each(n.suggestions,function(e,t){i&&(h+=p(t,0)),h+='<div class="'+a+'" data-index="'+e+'">'+s(t,r,e)+"</div>"}),this.adjustContainerWidth(),u.detach(),c.html(h),e.isFunction(d)&&d.call(n.element,c,n.suggestions),n.fixPosition(),c.show(),o.autoSelectFirst&&(n.selectedIndex=0,c.scrollTop(0),c.children("."+a).first().addClass(l)),n.visible=!0,void n.findBestHint())}this.options.showNoSuggestionNotice?this.noSuggestions():this.hide()},noSuggestions:function(){var t=this,n=t.options.beforeRender,o=e(t.suggestionsContainer),i=e(t.noSuggestionsContainer);this.adjustContainerWidth(),i.detach(),o.empty(),o.append(i),e.isFunction(n)&&n.call(t.element,o,t.suggestions),t.fixPosition(),o.show(),t.visible=!0},adjustContainerWidth:function(){var t,n=this,o=n.options,i=e(n.suggestionsContainer);"auto"===o.width?(t=n.el.outerWidth(),i.css("width",t>0?t:300)):"flex"===o.width&&i.css("width","")},findBestHint:function(){var t=this,n=t.el.val().toLowerCase(),o=null;n&&(e.each(t.suggestions,function(e,t){var i=0===t.value.toLowerCase().indexOf(n);return i&&(o=t),!i}),t.signalHint(o))},signalHint:function(t){var n="",o=this;t&&(n=o.currentValue+t.value.substr(o.currentValue.length)),o.hintValue!==n&&(o.hintValue=n,o.hint=t,(this.options.onHint||e.noop)(n))},verifySuggestionsFormat:function(t){return t.length&&"string"==typeof t[0]?e.map(t,function(e){return{value:e,data:null}}):t},validateOrientation:function(t,n){return t=e.trim(t||"").toLowerCase(),-1===e.inArray(t,["auto","bottom","top"])&&(t=n),t},processResponse:function(e,t,n){var o=this,i=o.options;e.suggestions=o.verifySuggestionsFormat(e.suggestions),i.noCache||(o.cachedResponse[n]=e,i.preventBadQueries&&!e.suggestions.length&&o.badQueries.push(t)),t===o.getQuery(o.currentValue)&&(o.suggestions=e.suggestions,o.suggest())},activate:function(t){var n,o=this,i=o.classes.selected,s=e(o.suggestionsContainer),r=s.find("."+o.classes.suggestion);return s.find("."+i).removeClass(i),o.selectedIndex=t,-1!==o.selectedIndex&&r.length>o.selectedIndex?(n=r.get(o.selectedIndex),e(n).addClass(i),n):null},selectHint:function(){var t=this,n=e.inArray(t.hint,t.suggestions);t.select(n)},select:function(e){this.hide(),this.onSelect(e)},moveUp:function(){var t=this;if(-1!==t.selectedIndex)return 0===t.selectedIndex?(e(t.suggestionsContainer).children("."+t.classes.suggestion).first().removeClass(t.classes.selected),t.selectedIndex=-1,t.ignoreValueChange=!1,t.el.val(t.currentValue),void t.findBestHint()):void t.adjustScroll(t.selectedIndex-1)},moveDown:function(){var e=this;e.selectedIndex!==e.suggestions.length-1&&e.adjustScroll(e.selectedIndex+1)},adjustScroll:function(t){var n=this,o=n.activate(t);if(o){var i,s,r,a=e(o).outerHeight();i=o.offsetTop,r=(s=e(n.suggestionsContainer).scrollTop())+n.options.maxHeight-a,i<s?e(n.suggestionsContainer).scrollTop(i):i>r&&e(n.suggestionsContainer).scrollTop(i-n.options.maxHeight+a),n.options.preserveInput||(n.ignoreValueChange=!0,n.el.val(n.getValue(n.suggestions[t].value))),n.signalHint(null)}},onSelect:function(t){var n=this,o=n.options.onSelect,i=n.suggestions[t];n.currentValue=n.getValue(i.value),n.currentValue===n.el.val()||n.options.preserveInput||n.el.val(n.currentValue),n.signalHint(null),n.suggestions=[],n.selection=i,e.isFunction(o)&&o.call(n.element,i)},getValue:function(e){var t,n,o=this.options.delimiter;return o?1===(n=(t=this.currentValue).split(o)).length?e:t.substr(0,t.length-n[n.length-1].length)+e:e},dispose:function(){var t=this;t.el.off(".autocomplete").removeData("autocomplete"),e(window).off("resize.autocomplete",t.fixPositionCapture),e(t.suggestionsContainer).remove()}},e.fn.devbridgeAutocomplete=function(n,o){var i="autocomplete";return arguments.length?this.each(function(){var s=e(this),r=s.data(i);"string"==typeof n?r&&"function"==typeof r[n]&&r[n](o):(r&&r.dispose&&r.dispose(),r=new t(this,n),s.data(i,r))}):this.first().data(i)},e.fn.autocomplete||(e.fn.autocomplete=e.fn.devbridgeAutocomplete)}),function(e){e.fn.basictable=function(t){var n=function(t,n){n.forceResponsive?e(window).width()<=n.breakpoint?o(t,n):i(t,n):t.removeClass("bt").outerWidth()>t.parent().width()?o(t,n):i(t,n)},o=function(t,n){t.addClass("bt"),e(".footer-error-list").attr("colspan","1"),e(".footer-error-list404").attr("colspan","1"),n.tableWrapper&&t.parent(".bt-wrapper").addClass("active")},i=function(t,n){t.removeClass("bt"),e(".footer-error-list").attr("colspan","2"),e(".footer-error-list404").attr("colspan","4"),n.tableWrapper&&t.parent(".bt-wrapper").removeClass("active")},s=this;if(0===s.length||s.data("basictable"))return s.data("basictable")&&("destroy"==t?function(t,n){t.find("td").removeAttr("data-th"),n.tableWrap&&t.unwrap(),n.contentWrap&&function(t){e.each(t.find("td"),function(){var t=e(this),n=t.children(".bt-content").html();t.html(n)})}(t),t.removeData("basictable")}(s,s.data("basictable")):"start"===t?o(s,s.data("basictable")):"stop"===t?i(s,s.data("basictable")):n(s)),!1;var r=e.extend({},e.fn.basictable.defaults,t),a={breakpoint:r.breakpoint,contentWrap:r.contentWrap,forceResponsive:r.forceResponsive,noResize:r.noResize,tableWrapper:r.tableWrapper};s.data("basictable",a),function(t,n){n.tableWrap&&t.wrap('<div class="bt-wrapper"></div>');var o="";o=t.find("thead th").length?"thead th":t.find("th").length?"tr:first th":"tr:first td",e.each(t.find(o),function(){var o=e(this);e.each(t.find("tbody tr"),function(){var t=e(this).find("td:eq("+o.index()+")");""===t.html()||"&nbsp;"===t.html()?t.addClass("bt-hide"):(t.attr("data-th",o.text()),n.contentWrap&&t.wrapInner('<span class="bt-content"></span>'))})})}(s,s.data("basictable")),a.noResize||(n(s,s.data("basictable")),e(window).bind("resize.basictable",function(){!function(e){e.data("basictable")&&n(e,e.data("basictable"))}(s)}))},e.fn.basictable.defaults={breakpoint:981,contentWrap:!0,forceResponsive:!0,noResize:!1,tableWrap:!1}}(jQuery),jQuery(document).ready(function(){var e=1;jQuery(".formatter-hide").each(function(){jQuery(this).hasClass("no-js")&&(jQuery(this).attr("id","formatter-hide-container-"+e),jQuery(this).removeClass("no-js"),jQuery(this).attr("onClick","bb_hide("+e+", 1, event);"),jQuery(this).children(".formatter-content").before('<span id="formatter-hide-message-'+e+'" class="formatter-hide-message">'+L_HIDE_MESSAGE+"</span>"),jQuery(this).children(".formatter-content").before('<span id="formatter-hide-close-button-'+e+'" class="formatter-hide-close-button" "title="'+L_HIDE_HIDEBLOCK+'" onclick="bb_hide('+e+', 0, event);"><i class="fa fa-times"></i><span class="formatter-hide-close-button-txt">'+L_HIDE_HIDEBLOCK+"</span></span>"),e+=1)})}),jQuery(document).ready(function(){var e=1;jQuery(".formatter-code").each(function(){jQuery(this).children(".formatter-content").hasClass("copy-code-content")||(jQuery(this).prepend('<span id="copy-code-'+e+'" class="copy-code" title="'+L_COPYTOCLIPBOARD+'" onclick="copy_code_clipboard('+e+')"><i class="fa fa-clipboard"><span class="copy-code-txt">'+L_COPYTOCLIPBOARD+"</span></i></span>"),jQuery(this).children(".formatter-content").attr("id","copy-code-"+e+"-content"),jQuery(this).children(".formatter-content").addClass("copy-code-content"),e+=1)})}),function(e){e.fn.opensubmenu=function(t){e(this);var n=e.extend({osmCloseExcept:"",osmCloseButton:"a.close-button",osmTarget:"",osmClass:"opened"},t);return this.each(function(){e(this).on("click",function(t){t.preventDefault(),e(this).closest(n.osmTarget).hasClass(n.osmClass)?e(document).find(n.osmTarget).removeClass(n.osmClass):(e(document).find(n.osmTarget).removeClass(n.osmClass),e(this).closest(n.osmTarget).addClass(n.osmClass)),t.stopPropagation()}),e(document).on("click",function(t){!1!==e(t.target).is(n.osmCloseExcept)&&!0!==e(t.target).is(n.osmCloseButton)||e(document).find(n.osmTarget).removeClass(n.osmClass)})})}}(jQuery),playerflowPlayerRequired=!1;var timeout,previous_bblock,delay=300,displayed=!1;function bb_display_block(e,t){timeout&&clearTimeout(timeout);var n=document.getElementById("bb-block"+e+t);"none"==n.style.display?(document.getElementById(previous_bblock)&&(document.getElementById(previous_bblock).style.display="none"),n.style.display="block",displayed=!0,previous_bblock="bb-block"+e+t):(n.style.display="none",displayed=!1)}function bb_hide_block(e,t,n){n&&timeout?clearTimeout(timeout):displayed&&(clearTimeout(timeout),timeout=setTimeout("bb_display_block('"+e+"',\t'"+t+"')",delay))}function scroll_to(e){e>800?jQuery("#scroll-to-top").fadeIn():jQuery("#scroll-to-top").fadeOut(),e>1?jQuery("#cookie-bar-container").addClass("fixed"):jQuery("#cookie-bar-container").removeClass("fixed")}function sendCookie(e,t,n){n=void 0!==n?n:1;var o=new Date;o.setMonth(o.getMonth()+n),document.cookie=e+"="+t+"; Expires="+o.toGMTString()+"; Path=/"}function getCookie(e){return start=document.cookie.indexOf(e+"="),start>=0?(start+=e.length+1,end=document.cookie.indexOf(";",start),end<0&&(end=document.cookie.length),document.cookie.substring(start,end)):""}function eraseCookie(e){sendCookie(e,"",-1)}jQuery(document).ready(function(){scroll_to($(this).scrollTop()),jQuery(window).scroll(function(){scroll_to($(this).scrollTop())}),jQuery("#scroll-to-top").on("click",function(){return jQuery("html, body").animate({scrollTop:0},1200),!1}),jQuery("#scroll-to-bottom").on("click",function(){return jQuery("html, body").animate({scrollTop:$(document).height()-$(window).height()},1200),!1})}),function(e){e.fn.linedtextarea=function(t){var n=e.extend({},e.fn.linedtextarea.defaults,t),o=function(e,t,o){for(;e.height()-t<=0;)o==n.selectedLine?e.append("<div class='lineno lineselect'>"+o+"</div>"):e.append("<div class='lineno'>"+o+"</div>"),o++;return o};return this.each(function(){var t=1,i=e(this);i.attr("wrap","off"),i.css({resize:"none"});i.outerWidth();i.wrap("<div class='linedtextarea'></div>");var s=i.parent().wrap("<div class='linedwrap'></div>").parent();s.prepend("<div class='lines' style='width:50px'></div>");var r=s.find(".lines");s.height(i.height()+6),r.append("<div class='codelines'></div>");var a=r.find(".codelines");if(t=o(a,r.height(),1),-1!=n.selectedLine&&!isNaN(n.selectedLine)){var l=parseInt(i.height()/(t-2)),c=parseInt(l*n.selectedLine)-i.height()/2;i[0].scrollTop=c}r.outerWidth(),parseInt(s.css("border-left-width")),parseInt(s.css("border-right-width")),parseInt(s.css("padding-left")),parseInt(s.css("padding-right"));i.scroll(function(n){var i=e(this)[0],s=i.scrollTop,r=i.clientHeight;a.css({"margin-top":-1*s+"px"}),t=o(a,s+r,t)}),i.resize(function(t){var n=e(this)[0];r.height(n.clientHeight+6)})})},e.fn.linedtextarea.defaults={selectedLine:-1,selectedClass:"lineselect"}}(jQuery);