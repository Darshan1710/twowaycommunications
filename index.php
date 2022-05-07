<!DOCTYPE html>
<html lang=en-US class=no-js>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<link rel=profile href=http://gmpg.org/xfn/11>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script data-cfasync=false>var Arrive=function(c,e,w){"use strict";if(c.MutationObserver&&"undefined"!=typeof HTMLElement){var r,t,a=0,u=(r=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&r.call(e,t)},addMethod:function(e,t,r){var a=e[t];e[t]=function(){return r.length==arguments.length?r.apply(this,arguments):"function"==typeof a?a.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var r,a=0;r=e[a];a++)r&&r.callback&&r.callback.call(r.elem,r.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,r,a){for(var i,n=0;i=e[n];n++)r(i,t,a)&&a.push({callback:t.callback,elem:i}),0<i.childNodes.length&&u.checkChildNodesRecursively(i.childNodes,t,r,a)},mergeArrays:function(e,t){var r,a={};for(r in e)e.hasOwnProperty(r)&&(a[r]=e[r]);for(r in t)t.hasOwnProperty(r)&&(a[r]=t[r]);return a},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==c||(e=[e]),e}}),d=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,r,a){var i={target:e,selector:t,options:r,callback:a,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,r=this._eventsBucket.length-1;t=this._eventsBucket[r];r--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var a=this._eventsBucket.splice(r,1);a&&a.length&&(a[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),o=function(i,n){var o=new d,l=this,s={fireOnAttributesModification:!1};return o.beforeAdding(function(t){var e,r=t.target;r!==c.document&&r!==c||(r=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var a=i(t.options);e.observe(r,a),t.observer=e,t.me=l}),o.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,r){t=u.mergeArrays(s,t);for(var a=u.toElementsArray(this),i=0;i<a.length;i++)o.addEvent(a[i],e,t,r)},this.unbindEvent=function(){var r=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<r.length;t++)if(this===w||e.target===r[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(r){var e,a=u.toElementsArray(this),i=r;e="function"==typeof r?function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.selector===r)return!0;return!1},o.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(r,a){var i=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===r&&e.callback===a)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,r){return!(!u.matchesSelector(e,t.selector)||(e._id===w&&(e._id=a++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var c=(i=new o(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,r=e.target,a=[];null!==t&&0<t.length?u.checkChildNodesRecursively(t,i,n,a):"attributes"===e.type&&n(r,i)&&a.push({callback:i.callback,elem:r}),u.callCallbacks(a,i)})})).bindEvent;return i.bindEvent=function(e,t,r){t=void 0===r?(r=t,s):u.mergeArrays(s,t);var a=u.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<a.length;n++)for(var o=a[n].querySelectorAll(e),l=0;l<o.length;l++)i.push({callback:r,elem:o[l]});if(t.onceOnly&&i.length)return r.call(i[0].elem,i[0].elem);setTimeout(u.callCallbacks,1,i)}c.call(this,e,t,r)},i},l=new function(){var a={};function i(e,t){return u.matchesSelector(e,t.selector)}var n=(l=new o(function(){return{childList:!0,subtree:!0}},function(e,a){e.forEach(function(e){var t=e.removedNodes,r=[];null!==t&&0<t.length&&u.checkChildNodesRecursively(t,a,i,r),u.callCallbacks(r,a)})})).bindEvent;return l.bindEvent=function(e,t,r){t=void 0===r?(r=t,a):u.mergeArrays(a,t),n.call(this,e,t,r)},l};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(l,n,"unbindAllLeave"),n}function s(e,t,r){u.addMethod(t,r,e.unbindEvent),u.addMethod(t,r,e.unbindEventWithSelectorOrCallback),u.addMethod(t,r,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=l.bindEvent,s(l,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var r=new Image;r.onload=function(){ewww_webp_supported=0<r.width&&0<r.height,t(ewww_webp_supported)},r.onerror=function(){t(!1)},r.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){if(e){for(var t=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,a=t.length;r<a;r++)ewwwAttr(t[r],"data-src",t[r].getAttribute("data-webp")),ewwwAttr(t[r],"data-thumbnail",t[r].getAttribute("data-webp-thumbnail"));for(r=0,a=(n=document.querySelectorAll(".rev_slider ul li")).length;r<a;r++){ewwwAttr(n[r],"data-thumb",n[r].getAttribute("data-webp-thumb"));for(var i=1;i<11;)ewwwAttr(n[r],"data-param"+i,n[r].getAttribute("data-webp-param"+i)),i++}var n;for(r=0,a=(n=document.querySelectorAll(".rev_slider img")).length;r<a;r++)ewwwAttr(n[r],"data-lazyload",n[r].getAttribute("data-webp-lazyload"));var o=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,a=o.length;r<a;r++)ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"))}var l=document.querySelectorAll("video");for(r=0,a=l.length;r<a;r++)ewwwAttr(l[r],"poster",e?l[r].getAttribute("data-poster-webp"):l[r].getAttribute("data-poster-image"));var s=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,a=s.length;r<a;r++){if(e){ewwwAttr(s[r],"data-lazy-srcset",s[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(s[r],"data-srcset",s[r].getAttribute("data-srcset-webp")),ewwwAttr(s[r],"data-lazy-src",s[r].getAttribute("data-lazy-src-webp")),ewwwAttr(s[r],"data-src",s[r].getAttribute("data-src-webp")),ewwwAttr(s[r],"data-orig-file",s[r].getAttribute("data-webp-orig-file")),ewwwAttr(s[r],"data-medium-file",s[r].getAttribute("data-webp-medium-file")),ewwwAttr(s[r],"data-large-file",s[r].getAttribute("data-webp-large-file"));var c=s[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(s[r],"src",s[r].getAttribute("data-lazy-src-webp"))}s[r].className=s[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var w=document.querySelectorAll(".ewww_webp");for(r=0,a=w.length;r<a;r++)e?(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file")),ewwwAttr(w[r],"data-large_image",w[r].getAttribute("data-webp-large_image")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-webp-src"))):(ewwwAttr(w[r],"srcset",w[r].getAttribute("data-srcset-img")),ewwwAttr(w[r],"src",w[r].getAttribute("data-src-img"))),w[r].className=w[r].className.replace(/\bewww_webp\b/,"ewww_webp_loaded");window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,r){null!=r&&!1!==r&&e.setAttribute(t,r)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),r=0,a=t.length;r<a;r++){var i=t[r].getAttribute("data-product_variations"),n=!1;try{for(var o in i=JSON.parse(i))void 0!==i[o]&&void 0!==i[o].image&&(void 0!==i[o].image.src_webp&&(i[o].image.src=i[o].image.src_webp,n=!0),void 0!==i[o].image.srcset_webp&&(i[o].image.srcset=i[o].image.srcset_webp,n=!0),void 0!==i[o].image.full_src_webp&&(i[o].image.full_src=i[o].image.full_src_webp,n=!0),void 0!==i[o].image.gallery_thumbnail_src_webp&&(i[o].image.gallery_thumbnail_src=i[o].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[o].image.thumb_src_webp&&(i[o].image.thumb_src=i[o].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[r],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var r=galleries[t];galleries[t].images_list=ewwwNggParseImageList(r.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var r=$(e).data("id");return galleries["gallery_"+r].images_list=ewwwNggParseImageList(galleries["gallery_"+r].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var r=e[t];if(void 0!==r["image-webp"]&&(e[t].image=r["image-webp"],delete e[t]["image-webp"]),void 0!==r["thumb-webp"]&&(e[t].thumb=r["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==r.full_image_webp&&(e[t].full_image=r.full_image_webp,delete e[t].full_image_webp),void 0!==r.srcsets)for(var a in r.srcsets)nggSrcset=r.srcsets[a],void 0!==r.srcsets[a+"-webp"]&&(e[t].srcsets[a]=r.srcsets[a+"-webp"],delete e[t].srcsets[a+"-webp"]);if(void 0!==r.full_srcsets)for(var i in r.full_srcsets)nggFSrcset=r.full_srcsets[i],void 0!==r.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=r.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>
   <meta name='robots' content='max-image-preview:large'>
   <title>Two Way Communications
   </title>
   <link rel=icon href="images/favicon.png" sizes=32x32>
   <link rel=preload as=font href=https://pofo.b-cdn.net/wp-content/themes/pofo/assets/fonts/et-line.woff type=font/woff crossorigin=anonymous>
   <link rel=preload as=font href=https://https://pofo.b-cdn.net/wp-content/themes/pofo/assets/fonts/themify.woff type=font/woff crossorigin=anonymous>
   <link rel=alternate type=application/rss+xml title="POFO &raquo; Feed" href=https://pofo.themezaa.com/feed/ >
   <link rel=alternate type=application/rss+xml title="POFO &raquo; Comments Feed" href=https://pofo.themezaa.com/comments/feed/ >
   <link rel=stylesheet href="https://pofo.b-cdn.net/wp-content/cache/minify/127ed.css" media=all>
   <style id=woocommerce-inline-inline-css>.woocommerce form .form-row .required{visibility:visible}</style>
   <link rel=stylesheet href=css/57cc8.css media=all>
   <link rel=stylesheet href=css/custom.css media=all>
   <link rel=stylesheet href=css/style.css media=all>
   <link rel=stylesheet href=css/venom-button.min.css>
   <style id="pofo-responsive-style-inline-css"></style>

