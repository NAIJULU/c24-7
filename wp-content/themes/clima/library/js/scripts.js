/*********************************************************************
*  #### Twitter Post Fetcher v10.0 ####
*  Coded by Jason Mayes 2013. A present to all the developers out there.
*  www.jasonmayes.com
*  Please keep this disclaimer with my code if you use it. Thanks. :-)
*  Got feedback or questions, ask here: 
*  http://www.jasonmayes.com/projects/twitterApi/
*  Updates will be posted to this site.
*********************************************************************/

var html  = "";
var meses = new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

var twitterFetcher=function(){function x(e){return e.replace(/<b[^>]*>(.*?)<\/b>/gi,function(c,e){return e}).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function p(e,c){for(var g=[],f=RegExp("(^| )"+c+"( |$)"),a=e.getElementsByTagName("*"),h=0,d=a.length;h<d;h++)f.test(a[h].className)&&g.push(a[h]);return g}var y="",l=20,s=!0,k=[],t=!1,q=!0,r=!0,u=null,v=!0,z=!0,w=null,A=!0;return{fetch:function(e,c,g,f,a,h,d,b,m,n){void 0===g&&(g=20);void 0===f&&(s=!0);void 0===a&&(a=
!0);void 0===h&&(h=!0);void 0===d&&(d="default");void 0===b&&(b=!0);void 0===m&&(m=null);void 0===n&&(n=!0);t?k.push({id:e,domId:c,maxTweets:g,enableLinks:f,showUser:a,showTime:h,dateFunction:d,showRt:b,customCallback:m,showInteraction:n}):(t=!0,y=c,l=g,s=f,r=a,q=h,z=b,u=d,w=m,A=n,c=document.createElement("script"),c.type="text/javascript",c.src="//cdn.syndication.twimg.com/widgets/timelines/"+e+"?&lang=en&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+Math.random(),document.getElementsByTagName("head")[0].appendChild(c))},
callback:function(e){var c=document.createElement("div");c.innerHTML=e.body;"undefined"===typeof c.getElementsByClassName&&(v=!1);e=[];var g=[],f=[],a=[],h=[],d=0;if(v)for(c=c.getElementsByClassName("tweet");d<c.length;){0<c[d].getElementsByClassName("retweet-credit").length?a.push(!0):a.push(!1);if(!a[d]||a[d]&&z)e.push(c[d].getElementsByClassName("e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(c[d].getElementsByClassName("p-author")[0]),f.push(c[d].getElementsByClassName("dt-updated")[0]);
d++}else for(c=p(c,"tweet");d<c.length;)e.push(p(c[d],"e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(p(c[d],"p-author")[0]),f.push(p(c[d],"dt-updated")[0]),0<p(c[d],"retweet-credit").length?a.push(!0):a.push(!1),d++;e.length>l&&(e.splice(l,e.length-l),g.splice(l,g.length-l),f.splice(l,f.length-l),a.splice(l,a.length-l));c=[];d=e.length;for(a=0;a<d;){if("string"!==typeof u){var b=new Date(f[a].getAttribute("datetime").replace(/-/g,"/").replace("T"," ").split("+")[0]),b=u(b);
f[a].setAttribute("aria-label",b);if(e[a].innerText)if(v)f[a].innerText=b;else{var m=document.createElement("p"),n=document.createTextNode(b);m.appendChild(n);m.setAttribute("aria-label",b);f[a]=m}else f[a].textContent=b}b="";s?(r&&(b+=''),b+='<p class="tweet">'+x(e[a].innerHTML)+"<i class='icon-asterisk icon-white separador'></i></p>",q&&(b+='')):e[a].innerText?(r&&(b+=''),b+='<p class="tweet">'+e[a].innerText+
"</p>",q&&(b+='<p class="timePosted">'+f[a].innerText+"</p>")):(r&&(b+=''),b+='<p class="tweet">'+e[a].textContent+"</p>",q&&(b+='<p class="timePosted">'+f[a].textContent+"</p>"));A&&(b+='<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+h[a]+'" class="twitter_reply_icon">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id='+h[a]+'" class="twitter_retweet_icon">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id='+
h[a]+'" class="twitter_fav_icon">Favorite</a></p>');c.push(b);a++}if(null==w){e=c.length;g=0;f=document.getElementById(y);for(h="<ul>";g<e;)h+="<li>"+c[g]+"</li>",g++;f.innerHTML=h+"</ul>"}else w(c);t=!1;0<k.length&&(twitterFetcher.fetch(k[0].id,k[0].domId,k[0].maxTweets,k[0].enableLinks,k[0].showUser,k[0].showTime,k[0].dateFunction,k[0].showRt,k[0].customCallback,k[0].showInteraction),k.splice(0,1))}}}();



/* imgsizer (flexible images for fluid sites) */
var imgSizer={Config:{imgCache:[],spacer:"/path/to/your/spacer.gif"},collate:function(aScope){var isOldIE=(document.all&&!window.opera&&!window.XDomainRequest)?1:0;if(isOldIE&&document.getElementsByTagName){var c=imgSizer;var imgCache=c.Config.imgCache;var images=(aScope&&aScope.length)?aScope:document.getElementsByTagName("img");for(var i=0;i<images.length;i++){images[i].origWidth=images[i].offsetWidth;images[i].origHeight=images[i].offsetHeight;imgCache.push(images[i]);c.ieAlpha(images[i]);images[i].style.width="100%";}
if(imgCache.length){c.resize(function(){for(var i=0;i<imgCache.length;i++){var ratio=(imgCache[i].offsetWidth/imgCache[i].origWidth);imgCache[i].style.height=(imgCache[i].origHeight*ratio)+"px";}});}}},ieAlpha:function(img){var c=imgSizer;if(img.oldSrc){img.src=img.oldSrc;}
var src=img.src;img.style.width=img.offsetWidth+"px";img.style.height=img.offsetHeight+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')"
img.oldSrc=src;img.src=c.Config.spacer;},resize:function(func){var oldonresize=window.onresize;if(typeof window.onresize!='function'){window.onresize=func;}else{window.onresize=function(){if(oldonresize){oldonresize();}
func();}}}}

/* Jquery Easing */
jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});
/**
 * jQuery.marquee - scrolling text horizontally
 * Date: 11/01/2013
 * @author Aamir Afridi - aamirafridi(at)gmail(dot)com / http://aamirafridi.com/jquery/jquery-marquee-plugin
 */
 (function(e){e.fn.marquee=function(t){return this.each(function(){function d(e){var t=[];for(var n in e){if(e.hasOwnProperty(n)){t.push(n+":"+e[n])}}t.push();return"{"+t.join(",")+"}"}function v(){if(l&&n.allowCss3Support){return i.css(f,"paused")}if(e.fn.pause){i.pause();r.trigger("paused")}}function m(){if(l&&n.allowCss3Support){return i.css(f,"running")}if(e.fn.resume){i.resume();r.trigger("resumed")}}var n=e.extend({},e.fn.marquee.defaults,t),r=e(this),i,s,o,u,a,f="animation-play-state",l=false;if(typeof r.data().delaybeforestart!=="undefined"){r.data().delayBeforeStart=r.data().delaybeforestart;delete r.data().delaybeforestart}if(typeof r.data().pauseonhover!=="undefined"){r.data().pauseOnHover=r.data().pauseonhover;delete r.data().pauseonhover}if(typeof r.data().pauseoncycle!=="undefined"){r.data().pauseOnCycle=r.data().pauseoncycle;delete r.data().pauseoncycle}if(typeof r.data().allowcss3support!=="undefined"){r.data().allowCss3Support=r.data().allowcss3support;delete r.data().allowcss3support}n=e.extend({},n,r.data());n.duration=n.speed||n.duration;u=n.direction=="up"||n.direction=="down";n.gap=n.duplicated?n.gap:0;r.wrapInner('<div class="js-marquee"></div>');var c=r.find(".js-marquee").css({"margin-right":n.gap,"float":"left"});if(n.duplicated){c.clone().appendTo(r)}r.wrapInner('<div style="width:100000px" class="js-marquee-wrapper"></div>');i=r.find(".js-marquee-wrapper");if(u){var h=r.height();i.removeAttr("style");r.height(h);r.find(".js-marquee").css({"float":"none","margin-bottom":n.gap,"margin-right":0});if(n.duplicated)r.find(".js-marquee:last").css({"margin-bottom":0});var p=r.find(".js-marquee:first").height()+n.gap;n.duration=(parseInt(p,10)+parseInt(h,10))/parseInt(h,10)*n.duration}else{a=r.find(".js-marquee:first").width()+n.gap;s=r.width();n.duration=(parseInt(a,10)+parseInt(s,10))/parseInt(s,10)*n.duration}if(n.duplicated){n.duration=n.duration/2}if(n.allowCss3Support){var g=document.createElement("div"),y="animation",b="marqueeAnimation-"+Math.floor(Math.random()*1e7),w="Webkit Moz O ms Khtml".split(" "),E="",S="",x=e("style"),T="";if(g.style.animationCssStr){l=true}if(l===false){for(var N=0;N<w.length;N++){if(g.style[w[N]+"AnimationName"]!==undefined){var C="-"+w[N].toLowerCase()+"-";E=C+"animation";f=C+f;T="@"+C+"keyframes "+b+" ";l=true;break}}}if(l){S=b+" "+n.duration/1e3+"s "+n.delayBeforeStart/1e3+"s infinite "+n.css3easing;}}var k=function(){if(u){if(n.duplicated){i.css("margin-top",n.direction=="up"?0:"-"+p+"px");o={"margin-top":n.direction=="up"?"-"+p+"px":0}}else{i.css("margin-top",n.direction=="up"?h+"px":"-"+p+"px");o={"margin-top":n.direction=="up"?"-"+i.height()+"px":h+"px"}}}else{if(n.duplicated){i.css("margin-left",n.direction=="left"?0:"-"+a+"px");o={"margin-left":n.direction=="left"?"-"+a+"px":0}}else{i.css("margin-left",n.direction=="left"?s+"px":"-"+a+"px");o={"margin-left":n.direction=="left"?"-"+a+"px":s+"px"}}}r.trigger("beforeStarting");if(l){i.css(E,S);var t=T+" { 100%  "+d(o)+"}";if(x.length!=0){x.last().append(t)}else{e("head").append("<style>"+t+"</style>")}}else{i.animate(o,n.duration,n.easing,function(){r.trigger("finished");if(n.pauseOnCycle){setTimeout(k,n.delayBeforeStart)}else{k()}})}};r.bind("pause",v);r.bind("resume",m);if(n.pauseOnHover){r.hover(v,m)}if(l&&n.allowCss3Support){k()}else{setTimeout(k,n.delayBeforeStart)}})};e.fn.marquee.defaults={allowCss3Support:true,css3easing:"linear",easing:"linear",delayBeforeStart:0,direction:"left",duplicated:false,duration:5e3,gap:20,pauseOnCycle:false,pauseOnHover:false}})(jQuery);

/* Tweeter button */
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');


/**
 * Isotope v1.5.25
 * An exquisite jQuery plugin for magical layouts
 * http://isotope.metafizzy.co
 *
 * Commercial use requires one-time purchase of a commercial license
 * http://isotope.metafizzy.co/docs/license.html
 *
 * Non-commercial use is licensed under the MIT License
 *
 * Copyright 2013 Metafizzy
 */
(function(a,b,c){"use strict";var d=a.document,e=a.Modernizr,f=function(a){return a.charAt(0).toUpperCase()+a.slice(1)},g="Moz Webkit O Ms".split(" "),h=function(a){var b=d.documentElement.style,c;if(typeof b[a]=="string")return a;a=f(a);for(var e=0,h=g.length;e<h;e++){c=g[e]+a;if(typeof b[c]=="string")return c}},i=h("transform"),j=h("transitionProperty"),k={csstransforms:function(){return!!i},csstransforms3d:function(){var a=!!h("perspective");if(a){var c=" -o- -moz- -ms- -webkit- -khtml- ".split(" "),d="@media ("+c.join("transform-3d),(")+"modernizr)",e=b("<style>"+d+"{#modernizr{height:3px}}"+"</style>").appendTo("head"),f=b('<div id="modernizr" />').appendTo("html");a=f.height()===3,f.remove(),e.remove()}return a},csstransitions:function(){return!!j}},l;if(e)for(l in k)e.hasOwnProperty(l)||e.addTest(l,k[l]);else{e=a.Modernizr={_version:"1.6ish: miniModernizr for Isotope"};var m=" ",n;for(l in k)n=k[l](),e[l]=n,m+=" "+(n?"":"no-")+l;b("html").addClass(m)}if(e.csstransforms){var o=e.csstransforms3d?{translate:function(a){return"translate3d("+a[0]+"px, "+a[1]+"px, 0) "},scale:function(a){return"scale3d("+a+", "+a+", 1) "}}:{translate:function(a){return"translate("+a[0]+"px, "+a[1]+"px) "},scale:function(a){return"scale("+a+") "}},p=function(a,c,d){var e=b.data(a,"isoTransform")||{},f={},g,h={},j;f[c]=d,b.extend(e,f);for(g in e)j=e[g],h[g]=o[g](j);var k=h.translate||"",l=h.scale||"",m=k+l;b.data(a,"isoTransform",e),a.style[i]=m};b.cssNumber.scale=!0,b.cssHooks.scale={set:function(a,b){p(a,"scale",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.scale?d.scale:1}},b.fx.step.scale=function(a){b.cssHooks.scale.set(a.elem,a.now+a.unit)},b.cssNumber.translate=!0,b.cssHooks.translate={set:function(a,b){p(a,"translate",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.translate?d.translate:[0,0]}}}var q,r;e.csstransitions&&(q={WebkitTransitionProperty:"webkitTransitionEnd",MozTransitionProperty:"transitionend",OTransitionProperty:"oTransitionEnd otransitionend",transitionProperty:"transitionend"}[j],r=h("transitionDuration"));var s=b.event,t=b.event.handle?"handle":"dispatch",u;s.special.smartresize={setup:function(){b(this).bind("resize",s.special.smartresize.handler)},teardown:function(){b(this).unbind("resize",s.special.smartresize.handler)},handler:function(a,b){var c=this,d=arguments;a.type="smartresize",u&&clearTimeout(u),u=setTimeout(function(){s[t].apply(c,d)},b==="execAsap"?0:100)}},b.fn.smartresize=function(a){return a?this.bind("smartresize",a):this.trigger("smartresize",["execAsap"])},b.Isotope=function(a,c,d){this.element=b(c),this._create(a),this._init(d)};var v=["width","height"],w=b(a);b.Isotope.settings={resizable:!0,layoutMode:"masonry",containerClass:"isotope",itemClass:"isotope-item",hiddenClass:"isotope-hidden",hiddenStyle:{opacity:0,scale:.001},visibleStyle:{opacity:1,scale:1},containerStyle:{position:"relative",overflow:"hidden"},animationEngine:"best-available",animationOptions:{queue:!1,duration:800},sortBy:"original-order",sortAscending:!0,resizesContainer:!0,transformsEnabled:!0,itemPositionDataEnabled:!1},b.Isotope.prototype={_create:function(a){this.options=b.extend({},b.Isotope.settings,a),this.styleQueue=[],this.elemCount=0;var c=this.element[0].style;this.originalStyle={};var d=v.slice(0);for(var e in this.options.containerStyle)d.push(e);for(var f=0,g=d.length;f<g;f++)e=d[f],this.originalStyle[e]=c[e]||"";this.element.css(this.options.containerStyle),this._updateAnimationEngine(),this._updateUsingTransforms();var h={"original-order":function(a,b){return b.elemCount++,b.elemCount},random:function(){return Math.random()}};this.options.getSortData=b.extend(this.options.getSortData,h),this.reloadItems(),this.offset={left:parseInt(this.element.css("padding-left")||0,10),top:parseInt(this.element.css("padding-top")||0,10)};var i=this;setTimeout(function(){i.element.addClass(i.options.containerClass)},0),this.options.resizable&&w.bind("smartresize.isotope",function(){i.resize()}),this.element.delegate("."+this.options.hiddenClass,"click",function(){return!1})},_getAtoms:function(a){var b=this.options.itemSelector,c=b?a.filter(b).add(a.find(b)):a,d={position:"absolute"};return c=c.filter(function(a,b){return b.nodeType===1}),this.usingTransforms&&(d.left=0,d.top=0),c.css(d).addClass(this.options.itemClass),this.updateSortData(c,!0),c},_init:function(a){this.$filteredAtoms=this._filter(this.$allAtoms),this._sort(),this.reLayout(a)},option:function(a){if(b.isPlainObject(a)){this.options=b.extend(!0,this.options,a);var c;for(var d in a)c="_update"+f(d),this[c]&&this[c]()}},_updateAnimationEngine:function(){var a=this.options.animationEngine.toLowerCase().replace(/[ _\-]/g,""),b;switch(a){case"css":case"none":b=!1;break;case"jquery":b=!0;break;default:b=!e.csstransitions}this.isUsingJQueryAnimation=b,this._updateUsingTransforms()},_updateTransformsEnabled:function(){this._updateUsingTransforms()},_updateUsingTransforms:function(){var a=this.usingTransforms=this.options.transformsEnabled&&e.csstransforms&&e.csstransitions&&!this.isUsingJQueryAnimation;a||(delete this.options.hiddenStyle.scale,delete this.options.visibleStyle.scale),this.getPositionStyles=a?this._translate:this._positionAbs},_filter:function(a){var b=this.options.filter===""?"*":this.options.filter;if(!b)return a;var c=this.options.hiddenClass,d="."+c,e=a.filter(d),f=e;if(b!=="*"){f=e.filter(b);var g=a.not(d).not(b).addClass(c);this.styleQueue.push({$el:g,style:this.options.hiddenStyle})}return this.styleQueue.push({$el:f,style:this.options.visibleStyle}),f.removeClass(c),a.filter(b)},updateSortData:function(a,c){var d=this,e=this.options.getSortData,f,g;a.each(function(){f=b(this),g={};for(var a in e)!c&&a==="original-order"?g[a]=b.data(this,"isotope-sort-data")[a]:g[a]=e[a](f,d);b.data(this,"isotope-sort-data",g)})},_sort:function(){var a=this.options.sortBy,b=this._getSorter,c=this.options.sortAscending?1:-1,d=function(d,e){var f=b(d,a),g=b(e,a);return f===g&&a!=="original-order"&&(f=b(d,"original-order"),g=b(e,"original-order")),(f>g?1:f<g?-1:0)*c};this.$filteredAtoms.sort(d)},_getSorter:function(a,c){return b.data(a,"isotope-sort-data")[c]},_translate:function(a,b){return{translate:[a,b]}},_positionAbs:function(a,b){return{left:a,top:b}},_pushPosition:function(a,b,c){b=Math.round(b+this.offset.left),c=Math.round(c+this.offset.top);var d=this.getPositionStyles(b,c);this.styleQueue.push({$el:a,style:d}),this.options.itemPositionDataEnabled&&a.data("isotope-item-position",{x:b,y:c})},layout:function(a,b){var c=this.options.layoutMode;this["_"+c+"Layout"](a);if(this.options.resizesContainer){var d=this["_"+c+"GetContainerSize"]();this.styleQueue.push({$el:this.element,style:d})}this._processStyleQueue(a,b),this.isLaidOut=!0},_processStyleQueue:function(a,c){var d=this.isLaidOut?this.isUsingJQueryAnimation?"animate":"css":"css",f=this.options.animationOptions,g=this.options.onLayout,h,i,j,k;i=function(a,b){b.$el[d](b.style,f)};if(this._isInserting&&this.isUsingJQueryAnimation)i=function(a,b){h=b.$el.hasClass("no-transition")?"css":d,b.$el[h](b.style,f)};else if(c||g||f.complete){var l=!1,m=[c,g,f.complete],n=this;j=!0,k=function(){if(l)return;var b;for(var c=0,d=m.length;c<d;c++)b=m[c],typeof b=="function"&&b.call(n.element,a,n);l=!0};if(this.isUsingJQueryAnimation&&d==="animate")f.complete=k,j=!1;else if(e.csstransitions){var o=0,p=this.styleQueue[0],s=p&&p.$el,t;while(!s||!s.length){t=this.styleQueue[o++];if(!t)return;s=t.$el}var u=parseFloat(getComputedStyle(s[0])[r]);u>0&&(i=function(a,b){b.$el[d](b.style,f).one(q,k)},j=!1)}}b.each(this.styleQueue,i),j&&k(),this.styleQueue=[]},resize:function(){this["_"+this.options.layoutMode+"ResizeChanged"]()&&this.reLayout()},reLayout:function(a){this["_"+this.options.layoutMode+"Reset"](),this.layout(this.$filteredAtoms,a)},addItems:function(a,b){var c=this._getAtoms(a);this.$allAtoms=this.$allAtoms.add(c),b&&b(c)},insert:function(a,b){this.element.append(a);var c=this;this.addItems(a,function(a){var d=c._filter(a);c._addHideAppended(d),c._sort(),c.reLayout(),c._revealAppended(d,b)})},appended:function(a,b){var c=this;this.addItems(a,function(a){c._addHideAppended(a),c.layout(a),c._revealAppended(a,b)})},_addHideAppended:function(a){this.$filteredAtoms=this.$filteredAtoms.add(a),a.addClass("no-transition"),this._isInserting=!0,this.styleQueue.push({$el:a,style:this.options.hiddenStyle})},_revealAppended:function(a,b){var c=this;setTimeout(function(){a.removeClass("no-transition"),c.styleQueue.push({$el:a,style:c.options.visibleStyle}),c._isInserting=!1,c._processStyleQueue(a,b)},10)},reloadItems:function(){this.$allAtoms=this._getAtoms(this.element.children())},remove:function(a,b){this.$allAtoms=this.$allAtoms.not(a),this.$filteredAtoms=this.$filteredAtoms.not(a);var c=this,d=function(){a.remove(),b&&b.call(c.element)};a.filter(":not(."+this.options.hiddenClass+")").length?(this.styleQueue.push({$el:a,style:this.options.hiddenStyle}),this._sort(),this.reLayout(d)):d()},shuffle:function(a){this.updateSortData(this.$allAtoms),this.options.sortBy="random",this._sort(),this.reLayout(a)},destroy:function(){var a=this.usingTransforms,b=this.options;this.$allAtoms.removeClass(b.hiddenClass+" "+b.itemClass).each(function(){var b=this.style;b.position="",b.top="",b.left="",b.opacity="",a&&(b[i]="")});var c=this.element[0].style;for(var d in this.originalStyle)c[d]=this.originalStyle[d];this.element.unbind(".isotope").undelegate("."+b.hiddenClass,"click").removeClass(b.containerClass).removeData("isotope"),w.unbind(".isotope")},_getSegments:function(a){var b=this.options.layoutMode,c=a?"rowHeight":"columnWidth",d=a?"height":"width",e=a?"rows":"cols",g=this.element[d](),h,i=this.options[b]&&this.options[b][c]||this.$filteredAtoms["outer"+f(d)](!0)||g;h=Math.floor(g/i),h=Math.max(h,1),this[b][e]=h,this[b][c]=i},_checkIfSegmentsChanged:function(a){var b=this.options.layoutMode,c=a?"rows":"cols",d=this[b][c];return this._getSegments(a),this[b][c]!==d},_masonryReset:function(){this.masonry={},this._getSegments();var a=this.masonry.cols;this.masonry.colYs=[];while(a--)this.masonry.colYs.push(0)},_masonryLayout:function(a){var c=this,d=c.masonry;a.each(function(){var a=b(this),e=Math.ceil(a.outerWidth(!0)/d.columnWidth);e=Math.min(e,d.cols);if(e===1)c._masonryPlaceBrick(a,d.colYs);else{var f=d.cols+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.colYs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryPlaceBrick(a,g)}})},_masonryPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=this.masonry.columnWidth*d,h=c;this._pushPosition(a,g,h);var i=c+a.outerHeight(!0),j=this.masonry.cols+1-f;for(e=0;e<j;e++)this.masonry.colYs[d+e]=i},_masonryGetContainerSize:function(){var a=Math.max.apply(Math,this.masonry.colYs);return{height:a}},_masonryResizeChanged:function(){return this._checkIfSegmentsChanged()},_fitRowsReset:function(){this.fitRows={x:0,y:0,height:0}},_fitRowsLayout:function(a){var c=this,d=this.element.width(),e=this.fitRows;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.x!==0&&f+e.x>d&&(e.x=0,e.y=e.height),c._pushPosition(a,e.x,e.y),e.height=Math.max(e.y+g,e.height),e.x+=f})},_fitRowsGetContainerSize:function(){return{height:this.fitRows.height}},_fitRowsResizeChanged:function(){return!0},_cellsByRowReset:function(){this.cellsByRow={index:0},this._getSegments(),this._getSegments(!0)},_cellsByRowLayout:function(a){var c=this,d=this.cellsByRow;a.each(function(){var a=b(this),e=d.index%d.cols,f=Math.floor(d.index/d.cols),g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByRowGetContainerSize:function(){return{height:Math.ceil(this.$filteredAtoms.length/this.cellsByRow.cols)*this.cellsByRow.rowHeight+this.offset.top}},_cellsByRowResizeChanged:function(){return this._checkIfSegmentsChanged()},_straightDownReset:function(){this.straightDown={y:0}},_straightDownLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,0,c.straightDown.y),c.straightDown.y+=d.outerHeight(!0)})},_straightDownGetContainerSize:function(){return{height:this.straightDown.y}},_straightDownResizeChanged:function(){return!0},_masonryHorizontalReset:function(){this.masonryHorizontal={},this._getSegments(!0);var a=this.masonryHorizontal.rows;this.masonryHorizontal.rowXs=[];while(a--)this.masonryHorizontal.rowXs.push(0)},_masonryHorizontalLayout:function(a){var c=this,d=c.masonryHorizontal;a.each(function(){var a=b(this),e=Math.ceil(a.outerHeight(!0)/d.rowHeight);e=Math.min(e,d.rows);if(e===1)c._masonryHorizontalPlaceBrick(a,d.rowXs);else{var f=d.rows+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.rowXs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryHorizontalPlaceBrick(a,g)}})},_masonryHorizontalPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=c,h=this.masonryHorizontal.rowHeight*d;this._pushPosition(a,g,h);var i=c+a.outerWidth(!0),j=this.masonryHorizontal.rows+1-f;for(e=0;e<j;e++)this.masonryHorizontal.rowXs[d+e]=i},_masonryHorizontalGetContainerSize:function(){var a=Math.max.apply(Math,this.masonryHorizontal.rowXs);return{width:a}},_masonryHorizontalResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_fitColumnsReset:function(){this.fitColumns={x:0,y:0,width:0}},_fitColumnsLayout:function(a){var c=this,d=this.element.height(),e=this.fitColumns;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.y!==0&&g+e.y>d&&(e.x=e.width,e.y=0),c._pushPosition(a,e.x,e.y),e.width=Math.max(e.x+f,e.width),e.y+=g})},_fitColumnsGetContainerSize:function(){return{width:this.fitColumns.width}},_fitColumnsResizeChanged:function(){return!0},_cellsByColumnReset:function(){this.cellsByColumn={index:0},this._getSegments(),this._getSegments(!0)},_cellsByColumnLayout:function(a){var c=this,d=this.cellsByColumn;a.each(function(){var a=b(this),e=Math.floor(d.index/d.rows),f=d.index%d.rows,g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByColumnGetContainerSize:function(){return{width:Math.ceil(this.$filteredAtoms.length/this.cellsByColumn.rows)*this.cellsByColumn.columnWidth}},_cellsByColumnResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_straightAcrossReset:function(){this.straightAcross={x:0}},_straightAcrossLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,c.straightAcross.x,0),c.straightAcross.x+=d.outerWidth(!0)})},_straightAcrossGetContainerSize:function(){return{width:this.straightAcross.x}},_straightAcrossResizeChanged:function(){return!0}},b.fn.imagesLoaded=function(a){function h(){a.call(c,d)}function i(a){var c=a.target;c.src!==f&&b.inArray(c,g)===-1&&(g.push(c),--e<=0&&(setTimeout(h),d.unbind(".imagesLoaded",i)))}var c=this,d=c.find("img").add(c.filter("img")),e=d.length,f="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",g=[];return e||h(),d.bind("load.imagesLoaded error.imagesLoaded",i).each(function(){var a=this.src;this.src=f,this.src=a}),c};var x=function(b){a.console&&a.console.error(b)};b.fn.isotope=function(a,c){if(typeof a=="string"){var d=Array.prototype.slice.call(arguments,1);this.each(function(){var c=b.data(this,"isotope");if(!c){x("cannot call methods on isotope prior to initialization; attempted to call method '"+a+"'");return}if(!b.isFunction(c[a])||a.charAt(0)==="_"){x("no such method '"+a+"' for isotope instance");return}c[a].apply(c,d)})}else this.each(function(){var d=b.data(this,"isotope");d?(d.option(a),d._init(c)):b.data(this,"isotope",new b.Isotope(a,this,c))});return this}})(window,jQuery);


