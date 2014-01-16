/*********************************************************************
*  #### Twitter Post Fetcher v10.0 ####
*  Coded by Jason Mayes 2013. A present to all the developers out there.
*  www.jasonmayes.com
*  Please keep this disclaimer with my code if you use it. Thanks. :-)
*  Got feedback or questions, ask here: 
*  http://www.jasonmayes.com/projects/twitterApi/
*  Updates will be posted to this site.
*********************************************************************/

var html = "";

var twitterFetcher=function(){function x(e){return e.replace(/<b[^>]*>(.*?)<\/b>/gi,function(c,e){return e}).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function p(e,c){for(var g=[],f=RegExp("(^| )"+c+"( |$)"),a=e.getElementsByTagName("*"),h=0,d=a.length;h<d;h++)f.test(a[h].className)&&g.push(a[h]);return g}var y="",l=20,s=!0,k=[],t=!1,q=!0,r=!0,u=null,v=!0,z=!0,w=null,A=!0;return{fetch:function(e,c,g,f,a,h,d,b,m,n){void 0===g&&(g=20);void 0===f&&(s=!0);void 0===a&&(a=
!0);void 0===h&&(h=!0);void 0===d&&(d="default");void 0===b&&(b=!0);void 0===m&&(m=null);void 0===n&&(n=!0);t?k.push({id:e,domId:c,maxTweets:g,enableLinks:f,showUser:a,showTime:h,dateFunction:d,showRt:b,customCallback:m,showInteraction:n}):(t=!0,y=c,l=g,s=f,r=a,q=h,z=b,u=d,w=m,A=n,c=document.createElement("script"),c.type="text/javascript",c.src="//cdn.syndication.twimg.com/widgets/timelines/"+e+"?&lang=en&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+Math.random(),document.getElementsByTagName("head")[0].appendChild(c))},
callback:function(e){var c=document.createElement("div");c.innerHTML=e.body;"undefined"===typeof c.getElementsByClassName&&(v=!1);e=[];var g=[],f=[],a=[],h=[],d=0;if(v)for(c=c.getElementsByClassName("tweet");d<c.length;){0<c[d].getElementsByClassName("retweet-credit").length?a.push(!0):a.push(!1);if(!a[d]||a[d]&&z)e.push(c[d].getElementsByClassName("e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(c[d].getElementsByClassName("p-author")[0]),f.push(c[d].getElementsByClassName("dt-updated")[0]);
d++}else for(c=p(c,"tweet");d<c.length;)e.push(p(c[d],"e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(p(c[d],"p-author")[0]),f.push(p(c[d],"dt-updated")[0]),0<p(c[d],"retweet-credit").length?a.push(!0):a.push(!1),d++;e.length>l&&(e.splice(l,e.length-l),g.splice(l,g.length-l),f.splice(l,f.length-l),a.splice(l,a.length-l));c=[];d=e.length;for(a=0;a<d;){if("string"!==typeof u){var b=new Date(f[a].getAttribute("datetime").replace(/-/g,"/").replace("T"," ").split("+")[0]),b=u(b);
f[a].setAttribute("aria-label",b);if(e[a].innerText)if(v)f[a].innerText=b;else{var m=document.createElement("p"),n=document.createTextNode(b);m.appendChild(n);m.setAttribute("aria-label",b);f[a]=m}else f[a].textContent=b}b="";s?(r&&(b+=''),b+='<p class="tweet">'+x(e[a].innerHTML)+"</p><span class='separador'></span>",q&&(b+='')):e[a].innerText?(r&&(b+=''),b+='<p class="tweet">'+e[a].innerText+
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
 (function(e){e.fn.marquee=function(t){return this.each(function(){function d(e){var t=[];for(var n in e){if(e.hasOwnProperty(n)){t.push(n+":"+e[n])}}t.push();return"{"+t.join(",")+"}"}function v(){if(l&&n.allowCss3Support){return i.css(f,"paused")}if(e.fn.pause){i.pause();r.trigger("paused")}}function m(){if(l&&n.allowCss3Support){return i.css(f,"running")}if(e.fn.resume){i.resume();r.trigger("resumed")}}var n=e.extend({},e.fn.marquee.defaults,t),r=e(this),i,s,o,u,a,f="animation-play-state",l=false;if(typeof r.data().delaybeforestart!=="undefined"){r.data().delayBeforeStart=r.data().delaybeforestart;delete r.data().delaybeforestart}if(typeof r.data().pauseonhover!=="undefined"){r.data().pauseOnHover=r.data().pauseonhover;delete r.data().pauseonhover}if(typeof r.data().pauseoncycle!=="undefined"){r.data().pauseOnCycle=r.data().pauseoncycle;delete r.data().pauseoncycle}if(typeof r.data().allowcss3support!=="undefined"){r.data().allowCss3Support=r.data().allowcss3support;delete r.data().allowcss3support}n=e.extend({},n,r.data());n.duration=n.speed||n.duration;u=n.direction=="up"||n.direction=="down";n.gap=n.duplicated?n.gap:0;r.wrapInner('<div class="js-marquee"></div>');var c=r.find(".js-marquee").css({"margin-right":n.gap,"float":"left"});if(n.duplicated){c.clone().appendTo(r)}r.wrapInner('<div style="width:100000px" class="js-marquee-wrapper"></div>');i=r.find(".js-marquee-wrapper");if(u){var h=r.height();i.removeAttr("style");r.height(h);r.find(".js-marquee").css({"float":"none","margin-bottom":n.gap,"margin-right":0});if(n.duplicated)r.find(".js-marquee:last").css({"margin-bottom":0});var p=r.find(".js-marquee:first").height()+n.gap;n.duration=(parseInt(p,10)+parseInt(h,10))/parseInt(h,10)*n.duration}else{a=r.find(".js-marquee:first").width()+n.gap;s=r.width();n.duration=(parseInt(a,10)+parseInt(s,10))/parseInt(s,10)*n.duration}if(n.duplicated){n.duration=n.duration/2}if(n.allowCss3Support){var g=document.createElement("div"),y="animation",b="marqueeAnimation-"+Math.floor(Math.random()*1e7),w="Webkit Moz O ms Khtml".split(" "),E="",S="",x=e("style"),T="";if(g.style.animationCssStr){l=true}if(l===false){for(var N=0;N<w.length;N++){if(g.style[w[N]+"AnimationName"]!==undefined){var C="-"+w[N].toLowerCase()+"-";E=C+"animation";f=C+f;T="@"+C+"keyframes "+b+" ";l=true;break}}}if(l){S=b+" "+n.duration/1e3+"s "+n.delayBeforeStart/1e3+"s infinite "+n.css3easing;}}var k=function(){if(u){if(n.duplicated){i.css("margin-top",n.direction=="up"?0:"-"+p+"px");o={"margin-top":n.direction=="up"?"-"+p+"px":0}}else{i.css("margin-top",n.direction=="up"?h+"px":"-"+p+"px");o={"margin-top":n.direction=="up"?"-"+i.height()+"px":h+"px"}}}else{if(n.duplicated){i.css("margin-left",n.direction=="left"?0:"-"+a+"px");o={"margin-left":n.direction=="left"?"-"+a+"px":0}}else{i.css("margin-left",n.direction=="left"?s+"px":"-"+a+"px");o={"margin-left":n.direction=="left"?"-"+a+"px":s+"px"}}}r.trigger("beforeStarting");if(l){i.css(E,S);var t=T+" { 100%  "+d(o)+"}";if(x.length!=0){x.last().append(t)}else{e("head").append("<style>"+t+"</style>")}}else{i.animate(o,n.duration,n.easing,function(){r.trigger("finished");if(n.pauseOnCycle){setTimeout(k,n.delayBeforeStart)}else{k()}})}};r.bind("pause",v);r.bind("resume",m);if(n.pauseOnHover){r.hover(v,m)}if(l&&n.allowCss3Support){k()}else{setTimeout(k,n.delayBeforeStart)}})};e.fn.marquee.defaults={allowCss3Support:true,css3easing:"linear",easing:"linear",delayBeforeStart:0,direction:"left",duplicated:false,duration:5e3,gap:20,pauseOnCycle:false,pauseOnHover:false}})(jQuery)



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

// as the page loads, call these scripts
jQuery(document).ready(function($) {

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

	$("#btnMostrarRadarMeteorologico").click(function(e){
		e.preventDefault();
		$("#pronostico").fadeOut();
		$("#vista-vivo").fadeOut();
		$("#sensores").fadeOut();
		$("#radar-meterologico").fadeIn(1000);
	});	

	$("#btnMostrarPronosticoTemperatura").click(function(e){
		e.preventDefault();
		$("#radar-meterologico").fadeOut();
		$("#vista-vivo").fadeOut();
		$("#sensores").fadeOut();
		$("#pronostico").fadeIn(1000);
	});

	$("#btnMostrarVistaVivo").click(function(e){
		e.preventDefault();
		$("#radar-meterologico").fadeOut();
		$("#pronostico").fadeOut();
		$("#sensores").fadeOut();
		$("#vista-vivo").fadeIn(1000);
	});

	$("#btnMostrarSensores").click(function(e){
		e.preventDefault();
		$("#radar-meterologico").fadeOut();
		$("#pronostico").fadeOut();
		$("#vista-vivo").fadeOut();
		$("#sensores").fadeIn(1000);
	});	

	$("#btnMostrarCam1").click(function(e){
		e.preventDefault();
		$("#vivo-camara4").fadeOut();
		$("#vivo-camara3").fadeOut();
		$("#vivo-camara2").fadeOut();
		$("#vivo-camara1").fadeIn(1500);
	});

	$("#btnMostrarCam2").click(function(e){
		e.preventDefault();
		$("#vivo-camara4").fadeOut();
		$("#vivo-camara3").fadeOut();
		$("#vivo-camara1").fadeOut();
		$("#vivo-camara2").fadeIn(1500);
	});

	$("#btnMostrarCam3").click(function(e){
		e.preventDefault();
		$("#vivo-camara4").fadeOut();
		$("#vivo-camara2").fadeOut();
		$("#vivo-camara1").fadeOut();
		$("#vivo-camara3").fadeIn(1500);
	});	

	$("#btnMostrarCam4").click(function(e){
		e.preventDefault();
		$("#vivo-camara2").fadeOut();
		$("#vivo-camara3").fadeOut();
		$("#vivo-camara1").fadeOut();
		$("#vivo-camara4").fadeIn(1500);
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
    /* Fin: Sección Blog */

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
		speed: 10000,
		pauseOnHover: true,
		gap: 50
	});      
    //element.innerHTML = html;
}
	  
    /* Fin Twitter Feed */
});