<noscript>
   <style>
   .wpb_animate_when_almost_visible{opacity:1}
   </style>
</noscript>
</head>
<body class="page-template-default page page-id-20601 theme-pofo woocommerce-no-js wpb-js-composer js-comp-ver-6.8.0 vc_responsive">
   
   <header id=masthead class="site-header header-main-wrapper" itemscope=itemscope itemtype=http://schema.org/WPHeader>
      <nav class="navbar navbar-default bootsnav pofo-standard-menu on no-full header-img navbar-fixed-top">
         <div class="container nav-header-container">
            <div class=row>
               <div class="col-md-2 col-xs-5">
         <a href=https://pofo.themezaa.com/ title=POFO class=logo-light>
            <img class="logo ewww_webp" src="images/logo.png" alt="">
            <img class="retina-logo ewww_webp" src="images/logo.png" alt=POFO>
         </a>
         <a href=https://pofo.themezaa.com/ title=POFO class=logo-dark>
            <img class="logo ewww_webp" src="images/logo.png">
            <img class="retina-logo ewww_webp" src="images/logo.png">
            </a>
         </div>
               <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu">
                  <button type=button class="navbar-toggle responsive-navbar-toggle collapsed pull-right" data-toggle=collapse data-target=#navbar-collapse-toggle-1><span class=sr-only>Toggle Navigation</span><span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span></button>
                  <div class="navbar-collapse collapse pull-right" id=navbar-collapse-toggle-1 itemscope=itemscope itemtype=http://schema.org/SiteNavigationElement>
                     <ul id=accordion class="nav navbar-nav alt-font text-normal navbar-left no-margin" data-in=fadeIn data-out=fadeOut>
                        <li id=menu-item-3770 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3770 simple-dropdown simple-dropdown-right"><a href=#home class=inner-link itemprop=url>Home</a></li>
                        <li id=menu-item-3771 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3771 simple-dropdown simple-dropdown-right"><a href=#about class=inner-link itemprop=url>About Us</a>
                        </li>
                        <li id=menu-item-3771 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3771 simple-dropdown simple-dropdown-right "><a href=#why_choose_us class=inner-link itemprop=url>Why Choose Us?</a>
                        </li>
                        <li id=menu-item-3772 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3772 simple-dropdown simple-dropdown-right"><a href=#services class=inner-link itemprop=url>Services</a></li>
                        <!-- <li id=menu-item-3772 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3772 simple-dropdown simple-dropdown-right"><a href=#industries_we_serve class=inner-link itemprop=url>Industry we serve</a></li> -->
                        <!-- <li id=menu-item-3772 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3772 simple-dropdown simple-dropdown-right"><a href=#how_we_work class=inner-link itemprop=url>How we work?</a></li> -->
                        <!-- <li id=menu-item-3776 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3776 simple-dropdown simple-dropdown-right"><a href=#clients class=inner-link itemprop=url>Clients</a></li> -->
                        <li id=menu-item-3777 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3777 simple-dropdown simple-dropdown-right"><a href=#contact class=inner-link itemprop=url>Contact</a></li>
                        <li id=menu-item-3777 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3777 simple-dropdown simple-dropdown-right"><a href="images/company_profile.pdf" class=inner-link itemprop="url" download><button class="btn btn-primary btn-sm download-button" style="border-radius: 50px;">Company Profile&nbsp;<i class="ti-download font-weight-600"></i></button></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </nav>
   </header>
   <div id=home class="post-20601 page type-page status-publish hentry">
      <div class="container-fluid banner">
         <img src="images/banner.png" class="img-responsive">
      </div>
      <div class=container>
         <div class=row>
            <div class="col-md-12 col-sm-12 col-xs-12">
               
               <div class=entry-content>
                  
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <!-- <section id=about class="vc_row wpb_row vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_hidden-xs col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper></div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-8 vc_col-md-8 vc_col-xs-12 text-center pofo-column-responsive-625692d169551">
                        <div class="vc_column-inner vc_custom_1509630584047">
                           <div class=wpb_wrapper>
                              <div class="text-medium-gray text-small margin-5px-bottom alt-font heading-style4  vc_custom_1507179228237  heading-1"  style="font-size: 16px; line-height: 23px; color: #090163;" data-fontsize=16px data-lineheight=23px>We are delivering beautiful digital products</div>
                              <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block heading-style2  vc_custom_1510201088344  heading-2"  style="font-weight: 300;">We provide high quality and cost effective offshore web and software development services</h5>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_hidden-xs col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper></div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d16967e">
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-1" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Translation.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">Translation Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>We only deal with local translators for all your language translation needs. With this the end report genuinely passes on the planned message to the user.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d169811" data-wow-delay= 200ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-2" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Multilingual.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">Localization Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>Website, Multi-Media, and Software Localization in multiple languages empowers you to interact with the intended interest group and have the right effect.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center" data-wow-delay= 400ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-3" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Localization.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">Content Writing Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>We help organizations to showcase their specialized ideas and skills by creating content that is effectively comprehended by even a layman.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                    </div>

                    <div class="clearfix margin-50px-bottom">
                     </div>
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d16967e">
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-1" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Desktop_Publishing.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">DTP Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>Our DTP and graphic designers are well versed with the most recent DTP Software to give you the localized ready-to-print file as per the source document.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d169811" data-wow-delay= 200ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-2" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Audio-Visual.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">Voice Over Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>We have the correct assets of voice over specialists who are in-nation experts for dubbing your corporate and all promotional AVs in more than 100 dialects.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center" data-wow-delay= 400ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-3" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/Project-Services.png">
                                        <span class="separator-line-verticle-large margin-ten-right bg-deep-pink vertical-align-top pull-right margin-two-top hidden-xs"></span></div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-medium margin-10px-bottom text-extra-dark-gray alt-font display-block">Interpretation Services</span>
                                        <div class="width-90 md-width-100 last-paragraph-no-margin">
                                           <p>We at Shakti Enterprise have custom fitted interpretation solutions for all of your needs.</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                    </div>
                  </section> -->
                  <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid wow fadeIn pofo-stretch-content pofo-stretch-row-container animated vc_custom_1507182911975" style="position: relative; left: -46.6667px; box-sizing: border-box; width: 1263px; padding-left: 46.6667px; padding-right: 46.3333px; visibility: visible; animation-name: fadeIn;">
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center pofo-column-responsive-625692d16a074">
                                    <div class="vc_column-inner ">
                                       <div class="wpb_wrapper">
                                          <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font heading-style2  pofo-button-responsive-625692d16a11f  heading-5" style="font-weight: 700;margin-bottom: 5%;">Why Do You Need Language Translation Services?