// Variable para almacenar los filtros
var filtro = [];
// add twitter bootstrap classes and color based on how many times tag is used
function addTwitterBSClass(thisObj) {
  var title = $(thisObj).attr('title');
  if (title) {
    var titles = title.split(' ');
    if (titles[0]) {
      var num = parseInt(titles[0]);
      if (num > 0)
      	$(thisObj).addClass('label');
      if (num == 2)
        $(thisObj).addClass('label label-info');
      if (num > 2 && num < 4)
        $(thisObj).addClass('label label-success');
      if (num >= 5 && num < 10)
        $(thisObj).addClass('label label-warning');
      if (num >=10)
        $(thisObj).addClass('label label-important');
    }
  }
  else
  	$(thisObj).addClass('label');
  return true;
}

function metodoC(data){
	document.getElementById('all').click();
}
// as the page loads, call these scripts
jQuery(document).ready(function($) {
	// cache container
	var $container = $('#main-articulos');
	// initialize isotope
	$container.isotope({
		animationOptions: {
			itemSelector : '.categorias',
			duration: 500000,
			easing: 'linear',
			queue: false

		},
		
		layoutMode: 'fitRows'
	});

	// filter items when filter link is clicked
	$('#menu-clima input').click(function(){

	  var selector = [];
	  var all = ( $(this).attr('data-filter') == '.todos') ? true : false;

	  $(".filtro").each(function()
	  {
	  		if(all)
	  		{
	  			selector.push($(this).attr('data-filter'));	
	  		}
	  		else
	  		{	
		  		if( $(this).attr('checked') )
		  		{
		  			selector.push($(this).attr('data-filter'));
		  		}	
	  		}
	  });

	  selector = selector.join(',');

	  //$(this).attr('checked','checked');

	  $container.isotope({ filter: selector });
console.log(notIsotopeActive());
	  return;
	});	 	


	// modify tag cloud links to match up with twitter bootstrap
	$("#tag-cloud a").each(function() {
	    addTwitterBSClass(this);
	    return true;
	});
	
	$("p.tags a").each(function() {
		addTwitterBSClass(this);
		return true;
	});
	
	$("ol.commentlist a.comment-reply-link").each(function() {
		$(this).addClass('btn btn-success btn-mini');
		return true;
	});
	
	$('#cancel-comment-reply-link').each(function() {
		$(this).addClass('btn btn-danger btn-mini');
		return true;
	});
	
	$('article.post').hover(function(){
		$('a.edit-post').show();
	},function(){
		$('a.edit-post').hide();
	});
	
	// Input placeholder text fix for IE
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	
	// Prevent submission of empty form
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});
	
	$('#s').focus(function(){
		if( $(window).width() < 940 ){
			$(this).animate({ width: '200px' });
		}
	});
	
	$('#s').blur(function(){
		if( $(window).width() < 940 ){
			$(this).animate({ width: '100px' });
		}
	});
			
	$('.alert-message').alert();
	
	$('.dropdown-toggle').dropdown();

	/**
	* Sección para el manejo del widget de Pronóstico / Radar / Temperatura
	*/
	$("#pronosticos").carousel({
		interval: false
	});
	$("#temperaturas").carousel({
		interval: false
	});	

	$("#radar").css('display','none');

	$("#temperaturas").css('display','none');

	$("#btnMostrarRadar").click(function(e){
		e.preventDefault();
		$("#pronosticos").fadeOut();
		$("#temperaturas").fadeOut();
		$("#radar").fadeIn(1000);

		var medellin = new google.maps.LatLng(6.244316, -75.539932);
		var mapOptions = {
			zoom: 12,
			center: medellin,
			mapTypeId: google.maps.MapTypeId.HYBRID
		}
		var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);		
		var georssLayer = new google.maps.KmlLayer('http://www.siata.gov.co/kml/00_Radar/Ultimo_Barrido/AreaMetropolitanaRadar_10_120_DBZH.kml', {preserveViewport: true});
		georssLayer.setMap(map);
	});

	$("#btnMostrarTemperatura").click(function(e){
		e.preventDefault();
		$("#pronosticos").fadeOut();
		$("#radar").fadeOut();
		$("#temperaturas").fadeIn(1000);
	});	

	$("#btnMostrarPronostico").click(function(e){
		e.preventDefault();
		$("#temperaturas").fadeOut();		
		$("#radar").fadeOut();
		$("#pronosticos").fadeIn(1000);
	});		
	/* Fin de la sección */ 

	/**
	* Sección para el manejo de la página Clima en Vivo
	*/
	$("#radar-meterologico").ready(function(){
		var medellin = new google.maps.LatLng(6.244316, -75.539932);
		var mapOptions = {
			zoom: 12,
			center: medellin,
			mapTypeId: google.maps.MapTypeId.HYBRID
		}
		var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);		
		var georssLayer = new google.maps.KmlLayer('http://www.siata.gov.co/kml/00_Radar/Ultimo_Barrido/AreaMetropolitanaRadar_10_120_DBZH.kml', {preserveViewport: true});
		georssLayer.setMap(map);
	});


	$(".convencion").click(function(e){
		if( $(".contenedor-convencion").css("display") == "none" )
		  {
			$(".contenedor-convencion").fadeIn('fast');  	
		  }
		  else
		  {
		  	$(".contenedor-convencion").fadeOut('fast');
		  	$(".contenedor-convencion").css('display','none');
		  }
	});	

	/* Funciones TAB clima en vivo partII */
	/* Se esconden todos las opciones por descarte y por ultimo se revela la que realmente
	se quiere mostrar */

	$(".item-clima a").click(function(e){
		var item = $(this).attr("href");

		if( $(item).css("display") == "none" )
		{
			$("#pronostico").hide('fast');
			$("#vista-vivo").hide('fast');
			$("#sensores").hide('fast');
			$("#radar-meterologico").hide('fast');
			$("#temperatura-actual").hide('fast');
			$(".contenedor-convencion").css("display","none");

			$(item).show();
		}
	});


	$(".thumb-camara").click(function(e){
		e.preventDefault();
		var item = $(this).attr("href");

		if( $("#"+item).css("display") == "none" )
		{
			$("#vivo-camara1").hide('fast');
			$("#vivo-camara2").hide('fast');
			$("#vivo-camara3").hide('fast');
			$("#vivo-camara4").hide('fast');

			$(".contenedor-convencion").css('display','none');
			$("#"+item).show('fast');

		}	



	});

	/* Fin de la sección */
	
	/* Inicio: Sección Blog */
	$(".filtro").change(function(){
		if($("#medio-ambiente").is(':checked')){
			if(filtro.indexOf(".category-medio-ambiente") == -1){
				filtro.push(".category-medio-ambiente");
			}			
		}
		else{
			var i = filtro.indexOf(".category-medio-ambiente");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}
		if($("#clima-autos").is(':checked')){
			if(filtro.indexOf(".category-clima-y-autos") == -1){
				filtro.push(".category-clima-y-autos");
			}
		}
		else{
			var i = filtro.indexOf(".category-clima-y-autos");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}
		if($("#clima-ciencia").is(':checked')){
			if(filtro.indexOf(".category-clima-y-ciencia") == -1){
				filtro.push(".category-clima-y-ciencia");
			}
		}
		else{
			var i = filtro.indexOf(".category-clima-y-ciencia");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}	
		if($("#clima-salud").is(':checked')){
			if(filtro.indexOf(".category-clima-y-salud") == -1){
				filtro.push(".category-clima-y-salud");
			}
		}
		else{
			var i = filtro.indexOf(".category-clima-y-salud");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}
		if($("#innovacion-sostenible").is(':checked')){
			if(filtro.indexOf(".category-innovacion-sostenible") == -1){
				filtro.push(".category-innovacion-sostenible");
			}
		}
		else{
			var i = filtro.indexOf(".category-innovacion-sostenible");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}
		if($("#clima-novedades").is(':checked')){
			if(filtro.indexOf(".category-clima-novedades") == -1){
				filtro.push(".category-clima-novedades");
			}
		}
		else{
			var i = filtro.indexOf(".category-clima-novedades");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}
		if($("#prevencion").is(':checked')){
			if(filtro.indexOf(".category-prevencion") == -1){
				filtro.push(".category-prevencion");
			}
		}
		else{
			var i = filtro.indexOf(".category-prevencion");
			if(i != -1){
				filtro.splice(i, 1);
			}			
		}	
		var valor = "", separador = "";
		for(i=0; i<filtro.length; i++){
			
			if(i == 0 || i == filtro.length)
				separador = "";
			else
				separador =", ";

			valor = valor + separador + filtro[i];

		}
		$("#size option[value='"+valor+"']").attr("selected",true).change();
	});

