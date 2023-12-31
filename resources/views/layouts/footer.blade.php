<style>
   #footer-copyright .copyright-text a {
   color: #cc6119!important;
   }
   .copyright-socials ul li a {
   color: #cc6119!important;
   }
   .footer_widgets_wrapper .widget_socials li a:hover {
   background-color: #cc6119!important;
   }
   .stm-layout-header-car_dealer .header-main .header-main-socs ul li a:hover {
   background-color: #cc6119!important;
   }
</style>
<footer id="footer">
   <div id="footer-main">
      <div class="footer_widgets_wrapper ">
         <div class="container">
            <div class="widgets cols_3 clearfix">
               <aside id="text-3" class="widget widget_text">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Sales Hours</h6>
                     </div>
                     <div class="textwidget"><span class="date">Monday - Saturday:</span> 09:00 - 22:00 Hours<br/>
                        <span class="date">Sunday:</span> Closed
                     </div>
                  </div>
               </aside>
               <aside id="text-4" class="widget widget_text">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Service Hours</h6>
                     </div>
                     <div class="textwidget"><span class="date">Monday - Saturday:</span> 09:00 - 22:00 Hours<br/>
                        <span class="date">Sunday:</span> Closed
                     </div>
                  </div>
               </aside>
               <aside id="text-5" class="widget widget_text">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Location</h6>
                     </div>
                     <div class="textwidget"><span class="date"></span> Showroom 93 ,
                        <span class="date"></span> Al Aweer Market ,<br/>
                        <span class="date"></span> Ras Al Khor ,
                        <span class="date"></span> United Arab Emirates
                     </div>
                  </div>
               </aside>
               <aside id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Subscribe</h6>
                        <div class="mc4wp-form-fields">
                           <div class="stm-mc-unit">
                              <form method="post" action="{{route('subscriptions')}}">
                                 @csrf
                                 <input type="email" name="email" placeholder="Enter your email..." required="">
                                 <input type="submit" value="Sign up">
                              </form>
                           </div>
                           <div class="stm-mc-label">Get latest updates and offers.</div>
                           @if( Session::has('message') )
                           <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                           @elseif (Session::has('error'))
                           <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                           @endif
                        </div>
                     </div>
                  </div>
               </aside>
               <aside id="media_gallery-2" class="widget widget_media_gallery">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Photo Gallery</h6>
                     </div>
                     <div id="gallery-1" class="gallery galleryid-4596 gallery-columns-4 gallery-size-full">
                        <figure class="gallery-item">
                           <div class="gallery-icon landscape">
                              <a href="{{route('details')}}" class="external"
                                 rel="nofollow"><img width="700" height="700"
                                 src="{{asset ('Thumbnails/TN - ACCENT.jpg')}}"
                                 class="attachment-full size-full" alt="(LHD) HYUNDAI ACCENT 1.4P AT MY2023 - WHITE" decoding="async" loading="lazy"
                                 srcset="{{asset ('Thumbnails/TN - ACCENT.jpg')}} 700w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 300w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 150w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 120w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 200w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 600w,
                                 {{asset ('Thumbnails/TN - ACCENT.jpg')}} 100w"
                                 sizes="(max-width: 700px) 100vw, 700px"></a>
                           </div>
                        </figure>
                        <figure class="gallery-item">
                           <div class="gallery-icon landscape">
                              <a href="{{route('chevroletdetails')}}" class="external"
                                 rel="nofollow"><img width="700" height="700"
                                 src="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}}"
                                 class="attachment-full size-full" alt="(LHD) CHEVROLET CAPTIVA PREMIER 7-SEATER 1.5P AT MY2023" decoding="async" loading="lazy"
                                 srcset="{{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 700w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 300w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 150w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 120w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 200w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 600w,
                                 {{asset ('Thumbnails/TN - CAPTIVA.jpg')}} 100w"
                                 sizes="(max-width: 700px) 100vw, 700px"></a>
                           </div>
                        </figure>
                        <figure class="gallery-item">
                           <div class="gallery-icon landscape">
                              <a href="{{route('picantodetails')}}" class="external"
                                 rel="nofollow"><img width="700" height="700"
                                 src="{{asset ('Thumbnails/TN - PICANTO.jpg')}}"
                                 class="attachment-full size-full" alt="(LHD) KIA PICANTO 1.2P AT MY2023 – SPARKLING SILVER" decoding="async" loading="lazy"
                                 srcset="{{asset ('Thumbnails/TN - PICANTO.jpg')}} 700w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 300w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 150w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 120w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 200w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 600w,
                                 {{asset ('Thumbnails/TN - PICANTO.jpg')}} 100w"
                                 sizes="(max-width: 700px) 100vw, 700px"></a>
                           </div>
                        </figure>
                        <figure class="gallery-item">
                           <div class="gallery-icon landscape">
                              <a href="{{route('vehicle-detail-nissan-kicks')}}" class="external"
                                 rel="nofollow"><img width="700" height="700"
                                 src="{{asset ('Thumbnails/TN - KICKS.jpg')}}"
                                 class="attachment-full size-full" alt="(LHD) NISSAN KICKS 1.6P AT MY2022 - BLACK" decoding="async" loading="lazy"
                                 srcset="{{asset ('Thumbnails/TN - KICKS.jpg')}} 700w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 300w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 150w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 120w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 200w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 600w,
                                 {{asset ('Thumbnails/TN - KICKS.jpg')}} 100w"
                                 sizes="(max-width: 700px) 100vw, 700px"></a>
                           </div>
                        </figure>
                        <figure class="gallery-item">
                           <div class="gallery-icon landscape">
                              <a href="{{route('vehicle-detail-kia-k5')}}" class="external"
                                 rel="nofollow"><img width="700" height="700"
                                 src="{{asset ('Thumbnails/TN - K5.jpg')}}"
                                 class="attachment-full size-full" alt="(LHD) KIA K5 2.0P AT MY2023 – WHITESPECIAL" decoding="async" loading="lazy"
                                 srcset="{{asset ('Thumbnails/TN - K5.jpg')}} 700w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 300w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 150w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 120w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 200w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 600w,
                                 {{asset ('Thumbnails/TN - K5.jpg')}} 100w"
                                 sizes="(max-width: 700px) 100vw, 700px"></a>
                           </div>
                        </figure>
                     </div>
                  </div>
               </aside>
               <aside id="socials-2" class="widget widget_socials">
                  <div class="widget-wrapper">
                     <div class="widget-title">
                        <h6>Social Network</h6>
                     </div>
                     <div class="socials_widget_wrapper">
                        <ul class="widget_socials list-unstyled clearfix">
                           <li>
                              <a href="https://www.facebook.com/milelecarrental/" target="_blank">
                              <i class="fab fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://twitter.com/milelecarrental" target="_blank">
                              <i class="fab fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.pinterest.com/MileleCarRental/" target="_blank">
                              <i class="fab fa-pinterest"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.instagram.com/milelecarrentals/" target="_blank">
                              <i class="fab fa-instagram"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.youtube.com/channel/UCGZsbfATcMxEBbz1PWAKt0A" target="_blank">
                              <i class="fab fa-youtube"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.snapchat.com/add/milelecarrental" target="_blank">
                              <i class="fab fa-snapchat"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.linkedin.com/company/99998565/admin/feed/posts/" target="_blank">
                              <i class="fab fa-linkedin"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.tiktok.com/@milelecarrental" target="_blank">
                              <i class="fab fa-tiktok"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://api.whatsapp.com/send?phone=971544519432" target="_blank">
                              <i class="fab fa-whatsapp"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </aside>
            </div>
         </div>
      </div>
   </div>
   <div id="footer-copyright" style=background-color:#232628>
      <div class="container footer-copyright">
         <div class="row">
            <div class="col-md-8 col-sm-8">
               <div class="clearfix">
                  <div class="copyright-text heading-font"> Copyright  <a href="{{route('home')}}" target="_blank">2023</a>
                     <a href="{{route('home')}}" target="_blank">Milele car Rental</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="clearfix">
                  <div class="pull-right xs-pull-left">
                     <div class="pull-right">
                        <div class="copyright-socials">
                           <ul class="clearfix">
                              <li>
                                 <a href="https://www.facebook.com/milelecarrental/" target="_blank">
                                 <i class="fab fa-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://twitter.com/milelecarrental" target="_blank">
                                 <i class="fab fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.instagram.com/milelecarrentals/" target="_blank">
                                 <i class="fab fa-instagram"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="global-alerts"></div>
</footer>
