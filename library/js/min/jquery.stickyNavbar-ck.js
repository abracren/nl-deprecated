!function(i,s,t){"use strict";i.fn.stickyNavbar=function(a){var e=i.extend({activeClass:"active",sectionSelector:"scrollto",animDuration:350,startAt:0,easing:"swing",animateCSS:!0,animateCSSRepeat:!1,cssAnimation:"fadeInDown",jqueryEffects:!1,jqueryAnim:"slideDown",selector:"a",mobile:!1,mobileWidth:480,zindex:9999,stickyModeClass:"sticky",unstickyModeClass:"unsticky"},a),n=i("."+e.sectionSelector);return this.each(function(){var a=i(this),o=a.css("position"),d=a.css("zIndex"),r=a.offset().top,l="auto"===a.css("top")?0:a.css("top"),c=a.find("a"===e.selector?"li a":"li"),m=a.find("li a[href*=#]"),f=a.outerHeight(!0),p=0;c.click(function(s){var t=i(this).attr("href");if("http"===t.substring(0,4)||"mailto:"===t.substring(0,7))return!0;var n=c.index(this),o=t;++p,"0"===n&&(p=0),s.preventDefault(),1===p&&a.offset().top>r?i("html, body").stop().animate({scrollTop:i(o).offset().top-f+2+"px"},{duration:e.animDuration,easing:e.easing}):1===p||a.offset().top===r||0===n?i("html, body").stop().animate({scrollTop:i(o).offset().top-2*f+2+"px"},{duration:e.animDuration,easing:e.easing}):2===p&&a.offset().top<r?i("html, body").stop().animate({scrollTop:i(o).offset().top+2+"px"},{duration:e.animDuration,easing:e.easing}):i("html, body").stop().animate({scrollTop:i(o).offset().top-f+2+"px"},{duration:e.animDuration,easing:e.easing})});var u=function(){var m=i(s),p=m.scrollTop(),u=m.width(),C=m.height();return!e.mobile&&u<e.mobileWidth?void a.css("position",o):(c.removeClass(e.activeClass),n.each(function(){var s=i(this).offset().top-f,t=i(this).outerHeight(!0)+s;p>=s&&t>=p&&("a"===e.selector?a.find('li a[href~="#'+this.id+'"]').addClass(e.activeClass):a.find('li a[href~="#'+this.id+'"]').parent().addClass(e.activeClass))}),p>=r+e.startAt?(a.removeClass(e.unstickyModeClass).addClass(" "+e.stickyModeClass),a.css({position:"fixed",zIndex:e.zindex}).stop(),e.jqueryEffects?(e.animateCSSRepeat||a.hide().stop()[e.jqueryAnim](e.animDuration,e.easing),a.hide().stop()[e.jqueryAnim](e.animDuration,e.easing)):e.animateCSS?e.animateCSSRepeat?a.addClass(e.cssAnimation+" animated").one("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd",function(i){a.removeClass(e.cssAnimation+" animated")}):a.addClass(e.cssAnimation+" animated").one("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd"):a.stop()):a.css({position:e.$selfPosition,zIndex:d,left:0}).removeClass(e.stickyModeClass).addClass(" "+e.unstickyModeClass),m.scrollTop()+C>=i(t).height()&&c.removeClass(e.activeClass).last().addClass(e.activeClass),void(r>=p&&(a.removeClass(e.cssAnimation+" animated"),e.jqueryEffects?(0===p&&c.removeClass(e.activeClass),p>=r?a.css({position:"fixed",zIndex:e.zindex}).hide().stop()[e.jqueryAnim](e.animDuration,e.easing):a.css({position:o,zIndex:e.zindex})):(0===p&&c.removeClass(e.activeClass),a.css({position:o,top:l}).stop().animate({top:l},e.animDuration,e.easing)))))};i(s).scroll(u),i(s).ready(u),i(s).resize(u)})}}(jQuery,window,document);