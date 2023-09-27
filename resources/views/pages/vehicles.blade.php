@extends('layouts.main')
@section('content')
    @section('title', 'Vehicles')
@include('layouts.header')
</br>
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="639" class="elementor elementor-639">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-c88b2ca elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c88b2ca" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
            <!--include search here-->
               <div style="width:1500px;" class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-8fd042b" data-id="8fd042b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-97180f3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="97180f3" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7d031fa" data-id="7d031fa" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1b78c5c elementor-widget elementor-widget-motors-inventory-sort-by" data-id="1b78c5c" data-element_type="widget" data-widget_type="motors-inventory-sort-by.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-sort-by-options clearfix">
                                          <span>Sort by:</span>
                                          <div class="stm-select-sorting">
                                             <select>
                                                <option value="date_high" selected>Date: newest first</option>
                                                <option value="date_low">Date: oldest first</option>
                                                <option value="mileage_high">Mileage: highest first</option>
                                                <option value="mileage_low">Mileage: lowest first</option>
                                                <option value="engine_high">Engine: highest first</option>
                                                <option value="engine_low">Engine: lowest first</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6fb14d0" data-id="6fb14d0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-c7ffb21 elementor-widget elementor-widget-motors-inventory-view-type" data-id="c7ffb21" data-element_type="widget" data-widget_type="motors-inventory-view-type.default">
                                    <div class="elementor-widget-container">
                                       <div class="stm-view-by">
                                          <a href="#" class="view-list view-type active" data-view="list" onclick=showList()>
                                          <i class="stm-icon-list"></i>
                                          </a>
                                          <a href="#" class="view-grid view-type" data-view="grid" onclick=showGrid()>
                                          <i class="stm-icon-grid"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section> -->
                     <div class="elementor-element elementor-element-3d2b1bd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3d2b1bd" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}
                           </style>
                           <div class="elementor-divider">
                              <!-- <span class="elementor-divider-separator">
                              </span> -->
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-db5cbfb elementor-widget elementor-widget-motors-inventory-search-results"
                          data-id="db5cbfb" data-element_type="widget" data-widget_type="motors-inventory-search-results.default">
                        <div class="elementor-widget-container">
                           <div class="motors-elementor-inventory-search-results" id="listings-result">
                              <div class="stm-isotope-sorting stm-isotope-sorting-grid">
                                 @include('pages.vehicles2')
                                 <div class="row row-3 car-listing-row car-listing-modern-grid" id="vehicles_grid">
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 electric-118
                                        grey-133 new-cars-157 orange-metallic-165 roadster-180 sportcar-193 tesla-199 listing_is_active"
                                       data-price="121000"
                                       data-date="202103261255"
                                       data-price="121000">
                                       <a href="../listings/tesla-roadster/index.html" class="rmv_txt_drctn">
                                          <div class="image">

                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-24-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-24-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-24-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2721"
                                                data-title="Tesla Roadster 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$121 000</div>
                                                   <div class="sale-price">$109 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   Tesla Roadster 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>130 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 beige-87 petrol-131 lamborghini-144 orange-metallic-165 suv-197 urus-206 used-cars-207 listing_is_active"
                                       data-price="340000"
                                       data-date="202103261233"
                                       data-price="340000">
                                       <a href="../listings/lamborghini-urus-2021/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-18-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-18-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-18-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div class="stm-badge-directory heading-font  stm-badge-dealer " >
                                                Special
                                             </div>
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2690"
                                                data-title="Lamborghini Urus 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$340 000</div>
                                                   <div class="sale-price">$305 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   Lamborghini Urus 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>1200 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>28/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 beige-87 chevrolet-100 diesel-114 jet-black-140 jet-red-141 midnight-silver-metallic-152 new-cars-157 rich-black-177 solid-black-187 solid-white-188 suburban-196 suv-197 listing_is_active"
                                       data-price="35000"
                                       data-date="202103261128"
                                       data-price="35000">
                                       <a href="../listings/chevrolet-suburban-2021/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-10-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-10-255x135.jpg')}} 1x,
                                                {{asset ('uploads/2021/03/01-10-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2648"
                                                data-title="Chevrolet Suburban 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price">
                                                   <div class="normal-price">$35 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   Chevrolet Suburban 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>20 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4-series-63 automatic-83 bmw-91 coupe-106 petrol-131 jet-black-140 jet-red-141 midnight-silver-metallic-152 new-cars-157 rwd-181 listing_is_active"
                                       data-price="76000"
                                       data-date="202103250949"
                                       data-price="76000">
                                       <a href="../listings/bmw-m440i/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-7-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-7-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-7-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2628"
                                                data-title="BMW 4-series 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$76 000</div>
                                                   <div class="sale-price">$71 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   BMW 4-series 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>10 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 5-serie-model-69 automatic-83 bmw-91 deep-blue-pearl-113 petrol-131 jet-black-140 orange-metallic-165 sedan-183 used-cars-207 listing_is_active"
                                       data-price="115000"
                                       data-date="202103250942"
                                       data-price="115000">
                                       <a href="../listings/bmw-m5/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-6-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-6-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-6-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div class="stm-badge-directory heading-font  stm-badge-dealer " >
                                                Special
                                             </div>
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2622"
                                                data-title="BMW 5-serie 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$115 000</div>
                                                   <div class="sale-price">$99 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   BMW 5-serie 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>29000 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 beige-87 bentley-89 flying-spur-125 petrol-131 grey-133 new-cars-157 sedan-183 titanium-metallic-201 listing_is_active"
                                       data-price="340000"
                                       data-date="202103250857"
                                       data-price="340000">
                                       <a href="../listings/bentley-flying-spur/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-5-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-5-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-5-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2616"
                                                data-title="Bentley Flying Spur 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$340 000</div>
                                                   <div class="sale-price">$305 700</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   Bentley Flying Spur 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>200 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 bentayga-88 bentley-89 brown-92 petrol-131 midnight-silver-metallic-152 off-road-162 deep-red-169 suv-197 used-cars-207 listing_is_active"
                                       data-price="330000"
                                       data-date="202103250713"
                                       data-price="330000">
                                       <a href="../listings/bentley-bentayaga/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="{{asset ('uploads/2021/03/01-3-255x135.jpg')}}"
                                                srcset="{{asset ('uploads/2021/03/01-3-255x135.jpg')}} 1x, {{asset ('uploads/2021/03/01-3-510x270.jpg')}} 2x"
                                                src="{{asset ('themes/motors/assets/images/plchldr255.png')}}"
                                                class="lazy img-responsive"
                                                alt="motors_placeholder"
                                                />
                                             <div
                                                class="stm-listing-compare stm-compare-directory-new"
                                                data-post-type="listings"
                                                data-id="2606"
                                                data-title="Bentley Bentayga 2021"
                                                data-toggle="tooltip"
                                                data-placement="left"
                                                title="Add to compare">
                                                <i class="stm-boats-icon-add-to-compare"></i>
                                             </div>
                                          </div>
                                          <div class="listing-car-item-meta">
                                             <div class="car-meta-top heading-font clearfix">
                                                <div class="price discounted-price">
                                                   <div class="regular-price">$330 000</div>
                                                   <div class="sale-price">$315 000</div>
                                                </div>
                                                <div class="car-title" data-max-char="44">
                                                   Bentley Bentayga 2021
                                                </div>
                                             </div>
                                             <div class="car-meta-bottom">
                                                <ul>
                                                   <li>
                                                      <i class="stm-icon-road"></i>
                                                      <span>20 mi</span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-fuel"></i>
                                                      <span>18/100 </span>
                                                   </li>
                                                   <li>
                                                      <i class="stm-icon-transmission_fill"></i>
                                                      <span>Automatic</span>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
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
                  Inventory
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
               <input name="vehicle_id" type="hidden" value="639" />
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
						Inventory					</div>
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
							<div class="motors-gdpr" style="margin: 20px 0;"><label><input type="checkbox" name="motors-gdpr-agree" value="agree" data-need="true" required />I agree with storaging of my data by this website.</label></div>						</div>
						<div class="col-md-5 col-sm-5">
							<button type="submit" class="stm-request-test-drive">Request</button>
							<div class="stm-ajax-loader" style="margin-top:10px;">
								<i class="stm-icon-load1"></i>
							</div>
						</div>
					</div>
					<div class="mg-bt-25px"></div>
					<input name="vehicle_id" type="hidden" value="639" />
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

<div id="stm-overlay"></div>
<!-- jQuery -->
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready(function ()
   {
      $("#vehicles_grid").hide();
   });
   function showList()
   {
      $("#vehicles_grid").hide();
      $("#vehicles_list").show();
   }
   function showGrid()
   {
      $("#vehicles_grid").show();
      $("#vehicles_list").hide();
   }
</script>
@endsection
