@extends('layouts.main')
@section('content')
@section('title', 'Home')
<style>
   .custom-font
   {
   font-size: 80px!important;
   margin-right:20px!important;
   margin-right:10px!important;
   }
   .widthinput
   {
   height:48px!important;
   }
   .search-btn{
   background-color:#cc6118;
   box-shadow: none;
   border: #cc6118
   }
   .modal{
   z-index: -1;
   }
   .mobileClass
   {
   background-color:rgba(204, 97, 25, 0.9); 
   font-size:15px;
   width:80px; 
   text-align:center; 
   border-radious:20px;
   }
</style>
<div id="wrapper">
@include('layouts.header')
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="3091" class="elementor elementor-3091">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-c31469c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c31469c" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bde34a8" data-id="bde34a8" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-0882a80 elementor-widget elementor-widget-slider_revolution" data-id="0882a80" data-element_type="widget" data-widget_type="slider_revolution.default">
                        <div class="elementor-widget-container">
                           <div class="wp-block-themepunch-revslider">
                              <p class="rs-p-wp-fix"></p>
                              <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                 <rs-module id="rev_slider_1_1" style="" data-version="6.6.14">
                                    <rs-slides style="overflow: hidden; position: absolute;">
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-1" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B1.png')}}" data-duration="3000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B1.png')}}" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B1.png')}}"
                                             data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-2" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B2.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B2.png')}}" alt="(LHD) KIA PICANTO 1.2P AT MY2023 – SPARKLING SILVER" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B2.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-3" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B3.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B3.png')}}" alt="(LHD) KIA K5 2.0P AT MY2023 – WHITE" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B3.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-4" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B4.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B4.png')}}" alt="(LHD) NISSAN KICKS 1.6P AT MY2022 - BLACK" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B4.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-5" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B5.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B5.png')}}" alt="(LHD) CHEVROLET CAPTIVA PREMIER 7-SEATER 1.5P AT MY2023" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B5.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                       </rs-slide>
                                    </rs-slides>
                                 </rs-module>
                              </rs-module-wrap>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section  elementor-element" >
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column ">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-0cca101 elementor-widget elementor-widget-motors-car-listing-tabs" >
                        <div class="elementor-widget-container">
                           <div class="motors-elementor-widget car-listing-tabs-unit ">
                              <div class="car-listing-top-part">
                                 <div class="found-cars-cloned found-cars-51281 position-right hide-on-mobile"></div>
                                 <div class="title text-center">
                                    <h2><span style="color: #cc6118;">VEHICLES</span></h2>
                                 </div>
                                 </br>
                              </div>
                           </div>
                           <div id="car-listing-main-part" style="margin-top: 40px;margin-bottom: 40px">
                              <div class="row row-4 car-listing-row">
                                 <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-template-front-loop">
                                    <a href="{{route('vehicle-detail-kia-k5')}}" class="rmv_txt_drctn xx">
                                       <div class="image">
                                          <img width="350" height="135" src="{{asset ('Thumbnails/TN - K5.jpg')}}"
                                             class="attachment-stm-img-350-135 size-stm-img-350-135"
                                             alt="(LHD) KIA K5 2.0P AT MY2023 – WHITE" decoding="async"
                                             data-retina="{{asset ('Thumbnails/TN - K5.jpg')}}"
                                             srcset="{{asset ('Thumbnails/TN - K5.jpg')}} 350w, {{asset ('Thumbnails/TN - K5.jpg')}} 510w"
                                             sizes="(max-width: 350px) 100vw, 350px" />
                                       </div>
                                       <div class="listing-car-item-meta">
                                          <div class="car-meta-top heading-font clearfix">
                                             <div class="car-title">KIA K5</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-template-front-loop">
                                    <a href="{{route('picantodetails')}}" class="rmv_txt_drctn xx">
                                       <div class="image">
                                          <img loading="lazy" width="350" height="135" src="{{asset ('Thumbnails/TN - PICANTO.jpg')}}"
                                             class="attachment-stm-img-350-135 size-stm-img-350-135"
                                             alt="(LHD) KIA PICANTO 1.2P AT MY2023 – SPARKLING SILVER" decoding="async"
                                             data-retina="{{asset ('Thumbnails/TN - PICANTO.jpg')}}"
                                             srcset="{{asset ('Thumbnails/TN - PICANTO.jpg')}} 350w, {{asset ('Thumbnails/TN - PICANTO.jpg')}} 510w" sizes="(max-width: 255px) 100vw, 255px" />
                                       </div>
                                       <div class="listing-car-item-meta">
                                          <div class="car-meta-top heading-font clearfix">
                                             <div class="car-title">KIA PICANTO</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-template-front-loop">
                                    <a href="{{route('details')}}" class="rmv_txt_drctn xx">
                                       <div class="image">
                                          <img loading="lazy" width="350" height="135" src="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                             class="attachment-stm-img-350-135 size-stm-img-350-135" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE"
                                             decoding="async" data-retina="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                             srcset="{{asset ('Thumbnails/TN - ACCENT.jpg')}} 350w, {{asset ('Thumbnails/TN - ACCENT.jpg')}} 510w"
                                             sizes="(max-width: 350px) 100vw, 350px" />
                                       </div>
                                       <div class="listing-car-item-meta">
                                          <div class="car-meta-top heading-font clearfix">
                                             <div class="car-title">HYUNDAI ACCENT</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="row row-4 car-listing-row">
                                 <div class="col-md-2 col-sm-2 col-xs-12 col-xxs-12 stm-template-front-loop">
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-template-front-loop">
                                    <a href="{{route('vehicle-detail-nissan-kicks')}}" class="rmv_txt_drctn xx">
                                       <div class="image">
                                          <img width="350" height="135" src="{{asset ('Thumbnails/TN - KICKS.jpg')}}"
                                             class="attachment-stm-img-350-135 size-stm-img-350-135" alt="(LHD) NISSAN KICKS 1.6P AT MY2022 - BLACK"
                                             decoding="async" data-retina="{{asset ('Thumbnails/TN - KICKS.jpg')}}"
                                             srcset="{{asset ('Thumbnails/TN - KICKS.jpg')}} 350w, {{asset ('Thumbnails/TN - KICKS.jpg')}} 510w"
                                             sizes="(max-width: 350px) 100vw, 350px" />
                                       </div>
                                       <div class="listing-car-item-meta">
                                          <div class="car-meta-top heading-font clearfix">
                                             <div class="car-title">NISSAN KICKS</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-template-front-loop">
                                    <a href="{{route('chevroletdetails')}}" class="rmv_txt_drctn xx">
                                       <div class="image">
                                          <img width="350" height="135" src="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}}"
                                             class="attachment-stm-img-350-135 size-stm-img-350-135" alt="(LHD) Chevrolet Captiva Premier 7-Seater 1.5P AT MY2023"
                                             decoding="async" data-retina="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}}"
                                             srcset="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 350w, {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 510w"
                                             sizes="(max-width: 350px) 100vw, 350px" />
                                       </div>
                                       <div class="listing-car-item-meta">
                                          <div class="car-meta-top heading-font clearfix">
                                             <div class="car-title">Chevrolet Captiva</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-2 col-sm-2 col-xs-12 col-xxs-12 stm-template-front-loop">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-64ac772 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="64ac772" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2230996" data-id="2230996" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-2160b2b elementor-widget elementor-widget-motors-listings-carousel" data-id="2160b2b" data-element_type="widget" data-widget_type="motors-listings-carousel.default">
                        <div class="elementor-widget-container">
                           <div class="stm-elementor_listings_carousel view_type_carousel style_1">
                              <div class="title heading-font">
                                 LEASING
                              </div>
                              <div class="colored-separator">
                                 <div class="first-long stm-base-background-color"></div>
                                 <div class="last-short stm-base-background-color"></div>
                              </div>
                              <div style="color:white;" class="listing-car-items-units swiper-container items-per-view-3" id="selc-24085">
                                 <span style="color:#cc761a;">MILELE</span> Car Rental company strives to offer clients affordable corporate and individual long term lease
                                 solutions, which takes away all the administrative hassles. No matter if you are a small or medium-sized business, or an individual 
                                 looking for a personal vehicle. We provide efficient solutions that are both flexible and customizable at a cost-effective price. 
                                 The biggest up-side of leasing is that you do not have to worry about maintenance, servicing, insurance, and renewals. Our friendly, 
                                 experienced, and professional team can tailor make a solution that fits your needs and is not heavy on the pocket.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr>
      </div>
   </div>
</div>
@include('layouts.footer')
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready( function() 
   {
      var element = document.getElementById("home");
      element.classList.add("current_page_item");
   });
</script>
<script>
   setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[600],gw:[1240],gh:[600],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider11"]!==undefined) {window.RS_MODULES.modules["revslider11"].once = false;window.revapi1 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
</script>
<script>
   (function ($) {
       "use strict";
         $(window).on('elementor/frontend/init', function () {
              let swiper = new Swiper('#selc-24085', {
   
                   simulateTouch: false,
   
   
   
                   slidesPerGroup: 1,
                   centerInsufficientSlides: true,
   
               slidesPerView: 1,
   
               breakpoints: {
                   640: {
                       slidesPerView: 2,
                   },
                   992: {
                       slidesPerView: 3,
                   }
               },
                   navigation: {
                   nextEl: '.stm-swiper-next',
                   prevEl: '.stm-swiper-prev',
               },
   
                   pagination: {
                   el: '.swiper-pagination',
                   clickable: true,
               },
               });
   
          });
     }(jQuery));
</script>
@endsection
