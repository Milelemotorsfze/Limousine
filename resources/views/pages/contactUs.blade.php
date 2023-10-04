@extends('layouts.main')
@section('content')
<style type="text/css">
   img.wp-smiley,
   img.emoji {
   display: inline !important;
   border: none !important;
   box-shadow: none !important;
   height: 1em !important;
   width: 1em !important;
   margin: 0 0.07em !important;
   vertical-align: -0.1em !important;
   background: none !important;
   padding: 0 !important;
   }
   .stm-elementor-contact-form-seven form input[type=text]:focus, .stm-elementor-contact-form-seven form input[type=tel]:focus, .stm-elementor-contact-form-seven form input[type=email]:focus, .stm-elementor-contact-form-seven form input[type=search]:focus, .stm-elementor-contact-form-seven form input[type=password]:focus {
   border-color:#cc6119!important;
   }
   .stm-elementor-contact-form-seven form textarea:focus {
   border-color:#cc6119!important;
   }
   input[type="checkbox"]:checked {
   background: #cc6119!important;
   color: white!important;
   }
</style>
@include('layouts.header')
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="3104" class="elementor elementor-3104">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-fd15043 elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-height-default elementor-section-items-middle" data-id="fd15043" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5cab879" data-id="5cab879" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-0bb7e84 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0bb7e84" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f1eb0f" data-id="1f1eb0f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ae22989 elementor-absolute elementor-widget__width-initial elementor-widget elementor-widget-stm-contact-form-seven" data-id="ae22989" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="stm-contact-form-seven.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-elementor-contact-form-seven " id="single_contact_form_73186">
                                          <div class="icon-title">
                                             <h2 class="heading-font title">
                                                CONTACT US
                                             </h2>
                                          </div>
                                          <div class="wpcf7 js" id="wpcf7-f717-p3100-o1" lang="en-US" dir="ltr">
                                             <form action="{{route('contacts.store')}}" method="post" class="wpcf7-form init " id="form-contact"
                                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                @csrf
                                                <div class="row">
                                                   <div class="col-md-7 col-sm-7">
                                                      <div class="row">
                                                         <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">First Name*</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="first-name">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required "
                                                                  aria-required="true" placeholder="Enter your first name" value=""
                                                                  type="text" name="first_name">
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Last Name*</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="last-name">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required  @error('last_name') is-invalid @enderror"
                                                                  aria-required="true" aria-invalid="false" placeholder="Enter your last name" value="" type="text"
                                                                  name="last_name">
                                                               </span>
                                                               @error('last_name')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Email*</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="email">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required
                                                                  @error('email') is-invalid @enderror wpcf7-validates-as-email"
                                                                  aria-required="true" aria-invalid="false" placeholder="email@domain.com" value="" type="email" name="email">
                                                               </span>
                                                               @error('email')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Phone</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="phone">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel @error('phone') is-invalid @enderror"
                                                                  aria-invalid="false" placeholder="Phone number" value="" type="tel" name="phone">
                                                               </span>
                                                               @error('phone')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-12 stm-contact-us-checkbox">
                                                            <span class="wpcf7-form-control-wrap" data-name="subscribe">
                                                               <span class="wpcf7-form-control wpcf7-checkbox">
                                                                  <span class="wpcf7-list-item first last">
                                                                     <label>
                                                                        <div class="checker">
                                                                           <span>
                                                                           <input type="checkbox" name="is_subscribed" {{ old('is_subscribed') ? 'checked' : '' }} >
                                                                           </span>
                                                                        </div>
                                                                        <span class="wpcf7-list-item-label">Subscribe and Get latest updates and offers by Email</span>
                                                                     </label>
                                                                  </span>
                                                               </span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-5 col-sm-5">
                                                      <div class="form-group">
                                                         <div class="form-group">
                                                            <div class="contact-us-label">Comment</div>
                                                            <span class="wpcf7-form-control-wrap" data-name="message">
                                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea @error('comment') is-invalid @enderror" aria-invalid="false" placeholder="Enter your message..."
                                                               name="comment"></textarea>
                                                            </span>
                                                            @error('comment')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                         </div>
                                                      </div>
                                                      <div class="contact-us-submit">
                                                         <input class="wpcf7-form-control has-spinner wpcf7-submit  btn p-3 pl-4 pr-4" id="contact-us-submit" style="background-color: #cc6119;color: #FFFFFF"
                                                            type="button" value="Submit">
                                                         <span class="wpcf7-spinner"></span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                             </form>
                                             <div class="alert alert-success" id="contact-form-output" hidden role="alert"></div>
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
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-51b8b43 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="51b8b43" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-11ee9bf" data-id="11ee9bf" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-4d970ae elementor-widget elementor-widget-motors-contact-tabs" data-id="4d970ae" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="motors-contact-tabs.default">
                        <div class="elementor-widget-container">
                           <div class="stm-elementor-contact-tabs">
                              <div class="elementor-contact-tabs">
                                 <div class="elementor-contact-tabs-container">
                                    <ul class="elementor-contact-tabs-list">
                                       <li class="elementor-contact-tab active" data-tab="552852">
                                          <span class="tab-item">
                                          <span class="elementor-contact-title-text">
                                          Renting							</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="contact-tabs-containers-wrap">
                                    <div class="elementor-contact-panels-container contact-panel-552852 active">
                                       <div class="tab-unit">
                                          <div class="icon">
                                             <i class="stmicon- stm-icon-pin"></i>
                                          </div>
                                          <div class="text ml-3">
                                             <h4 class="title heading-font">
                                                Address
                                             </h4>
                                             <div class="content heading-font">
                                                <p>Showroom 93 </p>
                                                <p>   Al Aweer Auto Market, Ras Al Khor</p>
                                                <p>  United Arab Emirates</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-unit">
                                          <div class="icon">
                                             <i class="stmicon- stm-icon-phone"></i>
                                          </div>
                                          <div class="text ml-3">
                                             <h4 class="title heading-font">
                                                Sales Phone
                                             </h4>
                                             <div class="content heading-font">
                                                <div class="vc_custom_1447842703995 icon_box_14768 stm-layout-box-car_dealer ">
                                                   <div class="icon-text">
                                                      <div class="content heading-font">
                                                         <p>(+971) 544519432</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-unit">
                                          <div class="icon">
                                             <i class="stmicon- stm-icon-time"></i>
                                          </div>
                                          <div class="text ml-3">
                                             <h4 class="title heading-font">
                                                Sales Hours
                                             </h4>
                                             <div class="content heading-font">
                                                <p>Monday – Saturday:<br /> 09:00 – 22:00 Hours<br />Sunday: Closed</p>
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
            </div>
         </section>
      </div>
   </div>