</h5>
                                          
                                       </div>
                                    </div>
                                 </div>
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8 vc_col-xs-12 wow fadeIn sm-text-center pofo-column-responsive-6263cb3e8966a animated" style="visibility: visible; animation-name: fadeIn;">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            
            <div class="text-extra-dark-gray last-paragraph-no-margin pofo-text-block-responsive-6263cb3e89718 text-justify" >
               <p>Anyone can google for translation. To win new business, translation agencies must show that they will go deeper than the competition or the client to provide the right translation services, whether it is a general document, marketing document, or something in between.</p>
               <p>Language has the power that enables to people talk easily and understand the emotions and context behind the communication. And language translation services enable businesses to communicate with their target audience with the support of talented linguists.</p>
               <p>Companies that are arming themselves with language translation solutions are-Able to enter the markets that they were restricted to enter because of the language barrier. Can easily connect with new customer groups that they find difficult to access before by using only one language.</p>
               <p>If you are seeking out professional’s help to get better and quick language solutions, you are at the right place. Whether it’s your business contracts, legal documents, medical reports, or anything else, we can help you take over the target market with our best-in-class, trusted, and efficient language translation solutions. Our expert linguists are equipped with excellent translation skills, and they are always ready to meet your translation needs.</p>
            </div>
         </div>
      </div>
   </div>
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 wow fadeIn pofo-column-responsive-6263cb3e8977e animated" style="visibility: visible; animation-name: fadeIn;">
      <div class="vc_column-inner ">
         <div class="wpb_wrapper">
            <div class="skillbar-bar-main  skillbar-bar-style1">
               <div class="skillbar margin-45px-bottom skillbar-appear" data-percent="95%">
                  <span class="skill-bar-text text-extra-small text-extra-dark-gray text-uppercase"> Translation </span>
                  <p class="skillbar-bar" style="width: 95%;"></p>
                  <span class="skill-bar-percent text-small">95%</span>
               </div>
               <div class="skillbar margin-45px-bottom skillbar-appear" data-percent="67%">
                  <span class="skill-bar-text text-extra-small text-extra-dark-gray text-uppercase">Transcription </span>
                  <p class="skillbar-bar" style="width: 67%;"></p>
                  <span class="skill-bar-percent text-small">67%</span>
               </div>
               <div class="skillbar margin-45px-bottom skillbar-appear" data-percent="80%">
                  <span class="skill-bar-text text-extra-small text-extra-dark-gray text-uppercase"> Voice Over </span>
                  <p class="skillbar-bar" style="width: 80%;"></p>
                  <span class="skill-bar-percent text-small">80%</span>
               </div>
               <div class="skillbar margin-45px-bottom skillbar-appear" data-percent="60%">
                  <span class="skill-bar-text text-extra-small text-extra-dark-gray text-uppercase">Graphic Designing </span>
                  <p class="skillbar-bar" style="width: 60%;"></p>
                  <span class="skill-bar-percent text-small">60%</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="vc_row-full-width vc_clearfix"></div>
                  <section id="about" data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class="vc_row wpb_row vc_row-fluid  vc_custom_1507205266443 wow fadeIn vc_row-has-fill pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                     
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12 vc_col-xs-12 wow fadeInRight sm-text-center xs-text-center">
                        <div class="vc_column-inner vc_custom_1507193184506">
                           <div class=wpb_wrapper>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                 <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth pofo-column-responsive-625692d17029e">
                                    <div class="vc_column-inner vc_custom_15090186664933">
                                       <div class=wpb_wrapper>
                                          
                                          <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font heading-style2  vc_custom_1510201558557  heading-11"  style="font-weight: 600; color: #ffffffe6;">About Us</h5>
                                          <h6 class="text-dark-gray margin-10px-bottom font-weight-300 heading-style1  vc_custom_1510201625440 pofo-button-responsive-625692d1703a7  heading-12"  style=" font-size: 20px; line-height: 26px; font-weight: 500; color: #ffffffe6;" data-fontsize="20px" data-lineheight="26px">Two-way communication is the best translation company in Mumbai, which is providing language translation to Indian companies.</h6>
                                          <div class="last-paragraph-no-margin pofo-text-block-responsive-625692d1703c8" style="color: #ffffffe6; ">
                                             <p class="about_us_p">Language plays an important role to disseminate any product, service, or idea to any corner of the world. Worked several years with a language translating agency and the Advertising and Media field. we are now familiar with the market, we can understand what businesses need and what they want to deliver to markets, we are now a professional language translation services agency for you. To achieve this objective well through our language services, we are a language translation company in Mumbai, with "Easy to Communicate"  as our motto. It's this motto of ours that makes us one of the best translation agencies in India.</p>
                                             <p class="about_us_p">A beautiful and communicable language leaves a deep impact on your business. Today, being in a global world, you need to reach people or communities with your ideas, services, and products, in other parts of the world have different languages, cultures, traditions, and geographical features. It is amazingly possible through language, and it involves the processing of the source language into the target one, i.e., Language Processing (English to Vernacular languages or vice-versa).</p>
                                             <p class="about_us_p">Whether it is Translation-localization, Editing, copywriting, subtitling, or content writing, this translation company emphasizes upon communicability and beauty of the target language. Our committed and highly skilled language professionals keep in mind that the target language they are working on, must have facts and meanings of the source language, as well they could also become interesting and attractive to the target community. That is why we don't promote mechanical language processing. Language has been invented by human beings and they have developed it for thousands of years; so, we must not kill the spirit of language by processing it mechanically. Keeping this fact in mind two-way communications, a translation company in India, started this language service by assembling with like-minded linguists, so that you can get a creative and communicable language solution from us.</p>
                                             <p class="about_us_p">This is the phase of fast economical activities and for you ‘time’ counts a lot. The second thing we always follow in our services is meeting your time deadline. We return your project in the stipulated period so that you can schedule your content at the next point.</p>
                                          </div>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <section id="why_choose_us" class="vc_row wpb_row vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_hidden-xs col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper></div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-8 vc_col-md-8 vc_col-xs-12 text-center pofo-column-responsive-625692d169551">
                        <div class="vc_column-inner vc_custom_1509630584047">
                           <div class=wpb_wrapper>
                              
                              <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block heading-style2    heading-2 font-weight-600 text-uppercase">Why Choose Us ?</h5>
                              <div class="text-extra-dark-gray        text-small margin-5px-bottom alt-font heading-style4  vc_custom_1507179228237  heading-1"  style="font-size: 16px; line-height: 23px; " data-fontsize=16px data-lineheight=23px>The quality of our work is second to none, and we stand by our commitments.<br> We always deliver exactly what we promise.</div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_hidden-xs col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper></div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d16967e">
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-1" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/checkbox.png">
                                     </div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-large margin-10px-bottom text-extra-dark-gray alt-font display-block" style="    margin-top: 7%;">Manual Translation</span>
                                        
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center pofo-column-responsive-625692d169811" data-wow-delay= 200ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-2" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/checkbox.png">
                                        </div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-large margin-10px-bottom text-extra-dark-gray alt-font display-block" style="    margin-top: 7%;">Native Translators</span>
                                        
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-4 vc_col-xs-12 wow fadeInUp xs-text-center" data-wow-delay= 400ms>
                            <div class="vc_column-inner ">
                               <div class=wpb_wrapper>
                                  <div class="featurebox2 pofo-featurebox featurebox2-3" >
                                     <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-right pull-left">
                                        <img src="images/icons/checkbox.png">
                                        </div>
                                     <div class="col-md-9 col-sm-8 col-xs-12 sm-no-padding-lr">
                                        <span class="text-large margin-10px-bottom text-extra-dark-gray alt-font display-block" style="    margin-top: 7%;">Quality Assurance </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                    </div>

                    
                  </section>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <section data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class="vc_row wpb_row vc_row-fluid  vc_custom_1510204567034 wow fadeIn pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">


                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-md-offset-1 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d170583">
                        <div class="vc_column-inner vc_custom_1510204473998">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204465862 pofo-feature-box-responsive-625692d170639 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-1">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">01</h2>
                                 <span class="text-red display-block alt-font text-medium text-extra-dark-gray margin-10px-bottom xs-margin-5px-bottom">Higher Quality & Accuracy Level</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>Our quality supervisors make sure that the translated text contains the highest degree of quality and accuracy. Thus, quality checks are initiated.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d1706ac" data-wow-delay= 200ms>
                        <div class="vc_column-inner vc_custom_1510204559656">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204551046 pofo-feature-box-responsive-625692d170733 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-2">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">02</h2>
                                 <span class="text-red display-block alt-font text-medium text-extra-dark-gray margin-10px-bottom xs-margin-5px-bottom">Comprehensive Language Solutions</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>When it is about language, we make sure to offer authentic solutions for translation, localization, and interpretation for the different business sectors.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d17078f" data-wow-delay= 400ms>
                        <div class="vc_column-inner vc_custom_1510204591853">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204584433 pofo-feature-box-responsive-625692d170811 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-3">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">03</h2>
                                 <span class="text-red display-block alt-font text-medium text-extra-dark-gray margin-10px-bottom xs-margin-5px-bottom">Native Expert Translators</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We can manage small and large translation projects. We believe that no individual can translate a text so authentically as compared to a native person.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center" data-wow-delay= "600ms" style="border-right: 1px solid #f1f1f1;">
                        <div class="vc_column-inner vc_custom_1510204628622">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204608436 pofo-feature-box-responsive-625692d1708d5 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-4">
                                 <h2 class="alt-font letter-spacing-minus-3 margin-10px-bottom" style="">04</h2>
                                 <span class="text-red display-block alt-font text-medium text-extra-dark-gray margin-10px-bottom xs-margin-5px-bottom">Easy Project Consultation</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We understand that you may have several doubts in mind before outsourcing translation. Thus, we let the customers talk to the project managers for any of their queries.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>




                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center" data-wow-delay= 600ms>
                        <div class="vc_column-inner vc_custom_1510204628622">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204608436 pofo-feature-box-responsive-625692d1708d5 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-4">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">05</h2>
                                 <span class="text-red display-block alt-font text-medium text-extra-dark-gray margin-10px-bottom xs-margin-5px-bottom">Fastest Turnaround Time</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>When it comes to human translations, we always commit to the fastest turnaround time, so that the client could implement the further plan of action immediately. </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <section data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class="vc_row wpb_row vc_row-fluid  vc_custom_1507182911975 wow fadeIn vc_row-has-fill pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-flex" style="padding: 0px!important;margin-bottom: 0px!important;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 vc_col-xs-12 wow fadeInLeft sm-text-center"><div class="vc_column-inner ">
      <div class=wpb_wrapper><div class="vc_row wpb_row vc_inner vc_row-fluid  vc_custom_1509630892288 pofo-inner-row-responsive-62660ba226140">
         <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
            <div class="vc_column-inner "><div class=wpb_wrapper>
               
               <h5 class="text-extra-dark-gray margin-20px-bottom  display-inline-block alt-font heading-style2  vc_custom_1510140725733 pofo-button-responsive-62660ba2262ae  heading-7"  >Reasons Why Your Company Needs Human Translation Services</h5>
               <div class="panel-group accordion-style2" id=accordion-1 >
                  <div class="panel panel-default text-left">
                     <div class="panel-heading active-accordion" style> 
                        <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link-1><div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>01</span> <span class="text-extra-dark-gray accordion-title ">Cultural Relevancy</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div> </a></div>
                        <div id=accordion-one-link-1 class="panel-collapse collapse"><div class="panel-body "><p>Human translation takes care of cultural relevancy while translating the original message. The translated content gets a touch of emotions as well as an appeal that communicates with the locals while considering cultural tastes and nuances.</p></div></div></div>
                        <div class="panel panel-default text-left"><div class="panel-heading " style> <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link-2><div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>02</span> <span class="text-extra-dark-gray accordion-title ">Understanding of the Context</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div> </a></div>
                        <div id=accordion-one-link-2 class="panel-collapse collapse "><div class="panel-body "><p>Human translation is not all about word-to-word translation. A human translator understands the sentence’s context and translates it accordingly into a preferred language.</p></div></div></div>
                        <div class="panel panel-default text-left"><div class="panel-heading " style> <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link-3><div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>03</span> <span class="text-extra-dark-gray accordion-title ">Quality Guaranteed</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div> </a></div>
                        <div id=accordion-one-link-3 class="panel-collapse collapse "><div class="panel-body "><p>Human translation assures quality translation of the message in the desired language with the help of a human translator who has extensive knowledge of the complex concepts in philosophy, science, technology, finance, music, business, law, and several other fields to ensure that the client’s text is correctly understood by its target audiences.</p>
                           <p>Humans understand humans to a great extent, and we can’t ignore this reality. That’s why we always advise our clients to go for the human translation if they want to become the first choice of their target audiences.</p></div></div></div></div></div></div></div></div></div></div></div>
                        <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-12 vc_col-md-6 vc_col-xs-12 wow fadeInRight pofo-column-responsive-62660ba2263a2">
                           <img src="images/reasons.png" class="img-responsive">
                        </div>
                     </section>
                  
                  <div class="vc_row-full-width vc_clearfix"></div>

                  <section id="services" data-vc-full-width=true data-vc-full-width-init=false class=" wpb_row vc_row-fluid   wow fadeIn pofo-stretch-content pofo-stretch-row-container" style="margin-bottom: 5%;">
   <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth" >
      <div class="vc_column-inner ">
         <div class=wpb_wrapper>
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper></div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 text-center pofo-column-responsive-62660ba235ee3">
                  <div class="vc_column-inner vc_custom_1509966084053">
                     <div class=wpb_wrapper>
                        <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font text-uppercase heading-style2  vc_custom_1510140946461 pofo-button-responsive-62660ba235f67  heading-15"  style="font-weight: 700;">Our Services</h5>
                        <div class=last-paragraph-no-margin>
                           <p>We offer the below services in 12 Indian Languages – Hindi, Marathi, Gujarati, Tamil, Telugu, Kannada, Malayalam, Bengali, Oriya, Assamese, Punjabi & Urdu.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper></div>
                  </div>
               </div>
            </div>
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                 
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                <!-- <i class="link-icon icon-desktop icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom" style></i> -->
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Translation.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Translation</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Translation</div>
                                       
                                          <p>Press Releases</p>
                                             <p>Newsletters</p>
                                             <p>Internal Communications</p>
                                             <p>Corporate Profiles</p>
                                             <p>Web Content</p>
                                             <p>Educational Content</p>
                                             <p>Video Subtitles</p>
                                             <p>Mobile Apps</p>
                                             <p>Posters</p>
                                             <p>Articles</p>
                                             <p>Blogs</p>
                                             <p>Web Banners</p>
                                             <p>Magazines</p>
                                             <p>Social Media Banners</p>
                                             <p>Broachers</p>
                                             <p>Short Notes</p>
                                             <p>Long Content</p>
                                             <p>Manuals </p>
                                             <p>Scripts</p>
                                             <p>Print Advt</p>
                                             <p>Political Manifestos</p>
                                             <p>Public Speeches</p>
                                             <p>Corporate Speeches</p>
                                             <p>Product Brochures</p>
                                             <p>Leaflets</p>
                                             <p>Emailers</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                 
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                <!-- <i class="link-icon icon-desktop icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom" style></i> -->
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Transcriptions.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Transcription</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Transcription</div>
                                       <p>Training Videos</p>
                                             <p>Short Ad Videos</p>
                                             <p>IVRs</p>
                                             <p>Public Speech</p>
                                             <p>Corporate Meetings</p>
                                             <p>Short Story</p>
                                             <p>Telling</p>
                                             <p>Educational Videos</p>
                                             <p>Youtube Videos</p>
                                             <p>Conference Material</p>
                                             <p>Speeches</p>
                                             <p> Informative Videos</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                 
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/VO.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Voice Over</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Voice Over</div>
                                       <p>Voice Over for Web Videos</p>
                                             <p>TVCs</p>
                                             <p>Radio Ads</p>
                                             <p>Telephone IVRs</p>
                                             <p>Corporate Films</p>
                                             <p>Training manuals</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                 
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/DTP.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Graphic Designing</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Graphic Designing</div>
                                       <p>Creative Designing</p>
                                             <p>Photo Editing</p>
                                             <p>Web Banner</p>
                                             <p>Social Media Banner</p>
                                             <p>Logo Designing</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                 
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                <!-- <i class="link-icon icon-desktop icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom" style></i> -->
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/DM.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Digital Marketing</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Digital Marketing</div>
                                       <p>Social Media Accounts</p>
                                             <p>Creating Campaigns</p>
                                             <p>Publishing Ads</p>
                                             <p>Product Promotions</p>
                                             <p>Product Photography</p>
                                             <p>Brand  Promotions</p>
                                             <p>Product Photography</p>
                                             <p>Video Making</p>
                                             <p>Content Creation</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow slideInUp text-center pofo-column-responsive-62660ba236115">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="team-2 team-block team-style-2 team2-1">
                           <figure>
                              <div class="team-image xs-width-100">
                                
                                 <div class="team-member-position font-weight-500 text-extra-dark-gray margin-20px-top text-center ">
                                    <div class="display-inline-block margin-20px-bottom">
                                                <!-- <i class="link-icon icon-desktop icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom" style></i> -->
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Tax.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Finance Service</div>
                                    
                                 </div>
                              </div>
                              <figcaption>
                                 <div class="overlay-content icon-social-small text-center ">
                                    <div class="text-small display-inline-block no-margin margin-eleven-bottom">
                                       <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase text-small">Finance Service</div>
                                       <p>Book Keeping</p>
                                             <p>Income Tax Return Filing</p>
                                             <p>PT Tax Payments and Filing  </p>
                                             <p>Society Accounts & Audits</p>
                                             <p>Statutory Payments</p>
                                             <p>Types of Secured Loans</p>
                                             <p>LIC | Mediclaim</p>
                                             <p>Trademark | FSSAI | MSME Registrations</p>
                                             <p>Proxys for corporate meetings.
