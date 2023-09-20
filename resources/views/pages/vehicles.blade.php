
@extends('layouts.main')
@section('content')
@include('layouts.header')
<div id="main">
   <div class="container">
      <div data-elementor-type="wp-page" data-elementor-id="639" class="elementor elementor-639">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-c88b2ca elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c88b2ca" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1f7bc91" data-id="1f7bc91" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-17f75ef elementor-widget elementor-widget-motors-inventory-search-filter" data-id="17f75ef" data-element_type="widget" data-widget_type="motors-inventory-search-filter.default">
                        <div class="elementor-widget-container">
                           <div class="mobile-filter">
                              <div class="mobile-search-btn icon-left">
                                 <i aria-hidden="true" class="stm-icon-car_search"></i>		<span class="mobile-search-btn-text">Search Options</span>
                              </div>
                           </div>
                           <div class="classic-filter-row motors-elementor-widget">
                              <form class="search-filter-form" action="http://localhost/rent/inventory/" method="get" data-trigger="filter"
                                 data-action="listings-result">
                                 <div class="filter filter-sidebar ajax-filter">
                                    <div class="sidebar-entry-header icon-left">
                                       <i aria-hidden="true" class="stm-icon-car_search"></i>				<span class="h4">Search Options</span>
                                    </div>
                                    <div class="sidebar-entry-header-mobile">
                                       <span class="h4">Search Options</span>
                                       <div class="close-btn">
                                          <span class="close-btn-item"></span>
                                          <span class="close-btn-item"></span>
                                       </div>
                                    </div>
                                    <div class="row row-pad-top-24">
                                       <div class="col-md-12 col-sm-6 stm-filter_condition">
                                          <div class="form-group type-select">
                                             <select name="condition" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Condition
                                                </option>
                                                <option value="new-cars"  >
                                                   New
                                                </option>
                                                <option value="used-cars"  >
                                                   Used
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_body">
                                          <div class="form-group type-select">
                                             <select name="body" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Body
                                                </option>
                                                <option value="limousine"   disabled='disabled'>
                                                   Compact
                                                </option>
                                                <option value="convertible"   disabled='disabled'>
                                                   Convertible
                                                </option>
                                                <option value="coupe"  >
                                                   Coupe
                                                </option>
                                                <option value="off-road"  >
                                                   Off-Road
                                                </option>
                                                <option value="other"   disabled='disabled'>
                                                   Other
                                                </option>
                                                <option value="pickup"   disabled='disabled'>
                                                   Pickup
                                                </option>
                                                <option value="sedan"  >
                                                   Sedan
                                                </option>
                                                <option value="sportcar"  >
                                                   Sportcar
                                                </option>
                                                <option value="station-wagon"   disabled='disabled'>
                                                   Station Wagon
                                                </option>
                                                <option value="suv"  >
                                                   SUV
                                                </option>
                                                <option value="transporter"   disabled='disabled'>
                                                   Transporter
                                                </option>
                                                <option value="van"   disabled='disabled'>
                                                   Van
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_make">
                                          <div class="form-group type-select">
                                             <select name="make" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Make
                                                </option>
                                                <option value="acura"   disabled='disabled'>
                                                   Acura
                                                </option>
                                                <option value="audi"   disabled='disabled'>
                                                   Audi
                                                </option>
                                                <option value="bentley"  >
                                                   Bentley
                                                </option>
                                                <option value="bmw"  >
                                                   BMW
                                                </option>
                                                <option value="chevrolet"  >
                                                   Chevrolet
                                                </option>
                                                <option value="chevy"   disabled='disabled'>
                                                   Chevy
                                                </option>
                                                <option value="dodge"   disabled='disabled'>
                                                   Dodge
                                                </option>
                                                <option value="ford"   disabled='disabled'>
                                                   Ford
                                                </option>
                                                <option value="honda"   disabled='disabled'>
                                                   Honda
                                                </option>
                                                <option value="hyundai"   disabled='disabled'>
                                                   Hyundai
                                                </option>
                                                <option value="kia"   disabled='disabled'>
                                                   Kia
                                                </option>
                                                <option value="lamborghini"  >
                                                   Lamborghini
                                                </option>
                                                <option value="lexus"   disabled='disabled'>
                                                   Lexus
                                                </option>
                                                <option value="mazda"   disabled='disabled'>
                                                   Mazda
                                                </option>
                                                <option value="mercedes-benz"   disabled='disabled'>
                                                   Mercedes-Benz
                                                </option>
                                                <option value="nissan"   disabled='disabled'>
                                                   Nissan
                                                </option>
                                                <option value="range-rover"   disabled='disabled'>
                                                   Range Rover
                                                </option>
                                                <option value="renault"   disabled='disabled'>
                                                   Renault
                                                </option>
                                                <option value="tesla"  >
                                                   Tesla
                                                </option>
                                                <option value="toyota"   disabled='disabled'>
                                                   Toyota
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_serie">
                                          <div class="form-group type-select">
                                             <select name="serie" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Model
                                                </option>
                                                <option value="3-serie-model"   disabled='disabled'>
                                                   3-serie
                                                </option>
                                                <option value="370z"   disabled='disabled'>
                                                   370Z
                                                </option>
                                                <option value="4-series"  >
                                                   4-series
                                                </option>
                                                <option value="5-serie-model"  >
                                                   5-serie
                                                </option>
                                                <option value="accord"   disabled='disabled'>
                                                   Accord
                                                </option>
                                                <option value="altima"   disabled='disabled'>
                                                   Altima
                                                </option>
                                                <option value="avalon"   disabled='disabled'>
                                                   Avalon
                                                </option>
                                                <option value="bentayga"  >
                                                   Bentayga
                                                </option>
                                                <option value="c-class"   disabled='disabled'>
                                                   C-Class
                                                </option>
                                                <option value="camry"   disabled='disabled'>
                                                   Camry
                                                </option>
                                                <option value="charger"   disabled='disabled'>
                                                   Charger
                                                </option>
                                                <option value="civic"   disabled='disabled'>
                                                   Civic
                                                </option>
                                                <option value="cr-v"   disabled='disabled'>
                                                   CR-V
                                                </option>
                                                <option value="cruze"   disabled='disabled'>
                                                   Cruze
                                                </option>
                                                <option value="cx-30"   disabled='disabled'>
                                                   CX-30
                                                </option>
                                                <option value="cx-5"   disabled='disabled'>
                                                   CX-5
                                                </option>
                                                <option value="elantra"   disabled='disabled'>
                                                   Elantra
                                                </option>
                                                <option value="es-350"   disabled='disabled'>
                                                   ES-350
                                                </option>
                                                <option value="explorer"   disabled='disabled'>
                                                   Explorer
                                                </option>
                                                <option value="f-150-raptor"   disabled='disabled'>
                                                   F-150 Raptor
                                                </option>
                                                <option value="flying-spur"  >
                                                   Flying Spur
                                                </option>
                                                <option value="focus"   disabled='disabled'>
                                                   Focus
                                                </option>
                                                <option value="fusion"   disabled='disabled'>
                                                   Fusion
                                                </option>
                                                <option value="genesis"   disabled='disabled'>
                                                   Genesis
                                                </option>
                                                <option value="gtr"   disabled='disabled'>
                                                   GTR
                                                </option>
                                                <option value="ilx"   disabled='disabled'>
                                                   ILX
                                                </option>
                                                <option value="kaptur"   disabled='disabled'>
                                                   Kaptur
                                                </option>
                                                <option value="malibu"   disabled='disabled'>
                                                   Malibu
                                                </option>
                                                <option value="model-x"   disabled='disabled'>
                                                   Model X
                                                </option>
                                                <option value="mustang"   disabled='disabled'>
                                                   Mustang
                                                </option>
                                                <option value="odyssey"   disabled='disabled'>
                                                   Odyssey
                                                </option>
                                                <option value="optima"   disabled='disabled'>
                                                   Optima
                                                </option>
                                                <option value="pilot"   disabled='disabled'>
                                                   Pilot
                                                </option>
                                                <option value="q8"   disabled='disabled'>
                                                   Q8
                                                </option>
                                                <option value="r8"   disabled='disabled'>
                                                   R8
                                                </option>
                                                <option value="rav4"   disabled='disabled'>
                                                   RAV4
                                                </option>
                                                <option value="rdx"   disabled='disabled'>
                                                   RDX
                                                </option>
                                                <option value="rio"   disabled='disabled'>
                                                   Rio
                                                </option>
                                                <option value="roadster"  >
                                                   Roadster
                                                </option>
                                                <option value="rx-350"   disabled='disabled'>
                                                   RX-350
                                                </option>
                                                <option value="sentra"   disabled='disabled'>
                                                   Sentra
                                                </option>
                                                <option value="sorento"   disabled='disabled'>
                                                   Sorento
                                                </option>
                                                <option value="soul"   disabled='disabled'>
                                                   Soul
                                                </option>
                                                <option value="suburban"  >
                                                   Suburban
                                                </option>
                                                <option value="tacoma"   disabled='disabled'>
                                                   Tacoma
                                                </option>
                                                <option value="tuscon"   disabled='disabled'>
                                                   Tucson
                                                </option>
                                                <option value="urus"  >
                                                   Urus
                                                </option>
                                                <option value="ux-250h"   disabled='disabled'>
                                                   UX 250h
                                                </option>
                                                <option value="veloster"   disabled='disabled'>
                                                   Veloster
                                                </option>
                                                <option value="versa"   disabled='disabled'>
                                                   Versa
                                                </option>
                                                <option value="vogue"   disabled='disabled'>
                                                   Vogue
                                                </option>
                                                <option value="x7-xdrive40i"   disabled='disabled'>
                                                   X7 xDrive40i
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_mileage">
                                          <div class="form-group type-select">
                                             <select name="mileage" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Max Mileage
                                                </option>
                                                <option value="&lt;5000"  >
                                                   &lt; 5000
                                                </option>
                                                <option value="5000-10000"  >
                                                   5000-10000
                                                </option>
                                                <option value="10000-15000"  >
                                                   10000-15000
                                                </option>
                                                <option value="15000-20000"  >
                                                   15000-20000
                                                </option>
                                                <option value="20000-25000"  >
                                                   20000-25000
                                                </option>
                                                <option value="&gt;25000"  >
                                                   &gt;25000
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_fuel">
                                          <div class="form-group type-select">
                                             <select name="fuel" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Fuel type
                                                </option>
                                                <option value="diesel"  >
                                                   Diesel
                                                </option>
                                                <option value="electric"  >
                                                   Electric
                                                </option>
                                                <option value="biofuels-biodiesel-and-bioethanol"   disabled='disabled'>
                                                   Ethanol
                                                </option>
                                                <option value="petrol"  >
                                                   Gasoline
                                                </option>
                                                <option value="premium-petrol"   disabled='disabled'>
                                                   Hybrid
                                                </option>
                                                <option value="lpg-autogas"   disabled='disabled'>
                                                   LPG Autogas
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_ca-year">
                                          <div class="form-group type-select">
                                             <select name="ca-year" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Year
                                                </option>
                                                <option value="1967"   disabled='disabled'>
                                                   1967
                                                </option>
                                                <option value="1980"   disabled='disabled'>
                                                   1980
                                                </option>
                                                <option value="1990"   disabled='disabled'>
                                                   1990
                                                </option>
                                                <option value="2000"   disabled='disabled'>
                                                   2000
                                                </option>
                                                <option value="2005"   disabled='disabled'>
                                                   2005
                                                </option>
                                                <option value="2010"   disabled='disabled'>
                                                   2010
                                                </option>
                                                <option value="2015"   disabled='disabled'>
                                                   2015
                                                </option>
                                                <option value="2019"   disabled='disabled'>
                                                   2019
                                                </option>
                                                <option value="2020"   disabled='disabled'>
                                                   2020
                                                </option>
                                                <option value="2021"  >
                                                   2021
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-12">
                                          <div class="filter-price stm-slider-filter-type-unit">
                                             <div class="clearfix">
                                                <h5 class="pull-left">Price</h5>
                                                <div class="stm-current-slider-labels">$2 000 — $200 000</div>
                                             </div>
                                             <div class="stm-price-range-unit">
                                                <div class="stm-price-range stm-filter-type-slider"></div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6 col-sm-6 col-md-wider-right">
                                                   <input type="text" name="min_price"
                                                      id="stm_filter_min_price"
                                                      class="form-control"
                                                      />
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-md-wider-left">
                                                   <input type="text" name="max_price"
                                                      id="stm_filter_max_price"
                                                      class="form-control"
                                                      />
                                                </div>
                                             </div>
                                          </div>
                                          <!--Init slider-->
                                          <script type="text/javascript">
                                             var stmOptions_price;
                                             (function ($) {
                                             	$(document).ready(function () {
                                             		var affix = "";
                                             		var stmMinValue = 2000;
                                             		var stmMaxValue = 200000;
                                             		stmOptions_price = {
                                             			range: true,
                                             			min: 2000,
                                             			max: 200000,
                                             			values: [2000, 200000],
                                             			step: 100,
                                             			slide: function (event, ui) {
                                             				$("#stm_filter_min_price").val(ui.values[0]);
                                             				$("#stm_filter_max_price").val(ui.values[1]);
                                             									var stmCurrency = "$";
                                             				var stmPriceDel = " ";
                                             				var stmCurrencyPos = "left";
                                             				var stmText = stm_get_price_view(ui.values[0], stmCurrency, stmCurrencyPos, stmPriceDel ) + ' - ' + stm_get_price_view(ui.values[1], stmCurrency, stmCurrencyPos, stmPriceDel );

                                             				$('.filter-price .stm-current-slider-labels').html(stmText);
                                             			}
                                             		};
                                             		$(".stm-price-range").slider(stmOptions_price);


                                             		$("#stm_filter_min_price").val($(".stm-price-range").slider("values", 0));
                                             		$("#stm_filter_max_price").val($(".stm-price-range").slider("values", 1));

                                             		$("#stm_filter_min_price").on('keyup', function () {
                                             			$(".stm-price-range").slider("values", 0, $(this).val());
                                             		});

                                             		$("#stm_filter_min_price").on('focusout', function () {
                                             			if ($(this).val() < stmMinValue) {
                                             				$(".stm-price-range").slider("values", 0, stmMinValue);
                                             				$(this).val(stmMinValue);
                                             			}
                                             		});

                                             		$("#stm_filter_max_price").on('keyup', function () {
                                             			$(".stm-price-range").slider("values", 1, $(this).val());
                                             		});

                                             		$("#stm_filter_max_price").on('focusout', function () {
                                             			if ($(this).val() > stmMaxValue) {
                                             				$(".stm-price-range").slider("values", 1, stmMaxValue);
                                             				$(this).val(stmMaxValue);
                                             			}
                                             		});
                                             	})
                                             })(jQuery);
                                          </script>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_transmission">
                                          <div class="form-group type-select">
                                             <select name="transmission" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Transmission
                                                </option>
                                                <option value="automatic"  >
                                                   Automatic
                                                </option>
                                                <option value="6-manual"   disabled='disabled'>
                                                   Manual
                                                </option>
                                                <option value="semi-manual"   disabled='disabled'>
                                                   Semi-automatic
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_drive">
                                          <div class="form-group type-select">
                                             <select name="drive" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Drive
                                                </option>
                                                <option value="4wd"  >
                                                   4WD
                                                </option>
                                                <option value="awd"   disabled='disabled'>
                                                   AWD
                                                </option>
                                                <option value="fwd"   disabled='disabled'>
                                                   FWD
                                                </option>
                                                <option value="rwd"  >
                                                   RWD
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-6 stm-filter_exterior-color">
                                          <div class="form-group type-select">
                                             <select name="exterior-color" class="form-control">
                                                <option value=""  selected='selected' >
                                                   Exterior Color
                                                </option>
                                                <option value="deep-blue-pearl"  >
                                                   Deep Blue Pearl
                                                </option>
                                                <option value="midnight-silver-metallic"  >
                                                   Midnight Silver Metallic
                                                </option>
                                                <option value="obsidian-black-metallic"   disabled='disabled'>
                                                   Obsidian Black Metallic
                                                </option>
                                                <option value="orange-metallic"  >
                                                   Orange Metallic
                                                </option>
                                                <option value="deep-red"  >
                                                   Pearl White
                                                </option>
                                                <option value="rich-black"  >
                                                   Red Multi-Coat
                                                </option>
                                                <option value="silver-metallic"   disabled='disabled'>
                                                   Silver Metallic
                                                </option>
                                                <option value="solid-black"  >
                                                   Solid Black
                                                </option>
                                                <option value="solid-white"  >
                                                   Solid White
                                                </option>
                                                <option value="titanium-metallic"  >
                                                   Titanium Metallic
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <!--Location inputs-->
                                       <div class="col-md-12 col-sm-12">
                                          <div class="form-group boats-location">
                                             <div class="stm-location-search-unit">
                                                <input type="text" id="ca_location_listing_filter"
                                                   class="stm_listing_search_location"
                                                   name="ca_location"
                                                   value=""
                                                   placeholder="Search by location"
                                                   />
                                                <input type="hidden" name="stm_lat" value="0">
                                                <input type="hidden" name="stm_lng" value="0">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-12">
                                          <div class="filter-search_radius stm-slider-filter-type-unit">
                                             <div class="clearfix">
                                                <h5 class="pull-left">Search radius</h5>
                                                <div class="stm-current-slider-labels">5000</div>
                                             </div>
                                             <div class="stm-price-range-unit">
                                                <div class="stm-search_radius-range stm-filter-type-slider"></div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                   <input type="text" name="max_search_radius" id="stm_slide_filter_max_search_radius" class="form-control" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <script type="text/javascript">
                                          var stmOptions_search_radius;
                                          (function ($) {
                                          	$(document).ready(function () {
                                          		var stmMaxRadiusValue = 5000;
                                          		stmOptions_search_radius = {
                                          			step: 1,
                                          			min: 1,
                                          			max: 5000,
                                          			value: 5000,
                                          			slide: function (event, ui) {
                                          				$("#stm_slide_filter_max_search_radius").val(ui.value);
                                          				var stmText = ui.value;

                                          				$('.filter-search_radius .stm-current-slider-labels').html(stmText);
                                          			}
                                          		};
                                          		$(".stm-search_radius-range").slider(stmOptions_search_radius);


                                          		$("#stm_slide_filter_max_search_radius").val($(".stm-search_radius-range").slider("values", 1));

                                          		$("#stm_slide_filter_max_search_radius").on('keyup', function () {
                                          			$(".stm-search_radius-range").slider("values", 1, $(this).val());
                                          		});

                                          		$("#stm_slide_filter_max_search_radius").on('focusout', function () {
                                          			if ($(this).val() > stmMaxRadiusValue) {
                                          				$(".stm-search_radius-range").slider("values", 1, stmMaxRadiusValue);
                                          				$(this).val(stmMaxRadiusValue);
                                          			}
                                          		});
                                          	})
                                          })(jQuery);
                                       </script>
                                    </div>
                                    <!--View type-->
                                    <input type="hidden" id="stm_view_type" name="view_type"
                                       value=""/>
                                    <!--Filter links-->
                                    <input type="hidden" id="stm-filter-links-input" name="stm_filter_link" value=""/>
                                    <!--Popular-->
                                    <input type="hidden" name="popular" value=""/>
                                    <input type="hidden" name="s" value=""/>
                                    <input type="hidden" name="sort_order"
                                       value=""/>
                                    <div class="sidebar-action-units">
                                       <input id="stm-classic-filter-submit" class="hidden" type="submit"
                                          value="Show cars"/>
                                       <a href="index.html" class="button">
                                       <i aria-hidden="true" class="stm-icon-reset"></i>					<span>Reset All</span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--Classified price-->
                                 <div
                                    class="stm-accordion-single-unit stm-listing-directory-checkboxes stm-two_cols stm-ajax-checkbox-instant">
                                    <a class="title
                                       collapsed " data-toggle="collapse" href="#accordion-body"
                                       aria-expanded="false">
                                       <h5>Body</h5>
                                       <span class="minus"></span>
                                    </a>
                                    <div class="stm-accordion-content">
                                       <div class="collapse content
                                          " id="accordion-body">
                                          <div class="stm-accordion-content-wrapper stm-accordion-content-padded">
                                             <div class="stm-accordion-inner">
                                                </label>
                                                </label>
                                                </label>
                                                </label>
                                                </label>
                                                <label class="stm-option-label">
                                                <input type="checkbox" name="body[]"
                                                   value="coupe"
                                                   />
                                                <span>Coupe</span>
                                                </label>
                                                <label class="stm-option-label">
                                                <input type="checkbox" name="body[]"
                                                   value="off-road"
                                                   />
                                                <span>Off-Road</span>
                                                </label>
                                                <label class="stm-option-label">
                                                <input type="checkbox" name="body[]"
                                                   value="sedan"
                                                   />
                                                <span>Sedan</span>
                                                </label>
                                                <label class="stm-option-label">
                                                <input type="checkbox" name="body[]"
                                                   value="sportcar"
                                                   />
                                                <span>Sportcar</span>
                                                </label>
                                                <label class="stm-option-label">
                                                <input type="checkbox" name="body[]"
                                                   value="suv"
                                                   />
                                                <span>SUV</span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grow-wrapper"></div>
                                 <div class="sticky-filter-actions">
                                    <div class="filter-show-cars">
                                       <button id="show-car-btn-mobile" class="show-car-btn">
                                       Show <span>7</span> Cars					</button>
                                    </div>
                                    <div class="reset-btn-mobile">
                                       <a href="index.html" class="button">
                                       <i aria-hidden="true" class="stm-icon-reset"></i>					<span>Reset All</span>
                                       </a>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-8fd042b" data-id="8fd042b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-97180f3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="97180f3" data-element_type="section">
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
                                          <a href="#" class="view-grid view-type active" data-view="grid">
                                          <i class="stm-icon-grid"></i>
                                          </a>
                                          <a href="#" class="view-list view-type " data-view="list">
                                          <i class="stm-icon-list"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <div class="elementor-element elementor-element-3d2b1bd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3d2b1bd" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}
                           </style>
                           <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-db5cbfb elementor-widget elementor-widget-motors-inventory-search-results" data-id="db5cbfb" data-element_type="widget" data-widget_type="motors-inventory-search-results.default">
                        <div class="elementor-widget-container">
                           <div class="motors-elementor-inventory-search-results" id="listings-result">
                              <div class="stm-isotope-sorting stm-isotope-sorting-grid">
                                 <div class="row row-3 car-listing-row car-listing-modern-grid">
                                    <div
                                       class="col-md-4 col-sm-4 col-xs-12 col-xxs-12 stm-isotope-listing-item all 2021-53 4wd-68 automatic-83 electric-118 grey-133 new-cars-157 orange-metallic-165 roadster-180 sportcar-193 tesla-199 listing_is_active"
                                       data-price="121000"
                                       data-date="202103261255"
                                       data-price="121000">
                                       <a href="../listings/tesla-roadster/index.html" class="rmv_txt_drctn">
                                          <div class="image">
                                             <img
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-24-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-24-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-24-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-18-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-18-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-18-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-10-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-10-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-10-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-7-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-7-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-7-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-6-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-6-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-6-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-5-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-5-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-5-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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
                                                data-src="http://localhost/rent/wp-content/uploads/2021/03/01-3-255x135.jpg"
                                                srcset="http://localhost/rent/wp-content/uploads/2021/03/01-3-255x135.jpg 1x, http://localhost/rent/wp-content/uploads/2021/03/01-3-510x270.jpg 2x"
                                                src="../wp-content/themes/motors/assets/images/plchldr255.png"
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

@endsection
