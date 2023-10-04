@extends('layouts.main')
@section('content')
@section('title', 'Vehicles')
@include('layouts.header')
</br>
<style>
   .stm_motors_listing_types_multilisting_active .listing-list-loop.stm-listing-directory-list-loop .content .meta-top .price, .stm_motors_listing_types_multilisting_active .listing-list-loop.stm-listing-directory-list-loop .content .meta-top .price:before {
   background-color: #cc6119!important;
   }
</style>
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="639" class="elementor elementor-639">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-c88b2ca elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c88b2ca" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div style="width:1500px;" class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-8fd042b" data-id="8fd042b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-3d2b1bd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3d2b1bd" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <style>
                              .elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}
                           </style>
                           <div class="elementor-divider">
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-db5cbfb elementor-widget elementor-widget-motors-inventory-search-results"
                        data-id="db5cbfb" data-element_type="widget" data-widget_type="motors-inventory-search-results.default">
                        <div class="elementor-widget-container">
                           <div class="motors-elementor-inventory-search-results" id="listings-result">
                              <div class="stm-isotope-sorting stm-isotope-sorting-grid">
                                 <center>
                                    <h3>VEHICLES</h3>
                                 </center>
                                 <div class="elementor-element elementor-element-5224060 elementor-widget elementor-widget-stm-colored-separator" data-id="5224060" data-element_type="widget" data-widget_type="stm-colored-separator.default">
                                    <div class="elementor-widget-container">
                                       <div class="colored-separator" style="text-align: center;">
                                          <div class="first-long stm-base-background-color"></div>
                                          <div class="last-short stm-base-background-color"></div>
                                       </div>
                                    </div>
                                 </div>
                                 </br>
                                 @include('pages.vehicles2')
                              </div>
                              <div class="stm_ajax_pagination stm-blog-pagination">
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
@include('layouts.footer')
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready( function() 
   {
      var element = document.getElementById("vehicle");
      element.classList.add("current_page_item");
   });
</script>
@endsection