</p>
                                    </div>
                                    
                                 </div>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>


               
            </div>
         </div>
      </div>
   </div>
</section>

                  <!-- <section id=services data-vc-full-width=true data-vc-full-width-init=false class="vc_row wpb_row vc_row-fluid   wow fadeIn vc_row-has-fill pofo-stretch-content pofo-stretch-row-container">
                     <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                 <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_hidden-xs">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper></div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 text-center pofo-column-responsive-625692d16a074">
                                    <div class="vc_column-inner vc_custom_1507181980219">
                                       <div class=wpb_wrapper>
                                          <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font text-uppercase heading-style2  vc_custom_1510140615948 pofo-button-responsive-625692d16a11f  heading-5"  style="font-weight: 700;">Our Services</h5>
                                          <div class=last-paragraph-no-margin>
                                             <p style="color:black!important">We offer the below services in 12 Indian Languages – Hindi, Marathi, Gujarati, Tamil, Telugu, Kannada, Malayalam, Bengali, Oriya, Assamese, Punjabi & Urdu.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_hidden-xs">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid   vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow fadeInUp text-center pofo-column-responsive-625692d16a249">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142941021 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-1" >
                                             <div class="display-inline-block margin-20px-bottom">
                                               
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Translation.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Translation</div>
                                           
                                             <p>Press Releases</p>
                                             <p>Newsletters</p>
                                             <p>Internal Communications</p>
                                             <p>Corporate Profiles</p>
                                             <p>Web Content</p>
                                             
                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow fadeInUp text-center pofo-column-responsive-625692d16a346" data-wow-delay= 200ms>
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142963570 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-2" >
                                             <div class="display-inline-block margin-20px-bottom">
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Transcriptions.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Transcription</div>
                                            
                                             <p>Training Videos</p>
                                             <p>Short Ad Videos</p>
                                             <p>IVRs</p>
                                             <p>Public Speech</p>
                                             <p>Corporate Meetings</p>

                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 sm-clear-both wow fadeInUp text-center pofo-column-responsive-625692d16a412" data-wow-delay= 400ms data-clear-both=sm-clear-both>
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142976099 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-3" >
                                             <div class="display-inline-block margin-20px-bottom">
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/VO.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Voice Over</div>
                                            
                                             <p>Web Videos</p>
                                             <p>TVCs</p>
                                             <p>Radio Ads</p>
                                             <p>Telephone IVRs</p>
                                             <p>Corporate Films</p>
                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow fadeInUp text-center  pofo-column-responsive-625692d16a412" data-wow-delay= 600ms>
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142987828 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-4" >
                                             <div class="display-inline-block margin-20px-bottom">
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/DTP.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Graphic Designing</div>
                                             
                                             <p>Creative Designing</p>
                                             <p>Photo Editing</p>
                                             <p>Web Banner</p>
                                             <p>Social Media Banner</p>
                                             <p>Logo Designing</p>
                                             
                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow fadeInUp text-center  pofo-column-responsive-625692d16a412" data-wow-delay= 600ms>
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142987828 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-4" >
                                             <div class="display-inline-block margin-20px-bottom">
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/DM.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Digital Marketing</div>
                                             
                                             <p>Social Media Accounts</p>
                                             <p>Creating Campaigns</p>
                                             <p>Publishing Ads</p>
                                             <p>Product Promotions</p>
                                             <p>Product Photography</p>
                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-2 vc_col-xs-12 wow fadeInUp text-center  pofo-column-responsive-625692d16a412" data-wow-delay= 600ms>
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <div class="featurebox8 pofo-featurebox  vc_custom_1508142987828 box-shadow-light feature-box-8  position-relative overflow-hidden z-index-5 padding-twelve-all md-padding-six-all xs-padding-15px-lr featurebox8-4" >
                                             <div class="display-inline-block margin-20px-bottom">
                                                <span class="icon-medium text-white icon-round-small bg-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom">
                                                <img src="images/icons/services_icon/Tax.png" class="img-responsive icon-round-small-service our-service_icon">
                                                </span>
                                             </div>
                                             <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom sm-margin-5px-bottom">Finance Service</div>
                                             
                                             <p>Book Keeping</p>
                                             <p>Income Tax Return Filing</p>
                                             <p>PT Tax Payments and Filing  </p>
                                             <p>Society Accounts & Audits</p>
                                             <p>Statutory Payments</p>
                                             <div class="feature-box-overlay bg-deep-pink" style></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section> -->
                  <section id="industries_we_serve" data-vc-full-width=true data-vc-full-width-init=false data-parallax-background-ratio=0.6 class=" wpb_row vc_row-fluid  vc_custom_1509438668584 wow fadeIn vc_row-has-fill pofo-stretch-content pofo-stretch-row-container parallax">
   <div class="bg-extra-dark-gray bg-overlay" style="opacity:0.7; "></div>
   <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
      <div class="vc_column-inner ">
         <div class=wpb_wrapper>
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper></div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center">
                  <div class="vc_column-inner vc_custom_1507197171237">
                     <div class=wpb_wrapper>
                        <h4 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font heading-style2  vc_custom_1510140927350 pofo-button-responsive-62660ba23592e  heading-13"  style="width: width-85; font-weight: 500; color: #d6d5d5;">Industries We Serve </h4>
                        <h6 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block heading-style2  vc_custom_1509438811943 pofo-button-responsive-62660ba235966  heading-14"  style="width: 85%; font-size: 18px; line-height: 26px; font-weight: 300; color: #fff;" data-fontsize="18px" data-lineheight="26px">All industries are different and have different customer needs and customer service requirements translation solutions tailored for your business. We understand businesses, brands, and organizations by what it represents, we also understand the purpose of your communication be it to your customers, suppliers, employees, or your prospective customers, we will use the right translator who specializes in your industry, this helps our customers to be more relevant with their multilingual communication.</h6>
                     </div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper></div>
                  </div>
               </div>
            </div>
            <div class="vc_row wpb_row vc_inner vc_row-fluid margin-50px-bottom">
               
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                              <img src="images/icons/industry_icons/IT.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Information Technology</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                              <img src="images/icons/industry_icons/telecom.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Telecommunication</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <span class="clearfixed"></span>
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                              <img src="images/icons/industry_icons/constructions.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Construction</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235ac1" data-wow-delay= 200ms>
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-2" >
                              <img src="images/icons/industry_icons/agriculture.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Agriculture</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <span class="clearfixed"></span>
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235b5d" data-wow-delay= 400ms>
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-3" >
                              <img src="images/icons/industry_icons/education.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Education</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235bf4" data-wow-delay= 600ms>
                     <div class="vc_column-inner ">
                        <div class=wpb_wrapper>
                           <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-4" >
                              <img src="images/icons/industry_icons/harma.png" class="img-responsive industry_icon margin-20px-bottom">
                              <p class="alt-font text-large text-light-gray">Pharmaceutical</p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <span class="clearfixed"></span>
            </div>
            <div class="vc_row wpb_row vc_inner vc_row-fluid ">
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                           <img src="images/icons/industry_icons/foods-and-bever.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Food & Beverages</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                           <img src="images/icons/industry_icons/medical.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Medical Care & Hospitality</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <span class="clearfixed"></span>

               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235a0c">
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-1" >
                           <img src="images/icons/industry_icons/media-and-entertainment.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Marketing Media & Entertainment</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235ac1" data-wow-delay= 200ms>
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-2" >
                           <img src="images/icons/industry_icons/Transportation.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Logistics</p>
                        </div>
                     </div>
                  </div>
               </div>

               <span class="clearfixed"></span>
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235b5d" data-wow-delay= 400ms>
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-3" >
                           <img src="images/icons/industry_icons/energy.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Energy</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-md-2 vc_col-xs-6 wow zoomIn text-center pofo-column-responsive-62660ba235bf4" data-wow-delay= 600ms>
                  <div class="vc_column-inner ">
                     <div class=wpb_wrapper>
                        <div class="featurebox9 pofo-featurebox feature-box-9 display-inline-block featurebox9-4" >
                           <img src="images/icons/industry_icons/manufacturing.png" class="img-responsive industry_icon margin-20px-bottom">
                           <p class="alt-font text-large text-light-gray">Manufacturing</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <span class="clearfixed"></span>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="vc_row-full-width vc_clearfix"></div>
                  
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <section style="display: none;" data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class=" wpb_row vc_row-fluid  vc_custom_151020456703412 wow fadeIn pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                     <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
                        <div class="vc_column-inner ">
                           <div class=wpb_wrapper>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                 <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_hidden-xs">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper></div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 text-center pofo-column-responsive-625692d16a074">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper>
                                          <h5 class="text-extra-dark-gray margin-20px-bottom font-weight-600 display-inline-block alt-font text-uppercase heading-style2  vc_custom_1510140615948 pofo-button-responsive-625692d16a11f  heading-5">Our 5 Pillar</h5>
                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 vc_hidden-xs">
                                    <div class="vc_column-inner ">
                                       <div class=wpb_wrapper></div>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>

                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-md-offset-1 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d170583">
                        <div class="vc_column-inner vc_custom_1510204473998">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204465862 pofo-feature-box-responsive-625692d170639 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-1">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">01</h2>
                                 <span class="display-block alt-font text-medium text-red margin-10px-bottom xs-margin-5px-bottom">Quick Time Around</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We can deliver the assignment as requested by the clients, So they will manage their content to go live</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d1706ac" data-wow-delay= 200ms>
                        <div class="vc_column-inner vc_custom_1510204559656">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204551046 pofo-feature-box-responsive-625692d170733 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-2">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">02</h2>
                                 <span class="display-block alt-font text-medium text-red margin-10px-bottom xs-margin-5px-bottom">Human Translators</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We are working through human translators because automated translation does not give you accurate results.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center pofo-column-responsive-625692d17078f" data-wow-delay= 400ms>
                        <div class="vc_column-inner vc_custom_1510204591853">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204584433 pofo-feature-box-responsive-625692d170811 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-3">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">03</h2>
                                 <span class="display-block alt-font text-medium text-red margin-10px-bottom xs-margin-5px-bottom">Experenced Team</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>With our experienced team, we can deliver quality services to all the customers and satisfied their requirements.
