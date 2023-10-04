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
@include('layouts.header')
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="3201" class="elementor elementor-3201">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-51f601c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51f601c" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
            </div>
         </section>
         <center>
            <h3>ABOUT US</h3>
         </center>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-89359a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="89359a9" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0283819" data-id="0283819" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-0c2b075 elementor-widget elementor-widget-text-editor" data-id="0c2b075" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
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
                           <ul class="list-style-1" style="margin-top: 15px;">
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
@include('layouts.footer')
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready( function() 
   {
      var element = document.getElementById("about-us");
      element.classList.add("current_page_item");
   });
</script>
@endsection