/* URL MANAGER */

	if( window.location.hash )
	{
		var itemHash = window.location.hash;

		if( $(itemHash).css("display") == "none" )
		{
			$("#pronostico").hide('fast');
			$("#vista-vivo").hide('fast');
			$("#sensores").hide('fast');
			$("#radar-meterologico").hide('fast');
			$("#temperatura-actual").hide('fast');
			$(".contenedor-convencion").css("display","none");

			$(itemHash).show();
		}
	}
    /* Fin: Sección Blog */


/* seccion Emisiones */

	$("#m-left").click(function(e){

		e.preventDefault();

		var mes = parseInt( $("#month").val() );

		if(mes == null)
		{
			throw "Mes null";
			return  false;
		}
		else
		{
			if( (mes - 1) == 0 )
			{
				mes = 12;
			}
			else
			{
				mes = mes - 1;
			}

			$("#month").val(mes);
			$("#label-mes").html(meses[mes-1]);

		}

	});


	$("#m-right").click(function(e){

		e.preventDefault();

		var mes = parseInt( $("#month").val() );

		if(mes == null)
		{
			throw "Mes null";
			return  false;
		}
		else
		{
			if( (mes + 1) == 13 )
			{
				mes = 1;
			}
			else
			{
				mes = mes + 1;
			}

			$("#month").val(mes);
			$("#label-mes").html(meses[mes-1]);

		}

	});


	$("#d-left").click(function(e){

		e.preventDefault();

		var dia = parseInt( $("#day").val() );

		if(dia == null)
		{
			throw "Dia null";
			return  false;
		}
		else
		{
			if( (dia - 1) == 0 )
			{
				dia = 31;
			}
			else
			{
				dia = dia - 1;
			}

			$("#day").val(dia);
			$("#label-day").html(dia);

		}

	});




	$("#d-right").click(function(e){

		e.preventDefault();

		var dia = parseInt( $("#day").val() );

		if(dia == null)
		{
			throw "Dia null";
			return  false;
		}
		else
		{
			if( (dia + 1) == 32 )
			{
				dia = 1;
			}
			else
			{
				dia = dia + 1;
			}


			$("#day").val(dia);
			$("#label-day").html(dia);

		}

	});



	$("#y-left").click(function(e){

		e.preventDefault();

		var postYear = parseInt( $("#year").val() );

		if(postYear == null)
		{
			throw "Año null";
			return  false;
		}
		else
		{

			if( (postYear - 1) == 1990 )
			{
				var f = new Date();
				var yActual = f.getFullYear();

				postYear = yActual;
			}
			else
			{
				postYear = postYear - 1;
			}

			$("#year").val(postYear);
			$("#label-year").html(postYear);

		}

	});



	$("#y-right").click(function(e){

		e.preventDefault();

		var postYear = parseInt( $("#year").val() );
		console.log(postYear);

		if(postYear == null)
		{
			throw "Año null";
			return  false;
		}
		else
		{
			var f = new Date();
			var yActual = f.getFullYear();

			if( (postYear + 1) == yActual + 1 )
			{
				postYear = 1991;
			}
			else
			{

				postYear = postYear + 1;
			}

			$("#year").val(postYear);
			$("#label-year").html(postYear);

		}

	});

	$(".btn-tumb").click(function(e){
		e.preventDefault();

		var title 	= $(".emision-tumb-title", this).val();
		var content = $(".emision-tumb-content", this).val();

		$(".page-header h1").html(title);
		$("#videoEmision").html(content);

	});


	/* para insertar datepicker **/
	if( $(".datepicker").length )
	{
		 $(".datepicker").datepicker({
		 	monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
						'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
							'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd/mm/yy'
    	});
	}

	/* Fancy box */
	if( $(".fancybox").length )
	{

		 $(".isotope-item:not(.isotope-hidden) .fancybox")
		 .fancybox({

		      afterLoad   : function() {

			      	var title1 			= $(this.element).attr('title');
			      	var cat 			= $(this.element).attr('cat');
			      	var caption 		= $(this.element).attr('caption');
			      	var tweeterFancy 	= '<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="' + this.href + '">Tweet</a> ';
			      	var facebookFancy 	= '<iframe src="//www.facebook.com/plugins/like.php?href=' + this.href + '&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:23px;" allowTransparency="true"></iframe>';
			      	var pinterestFancy 	= '<a href="http://pinterest.com/pin/create/button/?url='+encodeURIComponent(document.location.href)+'&media='+encodeURIComponent('http://scottgale.com/blogsamples/fancybox-pinterest/'+this.href)+'&description='+title1+'" class="pin-it-button" count-layout="horizontal">'+'<img border="0" src="http://assets.pinterest.com/images/PinExt.png" title="Pin It" align="absmiddle"/></a>';

					this.title      = '<div class="fancybox-custom-footer"><div class="fancybox-custom-footer-izq"><strong>categoria :</strong> '+cat+'<p>'+$(this.element).attr('datePub')+'</p></div>'+
									  '<div class="fancybox-custom-footer-der">'+tweeterFancy+facebookFancy+pinterestFancy+'</div></div>';

		        	this.outer.prepend( '<div class="fancybox-custom-head"><div class="fancybox-custom-head-izq">'+title1+'</div>'+
		        						'<div class="fancybox-custom-head-der">'+caption+'</div></div><div style="clear: both;"></div>' );
		   		 },

		   	 afterShow: function() {
            		// Render tweet button
            		twttr.widgets.load();
        		},

				tpl: { 
						wrap     : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"> <div class="fancybox-inner"></div></div></div></div>',
						image    : '<img class="fancybox-image" src="{href}" alt="" />',
						iframe   : '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"' + ($.browser.msie ? ' allowtransparency="true"' : '') + '></iframe>',
						error    : '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
						closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
						next     : '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
						prev     : '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
				},


		    	helpers : {
		    		title : {
		    			type : 'inside'
		    		}
		    	},


			 minWidth:  600,
    		 minHeight: 300,
    		 maxHeight: 600,


		});
			
	}
	
	