</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center" data-wow-delay="600ms" style="border-right: 1px solid #f1f1f1;">
                        <div class="vc_column-inner vc_custom_1510204628622">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204608436 pofo-feature-box-responsive-625692d1708d5 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-4">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">04</h2>
                                 <span class="display-block alt-font text-medium text-red margin-10px-bottom xs-margin-5px-bottom">Affordable Rates</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We are offering affordable rates to our clients as compared to the market because we want to make good relationship with agencies.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-6 vc_col-md-2 col-xs-mobile-fullwidth wow fadeInRight text-center" data-wow-delay= 600ms>
                        <div class="vc_column-inner vc_custom_1510204628622">
                           <div class=wpb_wrapper>
                              <div class="featurebox14 pofo-featurebox  vc_custom_1510204608436 pofo-feature-box-responsive-625692d1708d5 feature-box-14 padding-fifteen-all sm-padding-50px-all xs-padding-30px-all featurebox14-4">
                                 <h2 class=" alt-font letter-spacing-minus-3 margin-10px-bottom" style="">05</h2>
                                 <span class="display-block alt-font text-medium text-red margin-10px-bottom xs-margin-5px-bottom">Complete Data Privacy</span>
                                 <div class="last-paragraph-no-margin text-extra-dark-gray">
                                    <p>We are keeping all data confidential of clients, which create a trustworthy environment for the clients.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <div class="vc_row-full-width vc_clearfix"></div>
<section id=clients data-vc-full-width=true data-vc-full-width-init=false data-parallax-background-ratio=0.4 class="vc_row wpb_row vc_row-fluid  vc_custom_1510203342089 vc_row-has-fill pofo-stretch-content pofo-stretch-row-container parallax" style="display: none;">
   <div class="bg-extra-dark-gray bg-overlay" style="opacity:0.7; "></div>
   <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
      <div class="vc_column-inner ">
         <div class=wpb_wrapper>
            <div id=pofo-client-image-slider-1 class="swiper-container pofo-client-image-slider-1  white-move" data-slider-options={&quot;stopOnLastSlide&quot;:true,&quot;disableOnInteraction&quot;:false,&quot;keyboard&quot;:true,&quot;mousewheel&quot;:false,&quot;slidesPerView&quot;:&quot;1&quot;,&quot;breakpoints&quot;:{&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;}},&quot;loop&quot;:true,&quot;autoplay&quot;:{&quot;delay&quot;:3000}}>
               <div class=swiper-wrapper>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo1-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo2-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo3-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
                  <div class="swiper-slide slide-content-middle text-center">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" data-eio=j class=ewww_webp>
                     <noscript>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width=190 height=49 alt  sizes="(max-width: 190px) 100vw, 190px" data-src-img=https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png data-src-webp=https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4.png.webp data-srcset-webp="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png.webp 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png.webp 81w" data-srcset-img="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.themezaa.com/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" data-eio=j class=ewww_webp>
                        <noscript><img src=../../pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png width=190 height=49 alt srcset="https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4.png 190w, https://pofo.b-cdn.net/wp-content/uploads/2017/05/clients-logo4-81x21.png 81w" sizes="(max-width: 190px) 100vw, 190px"></noscript>
                     </noscript>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  
