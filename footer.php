<?php
/**
* @package WordPress
* @subpackage Medium WP
*/
?>
<footer class="container-fluid">
    <section>
        <div class="content">

<!--  <p class="copyright">
<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a><br/>
<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">© 2013 </span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://plus.google.com/u/1/117772548638325354735" property="cc:attributionName" rel="cc:attributionURL author">Huxley Dias</a> é licenciado sob a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>
<span>Desenvolvido com <a href="http://wordpress.org" alt="Wordpress" Target="_blank">Wordpress</a>.</span></p>

</div> -->
</section> 
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
    jQuery('.story-cover-arrow').click(function(){
        jQuery('html, body').animate({scrollTop: jQuery('.main').offset().top + 0}, 1000);
        jquery.('.crumb-category').click(function(){
            _gaq.push(['_trackEvent', 'Breadcrumb', 'Voltar para home']);
        });
    });
</script>
<script type="text/javascript">
var _gas = _gas || [];
_gas.push(['_setAccount', 'UA-42679711-1']); 
_gas.push(['_setDomainName', '.huxleydias.com.br']); 
_gas.push(['_trackPageview']);
_gas.push(['_gasTrackForms']);
_gas.push(['_gasTrackOutboundLinks']);
_gas.push(['_gasTrackMaxScroll']);
_gas.push(['_gasTrackDownloads']);
_gas.push(['_gasTrackYoutube', {force: true}]);
_gas.push(['_gasTrackVimeo', {force: true}]);
_gas.push(['_gasTrackMailto']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = '//cdnjs.cloudflare.com/ajax/libs/gas/1.10.1/gas.min.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript">
var _kmq = _kmq || [];
var _kmk = _kmk || '4084bbb11d92d2eb094cc4ad462ad918c10e11ba';
function _kms(u){
    setTimeout(function(){
        var d = document, f = d.getElementsByTagName('script')[0],
        s = d.createElement('script');
        s.type = 'text/javascript'; s.async = true; s.src = u;
        f.parentNode.insertBefore(s, f);
    }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
</script>
<!-- Start of Woopra Code -->
<script>
(function(){
    var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
})("woopra");

woopra.config({
    domain: 'huxleydias.com.br'
});
woopra.track();
/* Place this on a template where a customer initially is identified
or after authentication. (Important: Update these values) */

woopra.identify({
    email: '{{ account.email }}',
    name: '{{ account.name }}',
    company: '{{ account.company }}'
});

// The identify code should be added before the "track()" function
woopra.track();
</script>
<!-- start Mixpanel -->
<script type="text/javascript">
(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
    typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
    b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
    mixpanel.init("YOUR TOKEN");
</script>
<!-- end Mixpanel -->
<!-- End of Woopra Code -->