/* fin seccion emisiones */


    /* Twitter Feed */


/*
* ### HOW TO CREATE A VALID ID TO USE: ###
* Go to www.twitter.com and sign in as normal, go to your settings page.
* Go to "Widgets" on the left hand side.
* Create a new widget for what you need eg "user timeline" or "search" etc. 
* Feel free to check "exclude replies" if you dont want replies in results.
* Now go back to settings page, and then go back to widgets page, you should
* see the widget you just created. Click edit.
* Now look at the URL in your web browser, you will see a long number like this:
* 345735908357048478
* Use this as your ID below instead!
*/

/**
 * How to use fetch function:
 * @param {string} Your Twitter widget ID.
 * @param {string} The ID of the DOM element you want to write results to. 
 * @param {int} Optional - the maximum number of tweets you want returned. Must
 *     be a number between 1 and 20.
 * @param {boolean} Optional - set true if you want urls and hash
       tags to be hyperlinked!
 * @param {boolean} Optional - Set false if you dont want user photo /
 *     name for tweet to show.
 * @param {boolean} Optional - Set false if you dont want time of tweet
 *     to show.
 * @param {function/string} Optional - A function you can specify to format
 *     tweet date/time however you like. This function takes a JavaScript date
 *     as a parameter and returns a String representation of that date.
 *     Alternatively you may specify the string 'default' to leave it with
 *     Twitter's default renderings.
 * @param {boolean} Optional - Show retweets or not. Set false to not show.
 * @param {function/string} Optional - A function to call when data is ready. It
 *     also passes the data to this function should you wish to manipulate it
 *     yourself before outputting. If you specify this parameter you  must
 *     output data yourself!
 * @param {boolean} Optional - Show links for reply, retweet, favourite. Set false to not show.
 */
