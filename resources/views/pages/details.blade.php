@extends('layouts.main')
@section('content')
    @section('title', 'HYUNDAI ACCENT')
@include('layouts.header')
</br>
</br>
<div class="stm-single-car-page single-listings-template" style="background-position: 0px 200px;">
   <div class="container">
      <section class="wpb-content-wrapper">
         <div class="row">
            <div class="stm-vc-single-car-content-left wpb_column vc_column_container col-lg-9 col-md-12 col-sm-12">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <h1 class="title stm_listing_title  vc_custom_1686213543067 h2">
                     HYUNDAI ACCENT - 2023
                     </h1>
                     <div class="stm-car-carousels">
                        <!--New badge with videos-->
                        <!-- <div class="stm-car-medias">
                           <div class="stm-listing-videos-unit stm-car-videos-494">
                              <i class="fas fa-film"></i>
                              <span>1Video</span>
                           </div>
                        </div>
                        <script>
                           jQuery(document).ready(function () {

                               jQuery(".stm-car-videos-494").on('click', function () {
                                   jQuery(this).lightGallery({
                                       dynamic: true,
                                       dynamicEl: [
                                                  {
                                               src: "https://www.youtube.com/embed/WoOF0gkUEP0"
                                           },
                                              ],
                                       download: false,
                                       mode: 'lg-fade',
                                   })
                               }); //click
                           }); //ready

                        </script> -->
                        <!-- <div class="special-label h5">
                           Special
                        </div> -->
                        <div class="stm-big-car-gallery owl-carousel owl-loaded owl-drag">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5586px;">
                                 <div class="owl-item active" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-495">
                                       <a href="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img width="795" height="463" src="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                       class="img-responsive wp-post-image" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE" decoding="async"
                                       srcset="{{asset ('Thumbnails/TN - ACCENT.jpg')}} 795w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 150w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 300w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 768w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 350w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 600w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 500w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 796w" sizes="(max-width: 795px) 100vw, 795px">				</a>
                                    </div>
                                 </div>
                                 <!-- <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image " data-id="big-image-1204">
                                       <a class="fancy-iframe" data-iframe="true" data-src="">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_1.jpg')}}" class="img-responsive"
                                       alt="">
                                       </a>
                                    </div>
                                 </div> -->
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1204">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_1.jpg')}}" class="stm_fancybox external"
                                       rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_1.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1205">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_2.jpg')}}" class="stm_fancybox external"
                                       rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_2.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1206">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_3.jpg')}}" class="stm_fancybox external"
                                       rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_3.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1207">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_4.jpg')}}" class="stm_fancybox external"
                                       rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_4.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1208">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_5.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_5.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1209">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_6.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_6.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1210">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_7.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_7.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1211">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1212">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/d2023Hyundi-Accent_7.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/d2023Hyundi-Accent_7.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1213">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_9.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_9.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 798px;">
                                    <div class="stm-single-image" data-id="big-image-1214">
                                       <a href="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_10.jpg')}}"
                                       class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_10.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="stm-thumbs-car-gallery owl-carousel owl-loaded owl-drag">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1148px;">
                                 <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-495">
                                       <img width="350" height="205" src="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                       class="img-responsive wp-post-image" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE" decoding="async" loading="lazy"
                                       srcset="{{asset ('Thumbnails/TN - ACCENT.jpg')}} 350w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 150w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 300w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 768w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 795w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 600w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 500w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 700w,
                                       {{asset ('Thumbnails/TN - ACCENT.jpg')}} 796w" sizes="(max-width: 350px) 100vw, 350px">
                                    </div>
                                 </div>
                                 <!-- <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image " data-id="big-image-1204">
                                       <a class="fancy-iframe" data-iframe="true" data-src="">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_1.jpg')}}" alt="">
                                       </a>
                                    </div>
                                 </div> -->
                                 <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1204">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_1.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1205">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_2.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1206">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_3.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item active" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1207">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_4.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1208">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_5.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1209">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_6.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1210">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent_7.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1211">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/2023Hyundi-Accent.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1212">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/d2023Hyundi-Accent_7.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1213">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_9.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 142px; margin-right: 22px;">
                                    <div class="stm-single-image" id="big-image-1214">
                                       <img src="{{asset ('Rental Cars Pictures/Accent/16-9/milel cars21-09_10.jpg')}}"
                                       alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="owl-nav">
                              <div class="owl-prev disabled"></div>
                              <div class="owl-next"></div>
                           </div>
                           <div class="owl-dots disabled"></div>
                        </div>
                     </div>
                     <!--Enable carousel-->
                     <script>
                        jQuery(document).ready(function ($) {
                        	var big = jQuery('.stm-big-car-gallery');
                        	var small = jQuery('.stm-thumbs-car-gallery');
                        	var flag = false;
                        	var duration = 800;

                        	var owlRtl = false;
                        	if (jQuery('body').hasClass('rtl')) {
                        		owlRtl = true;
                        	}

                        	big
                        		.owlCarousel({
                        			rtl: owlRtl,
                        			items: 1,
                        			smartSpeed: 800,
                        			dots: false,
                        			nav: false,
                        			margin: 0,
                        			autoplay: false,
                        			loop: false,
                        			responsiveRefreshRate: 1000
                        		})
                        		.on('changed.owl.carousel', function (e) {
                        			jQuery('.stm-thumbs-car-gallery .owl-item').removeClass('current');
                        			jQuery('.stm-thumbs-car-gallery .owl-item').eq(e.item.index).addClass('current');
                        			if (!flag) {
                        				flag = true;
                        				small.trigger('to.owl.carousel', [e.item.index, duration, true]);
                        				flag = false;
                        			}
                        		});

                        	small
                        		.owlCarousel({
                        			rtl: owlRtl,
                        			items: 5,
                        			smartSpeed: 800,
                        			dots: false,
                        			margin: 22,
                        			autoplay: false,
                        			nav: true,
                        			navElement: 'div',
                        			loop: false,
                        			navText: [],
                        			responsiveRefreshRate: 1000,
                        			responsive: {
                        				0: {
                        					items: 2
                        				},
                        				500: {
                        					items: 4
                        				},
                        				768: {
                        					items: 5
                        				},
                        				1000: {
                        					items: 5
                        				}
                        			}
                        		})
                        		.on('click', '.owl-item', function (event) {
                        			big.trigger('to.owl.carousel', [jQuery(this).index(), 400, true]);
                        		});

                        	if (jQuery('.stm-thumbs-car-gallery .stm-single-image').length < 6) {
                        		jQuery('.stm-single-car-page .owl-controls').hide();
                        		jQuery('.stm-thumbs-car-gallery').css({'margin-top': '22px'});
                        	}

                        	jQuery('.stm-big-car-gallery .owl-dots').remove();
                        	jQuery('.stm-big-car-gallery .owl-nav').remove();

                        	jQuery('.stm-thumbs-car-gallery .owl-nav .owl-prev').on('click', function (e) {
                        		big.trigger('prev.owl.carousel');
                        	});

                        	jQuery('.stm-thumbs-car-gallery .owl-nav .owl-next').on('click', function (e) {
                        		big.trigger('next.owl.carousel');
                        	});
                        })
                     </script>

                     <div class="wpb_tabs wpb_content_element" data-interval="0">
                        <div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs stm_tabs_style_1 vc_clearfix ui-corner-all ui-widget ui-widget-content">
                           <ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist">
                              <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
                              aria-controls="tab-90676444-d4f2-8" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                                 <a href="#tab-90676444-d4f2-8" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Dimensions</a>
                              </li>
                            </ul>
                           <div id="tab-90676444-d4f2-8" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <!-- <h4 style="margin-bottom: 21px; font-weight: 400; line-height: 22px;"></h4> -->
                                    <!-- <p>Etiam sit amet ex pharetra, venenatis ante vehicula, gravida sapien. Fusce eleifend vulputate nibh, non cursus augue placerat pellentesque. Sed venenatis risus nec felis mollis, in pharetra urna euismod. Morbi aliquam ut turpis sit amet ultrices. Vestibulum mattis blandit nisl, et tristique elit scelerisque nec. Fusce eleifend laoreet dui eget aliquet. Ut rutrum risus et nunc pretium scelerisque. Fusce viverra, ligula quis pellentesque interdum, leo felis congue dui, ac accumsan sem nulla id lorem. Praesent ut tristique dui, nec condimentum lacus. Maecenas lobortis ante id egestas placerat. Nullam at ultricies lacus. Nam in nulla consectetur, suscipit mauris eu, fringilla augue. Phasellus gravida, dui quis dignissim tempus, tortor orci tristique leo, ut congue diam ipsum at massa. Pellentesque ut vestibulum erat. Donec a felis eget</p> -->
                                    <!-- <blockquote> -->
                                       <p>Size (l x b x h) : 4440 x 1729 x 1460 </p>
                                       <p>No. Of seats : 5 </p>
                                       <p>Wheels : 15'' </p>
                                       <p>Fuel tank (l) : 4 </p>
                                    <!-- </blockquote> -->
                                    <!-- <p>Maecenas lobortis ante id egestas placerat. Nullam at ultricies lacus. Nam in nulla consectetur, suscipit mauris eu, fringilla augue. Phasellus gravida, dui quis dignissim tempus, tortor orci tristique leo, ut congue diam ipsum at massa. Pellentesque ut vestibulum erat. Donec a felis eget tellus laoreet ultrices.</p> -->
                                 </div>
                              </div>
                              <h4 style="text-align: left" class="vc_custom_heading vc_custom_1448521543990"> FEATURES</h4>
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <div class="lists-inline">
                                       <ul class="list-style-2" style="font-size: 13px;">
                                          <li><span style="color: #232628;">Rear ac vent</span></li>
                                          <li><span style="color: #232628;">Glove box cooling</span></li>
                                          <li><span style="color: #232628;">Audio - radio/mp3</span></li>
                                          <li><span style="color: #232628;">Tire pressure monitor</span></li>
                                          <li><span style="color: #232628;">Rear parking sensor</span></li>

                                       </ul>
                                       <ul class="list-style-2" style="font-size: 13px;">
                                          <li><span style="color: #232628;">AUX + USB port</span></li>
                                          <li><span style="color: #232628;">Blue tooth</span></li>
                                          <li><span style="color: #232628;">Central door lock</span></li>
                                          <li><span style="color: #232628;">Driver and front passenger airbag</span></li>
                                       </ul>
                                       <ul class="list-style-2" style="font-size: 13px;">
                                          <li><span style="color: #232628;">Manual air conditioner</span></li>
                                          <li><span style="color: #232628;">Mudguard</span></li>
                                          <li><span style="color: #232628;">Front and rear fog lamp</span></li>
                                          <li><span style="color: #232628;">Power mirror with turn signal indicator</span></li>
                                       </ul>
                                       <ul class="list-style-2" style="font-size: 13px;">
                                          <li><span style="color: #232628;">Power windows</span></li>

                                          <li><span style="color: #232628;">Abs and esp.</span></li>
                                          <li><span style="color: #232628;">Keyless entry</span></li>
                                          <li><span style="color: #232628;">Audio control on steering</span></li>

                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
{{--                           <div id="tab-745aa3c6-a316-2" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">--}}
{{--                              <style>--}}
{{--                              </style>--}}
{{--                              <div class="stm-tech-infos">--}}
{{--                                 <div class="stm-tech-title">--}}
{{--                                    <i class="stm-icon-engine stm_icon_class_84898" style="font-size:27px;"></i>--}}
{{--                                    <div class="title h5">--}}
{{--                                       Engine			--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <table>--}}
{{--                                    <tbody>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Layout/number of cylinders				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             11 700 ml				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Displacement				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             2015				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Engine layout				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             RWD				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Horespower				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             1.8L cyls				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             @ rpm				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             266 lb.-ft.				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Torque				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             12.5 : 1				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Compression ratio				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             Gasoline				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                    </tbody>--}}
{{--                                 </table>--}}
{{--                              </div>--}}
{{--                              <style>--}}
{{--                              </style>--}}
{{--                              <div class="stm-tech-infos">--}}
{{--                                 <div class="stm-tech-title">--}}
{{--                                    <i class="stm-icon-speedometr3 stm_icon_class_16801" style="font-size:28px;"></i>--}}
{{--                                    <div class="title h5">--}}
{{--                                       Performance			--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <table>--}}
{{--                                    <tbody>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Top Track Speed				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             173 mph				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             0 - 70 mph				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             4.8 s				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                    </tbody>--}}
{{--                                 </table>--}}
{{--                              </div>--}}
{{--                              <style>--}}
{{--                              </style>--}}
{{--                              <div class="stm-tech-infos">--}}
{{--                                 <div class="stm-tech-title">--}}
{{--                                    <i class="stm-icon-transmission2 stm_icon_class_23081" style="font-size:35px;"></i>--}}
{{--                                    <div class="title h5">--}}
{{--                                       Transmission			--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <table>--}}
{{--                                    <tbody>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             type				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             Automatic				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                       <tr>--}}
{{--                                          <td>--}}
{{--                                             <span class="text-transform ">--}}
{{--                                             Displacement				</span>--}}
{{--                                          </td>--}}
{{--                                          <td class="text-right">--}}
{{--                                             <span class="h6">--}}
{{--                                             6 Speed				</span>--}}
{{--                                          </td>--}}
{{--                                       </tr>--}}
{{--                                    </tbody>--}}
{{--                                 </table>--}}
{{--                              </div>--}}
{{--                           </div>--}}
{{--                           <div id="tab-1446536246604-2-8" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">--}}
{{--                              <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1445931891055">--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-6">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h4 style="color: #252628;text-align: left;font-family:Montserrat;font-weight:400;font-style:normal" class="vc_custom_heading vc_custom_1448521810500">Nulla consequat enim.</h4>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-1">--}}
{{--                                                   <li>Pellentesque lacus urna, feugiat non consectetur nec.</li>--}}
{{--                                                   <li>Aliquam sem neque, efficitur atero lectus vitae.</li>--}}
{{--                                                   <li>Pellentesque erat libero, eleifend sit amet felis ido.</li>--}}
{{--                                                   <li>Maecenas eget consectetur quam. Vestibulum ligula.</li>--}}
{{--                                                   <li>Praesent lorem sapien, vestibulum eget aliquet et.</li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-6">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h4 style="color: #252628;text-align: left;font-family:Montserrat;font-weight:400;font-style:normal" class="vc_custom_heading vc_custom_1448521817227">Consequat massa</h4>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-1">--}}
{{--                                                   <li>Pellentesque lacus urna, feugiat non consectetur nec.</li>--}}
{{--                                                   <li>Aliquam sem neque, efficitur atero lectus vitae.</li>--}}
{{--                                                   <li>Pellentesque erat libero, eleifend sit amet felis ido.</li>--}}
{{--                                                   <li>Maecenas eget consectetur quam. Vestibulum ligula.</li>--}}
{{--                                                   <li>Praesent lorem sapien, vestibulum eget aliquet et.</li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
{{--                              <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1445932251080  vc_custom_1445932251080"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>--}}
{{--                              <div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h5 style="text-align: left" class="vc_custom_heading vc_custom_1448521832735">INTERIOR DESIGN</h5>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-2" style="font-size: 13px;">--}}
{{--                                                   <li><span style="color: #232628;">Auxiliary heating</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Bluetooth</span></li>--}}
{{--                                                   <li><span style="color: #232628;">CD player</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Central locking</span></li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h5 style="text-align: left" class="vc_custom_heading vc_custom_1448521838574">SAFETY FEATURES</h5>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-2" style="font-size: 13px;">--}}
{{--                                                   <li><span style="color: #232628;">Head-up display</span></li>--}}
{{--                                                   <li><span style="color: #232628;">MP3 interface</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Navigation system</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Panoramic roof</span></li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h5 style="text-align: left" class="vc_custom_heading vc_custom_1448521845021">EXTERIOR FEATURES</h5>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-2" style="font-size: 13px;">--}}
{{--                                                   <li><span style="color: #232628;">Alloy wheels</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Electric side mirror</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Sports package</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Sports suspension</span></li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <h5 style="text-align: left" class="vc_custom_heading vc_custom_1448521851214">EXTRA FEATURES</h5>--}}
{{--                                          <div class="wpb_text_column wpb_content_element ">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <ul class="list-style-2" style="font-size: 13px;">--}}
{{--                                                   <li><span style="color: #232628;">MP3 interface</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Navigation system</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Panoramic roof</span></li>--}}
{{--                                                   <li><span style="color: #232628;">Parking sensors</span></li>--}}
{{--                                                </ul>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
{{--                           </div>--}}
{{--                           <div id="tab-1446536305473-3-8" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">--}}
{{--                              <div style=" width: 100%;  height: 366px;" id="stm_map-31793" class="stm_gmap ">--}}
{{--                                 <div style="height: 100%; width: 100%;">--}}
{{--                                    <div style="overflow: hidden;"></div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
{{--                              <script>--}}
{{--                                 jQuery(document).ready(function ($) {--}}
{{--                                 	var center, map;--}}
{{--                                 	function init() {--}}
{{--                                 		var mapStyles = [--}}
{{--                                 			{--}}
{{--                                 				"featureType": "all",--}}
{{--                                 				"elementType": "all",--}}
{{--                                 				"stylers": [--}}
{{--                                 					{--}}
{{--                                 						"visibility": "on"--}}
{{--                                 					}--}}
{{--                                 				]--}}
{{--                                 			}--}}
{{--                                 		];--}}
{{--                                 --}}
{{--                                 		--}}
{{--                                 		center = new google.maps.LatLng(39.070379, -96.281433);--}}
{{--                                 		var mapOptions = {--}}
{{--                                 			zoom: 10,--}}
{{--                                 			center: center,--}}
{{--                                 			styles: mapStyles,--}}
{{--                                 			scrollwheel: true,--}}
{{--                                 			zoomControl: true,--}}
{{--                                 			mapTypeControl: true,--}}
{{--                                 			scaleControl: true,--}}
{{--                                 			streetViewControl: true,--}}
{{--                                 			rotateControl: true,--}}
{{--                                 			fullscreenControl: true				};--}}
{{--                                 		var mapElement = document.getElementById('stm_map-31793');--}}
{{--                                 		map = new google.maps.Map(mapElement, mapOptions);--}}
{{--                                 		var marker = new google.maps.Marker({--}}
{{--                                 			position: center,--}}
{{--                                 			icon: 'https://motors.stylemixthemes.com/wp-content/themes/motors-child-demo/assets/images/map-marker.png',--}}
{{--                                 			map: map--}}
{{--                                 		});--}}
{{--                                 --}}
{{--                                 						var infowindow = new google.maps.InfoWindow({--}}
{{--                                 			content: '<h6>1208 Road 345, Allen, KS 66833, United States</h6>',--}}
{{--                                 			pixelOffset: new google.maps.Size(0,71),--}}
{{--                                 			boxStyle: {--}}
{{--                                 				width: "320px"--}}
{{--                                 			}--}}
{{--                                 		});--}}
{{--                                 --}}
{{--                                 		marker.addListener('click', function() {--}}
{{--                                 			infowindow.open(map, marker);--}}
{{--                                 			map.setCenter(center);--}}
{{--                                 		});--}}
{{--                                 					}--}}
{{--                                 --}}
{{--                                 	$('.vc_tta-tab').on('click', function(){--}}
{{--                                 		if(typeof map != 'undefined' && typeof center != 'undefined') {--}}
{{--                                 			setTimeout(function () {--}}
{{--                                 				google.maps.event.trigger(map, "resize");--}}
{{--                                 				map.setCenter(center);--}}
{{--                                 			}, 1000);--}}
{{--                                 		}--}}
{{--                                 	})--}}
{{--                                 --}}
{{--                                 	$('a').on('click', function(){--}}
{{--                                 		if(typeof $(this).data('vc-accordion') !== 'undefined' && typeof map != 'undefined' && typeof center != 'undefined') {--}}
{{--                                 			setTimeout(function () {--}}
{{--                                 				google.maps.event.trigger(map, "resize");--}}
{{--                                 				map.setCenter(center);--}}
{{--                                 			}, 1000);--}}
{{--                                 		}--}}
{{--                                 	})--}}
{{--                                 --}}
{{--                                 	$('.wpb_tour_tabs_wrapper.ui-tabs ul.wpb_tabs_nav > li').on('click', function(){--}}
{{--                                 		if(typeof map != 'undefined' && typeof center != 'undefined') {--}}
{{--                                 			setTimeout(function () {--}}
{{--                                 				google.maps.event.trigger(map, "resize");--}}
{{--                                 				map.setCenter(center);--}}
{{--                                 			}, 1000);--}}
{{--                                 		}--}}
{{--                                 	})--}}
{{--                                 --}}
{{--                                 	$(window).on('resize', function(){--}}
{{--                                 		if(typeof map != 'undefined' && typeof center != 'undefined') {--}}
{{--                                 			setTimeout(function () {--}}
{{--                                 				map.setCenter(center);--}}
{{--                                 			}, 1000);--}}
{{--                                 		}--}}
{{--                                 	});--}}
{{--                                 --}}
{{--                                 	// initialize map--}}
{{--                                 	init();--}}
{{--                                 });--}}
{{--                              </script>--}}
{{--                              <!--Infowindow styles-->--}}
{{--                              <style type="text/css">--}}
{{--                                 /* white background and box outline */--}}
{{--                                 .gm-style > div:first-child > div + div > div:last-child > div > div:first-child > div {--}}
{{--                                 border: none !important;--}}
{{--                                 box-shadow: rgba(0, 0, 0, 0.1) 5px 5px 5px !important;--}}
{{--                                 }--}}
{{--                                 /* arrow first */--}}
{{--                                 .gm-style > div:first-child > div + div > div:last-child > div > div:first-child > div > div:first-child > div {--}}
{{--                                 left: 3px !important;--}}
{{--                                 transform: skewX(36deg) !important;--}}
{{--                                 box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px !important;--}}
{{--                                 z-index: 40;--}}
{{--                                 }--}}
{{--                                 /* arrow second */--}}
{{--                                 .gm-style > div:first-child > div + div > div:last-child > div > div:first-child > div > div:nth-child(2) > div {--}}
{{--                                 left: 2px !important;--}}
{{--                                 transform: skewX(-36deg) !important;--}}
{{--                                 box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px !important;--}}
{{--                                 z-index: 40;--}}
{{--                                 }--}}
{{--                                 .gm-style > div:first-child > div + div > div:last-child > div > div:first-child > div:first-child {--}}
{{--                                 display: none !important;--}}
{{--                                 }--}}
{{--                                 .gm-style > div:first-child > div + div > div:last-child > div > div:first-child > div:nth-child(2){--}}
{{--                                 background-color: transparent !important;--}}
{{--                                 box-shadow: none !important;--}}
{{--                                 }--}}
{{--                                 .gm-style .gm-style-iw {--}}
{{--                                 padding: 10px 10px 5px 10px;--}}
{{--                                 min-height: 54px;--}}
{{--                                 width: 240px !important;--}}
{{--                                 }--}}
{{--                                 .gm-style .gm-style-iw > div > div {--}}
{{--                                 overflow: hidden !important;--}}
{{--                                 }--}}
{{--                                 .gm-style .gm-style-iw h6 {--}}
{{--                                 margin-bottom: 0 !important;--}}
{{--                                 font-weight: 400 !important;--}}
{{--                                 }--}}
{{--                              </style>--}}
{{--                           </div>--}}
{{--                           <div id="tab-1446536320841-4-6" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">--}}
{{--                              <div class="vc_row wpb_row vc_inner vc_row-fluid single-car-form">--}}
{{--                                 <div class="stm-border-right wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <div class="icon-box  vc_custom_1448521886982 icon_box_92403 stm-layout-box-car_dealer " style="color:#232628">--}}
{{--                                             <div class="boat-line"></div>--}}
{{--                                             <div class="icon boat-third-color icon_element_94543  vc_custom_1448521886977" style="font-size:27px;--}}
{{--                                                color:#cc621a; 				">--}}
{{--                                                <i class="fa fa-envelope-o"></i>--}}
{{--                                             </div>--}}
{{--                                             <div class="icon-text">--}}
{{--                                                <h4 class="title heading-font" style="color:#232628">--}}
{{--                                                   Contact Information		--}}
{{--                                                </h4>--}}
{{--                                             </div>--}}
{{--                                             <div class="clearfix"></div>--}}
{{--                                          </div>--}}
{{--                                          <style>--}}
{{--                                             .icon_element_94543 i::before {--}}
{{--                                             color: #cc621a!important;--}}
{{--                                             }--}}
{{--                                             .icon_box_92403 {--}}
{{--                                             background-color: #ffffff;--}}
{{--                                             }--}}
{{--                                             }--}}
{{--                                             .icon_box_92403 .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(255,255,255, 0.9);--}}
{{--                                             }--}}
{{--                                             .icon_box_92403:hover .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(255,255,255, 1);--}}
{{--                                             }--}}
{{--                                             .icon-box .icon-text .content a {--}}
{{--                                             color: #232628;--}}
{{--                                             }--}}
{{--                                          </style>--}}
{{--                                          <div class="wpb_text_column wpb_content_element  vc_custom_1445945228480">--}}
{{--                                             <div class="wpb_wrapper">--}}
{{--                                                <p style="line-height: 18px;"><span style="color: #888888; font-size: 13px;">This vehicle has been inspected by an authorized Mercedes-Benz dealer or service partner and includes additional services.</span></p>--}}
{{--                                             </div>--}}
{{--                                          </div>--}}
{{--                                          <div class="icon-box  vc_custom_1455881172791 icon_box_91711 stm-layout-box-car_dealer " style="color:#232628">--}}
{{--                                             <div class="boat-line"></div>--}}
{{--                                             <div class="icon boat-third-color icon_element_14045  vc_custom_1455881172788" style="font-size:30px;--}}
{{--                                                color:#cc621a; 				">--}}
{{--                                                <i class="stm-icon-pin"></i>--}}
{{--                                             </div>--}}
{{--                                             <div class="icon-text">--}}
{{--                                                <div class="content heading-font" style="--}}
{{--                                                   font-size:14px;			">--}}
{{--                                                   <h5>1840 E Garvey Ave South West Covina, CA 91791</h5>--}}
{{--                                                </div>--}}
{{--                                             </div>--}}
{{--                                             <div class="clearfix"></div>--}}
{{--                                          </div>--}}
{{--                                          <style>--}}
{{--                                             .icon_element_14045 i::before {--}}
{{--                                             color: #cc621a!important;--}}
{{--                                             }--}}
{{--                                             .icon_box_91711 {--}}
{{--                                             background-color: rgba(255,255,255,0.01);--}}
{{--                                             }--}}
{{--                                             }--}}
{{--                                             .icon_box_91711 .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 0.9);--}}
{{--                                             }--}}
{{--                                             .icon_box_91711:hover .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 1);--}}
{{--                                             }--}}
{{--                                             .icon-box .icon-text .content a {--}}
{{--                                             color: #232628;--}}
{{--                                             }--}}
{{--                                          </style>--}}
{{--                                          <div class="icon-box  vc_custom_1455881254294 icon_box_1321 stm-layout-box-car_dealer " style="color:#232628">--}}
{{--                                             <div class="boat-line"></div>--}}
{{--                                             <div class="icon boat-third-color icon_element_43058  vc_custom_1455881254293" style="font-size:30px;--}}
{{--                                                color:#cc621a; 				">--}}
{{--                                                <i class="stm-icon-phone"></i>--}}
{{--                                             </div>--}}
{{--                                             <div class="icon-text">--}}
{{--                                                <div class="content heading-font" style="--}}
{{--                                                   font-size:14px;			">--}}
{{--                                                   <h6 style="margin-bottom: 0;font-weight: 400"><span style="color: #888888;font-size: 13px">PHONE:</span></h6>--}}
{{--                                                   <h5>888-694-5544</h5>--}}
{{--                                                </div>--}}
{{--                                             </div>--}}
{{--                                             <div class="clearfix"></div>--}}
{{--                                          </div>--}}
{{--                                          <style>--}}
{{--                                             .icon_element_43058 i::before {--}}
{{--                                             color: #cc621a!important;--}}
{{--                                             }--}}
{{--                                             .icon_box_1321 {--}}
{{--                                             background-color: rgba(255,255,255,0.01);--}}
{{--                                             }--}}
{{--                                             }--}}
{{--                                             .icon_box_1321 .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 0.9);--}}
{{--                                             }--}}
{{--                                             .icon_box_1321:hover .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 1);--}}
{{--                                             }--}}
{{--                                             .icon-box .icon-text .content a {--}}
{{--                                             color: #232628;--}}
{{--                                             }--}}
{{--                                          </style>--}}
{{--                                          <div class="icon-box  vc_custom_1448604718190 icon_box_48120 stm-layout-box-car_dealer " style="color:#232628">--}}
{{--                                             <div class="boat-line"></div>--}}
{{--                                             <div class="icon boat-third-color icon_element_75251  vc_custom_1448604718188" style="font-size:30px;--}}
{{--                                                color:#cc621a; 				">--}}
{{--                                                <i class="stm-icon-mail"></i>--}}
{{--                                             </div>--}}
{{--                                             <div class="icon-text">--}}
{{--                                                <div class="content heading-font" style="--}}
{{--                                                   font-size:14px;			">--}}
{{--                                                   <h6 style="margin-bottom: 0;font-weight: 400"><span style="color: #888888;font-size: 13px">EMAIL:</span></h6>--}}
{{--                                                   <h5><a href="mailto:Sales@cardealer.com">Sales@cardealer.com</a></h5>--}}
{{--                                                </div>--}}
{{--                                             </div>--}}
{{--                                             <div class="clearfix"></div>--}}
{{--                                          </div>--}}
{{--                                          <style>--}}
{{--                                             .icon_element_75251 i::before {--}}
{{--                                             color: #cc621a!important;--}}
{{--                                             }--}}
{{--                                             .icon_box_48120 {--}}
{{--                                             background-color: rgba(255,255,255,0.01);--}}
{{--                                             }--}}
{{--                                             }--}}
{{--                                             .icon_box_48120 .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 0.9);--}}
{{--                                             }--}}
{{--                                             .icon_box_48120:hover .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(, 1);--}}
{{--                                             }--}}
{{--                                             .icon-box .icon-text .content a {--}}
{{--                                             color: #232628;--}}
{{--                                             }--}}
{{--                                          </style>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                                 <div class="stm-col-pad-left wpb_column vc_column_container vc_col-sm-8">--}}
{{--                                    <div class="vc_column-inner">--}}
{{--                                       <div class="wpb_wrapper">--}}
{{--                                          <div class="icon-box  vc_custom_1448522065607 icon_box_96084 stm-layout-box-car_dealer " style="color:#232628">--}}
{{--                                             <div class="boat-line"></div>--}}
{{--                                             <div class="icon boat-third-color icon_element_10527  vc_custom_1448522065606" style="font-size:27px;--}}
{{--                                                color:#6c98e1; 				">--}}
{{--                                                <i class="fa fa-paper-plane"></i>--}}
{{--                                             </div>--}}
{{--                                             <div class="icon-text">--}}
{{--                                                <h4 class="title heading-font" style="color:#232628">--}}
{{--                                                   Message to Vender		--}}
{{--                                                </h4>--}}
{{--                                             </div>--}}
{{--                                             <div class="clearfix"></div>--}}
{{--                                          </div>--}}
{{--                                          <style>--}}
{{--                                             .icon_element_10527 i::before {--}}
{{--                                             color: #6c98e1!important;--}}
{{--                                             }--}}
{{--                                             .icon_box_96084 {--}}
{{--                                             background-color: #ffffff;--}}
{{--                                             }--}}
{{--                                             }--}}
{{--                                             .icon_box_96084 .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(255,255,255, 0.9);--}}
{{--                                             }--}}
{{--                                             .icon_box_96084:hover .icon-box-bottom-triangle {--}}
{{--                                             border-right-color: rgba(255,255,255, 1);--}}
{{--                                             }--}}
{{--                                             .icon-box .icon-text .content a {--}}
{{--                                             color: #232628;--}}
{{--                                             }--}}
{{--                                          </style>--}}
{{--                                          <div class="wpcf7 js" id="wpcf7-f500-p494-o1" lang="en-US" dir="ltr">--}}
{{--                                             <div class="screen-reader-response">--}}
{{--                                                <p role="status" aria-live="polite" aria-atomic="true" class="stm-hidden"></p>--}}
{{--                                                <ul></ul>--}}
{{--                                             </div>--}}
{{--                                             <form action="/listings/2016-mercedes-benz-c-class-c300-4matic/#wpcf7-f500-p494-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">--}}
{{--                                                <div style="display: none;">--}}
{{--                                                   <input type="hidden" name="_wpcf7" value="500">--}}
{{--                                                   <input type="hidden" name="_wpcf7_version" value="5.7.5.1">--}}
{{--                                                   <input type="hidden" name="_wpcf7_locale" value="en_US">--}}
{{--                                                   <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f500-p494-o1">--}}
{{--                                                   <input type="hidden" name="_wpcf7_container_post" value="494">--}}
{{--                                                   <input type="hidden" name="_wpcf7_posted_data_hash" value="">--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                   <div class="col-md-6 col-sm-6">--}}
{{--                                                      <div class="form-group">--}}
{{--                                                         <div class="form-label">Your Name:</div>--}}
{{--                                                         <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span>--}}
{{--                                                      </div>--}}
{{--                                                      <div class="form-group">--}}
{{--                                                         <div class="form-label">Your telephone number:</div>--}}
{{--                                                         <span class="wpcf7-form-control-wrap" data-name="your-tel"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" value="" type="tel" name="your-tel"></span>--}}
{{--                                                      </div>--}}
{{--                                                      <div class="form-group">--}}
{{--                                                         <div class="form-label">Email:</div>--}}
{{--                                                         <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email"></span>--}}
{{--                                                      </div>--}}
{{--                                                   </div>--}}
{{--                                                   <div class="col-md-6 col-sm-6">--}}
{{--                                                      <div class="form-group-textarea">--}}
{{--                                                         <div class="form-label">Your Message</div>--}}
{{--                                                         <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message">I am interested in a price quote on this vehicle. Please contact me at your earliest convenience with your best price for this vehicle.</textarea></span>--}}
{{--                                                      </div>--}}
{{--                                                      <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Submit"><span class="wpcf7-spinner"></span>--}}
{{--                                                   </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="wpcf7-response-output" aria-hidden="true"></div>--}}
{{--                                             </form>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
{{--                           </div>--}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="stm-vc-single-car-sidebar-right wpb_column vc_column_container col-lg-3 col-md-12 col-sm-12">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <style type="text/css">
                        .vc_custom_1641548377760{margin-top: 15px !important;margin-bottom: 15px !important;}
                     </style>
                     <div class="sidebar-area-vc stm-sidebar-mode-vc ">
                        <section class="wpb-content-wrapper">
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                          <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                             <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                   <div class="single-car-prices">
                                                      <div class="single-regular-sale-price">
                                                         <table>
                                                            <tbody>
                                                               <tr>
                                                                  <td>
                                                                     <div class="regular-price-with-sale">
                                                                       Monthly													<strong>
                                                                        1800 AED							</strong>
                                                                     </div>
                                                                  </td>
                                                                  <td>
                                                                  DOWN PAYMENT
                                                                     <div class="h6">10800 AED</div>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="sale-price-description-single">
                                                   LEASE TO OWN : 			<strong> 24 MONTHS</strong>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="stm_social_buttons_wrap  vc_custom_1641548377760 vc_column_container" >
                                          <div class="whatsapp">
                                             <a href="https://wa.me/971544519432" target="_blank" class="external" rel="nofollow">
                                                <div class="whatsapp-btn heading-font " id="social_button_78492">
                                                   <i class="stm-icon-whatsapp"></i>
                                                   Chat via WhatsApp
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <style>
                                          #social_button_78492 {
                                          }
                                          .stm_social_buttons_wrap .whatsapp {
                                          position: relative;
                                          }
                                          .stm_social_buttons_wrap .whatsapp .whatsapp-btn {
                                          display: flex;
                                          align-items: center;
                                          box-shadow: 0 2px 7px rgba(0, 0, 0, 0.09);
                                          border: 1px solid #e0e3e7;
                                          background-color: #ffffff;
                                          border-radius: 5px;
                                          color: #121e24;
                                          font-size: 14px;
                                          font-weight: 700;
                                          font-style: normal;
                                          letter-spacing: normal;
                                          line-height: 18px;
                                          text-align: left;
                                          text-transform: uppercase;
                                          padding: 13px 17px;
                                          }
                                          .stm_social_buttons_wrap .whatsapp .whatsapp-btn:hover {
                                          background-color: #f8f8f8;
                                          }
                                          .stm_social_buttons_wrap .whatsapp .whatsapp-btn .stm-icon-whatsapp {
                                          margin-right: 15px;
                                          font-size: 26px;
                                          color: #45c655;
                                          }
                                          .stm_social_buttons_wrap a,
                                          .stm_social_buttons_wrap a:hover,
                                          .stm_social_buttons_wrap a:focus,
                                          .stm_social_buttons_wrap a:active {
                                          text-decoration: none;
                                          }
                                       </style>
                                       <div class="vin_report_section vc_column_container">
                                          <div class="single-car-mpg">
                                              <div class="sale-price-description-single">
                                                Vehicle Code :<strong> ACCENT1.4P_1</strong>
                                              </div>
                                          </div>
                                       </div>
{{--                                        <div class="justify-content-center">--}}
{{--                                            <h4 class="text-black text-center" style="font-weight: bold">Rent</h4>--}}
{{--                                        </div>--}}
                                       <div class="vin_report_section vc_column_container justify-content-center" >
                                          <div class="single-car-mpg text-center ">
                                             <h4 class="text-black" style="font-weight: bold">Rent</h4>
                                             <button class="report_button stm-button heading-font" data-vin="WDDGJ5HB1CF792XXX	">
                                             105 AED Daily	</br></br>630 AED Weekly	</br></br>2200 AED Monthly	</br></br>		24400 AED Yearly	</button>
                                          </div>
                                       </div>
                                       <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                          <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                             <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                   <!-- <div class="stm-car_dealer-buttons heading-font">
                                                      <a href="#trade-in" data-toggle="modal" data-target="#trade-in">
                                                      Trade in form					<i class="stm-moto-icon-trade"></i>
                                                      </a>
                                                      <a href="#trade-offer" data-toggle="modal" data-target="#trade-offer">
                                                      Make an offer price					<i class="stm-moto-icon-cash"></i>
                                                      </a>
                                                   </div> -->
                                                   <div class="single-car-data">
{{--                                                      <script>--}}
{{--                                                         var CarGurus = window.CarGurus || {};--}}
{{--                                                         window.CarGurus = CarGurus;--}}
{{--                                                         CarGurus.DealRatingBadge = window.CarGurus.DealRatingBadge || {};--}}
{{--                                                         CarGurus.DealRatingBadge.options = {--}}
{{--                                                         	"style": "STYLE1",--}}
{{--                                                         	"minRating": "GREAT_PRICE",--}}
{{--                                                         					"defaultHeight": "42"		};--}}

{{--                                                         (function () {--}}
{{--                                                         	var script = document.createElement('script');--}}
{{--                                                         	script.src = "https://static.cargurus.com/js/api/en_US/1.0/dealratingbadge.js";--}}
{{--                                                         	script.async = true;--}}
{{--                                                         	var entry = document.getElementsByTagName('script')[0];--}}
{{--                                                         	entry.parentNode.insertBefore(script, entry);--}}
{{--                                                         })();--}}
{{--                                                      </script>--}}
                                                      <!-- <div class="stm_cargurus_wrapper cg_style">
                                                         <span data-cg-vin="WDDGJ5HB1CF792XXX	" data-cg-price="35000"><span data-cg-error="no information"></span></span>
                                                      </div> -->
                                                      <h5>Performance</h5>
                                                      <table>
                                                         <tbody>
                                                            <tr>
                                                               <td class="t-label">Engine type</td>
                                                               <td class="t-value h6">1.4l</td>
                                                            </tr>
                                                            <tr>
                                                               <td class="t-label">Displacement (cc) </td>
                                                               <td class="t-value h6">1368</td>
                                                            </tr>
                                                            <tr>
                                                               <td class="t-label">Power (ps / rpm)</td>
                                                               <td class="t-value h6">100/6000</td>
                                                            </tr>
                                                            <tr>
                                                               <td class="t-label">Torque (kg·m / rpm)</td>
                                                               <td class="t-value h6">13.5 / 4000</td>
                                                            </tr>
                                                            <tr>
                                                               <td class="t-label">Transmission type</td>
                                                               <td class="t-value h6">Automatic - 6 speed</td>
                                                            </tr>
                                                            <tr>
                                                               <td class="t-label">Drive system</td>
                                                               <td class="t-value h6">2wd</td>
                                                            </tr>

                                                         </tbody>
                                                      </table>
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- container -->
</div>
@include('layouts.footer')
@endsection