</div>
</div>
@include('layouts.footer')
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function() 
         {
            var element = document.getElementById("contact-us");
            element.classList.add("current_page_item");
         });
      </script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
   (function () {
   	var c = document.body.className;
   	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
   	document.body.className = c;
   })();
   jQuery.validator.setDefaults({
       errorClass: "text-danger",
       errorElement: "p",
       errorPlacement: function ( error, element ) {
           error.addClass( "text-danger" );
           error.insertAfter( element );
       }
   });
   jQuery("#form-contact").validate({
       rules: {
           first_name: {
               required: true,
               maxlength:255
           },
           last_name: {
               required: true,
               maxlength:255
           },
           comment: {
               maxlength:500
           },
           email: {
               required: true,
               email:true
           },
           phone: {
               required: true,
               number:true,
               minlength:7,
               maxlength:20
           },
       },
   })
   jQuery("#contact-us-submit").click(function(e) {
       e.preventDefault();
       if( $("#form-contact").valid()) {
           var form = $("#form-contact");
           var url = form.attr('action');
           jQuery.ajax({
               type: "POST",
               url: url,
               data: form.serialize(),
               success: function(data) {
                   $('#contact-form-output').attr('hidden', false);
                   $('#contact-form-output').text("Contact request send successfully");
                   $("#form-contact").load(" #form-contact");
               },
           });
       }
   
   });
   
</script>
@endsection