twitterFetcher.fetch('419151083726856193', '', 5, true, true, true, '', false, handleTweets, false);

function handleTweets(tweets){
    var x = tweets.length;
    var n = 0;
    //var element = document.getElementById('twitter-feed');
    //var html = '';
    while(n < x) {
      html += tweets[n];
      n++;
    }
    $('.marquee-twitter').html(html);

	$('.marquee-twitter').marquee({
		speed: 15000,
		pauseOnHover: true,
		duplicated: true,
		gap: 50
	});      
    //element.innerHTML = html;
}
	  
    /* Fin Twitter Feed */

    /*
    	@author Pablo Martinez
    	Funcion para paginar y filtrar resultados de los blogs
    */
    $('.more-post a').on('click', getBlog);
    /* Paginador galerila */

    $('.more-post-gallery a').on('click', getGallery);

    	/* tarer galeria por fecha */
   $('.bar-fecha-control-2 #ir-fecha').on('click', getGalleryPerDate);
 

});

function getBlog(event)
{
		var pag = parseInt( jQuery("#pagina").attr('rel') );

		if(pag >= 1)
		{
				pag = pag+1;

				jQuery.ajax({
					type: "GET",
					url: "../wp-admin/admin-ajax.php",
					data: {
							'action' : 'getBlog', 'paged':pag
						},
				})
				.done(function(data) {

					if(data == "")
					{
						throw "No results";
					}
					else
					{
						/*
							volvemos a recostruir el isotope para 
							que me tome nuevos cambios
						*/

						var container = jQuery('#main-articulos');
						container.append(data);
					//	jQuery($container).isotope( 'reLayout');
						jQuery("#pagina").attr('rel',pag);
						container.isotope('destroy');
						//container.isotope( 'reLayout');
	
						// initialize isotope
						container.isotope({
							animationOptions: {
								itemSelector : '.categorias',
								duration: 500000,
								easing: 'linear',
								queue: false

							},
							layoutMode: 'fitRows'
						});
					}
					
					jQuery(".filtro").removeAttr("checked");
					
				})
				.fail(function() {
					
					throw "Error,no results";
				});
		}
		else
		{
			return false;
		}
}





