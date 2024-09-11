
/*!
 * Start Navigation
 */
!function(n,i,a,e){n.navigation=function(t,s){var o={responsive:!0,mobileBreakpoint:991,showDuration:300,hideDuration:300,showDelayDuration:0,hideDelayDuration:0,submenuTrigger:"hover",effect:"fade",submenuIndicator:!0,submenuIndicatorTrigger:!1,hideSubWhenGoOut:!0,visibleSubmenusOnMobile:!1,overlay:!0,overlayColor:"rgba(0, 0, 0, 0.7)",hidden:!1,hiddenOnMobile:!1,offCanvasSide:"left",offCanvasCloseButton:!0,animationOnShow:"",animationOnHide:"",hideScrollBar:!0,onInit:function(){},onLandscape:function(){},onPortrait:function(){},onShowOffCanvas:function(){},onHideOffCanvas:function(){}},r=this,u=Number.MAX_VALUE,d=1,l="click.nav touchstart.nav",c="mouseenter focusin",f="mouseleave focusout";r.settings={};n(t);n(t=t).find(".nav-search").length>0&&n(t).find(".nav-search").find("form").prepend("<span class='nav-search-close-button' tabindex='0'>&#10005;</span>"),r.init=function(){r.settings=n.extend({},o,s),r.settings.offCanvasCloseButton&&n(t).find(".nav-menus-wrapper").prepend("<span class='nav-menus-wrapper-close-button'>&#10005;</span>"),"right"==r.settings.offCanvasSide&&n(t).find(".nav-menus-wrapper").addClass("nav-menus-wrapper-right"),r.settings.hidden&&(n(t).addClass("navigation-hidden"),r.settings.mobileBreakpoint=99999),v(),n(t).find(".nav-toggle").on("click touchstart",function(n){n.stopPropagation(),n.preventDefault(),r.showOffcanvas(),s!==e&&r.callback("onShowOffCanvas")}),n(t).find(".nav-menus-wrapper-close-button").on("click touchstart",function(){r.hideOffcanvas(),s!==e&&r.callback("onHideOffCanvas")}),n(t).find(".nav-search-button, .nav-search-close-button").on("click touchstart keydown",function(i){i.stopPropagation(),i.preventDefault();var a=i.keyCode||i.which;"click"===i.type||"touchstart"===i.type||"keydown"===i.type&&13==a?r.toggleSearch():9==a&&n(i.target).blur()}),n(i).resize(function(){r.initNavigationMode(p()),C(),r.settings.hiddenOnMobile&&m()}),r.initNavigationMode(p()),r.settings.hiddenOnMobile&&m(),r.settings.overlay&&n(t).append("<div class='nav-overlay-panel'></div>"),n(t).find(".megamenu-tabs").length>0&&w(),s!==e&&r.callback("onInit")};var h=function(){n(t).find(".nav-submenu").hide(0),n(t).find("li").removeClass("focus")},v=function(){n(t).find("li").each(function(){n(this).children(".nav-dropdown,.megamenu-panel").length>0&&(n(this).children(".nav-dropdown,.megamenu-panel").addClass("nav-submenu"),r.settings.submenuIndicator&&n(this).children("a").append("<span class='submenu-indicator'><span class='submenu-indicator-chevron'></span></span>"))})},m=function(){n(t).hasClass("navigation-portrait")?n(t).addClass("navigation-hidden"):n(t).removeClass("navigation-hidden")};r.showSubmenu=function(i,a){p()>r.settings.mobileBreakpoint&&n(t).find(".nav-search").find("form").fadeOut(),"fade"==a?n(i).children(".nav-submenu").stop(!0,!0).delay(r.settings.showDelayDuration).fadeIn(r.settings.showDuration).removeClass(r.settings.animationOnHide).addClass(r.settings.animationOnShow):n(i).children(".nav-submenu").stop(!0,!0).delay(r.settings.showDelayDuration).slideDown(r.settings.showDuration).removeClass(r.settings.animationOnHide).addClass(r.settings.animationOnShow),n(i).addClass("focus")},r.hideSubmenu=function(i,a){"fade"==a?n(i).find(".nav-submenu").stop(!0,!0).delay(r.settings.hideDelayDuration).fadeOut(r.settings.hideDuration).removeClass(r.settings.animationOnShow).addClass(r.settings.animationOnHide):n(i).find(".nav-submenu").stop(!0,!0).delay(r.settings.hideDelayDuration).slideUp(r.settings.hideDuration).removeClass(r.settings.animationOnShow).addClass(r.settings.animationOnHide),n(i).removeClass("focus").find(".focus").removeClass("focus")};var g=function(){r.settings.hideScrollBar&&n("body").removeClass("no-scroll"),r.settings.overlay&&n(t).find(".nav-overlay-panel").fadeOut(400)};r.showOffcanvas=function(){r.settings.hideScrollBar&&n("body").addClass("no-scroll"),r.settings.overlay&&n(t).find(".nav-overlay-panel").css("background-color",r.settings.overlayColor).fadeIn(300).on("click touchstart",function(){r.hideOffcanvas()}),"left"==r.settings.offCanvasSide?n(t).find(".nav-menus-wrapper").css("transition-property","left").addClass("nav-menus-wrapper-open"):n(t).find(".nav-menus-wrapper").css("transition-property","right").addClass("nav-menus-wrapper-open")},r.hideOffcanvas=function(){n(t).find(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open").on("webkitTransitionEnd moztransitionend transitionend oTransitionEnd",function(){n(t).find(".nav-menus-wrapper").css("transition-property","none").off()}),g()},r.toggleOffcanvas=function(){p()<=r.settings.mobileBreakpoint&&(n(t).find(".nav-menus-wrapper").hasClass("nav-menus-wrapper-open")?(r.hideOffcanvas(),s!==e&&r.callback("onHideOffCanvas")):(r.showOffcanvas(),s!==e&&r.callback("onShowOffCanvas")))},r.toggleSearch=function(){"none"==n(t).find(".nav-search").find("form").css("display")?(n(t).find(".nav-search").find("form").fadeIn(200),n(t).find(".nav-search").find("input").focus()):(n(t).find(".nav-search").find("form").fadeOut(200),n(t).find(".nav-search").find("input").blur())},r.initNavigationMode=function(i){r.settings.responsive?(i<=r.settings.mobileBreakpoint&&u>r.settings.mobileBreakpoint&&(n(t).addClass("navigation-portrait").removeClass("navigation-landscape"),y(),s!==e&&r.callback("onPortrait")),i>r.settings.mobileBreakpoint&&d<=r.settings.mobileBreakpoint&&(n(t).addClass("navigation-landscape").removeClass("navigation-portrait"),O(),g(),r.hideOffcanvas(),s!==e&&r.callback("onLandscape")),u=i,d=i):(n(t).addClass("navigation-landscape"),O(),s!==e&&r.callback("onLandscape"))};var p=function(){return i.innerWidth||a.documentElement.clientWidth||a.body.clientWidth},b=function(i){"landscape"==i?n(t).find(".nav-menu").find("li, a").off(l):n(t).find(".nav-menu").find("li, a").off(c).off(f)},C=function(){if(p()>r.settings.mobileBreakpoint){var i=n(t).outerWidth();n(t).find(".nav-menu").children("li").children(".nav-submenu").each(function(){n(this).parent().position().left+n(this).outerWidth()>i?n(this).css("right",0):n(this).css("right","auto")})}},w=function(){function i(i){var a=n(i).children(".megamenu-tabs-nav").children("li"),e=n(i).children(".megamenu-tabs-pane");n(a).on("mouseenter.tabs click.tabs touchstart.tabs",function(i){i.stopPropagation(),i.preventDefault(),n(a).removeClass("active"),n(this).addClass("active"),n(e).hide(0).removeClass("active"),n(e[n(this).index()]).show(0).addClass("active")})}if(n(t).find(".megamenu-tabs").length>0)for(var a=n(t).find(".megamenu-tabs"),e=0;e<a.length;e++)i(a[e])},O=function(){b("landscape"),h(),navigator.userAgent.match(/Mobi/i)||navigator.maxTouchPoints>0||"click"==r.settings.submenuTrigger?n(t).find(".nav-menu, .nav-dropdown").children("li").children("a").on(l,function(a){if(r.hideSubmenu(n(this).parent("li").siblings("li"),r.settings.effect),n(this).closest(".nav-menu").siblings(".nav-menu").find(".nav-submenu").fadeOut(r.settings.hideDuration),n(this).siblings(".nav-submenu").length>0){if(a.stopPropagation(),a.preventDefault(),"none"==n(this).siblings(".nav-submenu").css("display"))return r.showSubmenu(n(this).parent("li"),r.settings.effect),C(),!1;if(r.hideSubmenu(n(this).parent("li"),r.settings.effect),"_blank"===n(this).attr("target")||"blank"===n(this).attr("target"))i.open(n(this).attr("href"));else{if("#"===n(this).attr("href")||""===n(this).attr("href")||"javascript:void(0)"===n(this).attr("href"))return!1;i.location.href=n(this).attr("href")}}}):n(t).find(".nav-menu").find("li").on(c,function(){r.showSubmenu(this,r.settings.effect),C()}).on(f,function(){r.hideSubmenu(this,r.settings.effect)}),r.settings.hideSubWhenGoOut&&n("html").on("click.body touchstart.body",function(i){0===n(i.target).closest(".navigation").length&&(n(t).find(".nav-submenu").fadeOut(),n(t).find(".focus").removeClass("focus"),n(t).find(".nav-search").find("form").fadeOut())})},y=function(){b("portrait"),h(),r.settings.visibleSubmenusOnMobile?n(t).find(".nav-submenu").show(0):(n(t).find(".submenu-indicator").removeClass("submenu-indicator-up"),r.settings.submenuIndicator&&r.settings.submenuIndicatorTrigger?n(t).find(".submenu-indicator").on(l,function(i){if(i.stopPropagation(),i.preventDefault(),r.hideSubmenu(n(this).parent("a").parent("li").siblings("li"),"slide"),r.hideSubmenu(n(this).closest(".nav-menu").siblings(".nav-menu").children("li"),"slide"),"none"==n(this).parent("a").siblings(".nav-submenu").css("display"))return n(this).addClass("submenu-indicator-up"),n(this).parent("a").parent("li").siblings("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),n(this).closest(".nav-menu").siblings(".nav-menu").find(".submenu-indicator").removeClass("submenu-indicator-up"),r.showSubmenu(n(this).parent("a").parent("li"),"slide"),!1;n(this).parent("a").parent("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),r.hideSubmenu(n(this).parent("a").parent("li"),"slide")}):n(t).find(".nav-menu, .nav-dropdown").children("li").children("a").each(function(){n(this).siblings(".nav-submenu").length>0&&n(this).on(l,function(a){if(a.stopPropagation(),a.preventDefault(),r.hideSubmenu(n(this).parent("li").siblings("li"),r.settings.effect),r.hideSubmenu(n(this).closest(".nav-menu").siblings(".nav-menu").children("li"),"slide"),"none"==n(this).siblings(".nav-submenu").css("display"))return n(this).children(".submenu-indicator").addClass("submenu-indicator-up"),n(this).parent("li").siblings("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),n(this).closest(".nav-menu").siblings(".nav-menu").find(".submenu-indicator").removeClass("submenu-indicator-up"),r.showSubmenu(n(this).parent("li"),"slide"),!1;if(n(this).parent("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),r.hideSubmenu(n(this).parent("li"),"slide"),"_blank"===n(this).attr("target")||"blank"===n(this).attr("target"))i.open(n(this).attr("href"));else{if("#"===n(this).attr("href")||""===n(this).attr("href")||"javascript:void(0)"===n(this).attr("href"))return!1;i.location.href=n(this).attr("href")}})}))};r.callback=function(n){s[n]!==e&&s[n].call(t)},r.init()},n.fn.navigation=function(i){return this.each(function(){if(e===n(this).data("navigation")){var a=new n.navigation(this,i);n(this).data("navigation",a)}})}}(jQuery,window,document),$("#navigation1").navigation(),$("#navigation2").navigation({effect:"slide"}),$("#navigation3").navigation({animationOnShow:"zoom-in",animationOnHide:"zoom-out"}),$("#navigation4").navigation({overlayColor:"rgba(140,193,82,0.8)"}),$("#navigation5").navigation({hidden:!0}),$(".btn-show").click(function(){$("#navigation5").data("navigation").toggleOffcanvas()}),$("#navigation6").navigation({offCanvasSide:"right"}),$("#navigation7").navigation();

/*!
 * End Navigation
 */


//Start Header Fixed

//classie
( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );
//classie

//header
var cbpAnimatedHeader = (function() {
    var b = document.documentElement,
        g = document.querySelector(".cbp-af-header"),
        e = false,
        a = 30;

    function f() {
        window.addEventListener("scroll", function(h) {
            if (!e) {
                e = true;
                setTimeout(d, 250)
            }
        }, false)
    }

    function d() {
        var h = c();
        if (h >= a) {
            classie.add(g, "cbp-af-header-shrink")
        } else {
            classie.remove(g, "cbp-af-header-shrink")
        }
        e = false
    }

    function c() {
        return window.pageYOffset || b.scrollTop
    }
    f()
})();
//End header  fixed
 
 
 
 //start wow min
 (function(){var a,b,c=function(a,b){return function(){return a.apply(b,arguments)}};a=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in a)d=a[c],null!=d&&(b[c]=d);return b},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a}(),b=this.WeakMap||(b=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),this.WOW=function(){function d(a){null==a&&(a={}),this.scrollCallback=c(this.scrollCallback,this),this.scrollHandler=c(this.scrollHandler,this),this.start=c(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),this.animationNameCache=new b}return d.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0},d.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():document.addEventListener("DOMContentLoaded",this.start)},d.prototype.start=function(){var a,b,c,d;if(this.boxes=this.element.getElementsByClassName(this.config.boxClass),this.boxes.length){if(this.disabled())return this.resetStyle();for(d=this.boxes,b=0,c=d.length;c>b;b++)a=d[b],this.applyStyle(a,!0);return window.addEventListener("scroll",this.scrollHandler,!1),window.addEventListener("resize",this.scrollHandler,!1),this.interval=setInterval(this.scrollCallback,50)}},d.prototype.stop=function(){return window.removeEventListener("scroll",this.scrollHandler,!1),window.removeEventListener("resize",this.scrollHandler,!1),null!=this.interval?clearInterval(this.interval):void 0},d.prototype.show=function(a){return this.applyStyle(a),a.className=""+a.className+" "+this.config.animateClass},d.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},d.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),d.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.setAttribute("style","visibility: visible;"));return e},d.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},d.prototype.vendors=["moz","webkit"],d.prototype.vendorSet=function(a,b){var c,d,e,f;f=[];for(c in b)d=b[c],a[""+c]=d,f.push(function(){var b,f,g,h;for(g=this.vendors,h=[],b=0,f=g.length;f>b;b++)e=g[b],h.push(a[""+e+c.charAt(0).toUpperCase()+c.substr(1)]=d);return h}.call(this));return f},d.prototype.vendorCSS=function(a,b){var c,d,e,f,g,h;for(d=window.getComputedStyle(a),c=d.getPropertyCSSValue(b),h=this.vendors,f=0,g=h.length;g>f;f++)e=h[f],c=c||d.getPropertyCSSValue("-"+e+"-"+b);return c},d.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=window.getComputedStyle(a).getPropertyValue("animation-name")}return"none"===b?"":b},d.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},d.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},d.prototype.scrollHandler=function(){return this.scrolled=!0},d.prototype.scrollCallback=function(){var a;return this.scrolled&&(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),!this.boxes.length)?this.stop():void 0},d.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},d.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=window.pageYOffset,e=f+this.element.clientHeight-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},d.prototype.util=function(){return this._util||(this._util=new a)},d.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},d}()}).call(this);


 //start wow min main

jQuery(function($) {'use strict';
	new WOW().init();
});
  //End wow min main
 
 //End wow min