<section id="how_we_work" data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class=" wpb_row vc_row-fluid  vc_custom_1507182911975 wow fadeIn vc_row-has-fill pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-flex  how_we_padding" >
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12 vc_col-xs-12 wow fadeInLeft sm-text-center">
      <div class="vc_column-inner ">
         <div class=wpb_wrapper>
            <div class=" wpb_row vc_inner vc_row-fluid  vc_custom_1509630892288 pofo-inner-row-responsive-62660ba226140">
               <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper">
                        <h4 class="text-extra-dark-gray margin-50px-bottom font-weight-600 display-inline-block alt-font heading-style2   pofo-button-responsive-62660ba23592e  heading-13 text-extra-dark-gray " style="width: width-85; font-weight: 500;">How we work </h4>
                     </div>
                  </div>
               </div>
               <div class="vc_row-full-width vc_clearfix"></div>
               <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth">
                  <div class="panel-group accordion-style2" id=accordion-1 >
                     <div class="panel panel-default text-left">
                        <div class="panel-heading active-accordion" style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-1>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>01</span> <span class="text-extra-dark-gray accordion-title ">Specification and review of original documents</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-1 class="panel-collapse collapse">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>Preliminary Discussion with clients.</li>
                                 <li>A careful review of words, Specifications, formatting, deadline, and other requirements</li>
                                 <li>Seeking necessary clarifications and quoting price. 
                                    Client Approve quotation and deadline.
                                 </li>
                                 <li>The Project Manager assigns the project to the concerned specialist team</li>
                              </ul>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default text-left">
                        <div class="panel-heading " style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-2>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>02</span> <span class="text-extra-dark-gray accordion-title ">Translation</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-2 class="panel-collapse collapse ">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>Review of the original document and all specifications by translators</li>
                                 <li>Preparation of appropriate glossary </li>
                                 <li>Translation of text to prepare a rough draft</li>
                                 <li>Review of nouns, idioms, phrases, specifications, and cultural appropriations.</li>
                                 <li>Preparing final draft</li>
                              </ul>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default text-left">
                        <div class="panel-heading " style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-3>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>03</span> <span class="text-extra-dark-gray accordion-title ">Editing</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-3 class="panel-collapse collapse ">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>Review of the format of original documents by translators</li>
                                 <li>Reviewing the format requirement of the final document as per client specifications.</li>
                                 <li>Review of formatting requirement of a particular field </li>
                                 <li>Formatting and editing the final draft based on the above reviews</li>
                                 <li>Handing over formatting draft for proofreading</li>
                              </ul>
                              </p>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default text-left">
                        <div class="panel-heading " style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-4>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>04</span> <span class="text-extra-dark-gray accordion-title ">Proofreading</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-4 class="panel-collapse collapse ">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>Document underdoes proofreading by 2nd native professional proofreader.</li>
                                 <li>In case of any errors, the proofreader discusses the same with the translators.</li>
                                 <li>The agreed amendments are made in the documents.</li>
                              </ul>
                              </p>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default text-left">
                        <div class="panel-heading " style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-6>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>05</span> <span class="text-extra-dark-gray accordion-title ">Final Review</span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-6 class="panel-collapse collapse ">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>Proofread documents passed onto project manager for final review</li>
                                 <li>The document is reviewed and any changes required are immediately notified to the team</li>
                                 <li>Changes (if any) are made as per instructions </li>
                              </ul>
                              </p>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default text-left">
                        <div class="panel-heading " style>
                           <a class=accordion-toggle data-toggle=collapse data-parent=#accordion-1 href=#accordion-one-link2-5>
                              <div class=panel-title> <span class="alt-font font-weight-600 text-deep-pink tab-tag dynamic-font-size" style>06</span> <span class="text-extra-dark-gray accordion-title ">Delivery </span> <i class="fas fa-angle-down pull-right text-extra-dark-gray tz-icon-color" style></i></div>
                           </a>
                        </div>
                        <div id=accordion-one-link2-5 class="panel-collapse collapse ">
                           <div class="panel-body ">
                              <p>
                              <ul>
                                 <li>The project manager delivers the final document to a client.</li>
                                 <li>The client is requested to confirm whether all requirements have been met</li>
                                 <li>Loop closure after positive revert from the client.</li>
                              </ul>
                              </p>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<div class="vc_row-full-width vc_clearfix"></div>
<section  data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class="vc_row wpb_row vc_row-fluid  vc_custom_1507198049935 vc_row-has-fill pofo-stretch-content vc_row-no-padding vc_row-o-equal-height vc_row-flex">
   <div class="wpb_column vc_column_container vc_col-has-fill vc_col-md-6 col-xs-mobile-fullwidth pofo-column-responsive-625692d178cd5">
      <img src="images/quote.jpg" class="img-responsive">
   </div>
   <div class="wpb_column vc_column_container vc_col-md-6 col-xs-mobile-fullwidth text-center pofo-column-responsive-625692d178d21">
      <div class="vc_column-inner vc_custom_1509703581230123">
         <div class=wpb_wrapper>
            
            <div role=form class=wpcf7 id=wpcf7-f4-p20601-o1 lang=en-US dir=ltr>
               <div class=screen-reader-response>
                  <p role=status aria-live=polite aria-atomic=true></p>
                  <ul></ul>
               </div>
                <form action="#" method=post class="wpcf7-form init" novalidate=novalidate data-status=init id="enquiry">
                  <div> <span class="wpcf7-form-control-wrap contact-name">
                     <input type=text id="name" name="name"  class="wpcf7-form-control wpcf7-text input-border-bottom" aria-required=true aria-invalid=false placeholder=Name*></span><br> 
                     <span class="wpcf7-form-control-wrap contact-email">
                     <input type=text id="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-border-bottom" aria-required=true aria-invalid=false placeholder=E-mail*></span><br> 
                     <span class="wpcf7-form-control-wrap contact-subject">
                     <input type=text id="mobile" name="mobile" class="wpcf7-form-control wpcf7-text input-border-bottom" aria-invalid=false placeholder=Mobile></span><br> <span class="wpcf7-form-control-wrap contact-message">
                     <textarea id="message" name="message" cols=40 rows=3 class="wpcf7-form-control wpcf7-textarea input-border-bottom" aria-invalid=false placeholder="Your Message"></textarea></span><br> 
                     <input type=submit value="send message" class="wpcf7-form-control has-spinner wpcf7-submit btn btn-small btn-deep-pink margin-30px-top xs-margin-three-top">
                  </div>
                  <div class=wpcf7-response-output aria-hidden=true></div>
               </form> 
               
            </div>
         </div>
      </div>
   </div>
</section>
<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row-full-width vc_clearfix"></div>
<section id="contact" data-vc-full-width=true data-vc-full-width-init=false class="vc_row wpb_row vc_row-fluid   wow fadeIn pofo-stretch-content pofo-stretch-row-container vc_row-o-equal-height vc_row-flex">
   <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4 vc_col-xs-12 wow fadeInUp text-center pofo-column-responsive-62622ba7aa48d animated" style="visibility: visible; animation-name: fadeInUp;">
      <div class="vc_column-inner vc_custom_1507198235145">
         <div class="wpb_wrapper">
            <div class="featurebox21 pofo-featurebox featurebox21-1">
               <div class="display-inline-block margin-25px-bottom sm-margin-15px-bottom xs-margin-10px-bottom"><i class="link-icon display-block icon-map-pin icon-medium"></i></div>
               <span class="text-extra-dark-gray display-inline-block width-100 text-small font-weight-600 alt-font margin-5px-bottom">OFFICE ADDRESS</span>
               <div class="text-extra-dark-gray xs-margin-10px-bottom center-col last-paragraph-no-margin width-70 md-width-85 sm-width-50 xs-width-60">
                  <p>Shop No. 3, Shreenath Tab., Jai Hind Nagar, Western Express Highway Service Road, Near Cheran Wine Shop, Khar East, Mumbai - 400 051</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4 vc_col-xs-12 wow fadeInUp text-center pofo-column-responsive-625692d179755" data-wow-delay= 200ms>
      <div class="vc_column-inner vc_custom_1507198271183">
         <div class=wpb_wrapper>
            <div class="featurebox21 pofo-featurebox featurebox21-2" >
               <div class="display-inline-block margin-25px-bottom sm-margin-15px-bottom xs-margin-10px-bottom"><i class="link-icon display-block icon-chat icon-medium"></i></div>
               <span class="text-extra-dark-gray display-inline-block width-100 text-small font-weight-600 alt-font margin-5px-bottom">LET'S TALK</span>
               <div class="text-extra-dark-gray xs-margin-10px-bottom center-col last-paragraph-no-margin width-70 md-width-85 sm-width-50 xs-width-60">
                  <p>Phone: +91 77383 19005</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4 vc_col-xs-12 wow fadeInUp text-center pofo-column-responsive-625692d17983f" data-wow-delay= 400ms>
      <div class="vc_column-inner ">
         <div class=wpb_wrapper>
            <div class="featurebox21 pofo-featurebox featurebox21-3" >
               <div class="display-inline-block margin-25px-bottom sm-margin-15px-bottom xs-margin-10px-bottom"><i class="link-icon display-block icon-envelope icon-medium"></i></div>
               <span class="text-extra-dark-gray display-inline-block width-100 text-small font-weight-600 alt-font margin-5px-bottom">E-MAIL US</span>
               <div class="text-extra-dark-gray xs-margin-10px-bottom center-col last-paragraph-no-margin width-70 md-width-85 sm-width-50 xs-width-60">
                  <p><a class="text-extra-dark-gray" href=mailto:team@twowaycommunications.in>team@twowaycommunications.in</a></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="vc_row-full-width vc_clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<footer id=colophon class="pofo-footer bg-extra-dark-gray site-footer" itemscope=itemscope itemtype=http://schema.org/WPFooter>
