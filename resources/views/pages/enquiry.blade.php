@extends('layouts.main')
@section('content')
<style type="text/css">
   input[type=date]:focus{
   border-color: #cc6119!important;
   box-shadow: none!important;
   border:2px solid #cc6119!important;
   }
   .select2-container--default .select2-selection--single
   {
   height: 43px !important;
   }
   .select2-container--open
   {
   border-color: #cc6119!important;
   box-shadow: none!important;
   border:2px solid #cc6119!important;  
   }
   input[type=date]
   {
   height: 43px !important;
   }
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
   .stm-elementor-contact-form-seven form input[type=text]:focus,
   .stm-elementor-contact-form-seven form input[type=tel]:focus, 
   .stm-elementor-contact-form-seven form input[type=email]:focus, 
   .stm-elementor-contact-form-seven form input[type=search]:focus, 
   .stm-elementor-contact-form-seven form input[type=password]:focus
   {
   border-color: #cc6119!important;
   }
   .date:focus {
   border-color: #cc6119!important;
   }
</style>
<link rel='stylesheet' id='daterangepicker-css' href="{{asset ('plugins/stm-motors-car-rental/assets/css/daterangepicker4963.css?ver=1.1')}}" type='text/css' media='all' />
<link rel='stylesheet' id='stm-daterangepicker-css' href="{{asset ('plugins/stm-motors-car-rental/assets/css/stm-custom-daterangepicker-style4963.css?ver=1.1')}}" type='text/css' media='all' />
@include('layouts.header')
<div id="main">
   <div class="container" >
      <div data-elementor-type="wp-page" data-elementor-id="3104" class="elementor elementor-3104">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-fd15043 elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-height-default elementor-section-items-middle" data-id="fd15043" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5cab879" data-id="5cab879" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-0bb7e84 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0bb7e84" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default"  >
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f1eb0f" data-id="1f1eb0f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ae22989 elementor-absolute elementor-widget__width-initial elementor-widget elementor-widget-stm-contact-form-seven" data-id="ae22989" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="stm-contact-form-seven.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-elementor-contact-form-seven " id="single_contact_form_73186">
                                          <div class="icon-title">
                                             <h2 class="heading-font title">
                                                Enquiry
                                             </h2>
                                          </div>
                                          <div class="wpcf7 js" id="wpcf7-f717-p3100-o1" lang="en-US" dir="ltr">
                                             
                                             <form action="{{route('enquires.store')}}" method="post" class="wpcf7-form init " id="form-enquiry"
                                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                @csrf
                                                <div class="row">
                                                   <div class="col-md-12 col-sm-12">
                                                      <div class="row">
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label"> Name*</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="first-name">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required "
                                                                  aria-required="true" placeholder="Enter your name" value=""
                                                                  type="text" name="customer_name">
                                                               </span>
                                                               @error('customer_name')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Contact Number *</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="last-name">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required  @error('contact_number') is-invalid @enderror"
                                                                  aria-required="true" aria-invalid="false" placeholder="Enter your Contact Number" value="" type="tel"
                                                                  name="contact_number">
                                                               </span>
                                                               @error('contact_number')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Location</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="location">
                                                               <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel @error('location') is-invalid @enderror"
                                                                  aria-invalid="false" placeholder="Enter location" value="{{ old('location') }}" type="text" name="location">
                                                               </span>
                                                               @error('location')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Start Date *</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="email">
                                                               <input size="40" style="background-color: #eceff3;border: #eceff3;height: 40px" class="form-control date
                                                                  @error('start_date') is-invalid @enderror wpcf7-validates-as-email"
                                                                  aria-required="true" aria-invalid="false" placeholder="Enter start date"
                                                                  value="{{ old('start_date') }}" type="date"
                                                                  name="start_date" id="start_date">
                                                               </span>
                                                               @error('start_date')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">End Date *</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="phone">
                                                               <input size="40" style="background-color: #eceff3;border: #eceff3;height: 40px" class="form-control date
                                                                  @error('end_date') is-invalid @enderror"
                                                                  aria-invalid="false" placeholder="Enter end date" value="{{ old('end_date') }}"
                                                                  type="date" name="end_date" id="end_date">
                                                               </span>
                                                               @error('end_date')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                               <div class="contact-us-label">Vehicle *</div>
                                                               <span class="wpcf7-form-control-wrap" data-name="last-name">
                                                                  <select class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required
                                                                     @error('vehicle') is-invalid @enderror" size="40" name="vehicle" id="vehicle">
                                                                     <option>HYUNDAI ACCENT – 2023</option>
                                                                     <option>NISSAN KICKS  - 2022</option>
                                                                     <option>KIA K5 – 2023</option>
                                                                     <option>CHEVROLET CAPTIVA PREMIER – 2023</option>
                                                                     <option>KIA PICANTO– 2023</option>
                                                                  </select>
                                                               </span>
                                                               @error('vehicle')
                                                               <div class="alert alert-danger">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="contact-us-submit justify-content-center">
                                                   <input class="wpcf7-form-control has-spinner wpcf7-submit  btn p-3 pl-4 pr-4" id="enquiry-submit" style="background-color: #cc6119;color: #FFFFFF"
                                                      type="button" value="Submit">
                                                   <span class="wpcf7-spinner"></span>
                                                </div>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                             </form>
                                             <div class="alert alert-success" id="enquiry-form-output" hidden role="alert"></div>
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
      </div>
   </div>
