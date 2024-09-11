!function(e){var t={method:"GET",contentType:"json",queryParam:"q",searchDelay:300,minChars:1,propertyToSearch:"name",jsonContainer:null,hintText:"Type in a search term",noResultsText:"No results",searchingText:"Searching...",deleteText:"<i class='fa fa-times'><i>",animateDropdown:!0,tokenLimit:null,tokenDelimiter:",",preventDuplicates:!1,tokenValue:"id",prePopulate:null,processPrePopulate:!1,idPrefix:"token-input-",resultsFormatter:function(e){return"<li>"+e[this.propertyToSearch]+"</li>"},tokenFormatter:function(e){return"<li><p>"+e[this.propertyToSearch]+"</p></li>"},onResult:null,onAdd:null,onDelete:null,onReady:null},n={tokenList:"token-input-list",token:"token-input-token",tokenDelete:"token-input-delete-token",selectedToken:"token-input-selected-token",highlightedToken:"token-input-highlighted-token",dropdown:"token-input-dropdown",dropdownItem:"token-input-dropdown-item",dropdownItem2:"token-input-dropdown-item2",selectedDropdownItem:"token-input-selected-dropdown-item",inputToken:"token-input-input-token"},o={BEFORE:0,AFTER:1,END:2},i={init:function(n,o){var i=e.extend({},t,o||{});return this.each(function(){e(this).data("tokenInputObject",new e.TokenList(this,n,i))})},clear:function(){return this.data("tokenInputObject").clear(),this},add:function(e){return this.data("tokenInputObject").add(e),this},remove:function(e){return this.data("tokenInputObject").remove(e),this},get:function(){return this.data("tokenInputObject").getTokens()}};e.fn.tokenInput=function(e){return i[e]?i[e].apply(this,Array.prototype.slice.call(arguments,1)):i.init.apply(this,arguments)},e.TokenList=function(t,i,a){if("string"===e.type(i)||"function"===e.type(i)){a.url=i;var s=P();void 0===a.crossDomain&&(-1===s.indexOf("://")?a.crossDomain=!1:a.crossDomain=location.href.split(/\/+/g)[1]!==s.split(/\/+/g)[1])}else"object"==typeof i&&(a.local_data=i);a.classes?a.classes=e.extend({},n,a.classes):a.theme?(a.classes={},e.each(n,function(e,t){a.classes[e]=t+"-"+a.theme})):a.classes=n;var l,r,c=[],u=0,d=new e.TokenList.Cache,p=e('<input type="text"  autocomplete="off">').css({outline:"none"}).attr("id",a.idPrefix+t.id).focus(function(){null!==a.tokenLimit&&a.tokenLimit===u||a.hintText&&(T.html("<p>"+a.hintText+"</p>"),j())}).blur(function(){E(),e(this).val("")}).bind("keyup keydown blur update",function(){if(r!==(r=p.val())){var e=r.replace(/&/g,"&amp;").replace(/\s/g," ").replace(/</g,"&lt;").replace(/>/g,"&gt;");y.html(e),p.width(y.width()+30)}}).keydown(function(t){var n,i;switch(t.keyCode){case 37:case 39:case 38:case 40:if(e(this).val()){var a;return(a=40===t.keyCode||39===t.keyCode?e(g).next():e(g).prev()).length&&I(a),!1}n=v.prev(),i=v.next(),n.length&&n.get(0)===f||i.length&&i.get(0)===f?37===t.keyCode||38===t.keyCode?b(e(f),o.BEFORE):b(e(f),o.AFTER):37!==t.keyCode&&38!==t.keyCode||!n.length?39!==t.keyCode&&40!==t.keyCode||!i.length||R(e(i.get(0))):R(e(n.get(0)));break;case 8:if(n=v.prev(),!e(this).val().length)return f?(L(e(f)),h.change()):n.length&&R(e(n.get(0))),!1;1===e(this).val().length?E():setTimeout(function(){O()},5);break;case 9:case 13:case 108:case 188:if(g)return D(e(g).data("tokeninput")),h.change(),!1;break;case 27:return E(),!0;default:String.fromCharCode(t.which)&&setTimeout(function(){O()},5)}}),h=e(t).hide().val("").focus(function(){p.focus()}).blur(function(){p.blur()}),f=null,k=0,g=null,m=e("<ul />").addClass(a.classes.tokenList).click(function(t){var n=e(t.target).closest("li");n&&n.get(0)&&e.data(n.get(0),"tokeninput")?function(t){var n=f;f&&b(e(f),o.END),n===t.get(0)?b(t,o.END):R(t)}(n):(f&&b(e(f),o.END),p.focus())}).mouseover(function(t){var n=e(t.target).closest("li");n&&f!==this&&n.addClass(a.classes.highlightedToken)}).mouseout(function(t){var n=e(t.target).closest("li");n&&f!==this&&n.removeClass(a.classes.highlightedToken)}).insertBefore(h),v=e("<li />").addClass(a.classes.inputToken).appendTo(m).append(p),T=e("<div>").addClass(a.classes.dropdown).appendTo("body").hide(),y=e("<tester/>").insertAfter(p).css({position:"absolute",top:-9999,left:-9999,width:"auto",fontSize:p.css("fontSize"),fontFamily:p.css("fontFamily"),fontWeight:p.css("fontWeight"),letterSpacing:p.css("letterSpacing"),whiteSpace:"nowrap"});h.val("");var w=a.prePopulate||h.data("pre");function C(){if(null!==a.tokenLimit&&u>=a.tokenLimit)return p.hide(),void E()}function x(t){var n=a.tokenFormatter(t);n=e(n).addClass(a.classes.token).insertBefore(v),e("<span>"+a.deleteText+"</span>").addClass(a.classes.tokenDelete).appendTo(n).click(function(){return L(e(this).parent()),h.change(),!1});var o={id:t.id};return o[a.propertyToSearch]=t[a.propertyToSearch],e.data(n.get(0),"tokeninput",t),c=c.slice(0,k).concat([o]).concat(c.slice(k)),k++,F(c,h),u+=1,null!==a.tokenLimit&&u>=a.tokenLimit&&(p.hide(),E()),n}function D(t){var n=a.onAdd;if(u>0&&a.preventDuplicates){var o=null;if(m.children().each(function(){var n=e(this),i=e.data(n.get(0),"tokeninput");if(i&&i.id===t.id)return o=n,!1}),o)return R(o),void p.focus()}(null==a.tokenLimit||u<a.tokenLimit)&&(x(t),C()),p.val(""),E(),e.isFunction(n)&&n.call(h,t)}function R(e){e.addClass(a.classes.selectedToken),f=e.get(0),p.val(""),E()}function b(e,t){e.removeClass(a.classes.selectedToken),f=null,t===o.BEFORE?(v.insertBefore(e),k--):t===o.AFTER?k++:(v.appendTo(m),k=u),p.focus()}function L(t){var n=e.data(t.get(0),"tokeninput"),o=a.onDelete,i=t.prevAll().length;i>k&&i--,t.remove(),f=null,p.focus(),c=c.slice(0,i).concat(c.slice(i+1)),i<k&&k--,F(c,h),u-=1,null!==a.tokenLimit&&p.show().val("").focus(),e.isFunction(o)&&o.call(h,n)}function F(t,n){var o=e.map(t,function(e){return e[a.tokenValue]});n.val(o.join(a.tokenDelimiter))}function E(){T.hide().empty(),g=null}function j(){T.css({position:"absolute",top:e(m).offset().top+e(m).outerHeight(),left:e(m).offset().left,zindex:999}).show()}function S(t,n){if(n&&n.length){T.empty();var o=e("<ul>").appendTo(T).mouseover(function(t){I(e(t.target).closest("li"))}).mousedown(function(t){return D(e(t.target).closest("li").data("tokeninput")),h.change(),!1}).hide();e.each(n,function(n,i){var s=a.resultsFormatter(i);s=function(e,t,n){return e.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)("+t+")(?![^<>]*>)(?![^&;]+;)","g"),function(e,t){return e.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)("+t+")(?![^<>]*>)(?![^&;]+;)","gi"),"<b>$1</b>")}(t,n))}(s,i[a.propertyToSearch],t),s=e(s).appendTo(o),n%2?s.addClass(a.classes.dropdownItem):s.addClass(a.classes.dropdownItem2),0===n&&I(s),e.data(s.get(0),"tokeninput",i)}),j(),a.animateDropdown?o.slideDown("fast"):o.show()}else a.noResultsText&&(T.html("<p>"+a.noResultsText+"</p>"),j())}function I(t){t&&(g&&function(e){e.removeClass(a.classes.selectedDropdownItem),g=null}(e(g)),t.addClass(a.classes.selectedDropdownItem),g=t.get(0))}function O(){var t=p.val().toLowerCase();t&&t.length&&(f&&b(e(f),o.AFTER),t.length>=a.minChars?(a.searchingText&&(T.html("<p>"+a.searchingText+"</p>"),j()),clearTimeout(l),l=setTimeout(function(){!function(t){var n=t+P(),o=d.get(n);if(o)S(t,o);else if(a.url){var i=P(),s={data:{}};if(i.indexOf("?")>-1){var l=i.split("?");s.url=l[0];var r=l[1].split("&");e.each(r,function(e,t){var n=t.split("=");s.data[n[0]]=n[1]})}else s.url=i;s.data[a.queryParam]=t,s.type=a.method,s.dataType=a.contentType,a.crossDomain&&(s.dataType="jsonp"),s.success=function(o){e.isFunction(a.onResult)&&(o=a.onResult.call(h,o)),d.add(n,a.jsonContainer?o[a.jsonContainer]:o),p.val().toLowerCase()===t&&S(t,a.jsonContainer?o[a.jsonContainer]:o)},e.ajax(s)}else if(a.local_data){var c=e.grep(a.local_data,function(e){return e[a.propertyToSearch].toLowerCase().indexOf(t.toLowerCase())>-1});e.isFunction(a.onResult)&&(c=a.onResult.call(h,c)),d.add(n,c),S(t,c)}}(t)},a.searchDelay)):E())}function P(){var e=a.url;return"function"==typeof a.url&&(e=a.url.call()),e}a.processPrePopulate&&e.isFunction(a.onResult)&&(w=a.onResult.call(h,w)),w&&w.length&&e.each(w,function(e,t){x(t),C()}),e.isFunction(a.onReady)&&a.onReady.call(),this.clear=function(){m.children("li").each(function(){0===e(this).children("input").length&&L(e(this))})},this.add=function(e){D(e)},this.remove=function(t){m.children("li").each(function(){if(0===e(this).children("input").length){var n=e(this).data("tokeninput"),o=!0;for(var i in t)if(t[i]!==n[i]){o=!1;break}o&&L(e(this))}})},this.getTokens=function(){return c}},e.TokenList.Cache=function(t){var n=e.extend({max_size:500},t),o={},i=0;this.add=function(e,t){i>n.max_size&&(o={},i=0),o[e]||(i+=1),o[e]=t},this.get=function(e){return o[e]}}}(jQuery);
