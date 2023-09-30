@extends('layouts.main')

@section('content')
<style>
   ul.list-style-1 li:before {
   visibility:hidden;
   }
   .iconBorder
   {
   border-style:solid!important;
   border-radius: 50%!important; 
   border-width:1px!important; 
   padding-left:5px!important; 
   padding-right:5px!important; 
   padding-top:5px!important; 
   padding-bottom:5px!important; 
   color:#cc6119!important; 
   }
</style>
@section('title', 'About Us')
{{--@include('layouts.topbar')--}}
@include('layouts.header')
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="3201" class="elementor elementor-3201">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-51f601c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51f601c" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <!-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c2cbd2" data-id="4c2cbd2" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-595524a elementor-widget elementor-widget-image" data-id="595524a" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                           </style>
                           <img decoding="async" src="{{asset ('uploads/2015/10/about-us-1-529x290.jpg')}}" title="about-us-1" alt="motors_placeholder" loading="lazy" />
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-db52b58" data-id="db52b58" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-1f7fe68 elementor-widget elementor-widget-text-editor" data-id="1f7fe68" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
                           </style>
                           <h3>WELCOME TO THE <span style="color: #cc6119;">MOTORS</span></h3>
                           <h5 style="margin-bottom: 22px;">Before we get ahead of ourselves, we want to welcome you to Loeber Motors. While nothing can replace thing on-the-lot experience.</h5>
                           <p style="margin-bottom: 26px;">We appreciate you taking the time today to visit our web site. Our goal is to give you an interactive tour of our new and used inventory, as well as allow you to conveniently get a quote, schedule a service appointment, or apply for financing. The search for a luxury car is filled with high expectations. Undoubtedly, that has a lot to do with the vehicles you are considering, but at Motors, we think you should also have pretty high expectations for your dealership.</p>
                           <p><em> — MIKEY DIOKLES, President of Motors</em></p>
                        </div>
                     </div>
                  </div>
                  </div> -->
            </div>
         </section>
         <center>
            <h3>ABOUT US</h3>
         </center>
         <div class="elementor-element elementor-element-5224060 elementor-widget elementor-widget-stm-colored-separator" data-id="5224060" data-element_type="widget" data-widget_type="stm-colored-separator.default">
            <div class="elementor-widget-container">
               <div class="colored-separator" style="text-align: center;">
                  <div class="first-long stm-base-background-color"></div>
                  <div class="last-short stm-base-background-color"></div>
               </div>
            </div>
         </div>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-89359a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="89359a9" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0283819" data-id="0283819" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-0c2b075 elementor-widget elementor-widget-text-editor" data-id="0c2b075" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <!-- <hr /> -->
                           <!-- <br> -->
                           <ul class="list-style-1" style="margin-top: 15px;">
                              <li>
                                 <center><img decoding="async" src="{{asset ('icons/1.png')}}" alt="aboutUs" class="iconBorder"></center>
                                 </br>
                                 <p>We thrive on a customer-centered approach, and based on your feedback are able to keep our services at par with your expectations. </p>
                              </li>
                              </br>
                              <li>
                                 <center><img decoding="async" src="{{asset ('icons/2.png')}}" alt="aboutUs" class="iconBorder"></center>
                                 </br>
                                 <p>Our diligent & experienced team of assures reliable and seamless service. We are not shy of going the extra mile to ensure that you journey with us is a truly enjoyable experience. </p>
                              </li>
                              <!-- <li>We are always a phone call away. Whether you need to hire a vehicle or any service on your existing vehicle hired form us we're assure the quickest turnaround and response! </li>
                                 <li>At MILELE, we understand your need for convenient custom-made solutions. Our varied fleet of ready and well-maintained vehicles can conveniently cater to your needs. </li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7532aff" data-id="7532aff" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-9ef364b elementor-widget elementor-widget-image" data-id="9ef364b" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           <h3></h3>
                           <!-- <hr /> -->
                           <!-- <br></br> -->
                           <ul class="list-style-1" style="margin-top: 15px;">
                              <!-- <li>We thrive on a customer-centered approach, and based on your feedback are able to keep our services at par with your expectations. </li>
                                 <li>Our diligent & experienced team of assures reliable and seamless service. We are not shy of going the extra mile to ensure that you journey with us is a truly enjoyable experience. </li> -->
                              <li>
                                 <center><img decoding="async" src="{{asset ('icons/3.png')}}" alt="aboutUs" class="iconBorder"></center>
                                 </br>
                                 <p>We are always a phone call away. Whether you need to hire a vehicle or any service on your existing vehicle hired form us we're assure the quickest turnaround and response! </p>
                              </li>
                              <li>
                                 <center><img decoding="async" src="{{asset ('icons/4.png')}}" alt="aboutUs" class="iconBorder"></center>
                                 </br>
                                 <p>At MILELE, we understand your need for convenient custom-made solutions. Our varied fleet of ready and well-maintained vehicles can conveniently cater to your needs. </p>
                              </li>
                           </ul>
                           <!-- </br></br></br> -->
                           <!-- <img decoding="async" fetchpriority="high" width="530" height="291" src="{{asset ('uploads/2015/10/about-us-2.jpg')}}" class="attachment-large size-large wp-image-387"
                              alt="motors_placeholder" srcset="{{asset ('uploads/2015/10/about-us-2.jpg')}} 530w, {{asset ('uploads/2015/10/about-us-2-300x165.jpg')}} 300w" sizes="(max-width: 530px) 100vw, 530px" /> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-51121bf elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="51121bf" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fc16484" data-id="fc16484" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-bfac1ca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bfac1ca" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0912fd4" data-id="0912fd4" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-02443fb elementor-widget elementor-widget-heading" data-id="02443fb" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.16.0 - 14-09-2023 */
                                          .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                                       </style>
                                       <h2 class="elementor-heading-title elementor-size-default">MEDIA GALLERY</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-5ad201b elementor-widget elementor-widget-stm-colored-separator" data-id="5ad201b" data-element_type="widget" data-widget_type="stm-colored-separator.default">
                                    <div class="elementor-widget-container">
                                       <div class="colored-separator" style="text-align: center;">
                                          <div class="first-long stm-base-background-color"></div>
                                          <div class="last-short stm-base-background-color"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-083ba49 elementor-widget elementor-widget-motors-image-carousel" data-id="083ba49" data-element_type="widget" data-widget_type="motors-image-carousel.default">
                                    <div class="elementor-widget-container">
                                       <div class="motors-elementor-widget stm_image_carousel swiper-container" id="stm_image_carousel-31054">
                                          <div class="swiper-wrapper">
                                             <div class="swiper-slide">
                                                <a href="{{route('details')}}">
                                                   <img decoding="async" src="{{asset ('Thumbnails/TN - ACCENT.jpg')}}" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE">
                                                </a>
                                                </div>
                                             <div class="swiper-slide">
                                             <a href="{{route('chevroletdetails')}}">
                                                <img decoding="async" src="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}}" alt="(LHD) Chevrolet Captiva Premier 7-Seater 1.5P AT MY2023">
                                                </a>
                                             </div>
                                             <div class="swiper-slide">
                                             <a href="{{route('picantodetails')}}">
                                                <img decoding="async" src="{{asset ('Thumbnails/TN - PICANTO.jpg')}}" alt="(LHD) KIA PICANTO 1.2P AT MY2023 – SPARKLING SILVER">
                                                </a>
                                             </div>
                                             <div class="swiper-slide">
                                             <a href="{{route('vehicle-detail-nissan-kicks')}}">
                                                <img decoding="async" src="{{asset ('Thumbnails/TN - KICKS.jpg')}}" alt="(LHD) NISSAN KICKS 1.6P AT MY2022 - BLACK">
                                                </a>
                                             </div>
                                             <div class="swiper-slide">
                                             <a href="{{route('vehicle-detail-kia-k5')}}">
                                                <img decoding="async" src="{{asset ('Thumbnails/TN - K5.jpg')}}" alt="(LHD) KIA K5 2.0P AT MY2023 – WHITE">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="stm-swiper-controls">
                                             <div class="stm-swiper-prev"><i class="fas fa-angle-left"></i></div>
                                             <div class="swiper-pagination"></div>
                                             <div class="stm-swiper-next"><i class="fas fa-angle-right"></i></div>
                                          </div>
                                       </div>
                                       <script>
                                          ( function( $ ) {
                                          	"use strict";
                                          			$(window).on('elementor/frontend/init', function() {
                                          				let swiper = new Swiper('#stm_image_carousel-31054', {
                                          							loop: true,

                                          								simulateTouch: false,



                                          								slidesPerGroup: 1,

                                          			slidesPerView: 1,

                                          			spaceBetween: 12,

                                          			centerInsufficientSlides: true,

                                          			breakpoints: {
                                          				640: {
                                          					slidesPerView: 3,
                                          				},
                                          				992: {
                                          					slidesPerView: 4,
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
                                          		} ( jQuery ) );
                                       </script>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-ff408f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ff408f9" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39393f3" data-id="39393f3" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-2f0fac9 elementor-widget elementor-widget-heading" data-id="2f0fac9" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">OUR ADVANTAGES</h3>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-547ace1 elementor-widget elementor-widget-stm-accordion" data-id="547ace1" data-element_type="widget" data-widget_type="stm-accordion.default">
                        <div class="elementor-widget-container">
                           <div class="stm-elementor-accordion">
                              <div class="stm-elementor-accordion-container">
                                 <div class="stm-elementor-panels-container">
                                    <div class="stm-elementor-panel active">
                                       <div class="stm-elementor-panel-heading" data-heading="panel-0">
                                          <h4 class="stm-elementor-panel-title">
                                             <i class="stm-elementor-panel-icon stmicon- stm-icon-car_sale"></i>
                                             <span class="panel-title-text">
                                             Do You Want to sell a car?								</span>
                                             <i class="stm-elementor-panel-control-icon-chevron fas fa-chevron-down"></i>
                                          </h4>
                                       </div>
                                       <div class="stm-elementor-panel-body" data-content="panel-0" style="display: block;">
                                          <div class="stm-elementor-panel-content">
                                             <div class="panel-content-wrap">
                                                <p>What’s your car worth? Receive the absolute best value for your trade-in vehicle. We even handle all paperwork. Schedule your appointment today!</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="stm-elementor-panel ">
                                       <div class="stm-elementor-panel-heading" data-heading="panel-1">
                                          <h4 class="stm-elementor-panel-title">
                                             <i class="stm-elementor-panel-icon stmicon- stm-icon-key"></i>
                                             <span class="panel-title-text">
                                             Are You looking for a new car?								</span>
                                             <i class="stm-elementor-panel-control-icon-chevron fas fa-chevron-down"></i>
                                          </h4>
                                       </div>
                                       <div class="stm-elementor-panel-body" data-content="panel-1" >
                                          <div class="stm-elementor-panel-content">
                                             <div class="panel-content-wrap">
                                                <div id="1445577012778-7f50c834-615e" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                   <div class="vc_tta-panel-body">
                                                      <div class="wpb_text_column wpb_content_element ">
                                                         <div class="wpb_wrapper">
                                                            <p>Our cars are delivered fully-registered with all requirements completed. We’ll deliver your car wherever you are.</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="stm-elementor-panel ">
                                       <div class="stm-elementor-panel-heading" data-heading="panel-2">
                                          <h4 class="stm-elementor-panel-title">
                                             <i class="stm-elementor-panel-icon stmicon- stm-icon-gear"></i>
                                             <span class="panel-title-text">
                                             How to schedule a service online?								</span>
                                             <i class="stm-elementor-panel-control-icon-chevron fas fa-chevron-down"></i>
                                          </h4>
                                       </div>
                                       <div class="stm-elementor-panel-body" data-content="panel-2" >
                                          <div class="stm-elementor-panel-content">
                                             <div class="panel-content-wrap">
                                                <p>Maecenas consectetur nulla dolor, ac porttitor nunc hendrerit quis. Proin vitae rhoncus purus, id commodo massa. Aliquam erat volutpat.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-58df093" data-id="58df093" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-fee9b6a elementor-widget elementor-widget-heading" data-id="fee9b6a" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">CUSTOMER TESTIMONIALS</h3>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-5fbfbeb elementor-widget elementor-widget-motors-testimonials-carousel" data-id="5fbfbeb" data-element_type="widget" data-widget_type="motors-testimonials-carousel.default">
                        <div class="elementor-widget-container">
                           <div class="stm-testimonials-carousel-wrapper swiper-container style_1" id="stm_testimonials_carousel-25246">
                              <div class="elementor-testimonials-carousel swiper-wrapper">
                                 <div class="testimonial-unit swiper-slide">
                                    <div class="clearfix">
                                       <div class="image">
                                          <img decoding="async" src="{{asset ('uploads/2015/10/testimonials.jpg')}}" alt="Testimonial photo">
                                       </div>
                                       <div class="content">
                                          <h5 class="title">
                                             Motors is absolutely wonderful!
                                          </h5>
                                          <p>I can’t believe it was this easy to sell my car to you guys. You definitely made this as simple as advertised. Whenever my family moves back to the states, we would certainly love to use Motors theme again!</p>
                                       </div>
                                    </div>
                                    <div class="testimonial-meta">
                                       <div class="author heading-font">
                                          Michael Doe
                                       </div>
                                       <div class="author-car">
                                          <i class="stm-testimonial-icon stmicon- stm-icon-car"></i>
                                          <span>2015 Honda Civic LX</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="testimonial-unit swiper-slide">
                                    <div class="clearfix">
                                       <div class="image">
                                          <img decoding="async" src="{{asset ('uploads/2015/10/about-us-1-213x142.jpg')}}" alt="Testimonial photo">
                                       </div>
                                       <div class="content">
                                          <h5 class="title">
                                             Motors is absolutely wonderful!
                                          </h5>
                                          <p>I picked out my car on the website, purchased it, and a few days later it was delivered to my home exactly as described by the inspector. They are selling quality cars for a quality price.</p>
                                       </div>
                                    </div>
                                    <div class="testimonial-meta">
                                       <div class="author heading-font">
                                          Baxter Ion
                                       </div>
                                       <div class="author-car">
                                          <i class="stm-testimonial-icon stmicon- stm-icon-car"></i>
                                          <span>Mercedes Benz w201</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="stm-swiper-controls">
                                 <div class="stm-swiper-prev"><i class="fas fa-angle-left"></i></div>
                                 <div class="stm-swiper-next"><i class="fas fa-angle-right"></i></div>
                              </div>
                           </div>
                           <script>
                              ( function( $ ) {
                              	"use strict";
                              		$(window).on('elementor/frontend/init', function() {
                              			let swiper = new Swiper('#stm_testimonials_carousel-25246', {
                              							loop: true,

                              								simulateTouch: true,



                              								slidesPerGroup: 1,

                              			slidesPerView: 1,
                              			spaceBetween: 20,
                              			centerInsufficientSlides: true,
                              			breakpoints: {
                              				768: {
                              					slidesPerView: 1,
                              				},
                              				1024: {
                              					slidesPerView: 1,
                              				}
                              			},
                              								navigation: {
                              					nextEl: '.stm-swiper-next',
                              					prevEl: '.stm-swiper-prev',
                              				},
                              						});

                              				});
                              			} ( jQuery ) );
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3d79486 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="3d79486" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ddcc87" data-id="2ddcc87" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-20e6efd elementor-widget elementor-widget-heading" data-id="20e6efd" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">OUR TEAM</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-5224060 elementor-widget elementor-widget-stm-colored-separator" data-id="5224060" data-element_type="widget" data-widget_type="stm-colored-separator.default">
                        <div class="elementor-widget-container">
                           <div class="colored-separator" style="text-align: center;">
                              <div class="first-long stm-base-background-color"></div>
                              <div class="last-short stm-base-background-color"></div>
                           </div>
                        </div>
                     </div>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-d2a6224 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d2a6224" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9097783" data-id="9097783" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ef33cae elementor-widget elementor-widget-stm-team-member" data-id="ef33cae" data-element_type="widget" data-widget_type="stm-team-member.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-our-team">
                                          <div class="image">
                                             <img decoding="async" src="{{asset ('team/FAISALRIAZ.png')}}" alt="FAISAL RIAZ">
                                             
                                          </div>
                                          <div class="meta">
                                             <div class="name h5 heading-font">
                                             FAISAL RIAZ
                                             </div>
                                             <div class="position">
                                             Chairman
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-75124b5" data-id="75124b5" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-7416b6e elementor-widget elementor-widget-stm-team-member" data-id="7416b6e" data-element_type="widget" data-widget_type="stm-team-member.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-our-team">
                                          <div class="image">
                                             <img decoding="async" src="{{asset ('team/FEROZRIAZ.png')}}" alt="FEROZ RIAZ">
                                             
                                          </div>
                                          <div class="meta">
                                             <div class="name h5 heading-font">
                                             FEROZ RIAZ
                                             </div>
                                             <div class="position">
                                             Chief Executive Officer
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fdff97f" data-id="fdff97f" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-98e4db1 elementor-widget elementor-widget-stm-team-member" data-id="98e4db1" data-element_type="widget" data-widget_type="stm-team-member.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-our-team">
                                          <div class="image">
                                             <img decoding="async" src="{{asset ('team/FAHADRIAZ.png')}}" alt="FAHAD RIAZ">
                                             
                                          </div>
                                          <div class="meta">
                                             <div class="name h5 heading-font">
                                             FAHAD RIAZ
                                             </div>
                                             <div class="position">
                                             Vice President - Sales
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6f633c5" data-id="6f633c5" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-8f33cbb elementor-widget elementor-widget-stm-team-member" data-id="8f33cbb" data-element_type="widget" data-widget_type="stm-team-member.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-our-team">
                                          <div class="image">
                                             <img decoding="async" src="{{asset ('team/FaizKhan.png')}}" alt="Faiz Khan">
                                               <div class="team-info">
                                                
                                               
                                             </div>
                                          </div>
                                          <div class="meta">
                                             <div class="name h5 heading-font">
                                             Faiz Khan
                                             </div>
                                             <div class="position">
                                             Chauffeur Service & Rental Car Manager

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
         </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-a26417d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a26417d" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19cc7fa" data-id="19cc7fa" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-ca90969 elementor-widget elementor-widget-image-carousel" data-id="ca90969" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;6&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay&quot;:&quot;no&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-widget-image-carousel .swiper,.elementor-widget-image-carousel .swiper-container{position:static}.elementor-widget-image-carousel .swiper-container .swiper-slide figure,.elementor-widget-image-carousel .swiper .swiper-slide figure{line-height:inherit}.elementor-widget-image-carousel .swiper-slide{text-align:center}.elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide{max-width:calc(100% / var(--e-image-carousel-slides-to-show, 3))}
                           </style>
                           <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                              <div class="elementor-image-carousel swiper-wrapper" aria-live="polite">
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/1-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="2 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/3-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="3 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/4-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="4 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/6-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="5 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/5-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                                 <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="6 of 6">
                                    <figure class="swiper-slide-inner">
                                       <img decoding="async" class="swiper-slide-image" src="{{asset ('uploads/2015/10/2-200x106.png')}}" alt="motors_placeholder" />
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
      </div>
   </div>
</div>
<!--main-->
@include('layouts.footer')
<div class="modal" id="trade-offer" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTradeOffer">
   <form id="request-trade-offer-form" action="http://localhost/rent/" method="post">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header modal-header-iconed">
               <i class="stm-moto-icon-cash"></i>
               <h3 class="modal-title" id="myModalLabelTestDrive">
                  Offer Price
               </h3>
               <div class="test-drive-car-name">
                  About us
               </div>
               <div class="mobile-close-modal" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times" aria-hidden="true"></i>
               </div>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Name</div>
                        <input name="name" type="text"/>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Email</div>
                        <input name="email" type="email" />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Phone</div>
                        <input name="phone" type="tel" />
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Trade price</div>
                        <div class="stm-trade-input-icon">
                           <input name="trade_price" type="text" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mg-bt-25px"></div>
               <div class="row">
                  <div class="col-md-7 col-sm-7">
                     <div class="motors-gdpr" style="margin: 20px 0;"><label><input type="checkbox" name="motors-gdpr-agree" value="agree" data-need="true" required />I agree with storaging of my data by this website.</label></div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                     <button type="submit" class="stm-request-test-drive">Request</button>
                     <div class="stm-ajax-loader" style="margin-top:10px;">
                        <i class="stm-icon-load1"></i>
                     </div>
                  </div>
               </div>
               <div class="mg-bt-25px"></div>
               <input name="vehicle_id" type="hidden" value="3201" />
            </div>
         </div>
      </div>
   </form>
</div>
<div class="modal" id="get-car-price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <form id="get-car-price-form" action="http://localhost/rent/" method="post" >
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header modal-header-iconed">
               <i class="stm-icon-steering_wheel"></i>
               <h3 class="modal-title" id="myModalLabel">Request car price</h3>
               <div class="test-drive-car-name">
                  About us
               </div>
               <div class="mobile-close-modal" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times" aria-hidden="true"></i>
               </div>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Name</div>
                        <input name="name" type="text"/>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Email</div>
                        <input name="email" type="email" />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <div class="form-modal-label">Phone</div>
                        <input name="phone" type="tel" />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-7 col-sm-7">
                     <div class="motors-gdpr" style="margin: 20px 0;"><label><input type="checkbox" name="motors-gdpr-agree" value="agree" data-need="true" required />I agree with storaging of my data by this website.</label></div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                     <button type="submit" class="stm-request-test-drive">Request</button>
                     <div class="stm-ajax-loader" style="margin-top:10px;">
                        <i class="stm-icon-load1"></i>
                     </div>
                  </div>
               </div>
               <div class="mg-bt-25px"></div>
               <input name="vehicle_id" type="hidden" value="3201" />
            </div>
         </div>
      </div>
   </form>
</div>
<div class="single-add-to-compare">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-sm-9">
            <div class="single-add-to-compare-left">
               <i class="add-to-compare-icon stm-icon-speedometr2"></i>
               <span class="stm-title h5"></span>
            </div>
         </div>
         <div class="col-md-3 col-sm-3">
            <a href="../compare/index.html" class="compare-fixed-link pull-right heading-font">
            Compare				</a>
         </div>
      </div>
   </div>
</div>
<div class="modal_content"></div>
@endsection