</div>
</div>
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
   jQuery.validator.setDefaults({
       errorClass: "text-danger",
       errorElement: "p",
       errorPlacement: function ( error, element ) {
           error.addClass( "text-danger" );
           if (element.hasClass("select2-hidden-accessible")) {
               element = $("#select2-" + element.attr("id") + "-container").parent();
               error.insertAfter(element);
           }
           else{
               error.insertAfter( element );
           }
       }
   });
   jQuery.validator.addMethod("greaterStart", function (value, element, params) {
       var startDate = $('#start_date').val();
       var endDate = $('#end_date').val();
   
       if( startDate <= endDate) {
           return true;
       }else{
           return false;
       }
   },'Must be greater than or equal to start date.');
   jQuery.validator.addMethod("minimumTodayDate", function (value, element, params) {
       var startDate = $('#start_date').val();
       var date = (new Date()).toISOString().split('T')[0];
       if( startDate < date) {
           return false;
       }else{
           return true;
       }
   },'Must be greater than or equal to today date.');
   jQuery('#vehicle').on('change',function(){
       jQuery('#vehicle-error').remove();
   })
   jQuery("#form-enquiry").validate({
       rules: {
           customer_name: {
               required: true,
               maxlength:255
           },
           contact_number: {
               required: true,
               minlength:7,
               maxlength:20,
               number:true
           },
           vehicle: {
               required: true,
           },
           start_date: {
               required: true,
               minimumTodayDate:true
           },
           end_date: {
               required: true,
               greaterStart: true,
           },
           location: {
               required: true,
           },
       },
   })
   jQuery("#enquiry-submit").click(function(e) {
   
       e.preventDefault();
   
       if( $("#form-enquiry").valid()) {
           $('#enquiry-submit').attr('disabled', true);
           var form = $("#form-enquiry");
           var url = form.attr('action');
           jQuery.ajax({
               type: "POST",
               url: url,
               data: form.serialize(),
               success: function(data) {
                   $('#enquiry-submit').attr('disabled', false);
                   $('#enquiry-form-output').attr('hidden', false);
                   $('#enquiry-form-output').text("Enquiry send successfully ! Our Team will be contact you soon!");
                   document.getElementById("form-enquiry").reset();
   
               },
           });
       }
   
   });
   
</script>
<script type='text/javascript' id='jquery_cookie-js-extra'>
   var datepickervars = {"apply":"Apply","cancel":"Cancel"};
   
</script>
@include('layouts.footer')
@endsection