function getGallery(event)
{
		var pag = parseInt( jQuery("#pagina").attr('rel') );

		if(pag >= 1)
		{
				pag = pag+1;

				jQuery.ajax({
					type: "GET",
					url: "../wp-admin/admin-ajax.php",
					data: {
							'action' : 'getGallery', 'paged':pag
						},
				})
				.done(function(data) {

					if(data == "")
					{
						throw "No results";
					}
					else
					{
						/*
							volvemos a recostruir el isotope para 
							que me tome nuevos cambios
						*/

						var container = jQuery('#main-articulos');
						container.append(data);
						jQuery("#pagina").attr('rel',pag);
						container.isotope('destroy');
	
						// initialize isotope
						container.isotope({
							animationOptions: {
								itemSelector : '.categorias',
								duration: 500000,
								easing: 'linear',
								queue: false

							},
							layoutMode: 'fitRows'
						});
					}
					
					jQuery(".filtro").removeAttr("checked");
					
				})
				.fail(function() {
					
					throw "Error,no results";
				});
		}
		else
		{
			return false;
		}
}


function getGalleryPerDate(event)
{

		var date = jQuery(".datepicker").val();

		if( date.length )
		{
				jQuery.ajax({
					type: "GET",
					url: "../wp-admin/admin-ajax.php",
					data: {
							'action' : 'getGalleryPerDate', 'date' : date 
						},
				})
				.done(function(data) {

					if(data == "")
					{
						alert('No se encontraron resultados para esta fecha');
						jQuery(".datepicker").val("");
						throw "No results";
						return false;
					}
					else
					{
						var container = jQuery('#main-articulos');
						container.html(data);
						container.isotope('destroy');
						jQuery("#pagina").attr('rel',0);


						container.isotope({
							animationOptions: {
								itemSelector : '.categorias',
								duration: 500000,
								easing: 'linear',
								queue: false

							},
							layoutMode: 'fitRows'
						});
					}
					
					jQuery(".filtro").removeAttr("checked");
					
				})
				.fail(function() {
					
					throw "Error,no results";
				});
		}
		else
		{
			return false;
		}
}


function notIsotopeActive()
{
	items 	= new Array();

	jQuery( "#main-articulos .isotope-item:not(.isotope-hidden)" ).each(function(index){

			items[index]  =   jQuery('.fancybox', this ).attr('href');
	});

	return items;
}