<div class="footer-strip-dark bg-extra-dark-gray pofo-footer-wrapper padding-50px-tb xs-padding-30px-tb footer-wrapper-style-2">
   <div class=container>
      <div class="row equalize xs-equalize-auto">
         <div class="col-md-6 col-sm-6 col-xs-12 text-center alt-font display-table xs-margin-10px-bottom xs-text-center text-small">
            <div class="display-table-cell vertical-align-middle footer-wrapper-text">© <?php echo date('Y') ?> All rights reserved by <a href="#" target=_blank title=ThemeZaa>Two Way Communications</a></div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12 display-table text-right xs-text-center text-small">
            <div class="display-table-cell vertical-align-middle">
               <div class="social-icon-style-8 display-inline-block vertical-align-middle footer-social-icon">
                  <ul class="small-icon no-margin-bottom">
                     <li><a href="https://www.facebook.com/Twowaycom21" class=text-link-white target=_self><i class="fab fa-facebook-f no-margin-right" aria-hidden=true></i></a></li>
                     <!-- <li><a href=https://www.twitter.com/ class=text-link-white target=_self><i class="fab fa-twitter no-margin-right" aria-hidden=true></i></a></li> -->
                     <li><a href=https://www.instagram.com/twcomm/ class=text-link-white target=_self><i class="fab fa-instagram no-margin-right" aria-hidden=true></i></a></li>
                     <li><a href="https://www.linkedin.com/company/twoway-communications" class=text-link-white target=_self><i class="fab fa-linkedin-in no-margin-right" aria-hidden=true></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="myButton"></div>
   </footer>
   <a class="scroll-top-arrow sm-display-none" href=javascript:void(0);><i class=ti-arrow-up></i></a>
   <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/venom-button.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
   <script src="https://pofo.b-cdn.net/wp-content/cache/minify/00888.js"></script> 
   <script id=pofo-main-js-extra>var pofoMain={"ajaxurl":"https:\/\/pofo.themezaa.com\/wp-admin\/admin-ajax.php","theme_url":"https:\/\/pofo.themezaa.com\/wp-content\/themes\/pofo","loading_image":"https:\/\/pofo.themezaa.com\/wp-content\/themes\/pofo\/assets\/images\/spin.gif","menu_breakpoint":"991","mobileAnimation":"","pofo_popup_video_disable":"700","message":"All Post Loaded","site_id":""};var simpleLikes={"ajaxurl":"https:\/\/pofo.themezaa.com\/wp-admin\/admin-ajax.php","like":"Like","unlike":"Unlike"};
   </script> 
   <!--[if lt IE 9]> 
   <script src=https://https://pofo.b-cdn.net/wp-content/themes/pofo/assets/js/html5shiv.js id=pofo-html5-js></script> <![endif]--> <script src="https://pofo.b-cdn.net/wp-content/cache/minify/a4327.js"></script> 
  
   <script src="https://pofo.b-cdn.net/wp-content/cache/minify/b68ea.js"></script> <script id=flying-pages-js-before>window.FPConfig={delay:3600,ignoreKeywords:["\/wp-admin","#\/wp-login.php","\/cart","add-to-cart","logout","#","?",".png",".jpeg",".jpg",".gif",".svg"],maxRPS:3,hoverDelay:50};</script> 
   <script defer src="https://pofo.b-cdn.net/wp-content/cache/minify/05dc0.js"></script> 
   <script src="https://pofo.b-cdn.net/wp-content/cache/minify/6d18f.js"></script> 
   <script id=wc-add-to-cart-js-extra>var wc_add_to_cart_params={"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/pofo.themezaa.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script> 
   <script src="https://pofo.b-cdn.net/wp-content/cache/minify/dc06c.js"></script> 
   <script id=woocommerce-js-extra>var woocommerce_params={"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};</script> 
   <script src="https://pofo.b-cdn.net/wp-content/cache/minify/63a69.js"></script> 
 <script src="https://pofo.b-cdn.net/wp-content/cache/minify/d321e.js"></script> <noscript><style>.lazyload{display:none}</style></noscript><script data-noptimize=1>window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;</script><script async data-noptimize=1 src="https://pofo.b-cdn.net/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min2fd8.js?ao_version=2.9.3"></script> <script>(function(){var c=document.body.className;c=c.replace(/woocommerce-no-js/,'woocommerce-js');document.body.className=c;})();</script> <script>(function($){$('head').append('<style id=pofo-addon-custom-css>.heading-style4.heading-1 a.heading-title-link{color:#ff214f}.mfp-iframe-holder .mfp-content{max-width:900px}.heading-style2.heading-3 a.heading-title-link{color:#fff}.heading-style2.heading-4 a.heading-title-link{color:#d6d5d5}.pofo-portfolio-1.hover-option6 .grid-item .portfolio-icon i{}.pofo-portfolio-1.hover-option6 .grid-item .portfolio-icon a:hover i{}.pofo-portfolio-1.hover-option6 .grid-item .portfolio-icon a{}.pofo-portfolio-1.hover-option6 .grid-item .portfolio-icon a:hover{}.pofo-portfolio-1.hover-option6 .grid-item .portfolio-icon a:hover{}.heading-style1.heading-10 a.heading-title-link{color:#6f6f6f}.heading-style2.heading-11 a.heading-title-link{color:#d6d5d5}.heading-style1.heading-12 a.heading-title-link{color:#6f6f6f}.heading-style2.heading-13 a.heading-title-link{color:#d6d5d5}.heading-style2.heading-14 a.heading-title-link{color:#6f6f6f}.heading-style4.heading-18 a.heading-title-link{color:#939393}.heading-style2.heading-19 a.heading-title-link{color:#fff}</style>');})(jQuery);</script> <script>(function($){$('head').append('<style id=pofo-addon-custom-responsive-css>@media (max-width:767px){.pofo-row-responsive-625692d168613{min-height:450px !important}}@media (max-width:991px){.pofo-column-responsive-625692d169551>.vc_column-inner{margin-bottom:9% !important}}@media (max-width:767px){.pofo-column-responsive-625692d169551>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d16967e>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d169811>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-button-responsive-625692d169d6a{width:100% !important}}@media (max-width:767px){.pofo-button-responsive-625692d169d9e{width:100% !important}}@media (max-width:991px){.pofo-button-responsive-625692d16a11f{margin-bottom:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a074>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a249>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a346>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d16a412>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a69d>.vc_column-inner{margin-bottom:20% !important;padding-left:24% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16a69d>.vc_column-inner{margin-bottom:50px !important;padding-top:0px !important;padding-right:0px !important;padding-bottom:0px !important;padding-left:0px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a783>.vc_column-inner{margin-bottom:20% !important;padding-left:24% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16a783>.vc_column-inner{margin-bottom:50px !important;padding-top:0px !important;padding-right:0px !important;padding-bottom:0px !important;padding-left:0px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a810>.vc_column-inner{padding-left:24% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16a810>.vc_column-inner{margin-bottom:50px !important;padding-top:0px !important;padding-right:0px !important;padding-bottom:0px !important;padding-left:0px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16a8aa>.vc_column-inner{padding-left:24% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16a8aa>.vc_column-inner{padding-top:0px !important;padding-right:0px !important;padding-bottom:0px !important;padding-left:0px !important}}@media (max-width:767px){.pofo-button-responsive-625692d16acba{margin-bottom:5px !important}}@media (max-width:991px){.pofo-button-responsive-625692d16ace9{margin-bottom:40px !important}}@media (max-width:767px){.pofo-button-responsive-625692d16ace9{margin-bottom:30px !important}}@media (max-width:1199px){.pofo-inner-row-responsive-625692d16aae9{padding-top:10% !important;padding-right:10% !important;padding-bottom:10% !important;padding-left:10% !important}}@media (max-width:991px){.pofo-inner-row-responsive-625692d16aae9{padding-top:7% !important;padding-right:7% !important;padding-bottom:7% !important;padding-left:7% !important}}@media (max-width:767px){.pofo-inner-row-responsive-625692d16aae9{padding-top:50px !important;padding-right:15px !important;padding-bottom:50px !important;padding-left:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16addb>.vc_column-inner{min-height:500px !important}}@media (max-width:767px){.pofo-column-responsive-625692d16addb>.vc_column-inner{min-height:350px !important}}@media (max-width:991px){.pofo-button-responsive-625692d16afb3{margin-bottom:15px !important}}@media (max-width:991px){.pofo-row-responsive-625692d16ae87{padding-bottom:40px !important}}@media (max-width:767px){.pofo-row-responsive-625692d16ae87{padding-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16b14f>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:767px){.pofo-column-responsive-625692d16b14f>.vc_column-inner{margin-bottom:20px !important}}@media (max-width:767px){.pofo-button-responsive-625692d16fde3{width:100% !important}}@media (max-width:991px){.pofo-text-block-responsive-625692d16fe08{width:100% !important}}@media (max-width:767px){.pofo-text-block-responsive-625692d16fe08{padding-right:0px !important;padding-left:0px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16fd61>.vc_column-inner{margin-bottom:30px !important;padding-right:12% !important;padding-left:12% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16fd61>.vc_column-inner{padding-top:0px !important;padding-right:15px !important;padding-bottom:0px !important;padding-left:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d16fe70>.vc_column-inner{padding-right:12% !important;padding-left:12% !important}}@media (max-width:767px){.pofo-column-responsive-625692d16fe70>.vc_column-inner{padding-right:15px !important;padding-left:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d17008b>.vc_column-inner{min-height:500px !important}}@media (max-width:767px){.pofo-column-responsive-625692d17008b>.vc_column-inner{min-height:350px !important}}@media (max-width:1199px){.pofo-button-responsive-625692d1703a7{width:100% !important}}@media (max-width:1199px){.pofo-text-block-responsive-625692d1703c8{width:100% !important}}@media (max-width:1199px){.pofo-column-responsive-625692d17029e>.vc_column-inner{padding-top:9% !important;padding-right:9% !important;padding-bottom:9% !important;padding-left:9% !important}}@media (max-width:991px){.pofo-column-responsive-625692d17029e>.vc_column-inner{padding-top:90px !important;padding-right:90px !important;padding-bottom:90px !important;padding-left:90px !important}}@media (max-width:767px){.pofo-column-responsive-625692d17029e>.vc_column-inner{padding-top:40px !important;padding-right:0px !important;padding-bottom:40px !important;padding-left:0px !important}}@media (max-width:991px){.pofo-feature-box-responsive-625692d170639{padding-top:50px !important;padding-right:50px !important;padding-bottom:50px !important;padding-left:50px !important}}@media (max-width:991px){.pofo-column-responsive-625692d170583>.vc_column-inner{border-bottom-width:1px !important}}@media (max-width:991px){.pofo-feature-box-responsive-625692d170733{padding-top:50px !important;padding-right:50px !important;padding-bottom:50px !important;padding-left:50px !important}}@media (max-width:991px){.pofo-column-responsive-625692d1706ac>.vc_column-inner{border-bottom-width:1px !important}}@media (max-width:991px){.pofo-feature-box-responsive-625692d170811{padding-top:50px !important;padding-right:50px !important;padding-bottom:50px !important;padding-left:50px !important}}@media (max-width:767px){.pofo-column-responsive-625692d17078f>.vc_column-inner{border-bottom-width:1px !important}}@media (max-width:991px){.pofo-feature-box-responsive-625692d1708d5{padding-top:50px !important;padding-right:50px !important;padding-bottom:50px !important;padding-left:50px !important}}@media (max-width:991px){.pofo-button-responsive-625692d170be6{margin-bottom:15px !important}}@media (max-width:991px){.pofo-button-responsive-625692d170c1b{width:100% !important}}@media (max-width:767px){.pofo-column-responsive-625692d170cb1>.vc_column-inner{min-height:200px !important}}@media (max-width:767px){.pofo-column-responsive-625692d170d60>.vc_column-inner{min-height:200px !important}}@media (max-width:767px){.pofo-column-responsive-625692d170df6>.vc_column-inner{min-height:200px !important}}@media (max-width:767px){.pofo-column-responsive-625692d170e87>.vc_column-inner{min-height:200px !important}}@media (max-width:991px){.pofo-button-responsive-625692d1711bb{margin-bottom:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d171151>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:767px){.pofo-column-responsive-625692d171151>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d1712c7>.vc_column-inner{margin-bottom:7% !important}}@media (max-width:767px){.pofo-column-responsive-625692d1712c7>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:991px){.pofo-column-responsive-625692d171689>.vc_column-inner{margin-bottom:7% !important}}@media (max-width:767px){.pofo-column-responsive-625692d171689>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:991px){.pofo-column-responsive-625692d1719ef>.vc_column-inner{margin-bottom:7% !important}}@media (max-width:767px){.pofo-column-responsive-625692d1719ef>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:767px){.pofo-button-responsive-625692d172737{margin-bottom:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d1726c2>.vc_column-inner{margin-bottom:8% !important}}@media (max-width:767px){.pofo-column-responsive-625692d1726c2>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d172851>.vc_column-inner{padding-right:0px !important;padding-left:0px !important}}@media (max-width:767px){.pofo-button-responsive-625692d17814c{margin-bottom:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d1780cd>.vc_column-inner{margin-bottom:40px !important}}@media (max-width:767px){.pofo-column-responsive-625692d1780cd>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d178298>.vc_column-inner{margin-bottom:4% !important}}@media (max-width:767px){.pofo-column-responsive-625692d178298>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d17860b>.vc_column-inner{margin-bottom:4% !important}}@media (max-width:767px){.pofo-column-responsive-625692d17860b>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d1788d5>.vc_column-inner{margin-bottom:4% !important}}@media (max-width:991px){.pofo-column-responsive-625692d178cd5>.vc_column-inner{min-height:550px !important}}@media (max-width:767px){.pofo-column-responsive-625692d178cd5>.vc_column-inner{min-height:350px !important}}@media (max-width:767px){.pofo-button-responsive-625692d178df0{margin-bottom:25px !important}}@media (max-width:1199px){.pofo-column-responsive-625692d178d21>.vc_column-inner{padding-top:50px !important;padding-right:50px !important;padding-bottom:50px !important;padding-left:50px !important}}@media (max-width:991px){.pofo-column-responsive-625692d178d21>.vc_column-inner{padding-top:80px !important;padding-right:80px !important;padding-bottom:80px !important;padding-left:80px !important}}@media (max-width:767px){.pofo-column-responsive-625692d178d21>.vc_column-inner{padding-top:30px !important;padding-right:15px !important;padding-bottom:30px !important;padding-left:15px !important}}@media (max-width:991px){.pofo-column-responsive-625692d179634>.vc_column-inner{margin-bottom:50px !important}}@media (max-width:767px){.pofo-column-responsive-625692d179634>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:991px){.pofo-column-responsive-625692d179755>.vc_column-inner{margin-bottom:50px !important}}@media (max-width:767px){.pofo-column-responsive-625692d179755>.vc_column-inner{margin-bottom:30px !important}}@media (max-width:767px){.pofo-column-responsive-625692d17983f>.vc_column-inner{margin-bottom:30px !important}}</style>');})(jQuery);</script> <div class="buy-theme alt-font sm-display-none"> <a href="mailto:team@twowaycommunications.in" target=_blank> <i class=ti-email></i> <span>team@twowaycommunications.in </span> </a></div>
 <div class="all-demo alt-font sm-display-none"> <a href="tel:+917738319005"> <i class=ti-mobile></i> <span>+91 77383 19005</span> </a></div><link rel=dns-prefetch href=https://fonts.gstatic.com/><link rel=preconnect href=https://fonts.gstatic.com/ crossorigin=anonymous>
   <script>(function($){"use strict";jQuery(document).ready(function(){if($(window).width()<1199){}else if($(window).width()<767){}else if($(window).width()<374){}});})(jQuery);</script> </body>

</html>
<?php $base_url =  "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>      
<input type="hidden" name="base_url" id="base_url" value="<?php echo $base_url; ?>">
      <br>
<script type="text/javascript">
    $('#enquiry').submit(function(e) {
            e.preventDefault();

            var form_data = new FormData($(this)[0]);
            var base_url = $('#base_url').val();
            
            $.ajax({
                type: 'post',
                data: form_data,
                processData: false,
                contentType: false,
                url: base_url+'/enquiry.php',
                success: function(data) {
                    var obj = $.parseJSON(data);
                    
                    if (obj.errorFlag == false) {
                     alert(obj.message);
                     window.location.reload();
                    } else if (obj.errorFlag == true) {
                        $('.error').remove();
                        $.each(obj.messages, function(key, value) {
                            var element = $('#' + key);
                            value = '<p class="error">'+value+'</p>';
                            element.closest('.wpcf7-form-control').after(value);
                            
                            
                        });
                    }

                }

            });

        });
</script>
<script type="text/javascript">

    $('#myButton').venomButton({
        phone: '+917738319005',
        popupMessage: 'Hello, how can we help you?',
        message: "",
        showPopup: true,
        position: "right",
        linkButton: false,
        showOnIE: false,
        headerTitle: 'Two Way Communications',
        headerColor: '#25d366',
        backgroundColor: '#25d366',
        buttonImage: '<img src="images/whatsapp.svg" />'
    });

</script>