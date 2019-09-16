<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8"><script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function(e, n, t){function r(t){if (!n[t]){var o = n[t] = {exports:{}}; e[t][0].call(o.exports, function(n){var o = e[t][1][n]; return r(o || n)}, o, o.exports)}return n[t].exports}if ("function" == typeof __nr_require)return __nr_require; for (var o = 0; o < t.length; o++)r(t[o]); return r}({1:[function(e, n, t){function r(){}function o(e, n, t){return function(){return i(e, [c.now()].concat(u(arguments)), n?null:this, t), n?void 0:this}}var i = e("handle"), a = e(3), u = e(4), f = e("ee").get("tracer"), c = e("loader"), s = NREUM; "undefined" == typeof window.newrelic && (newrelic = s); var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], d = "api-", l = d + "ixn-"; a(p, function(e, n){s[n] = o(d + n, !0, "api")}), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function(){return(new r).get()}; var m = r.prototype = {createTracer:function(e, n){var t = {}, r = this, o = "function" == typeof n; return i(l + "tracer", [c.now(), e, t], r), function(){if (f.emit((o?"":"no-") + "fn-start", [c.now(), r, o], t), o)try{return n.apply(this, arguments)} catch (e){throw f.emit("fn-err", [arguments, this, e], t), e} finally{f.emit("fn-end", [c.now()], t)}}}}; a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n){m[n] = o(l + n)}), newrelic.noticeError = function(e){"string" == typeof e && (e = new Error(e)), i("err", [e, c.now()])}}, {}], 2:[function(e, n, t){function r(e, n){if (!o)return!1; if (e !== o)return!1; if (!n)return!0; if (!i)return!1; for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)if (r[a] !== t[a])return!1; return!0}var o = null, i = null, a = /Version\/(\S+)\s+Safari/; if (navigator.userAgent){var u = navigator.userAgent, f = u.match(a); f && u.indexOf("Chrome") === - 1 && u.indexOf("Chromium") === - 1 && (o = "Safari", i = f[1])}n.exports = {agent:o, version:i, match:r}}, {}], 3:[function(e, n, t){function r(e, n){var t = [], r = "", i = 0; for (r in e)o.call(e, r) && (t[i] = n(r, e[r]), i += 1); return t}var o = Object.prototype.hasOwnProperty; n.exports = r}, {}], 4:[function(e, n, t){function r(e, n, t){n || (n = 0), "undefined" == typeof t && (t = e?e.length:0); for (var r = - 1, o = t - n || 0, i = Array(o < 0?0:o); ++r < o; )i[r] = e[n + r]; return i}n.exports = r}, {}], 5:[function(e, n, t){n.exports = {exists:"undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart}}, {}], ee:[function(e, n, t){function r(){}function o(e){function n(e){return e && e instanceof r?e:e?f(e, u, i):i()}function t(t, r, o, i){if (!d.aborted || i){e && e(t, r, o); for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++)u[c].apply(a, r); var p = s[y[t]]; return p && p.push([b, t, r, a]), a}}function l(e, n){h[e] = v(e).concat(n)}function m(e, n){var t = h[e]; if (t)for (var r = 0; r < t.length; r++)t[r] === n && t.splice(r, 1)}function v(e){return h[e] || []}function g(e){return p[e] = p[e] || o(t)}function w(e, n){c(e, function(e, t){n = n || "feature", y[t] = n, n in s || (s[n] = [])})}var h = {}, y = {}, b = {on:l, addEventListener:l, removeEventListener:m, emit:t, get:g, listeners:v, context:n, buffer:w, abort:a, aborted:!1}; return b}function i(){return new r}function a(){(s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})}var u = "nr@context", f = e("gos"), c = e(3), s = {}, p = {}, d = n.exports = o(); d.backlog = s}, {}], gos:[function(e, n, t){function r(e, n, t){if (o.call(e, n))return e[n]; var r = t(); if (Object.defineProperty && Object.keys)try{return Object.defineProperty(e, n, {value:r, writable:!0, enumerable:!1}), r} catch (i){}return e[n] = r, r}var o = Object.prototype.hasOwnProperty; n.exports = r}, {}], handle:[function(e, n, t){function r(e, n, t, r){o.buffer([e], r), o.emit(e, n, t)}var o = e("ee").get("handle"); n.exports = r, r.ee = o}, {}], id:[function(e, n, t){function r(e){var n = typeof e; return!e || "object" !== n && "function" !== n? - 1:e === window?0:a(e, i, function(){return o++})}var o = 1, i = "nr@id", a = e("gos"); n.exports = r}, {}], loader:[function(e, n, t){function r(){if (!E++){var e = x.info = NREUM.info, n = l.getElementsByTagName("script")[0]; if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n))return s.abort(); c(y, function(n, t){e[n] || (e[n] = t)}), f("mark", ["onload", a() + x.offset], null, "api"); var t = l.createElement("script"); t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)}}function o(){"complete" === l.readyState && i()}function i(){f("mark", ["domContent", a() + x.offset], null, "api")}function a(){return O.exists && performance.now?Math.round(performance.now()):(u = Math.max((new Date).getTime(), u)) - x.offset}var u = (new Date).getTime(), f = e("handle"), c = e(3), s = e("ee"), p = e(2), d = window, l = d.document, m = "addEventListener", v = "attachEvent", g = d.XMLHttpRequest, w = g && g.prototype; NREUM.o = {ST:setTimeout, SI:d.setImmediate, CT:clearTimeout, XHR:g, REQ:d.Request, EV:d.Event, PR:d.Promise, MO:d.MutationObserver}; var h = "" + location, y = {beacon:"bam.nr-data.net", errorBeacon:"bam.nr-data.net", agent:"js-agent.newrelic.com/nr-1099.min.js"}, b = g && w && w[m] && !/CriOS/.test(navigator.userAgent), x = n.exports = {offset:u, now:a, origin:h, features:{}, xhrWrappable:b, userAgent:p}; e(1), l[m]?(l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)):(l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api"); var E = 0, O = e(5)}, {}]}, {}, ["loader"]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="pingback" href="https://colorlib.com/shapely/xmlrpc.php">

        <title>CooperCred</title>
        <script>window._wca = window._wca || [];</script>

        <!-- This site is optimized with the Yoast SEO plugin v9.0 - https://yoast.com/wordpress/plugins/seo/ -->
        <link rel="canonical" href="https://colorlib.com/shapely/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Front Page - Shapely Demo" />
        <meta property="og:url" content="https://colorlib.com/shapely/" />
        <meta property="og:site_name" content="Shapely Demo" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Front Page - Shapely Demo" />
        <meta name="twitter:creator" content="@ASilkalns" />
        <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/colorlib.com\/shapely\/","name":"Shapely Demo","potentialAction":{"@type":"SearchAction","target":"https:\/\/colorlib.com\/shapely\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
        <!-- / Yoast SEO plugin. -->

        <link rel='dns-prefetch' href='//s0.wp.com' />
        <link rel='dns-prefetch' href='//secure.gravatar.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="Shapely Demo &raquo; Feed" href="https://colorlib.com/shapely/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Shapely Demo &raquo; Comments Feed" href="https://colorlib.com/shapely/comments/feed/" />
        <!-- This site uses the Google Analytics by MonsterInsights plugin v7.2.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
        <script type="text/javascript" data-cfasync="false">
            var mi_version = '7.2.0';
            var mi_track_user = true;
            var mi_no_track_reason = '';
            var disableStr = 'ga-disable-UA-23581568-13';
            /* Function to detect opted out users */
            function __gaTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > - 1;
            }

            /* Disable tracking if the opt-out cookie exists. */
            if (__gaTrackerIsOptedOut()) {
            window[disableStr] = true;
            }

            /* Opt-out function */
            function __gaTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
            }

            if (mi_track_user) {
            (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){
            (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');
            window.ga = __gaTracker; __gaTracker('create', 'UA-23581568-13', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('set', 'anonymizeIp', true);
            __gaTracker('set', 'displayFeaturesTask', null);
            __gaTracker('send', 'pageview');
            } else {
            console.log("");
            (function() {
            /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
            var noopfn = function() {
            return null;
            };
            var noopnullfn = function() {
            return null;
            };
            var Tracker = function() {
            return null;
            };
            var p = Tracker.prototype;
            p.get = noopfn;
            p.set = noopfn;
            p.send = noopfn;
            var __gaTracker = function() {
            var len = arguments.length;
            if (len === 0) {
            return;
            }
            var f = arguments[len - 1];
            if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
            console.log('Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason);
            return;
            }
            try {
            f.hitCallback();
            } catch (ex) {

            }
            };
            __gaTracker.create = function() {
            return new Tracker();
            };
            __gaTracker.getByName = noopnullfn;
            __gaTracker.getAll = function() {
            return [];
            };
            __gaTracker.remove = noopfn;
            window['__gaTracker'] = __gaTracker;
            window.ga = __gaTracker; })();
            }
        </script>
        <!-- / Google Analytics by MonsterInsights -->
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/", "ext":".png", "svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/", "svgExt":".svg", "source":{"concatemoji":"https:\/\/colorlib.com\/shapely\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
            !function(a, b, c){function d(a, b){var c = String.fromCharCode; l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0); var d = k.toDataURL(); l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0); var e = k.toDataURL(); return d === e}function e(a){var b; if (!l || !l.fillText)return!1; switch (l.textBaseline = "top", l.font = "600 32px Arial", a){case"flag":return!(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b); case"emoji":return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b}return!1}function f(a){var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)}var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d"); for (j = Array("flag", "emoji"), c.supports = {everything:!0, everythingExceptFlag:!0}, i = 0; i < j.length; i++)c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.everything || (h = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)):(a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function(){"complete" === b.readyState && c.readyCallback()})), g = c.source || {}, g.concatemoji?f(g.concatemoji):g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <link rel='stylesheet' id='contact-form-7-css'  href='https://cdn.colorlib.com/shapely/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'  href='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.4.7' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.4.7' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'  href='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.4.7' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required { visibility: visible; }
        </style>
        <link rel='stylesheet' id='bootstrap-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/css/bootstrap.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/css/font-awesome.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='shapely-fonts-css'  href='//fonts.googleapis.com/css?family=Raleway%3A100%2C300%2C400%2C500%2C600%2C700%7COpen+Sans%3A400%2C500%2C600&#038;ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/css/flexslider.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='shapely-style-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/style.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='owl.carousel-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/owl-carousel/owl.carousel.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='owl.carousel.theme-css'  href='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/owl-carousel/owl.theme.default.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='jetpack_css-css'  href='https://cdn.colorlib.com/shapely/wp-content/plugins/jetpack/css/jetpack.css?ver=6.6.1' type='text/css' media='all' />
        <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
        <link rel='https://api.w.org/' href='https://colorlib.com/shapely/wp-json/' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://colorlib.com/shapely/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cdn.colorlib.com/shapely/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.9.8" />
        <meta name="generator" content="WooCommerce 3.4.7" />
        <link rel='shortlink' href='https://wp.me/P7gK7P-u3' />
        <link rel="alternate" type="application/json+oembed" href="https://colorlib.com/shapely/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcolorlib.com%2Fshapely%2F" />
        <link rel="alternate" type="text/xml+oembed" href="https://colorlib.com/shapely/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcolorlib.com%2Fshapely%2F&#038;format=xml" />

        <link rel='dns-prefetch' href='//v0.wordpress.com'/>
        <style type='text/css'>img#wpstats{display:none}</style><style type="text/css"></style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
        <meta name="onesignal" content="wordpress-plugin"/>
        <link rel="manifest"  href="https://colorlib.com/shapely/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/manifest.json.php?gcm_sender_id="/>
    </head>
    <!--     ###################################################################################################################################  -->
    <body class="home page-template page-template-page-templates page-template-template-home page-template-page-templatestemplate-home-php">
      <div>
    		<section class="cover fullscreen image-bg">
          <div class="parallax-window fullscreen" data-parallax="scroll" data-image-src="https://portal.eventto.com.br/images/background.jpg" data-ios-fix="true" data-over-scroll-fix="true" data-android-fix="true">
            <div class="text-right">
              <a class="btn btn-white" href="login-socios.php">LOGIN</a>
            </div>
            <div width="100%" height="500" align="center" valign="center">
              <img align="center" valign="center" src="img\logo.png" width="300px" height="300px">
            </div>
            <div>
              <div class="row allax-section">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                  <h1>Seja bem vindo ao sistema de cadastro da "Nome da Empresa"</h1>
                  <div class="mb32">
                    <p>Você já é cliente ou deseja se tornar um?</p>
                  </div>
                  <a class="btn btn-lg btn-white" href="cadastro-cliente.php">Já Sou Cliente</a>
                  <a class="btn btn-lg btn-filled" href="cadastro-futuro-clientes.php">Quero me tornar um</a>
              	</div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--     ###################################################################################################################################  -->
      <script type="text/javascript">
          var c = document.body.className;
          c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
          document.body.className = c;
      </script>
      <script type='text/javascript'>
          /* <![CDATA[ */
          var wpcf7 = {"apiSettings":{"root":"https:\/\/colorlib.com\/shapely\/wp-json\/contact-form-7\/v1", "namespace":"contact-form-7\/v1"}, "recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
          /* ]]> */
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
      <script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201843'></script>
      <script type='text/javascript'>
      var wc_add_to_cart_params = {"ajax_url":"\/shapely\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shapely\/?wc-ajax=%%endpoint%%", "i18n_view_cart":"View cart", "cart_url":"https:\/\/colorlib.com\/shapely\/cart\/", "is_cart":"", "cart_redirect_after_add":"no"};
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.7'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
      <script type='text/javascript'>
      var woocommerce_params = {"ajax_url":"\/shapely\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shapely\/?wc-ajax=%%endpoint%%"};
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.7'></script>
      <script type='text/javascript'>
      var wc_cart_fragments_params = {"ajax_url":"\/shapely\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shapely\/?wc-ajax=%%endpoint%%", "cart_hash_key":"wc_cart_hash_65013fbd5d1b54c33511019fbdf30268", "fragment_name":"wc_fragments_65013fbd5d1b54c33511019fbdf30268"};
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.7'></script>
      <script type='text/javascript'>
      jQuery('body').bind('wc_fragments_refreshed', function() {
      jQuery('body').trigger('jetpack-lazy-images-load');
      });</script>
      <script type='text/javascript' src='https://secure.gravatar.com/js/gprofiles.js?ver=2018Octaa'></script>
      <script type='text/javascript'>
      var WPGroHo = {"my_hash":""};
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.9.8'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/skip-link-focus-fix.js?ver=20160115'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/masonry.min.js?ver=3.3.2'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.1'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/parallax.min.js?ver=20160115'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/owl-carousel/owl.carousel.min.js?ver=20160115'></script>
      <script type='text/javascript'>
      var ShapelyAdminObject = {"sticky_header":"1"};
      </script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-content/themes/shapely/assets/js/shapely-scripts.js?ver=20180423'></script>
      <script type='text/javascript' src='https://cdn.colorlib.com/shapely/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
      <script type='text/javascript' src='https://stats.wp.com/e-201843.js' async='async' defer='defer'></script>
      <script type='text/javascript'>
      _stq = window._stq || [];
      _stq.push([ 'view', {v:'ext', j:'1:6.6.1', blog:'107424909', post:'1863', tz:'0', srv:'colorlib.com'} ]);
      _stq.push([ 'clickTrackerInit', '107424909', '1863' ]);</script>
      <script type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = {"beacon":"bam.nr-data.net", "licenseKey":"155b0a1326", "applicationID":"62323057", "transactionName":"YABaYkFQXkBZW0JYWVlKeVVHWF9dF0xTXEZbBExTHllfXl0=", "queueTime":0, "applicationTime":603, "atts":"TEdZFAlKTU4=", "errorBeacon":"bam.nr-data.net", "agent":""}</script></body>
</html>
