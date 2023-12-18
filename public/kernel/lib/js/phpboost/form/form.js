function HTMLForms(){}HTMLForms.forms=new Array,HTMLForms.add=function(e){return HTMLForms.forms.push(e)},HTMLForms.get=function(e){var t=null;return jQuery.each(HTMLForms.forms,function(s,i){if(i.getId()==e)return t=i,!1}),t},HTMLForms.has=function(e){return null!=HTMLForms.get(e)},HTMLForms.getFieldset=function(e){var t=null;return jQuery.each(HTMLForms.forms,function(s,i){var r=i.getFieldset(e);if(null!=r)return t=r,!1}),t},HTMLForms.getField=function(e){var t=null;return jQuery.each(HTMLForms.forms,function(s,i){var r=i.getField(e);if(null!=r)return t=r,!1}),t};var $HF=HTMLForms.get,$FFS=HTMLForms.getFieldset,$FF=HTMLForms.getField,HTMLForm=function(e){this.id=e,this.fieldsets=new Array};HTMLForm.prototype={getId:function(){return this.id},addFieldset:function(e){this.fieldsets.push(e),e.setFormId(this.id)},getFieldset:function(e){var t=null;return jQuery.each(this.fieldsets,function(s,i){if(i.getId()==e)return t=i,!1}),t},getFieldsets:function(){return this.fieldsets},hasFieldset:function(e){var t=!1;return jQuery.each(this.fieldsets,function(s,i){if(i.getId()==e)return t=!0,!1}),t},getFields:function(){var e=new Array;return jQuery.each(this.fieldsets,function(t,s){jQuery.each(s.getFields(),function(t,s){e.push(s)})}),e},getField:function(e){var t=null;return jQuery.each(this.getFields(),function(s,i){if(i.getId()==e)return t=i,!1}),t},validate:function(){var e=!0,t="";return jQuery.each(this.getFields(),function(s,i){var r=i.validate();""!=r&&(t=t+"\n\n"+r,e=!1)}),0==e&&(this.displayValidationError(t),jQuery("html, body").animate({scrollTop:jQuery("#"+this.id).offset().top},"slow")),this.registerDisabledFields(),e},displayValidationError:function(e){e=(e=e.replace(/&quot;/g,'"')).replace(/&amp;/g,"&"),alert(e)},registerDisabledFields:function(){var e="";jQuery.each(this.getFields(),function(t,s){s.isDisabled()&&(e+="|"+s.getId())}),jQuery("#"+this.id+"_disabled_fields").val(e);var t="";jQuery.each(this.getFieldsets(),function(e,s){s.isDisabled()&&(t+="|"+s.getId())}),jQuery("#"+this.id+"_disabled_fieldsets").val(t)}};var FormFieldset=function(e){this.id=e,this.fields=new Array,this.disabled=!1,this.formId=""};FormFieldset.prototype={getId:function(){return this.id},getHTMLId:function(){return this.formId+"_"+this.id},setFormId:function(e){this.formId=e},addField:function(e){this.fields.push(e),e.setFormId(this.formId)},getField:function(e){var t=null;return jQuery.each(this.fields,function(s,i){if(i.getId()==e)return t=i,!1}),t},getFields:function(){return this.fields},hasField:function(e){var t=!1;return jQuery.each(this.fields,function(s,i){if(i.getId()==e)return t=!0,!1}),t},enable:function(){this.disabled=!1,jQuery("#"+this.getHTMLId()).fadeIn(),jQuery.each(this.fields,function(e,t){t.enable()})},disable:function(){this.disabled=!0,jQuery("#"+this.getHTMLId()).fadeOut(),jQuery.each(this.fields,function(e,t){t.disable()})},isDisabled:function(){return this.disabled}};var FormField=function(e){this.id=e,this.validationMessageEnabled=!1,this.hasConstraints=!1,this.formId=""};FormField.prototype={getId:function(){return this.id},getHTMLId:function(){return this.formId+"_"+this.id},setFormId:function(e){this.formId=e},HTMLFieldExists:function(){return jQuery("#"+this.getHTMLId()).length>0},enable:function(){this.HTMLFieldExists()&&jQuery("#"+this.getHTMLId()).prop("disabled",!1),jQuery("#"+this.getHTMLId()+"_field").fadeIn(),this.liveValidate()},disable:function(){this.HTMLFieldExists()&&jQuery("#"+this.getHTMLId()).prop("disabled",!0),jQuery("#"+this.getHTMLId()+"_field").fadeOut(),this.clearErrorMessage()},isDisabled:function(){if(this.HTMLFieldExists()){var e=jQuery("#"+this.getHTMLId());if(0==e.prop("disabled")){var t,s=jQuery("#"+this.getHTMLId()+"_field");return s?null!=(t=s.css("display"))&&"none"==t:null!=(t=e.css("display"))&&"none"==t}return!0}return!1},getValue:function(){this.HTMLFieldExists()||alert(this.getHTMLId()+" not exists, use get_js_specialization_code function in FormField and return field.getValue JS function contain the value");var e=jQuery("#"+this.getHTMLId());return e.is(":checkbox")?e.prop("checked"):e.val()},setValue:function(e){var t=jQuery("#"+this.getHTMLId());return t.is(":checkbox")?t.prop("checked",e):t.val(e)},enableValidationMessage:function(){this.validationMessageEnabled=!0},displayErrorMessage:function(e){this.validationMessageEnabled&&jQuery("#"+this.getHTMLId()+"_field").length&&jQuery("#onblurContainerResponse"+this.getHTMLId()).length&&(jQuery("#"+this.getHTMLId()+"_field").removeClass("constraint-status-right").addClass("constraint-status-error"),jQuery("#onblurMessageResponse"+this.getHTMLId()).html(e),jQuery("#onblurMessageResponse"+this.getHTMLId()).fadeIn(500))},displaySuccessMessage:function(){this.validationMessageEnabled&&jQuery("#"+this.getHTMLId()+"_field").length&&jQuery("#onblurContainerResponse"+this.getHTMLId()).length&&(jQuery("#"+this.getHTMLId()+"_field").removeClass("constraint-status-error").addClass("constraint-status-right"),jQuery("#onblurMessageResponse"+this.getHTMLId()).hide())},clearErrorMessage:function(){jQuery("#"+this.getHTMLId()+"_field").length&&jQuery("#onblurContainerResponse"+this.getHTMLId()).length&&(jQuery("#"+this.getHTMLId()+"_field").removeClass("constraint-status-right").removeClass("constraint-status-error"),jQuery("#onblurMessageResponse"+this.getHTMLId()).html(""),jQuery("#onblurMessageResponse"+this.getHTMLId()).fadeOut(200))},liveValidate:function(){if(!this.isDisabled()&&this.hasConstraints){var e=this.doValidate();""!=e?this.displayErrorMessage('<i class="fa fa-forbidden"></i> '+e):this.displaySuccessMessage()}},validate:function(){if(!this.isDisabled()&&this.hasConstraints){var e=this.doValidate();return""!=e&&(this.enableValidationMessage(),this.displayErrorMessage('<i class="fa fa-forbidden"></i> '+e)),e}return""},doValidate:function(){return""}},jQuery(document).ready(function(){jQuery("input,textarea,select").focus(function(){jQuery(this).parent().parent().removeClass("constraint-status-error").removeClass("constraint-status-right"),jQuery(this).parent().children(".text-status-constraint").hide()}),jQuery('input[class="input-date"]').keyup(function(){var e=new RegExp("^[0-9-]$"),t=jQuery(this).val(),s=this.selectionStart-1;e.test(t.charAt(s))||jQuery(this).val(t.substr(0,s)+t.substr(s+1))}),jQuery('input[type="number"]').keyup(function(){var e=new RegExp("^[0-9]+([.|,]([0-9]{1,2})?)?$"),t=new RegExp("^[0-9.,]$"),s=jQuery(this).val();t.test(s.charAt(s.length-1))&&e.test(s)||jQuery(this).val(s.slice(0,-1))}),jQuery('input[type="tel"]').keyup(function(){var e=new RegExp("^[0-9-+ ]$"),t=jQuery(this).val(),s=this.selectionStart-1;e.test(t.charAt(s))||jQuery(this).val(t.substr(0,s)+t.substr(s+1))})});