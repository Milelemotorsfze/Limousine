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
   /*width: 100%;*/
   border: #cc6118
   }
   .modal{
   z-index: -1;
   }

   @media only screen and (max-device-width: 361px)
    {
        .responsiveClass
        {
         /* background-position: left center!important;  */
            /* position: absolute!important;
            display: block!important;
            overflow: hidden!important;  */
            /* height: 50%!important;  */
            /* width: 100%!important;  */
            /* z-index: 20!important;
            opacity: 1!important;
            visibility: inherit!important;
            margin-left: 20px;
            padding-left:20px; */
        }
    }
   /* @media only screen and (max-device-width: 480px)
    {
        .responsiveClass
        {
            width: 100%!important;
            height: 100%!important;
        }
    } */
    /* @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)
    {
        .responsiveClass
        {
            width: 100%!important;
            height: 100%!important;
        }
    } */
    /* @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)
    {
        .responsiveClass
        {
            width: 100%!important;
            height: 100%!important;
        }
    } */
    /* @media only screen and (max-device-width: 1280px)
    {
        .responsiveClass
        {
            width: 100%!important;
            height: 100%!important;
        }
    } */
    /* @media only screen and (min-device-width: 1280px)
    {
        #showImage
        {
            width: 100%;
            height: 100%;
            max-width:700px;
        }
    }   */
    /* .responsiveClass{
      width: 50%!important;
   } */
   /*  */
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
{{--@include('layouts.topbar')--}}
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
                              <!-- START Home Slider REVOLUTION SLIDER 6.6.14 -->
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
                                             <!-- <div class="myMobileClass mobile-menu-trigger visible-sm visible-xs" style="margin-right:50px;">
                                                <div class="mobileClass">
                                                   <div style="color:white;">2023</div> HYUNDAI ACCENT 
                                                   <div style="color:white;">2200</div> AED PER MONTH
                                                </div>
                                              </div> -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-8"
                                             data-type="shape"
                                             data-xy="x:r;xo:40px;y:c;yo:-20px;"
                                             data-text="w:normal;"
                                             data-dim="w:359px;h:359px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:9;background-color:rgba(204,97,25,0.9);"
                                             >
                                          </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-9"
                                             data-type="shape"
                                             data-xy="x:r;xo:23px;y:c;yo:-19px;"
                                             data-text="w:normal;"
                                             data-dim="w:395px;h:395px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:8;background-color:rgba(255,255,255,0.12);"
                                             class="OrangeClass"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-10"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:229px;y:c;yo:-133px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             class="yearClass"
                                             > -->
                                             <!-- 2023 -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-11"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:142px;y:c;yo:-94px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:13;font-family:'Montserrat';visibility:visible;"
                                             class="carname"
                                             ><span style="color:white;">2023</span><br />
                                             HYUNDAI ACCENT<br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-12"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:351px;y:c;yo:-25px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             > -->
                                             <!-- $ -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-13"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:178px;y:c;yo:-16px;"
                                             data-text="w:normal;s:106;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:12;font-family:'Montserrat';"
                                             class="custom-font"
                                             >2200
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-14"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:160px;y:c;yo:-28px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:14;font-family:'Montserrat';"
                                             > -->
                                             <!-- / -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-15"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:70px;y:c;yo:-33px;"
                                             data-text="w:normal;s:50;l:50;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:15;font-family:'Montserrat';"
                                             class="AEDClass"
                                             >AED
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-16"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:99px;y:c;yo:1px;"
                                             data-text="w:normal;s:16;l:14;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:16;font-family:'Roboto';"
                                             >PER MONTH <br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-17"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:107px;y:c;yo:63px;"
                                             data-text="w:normal;s:11;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:17;font-family:'Montserrat';"
                                             > -->
                                             <!-- $0 at signing after $1,750 cash back<br />
                                             $0 first payment paid by Ford up to $325<br />
                                             Taxes, title and fees extra. -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-0"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:30px;y:c;yo:-120px;"
                                             data-text="w:normal;s:46;l:60;"
                                             data-dim="w:492px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:5;font-family:'Montserrat';"
                                             >
                                             <div class="h1" style="font-weight: 400 !important;"><span class="white">2015</span> EDGE SE FWD</div>
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-1"
                                             data-type="text"
                                             data-color="#cc6119"
                                             data-xy="x:r;xo:426px;y:c;yo:-71px;"
                                             data-text="w:normal;s:50;l:32;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:5;font-family:'Roboto';"
                                             >$
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-2"
                                             data-type="text"
                                             data-color="#cc6119"
                                             data-xy="x:r;xo:221px;y:c;yo:-56px;"
                                             data-text="w:normal;s:106;l:74;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:7;font-family:'Montserrat';"
                                             >458
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-3"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:109px;y:c;yo:-68px;"
                                             data-text="w:normal;s:50;l:32;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:8;font-family:'Montserrat';"
                                             >/MO
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-4"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:39px;y:c;yo:-70px;"
                                             data-text="w:normal;s:16;l:8;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:9;font-family:'Montserrat';"
                                             >FOR 36 <br/><br />
                                             MONTH
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-5"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:40px;y:c;yo:29px;"
                                             data-text="w:normal;s:14;l:12;a:right;"
                                             data-dim="w:288px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1400;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             >$0 at signing after $1,750 cash back<br/><br />
                                             $0 first payment paid by Ford up to $325<br/><br />
                                             Taxes, title and fees extra.
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-1-layer-6"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:43px;y:c;yo:103px;"
                                             data-text="w:normal;s:14;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sp:1000;sR:600;"
                                             data-frame_999="o:0;st:w;sR:1900;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             ><a href="http://localhost/listings/ford-explorer-2015-4wd/" class="button stm-slider-button" ><i class="stm-icon-steering_wheel"></i>Learn more</a>
                                             </rs-layer> -->
                                          <!--
                                             -->
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-2" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B2.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B2.png')}}" alt="(LHD) KIA PICANTO 1.2P AT MY2023 – SPARKLING SILVER" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B2.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                             <!-- <div class="mobile-menu-trigger visible-sm visible-xs" style="margin-right:50px;  ">
                                                <div class="mobileClass">
                                                   <div style="color:white;">2023</div> KIA PICANTO 
                                                   <div style="color:white;">1800</div> AED PER MONTH
                                                </div>
                                              </div> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-8"
                                             data-type="shape"
                                             data-xy="x:r;xo:40px;y:c;yo:-20px;"
                                             data-text="w:normal;"
                                             data-dim="w:359px;h:359px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:9;background-color:rgba(204,97,25,0.9);"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-9"
                                             data-type="shape"
                                             data-xy="x:r;xo:23px;y:c;yo:-19px;"
                                             data-text="w:normal;"
                                             data-dim="w:395px;h:395px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:8;background-color:rgba(255,255,255,0.12);"
                                             class="OrangeClass"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-10"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:229px;y:c;yo:-133px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             class="yearClass"
                                             > -->
                                             <!-- 2023 -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-11"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:142px;y:c;yo:-94px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:13;font-family:'Montserrat';"
                                             >
                                             <span style="color:white;">2023</span><br />KIA PICANTO<br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-12"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:351px;y:c;yo:-25px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             > -->
                                             <!-- $ -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-13"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:178px;y:c;yo:-16px;"
                                             data-text="w:normal;s:106;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:12;font-family:'Montserrat';"
                                             class="custom-font"
                                             >1800
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-14"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:160px;y:c;yo:-28px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:14;font-family:'Montserrat';"
                                             > -->
                                             <!-- / -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-15"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:70px;y:c;yo:-33px;"
                                             data-text="w:normal;s:50;l:50;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:15;font-family:'Montserrat';"
                                             class="AEDClass"
                                             >AED
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-16"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:99px;y:c;yo:1px;"
                                             data-text="w:normal;s:16;l:14;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:16;font-family:'Roboto';"
                                             >PER MONTH <br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-17"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:107px;y:c;yo:63px;"
                                             data-text="w:normal;s:11;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:17;font-family:'Montserrat';"
                                             > -->
                                             <!-- $0 at signing after $1,750 cash back<br />
                                             $0 first payment paid by Ford up to $325<br />
                                             Taxes, title and fees extra. -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-3" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B3.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B3.png')}}" alt="(LHD) KIA K5 2.0P AT MY2023 – WHITE" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B3.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                             <!-- <div class="mobile-menu-trigger visible-sm visible-xs" style="margin-right:50px;  ">
                                                <div class="mobileClass">
                                                   <div style="color:white;">2023</div> KIA K5 
                                                   <div style="color:white;">3600</div> AED PER MONTH
                                                </div>
                                              </div> -->
                                             <!-- <rs-layer
                                                id="slider-1-slide-2-layer-8"
                                                data-type="shape"
                                                data-xy="x:r;xo:40px;y:c;yo:-20px;"
                                                data-text="w:normal;"
                                                data-dim="w:359px;h:359px;"
                                                data-vbility="t,t,t,f"
                                                data-rsp_o="off"
                                                data-rsp_bd="off"
                                                data-border="bor:50%,50%,50%,50%;"
                                                data-frame_1="st:600;sR:600;"
                                                data-frame_999="o:0;st:w;sR:3100;"
                                                style="z-index:9;background-color:rgba(204,97,25,0.9);"
                                                >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-9"
                                             data-type="shape"
                                             data-xy="x:r;xo:23px;y:c;yo:-19px;"
                                             data-text="w:normal;"
                                             data-dim="w:395px;h:395px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:8;background-color:rgba(255,255,255,0.12);"
                                             class="OrangeClass"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-10"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:229px;y:c;yo:-133px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             class="yearClass"
                                             > -->
                                             <!-- 2023 -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-11"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:142px;y:c;yo:-94px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:13;font-family:'Montserrat';"
                                             ><span style="color:white;">2023</span><br />KIA K5<br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-12"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:351px;y:c;yo:-25px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             class="custom-font"
                                             > -->
                                             <!-- $ -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-13"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:178px;y:c;yo:-16px;"
                                             data-text="w:normal;s:106;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:12;font-family:'Montserrat';"
                                             class="custom-font"
                                             >3600
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-14"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:160px;y:c;yo:-28px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:14;font-family:'Montserrat';"
                                             > -->
                                             <!-- / -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-15"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:70px;y:c;yo:-33px;"
                                             data-text="w:normal;s:50;l:50;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:15;font-family:'Montserrat';"
                                             class="AEDClass"
                                             >AED
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-16"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:99px;y:c;yo:1px;"
                                             data-text="w:normal;s:16;l:14;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:16;font-family:'Roboto';"
                                             >PER MONTH <br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-17"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:107px;y:c;yo:63px;"
                                             data-text="w:normal;s:11;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:17;font-family:'Montserrat';"
                                             > -->
                                             <!-- $0 at signing after $1,750 cash back<br />
                                             $0 first payment paid by Ford up to $325<br />
                                             Taxes, title and fees extra. -->
                                             <!-- </rs-layer> -->
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-4" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B4.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B4.png')}}" alt="(LHD) NISSAN KICKS 1.6P AT MY2022 - BLACK" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B4.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                             <!-- <div class="mobile-menu-trigger visible-sm visible-xs" style="margin-right:50px;  ">
                                                <div class="mobileClass">
                                                   <div style="color:white;">2023</div> CHEVROLET CAPTIVA 
                                                   <div style="color:white;">3800</div> AED PER MONTH
                                                </div>
                                              </div> -->
                                             <!-- <rs-layer
                                                id="slider-1-slide-2-layer-8"
                                                data-type="shape"
                                                data-xy="x:r;xo:40px;y:c;yo:-20px;"
                                                data-text="w:normal;"
                                                data-dim="w:359px;h:359px;"
                                                data-vbility="t,t,t,f"
                                                data-rsp_o="off"
                                                data-rsp_bd="off"
                                                data-border="bor:50%,50%,50%,50%;"
                                                data-frame_1="st:600;sR:600;"
                                                data-frame_999="o:0;st:w;sR:3100;"
                                                style="z-index:9;background-color:rgba(204,97,25,0.9);"
                                                >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-9"
                                             data-type="shape"
                                             data-xy="x:r;xo:23px;y:c;yo:-19px;"
                                             data-text="w:normal;"
                                             data-dim="w:395px;h:395px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:8;background-color:rgba(255,255,255,0.12);"
                                             class="OrangeClass"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-10"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:229px;y:c;yo:-133px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             class="yearClass"
                                             > -->
                                             <!-- 2023 -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-11"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:142px;y:c;yo:-94px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:13;font-family:'Montserrat';"
                                             ><span style="color:white;">2023</span><br />CHEVROLET CAPTIVA<br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-12"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:351px;y:c;yo:-25px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             > -->
                                             <!-- $ -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-13"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:178px;y:c;yo:-16px;"
                                             data-text="w:normal;s:106;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:12;font-family:'Montserrat';"
                                             class="custom-font"
                                             >3800
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-14"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:160px;y:c;yo:-28px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:14;font-family:'Montserrat';"
                                             > -->
                                             <!-- / -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-15"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:70px;y:c;yo:-33px;"
                                             data-text="w:normal;s:50;l:50;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:15;font-family:'Montserrat';"
                                             class="AEDClass"
                                             >AED
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-16"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:99px;y:c;yo:1px;"
                                             data-text="w:normal;s:16;l:14;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:16;font-family:'Roboto';"
                                             >PER MONTH <br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-17"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:107px;y:c;yo:63px;"
                                             data-text="w:normal;s:11;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:17;font-family:'Montserrat';"
                                             > -->
                                             <!-- $0 at signing after $1,750 cash back<br />
                                             $0 first payment paid by Ford up to $325<br />
                                             Taxes, title and fees extra. -->
                                             <!-- </rs-layer> -->
                                       </rs-slide>
                                       <rs-slide class="responsiveClass" style="position: absolute;" data-key="rs-5" data-title="Slide"
                                          data-thumb="{{asset ('Sliders/B5.png')}}"
                                          data-duration="4000ms" data-in="o:0;" data-out="a:false;">
                                          <img decoding="async" src="{{asset ('Sliders/B5.png')}}" alt="(LHD) CHEVROLET CAPTIVA PREMIER 7-SEATER 1.5P AT MY2023" title="Home"
                                             class="rev-slidebg tp-rs-img rs-lazyload"
                                             data-lazyload="{{asset ('Sliders/B5.png')}}"
                                             data-panzoom="d:10000;ss:100%;se:120%;" data-no-retina>
                                             <!-- <div class="mobile-menu-trigger visible-sm visible-xs" style="margin-right:50px;  ">
                                                <div class="mobileClass">
                                                   <div style="color:white;">2023</div> NISSAN KICKS 
                                                   <div style="color:white;">3600</div> AED PER MONTH
                                                </div>
                                              </div> -->
                                             <!-- <rs-layer
                                                id="slider-1-slide-2-layer-8"
                                                data-type="shape"
                                                data-xy="x:r;xo:40px;y:c;yo:-20px;"
                                                data-text="w:normal;"
                                                data-dim="w:359px;h:359px;"
                                                data-vbility="t,t,t,f"
                                                data-rsp_o="off"
                                                data-rsp_bd="off"
                                                data-border="bor:50%,50%,50%,50%;"
                                                data-frame_1="st:600;sR:600;"
                                                data-frame_999="o:0;st:w;sR:3100;"
                                                style="z-index:9;background-color:rgba(204,97,25,0.9);"
                                                >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-9"
                                             data-type="shape"
                                             data-xy="x:r;xo:23px;y:c;yo:-19px;"
                                             data-text="w:normal;"
                                             data-dim="w:395px;h:395px;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-border="bor:50%,50%,50%,50%;"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:8;background-color:rgba(255,255,255,0.12);"
                                             class="OrangeClass"
                                             >
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-10"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:229px;y:c;yo:-133px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:10;font-family:'Montserrat';"
                                             class="yearClass"
                                             > -->
                                             <!-- 2023 -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-11"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:142px;y:c;yo:-94px;"
                                             data-text="w:normal;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:13;font-family:'Montserrat';"
                                             ><span style="color:white;">2023</span><br />NISSAN KICKS<br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-12"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:351px;y:c;yo:-25px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:11;font-family:'Montserrat';"
                                             > -->
                                             <!-- $ -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-13"
                                             data-type="text"
                                             data-color="#ffffff"
                                             data-xy="x:r;xo:178px;y:c;yo:-16px;"
                                             data-text="w:normal;s:106;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:12;font-family:'Montserrat';"
                                             class="custom-font"
                                             >3600
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-14"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:160px;y:c;yo:-28px;"
                                             data-text="w:normal;s:50;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:14;font-family:'Montserrat';"
                                             > -->
                                             <!-- / -->
                                             <!-- </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-15"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:70px;y:c;yo:-33px;"
                                             data-text="w:normal;s:50;l:50;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:15;font-family:'Montserrat';"
                                             class="AEDClass"
                                             >AED
                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-16"
                                             data-type="text"
                                             data-color="#0c0c0c"
                                             data-xy="x:r;xo:99px;y:c;yo:1px;"
                                             data-text="w:normal;s:16;l:14;fw:700;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:16;font-family:'Roboto';"
                                             >PER MONTH <br />

                                             </rs-layer> -->
                                          <!--
                                             -->
                                          <!-- <rs-layer
                                             id="slider-1-slide-2-layer-17"
                                             data-type="text"
                                             data-color="#232628"
                                             data-xy="x:r;xo:107px;y:c;yo:63px;"
                                             data-text="w:normal;s:11;l:14;"
                                             data-vbility="t,t,t,f"
                                             data-rsp_o="off"
                                             data-rsp_bd="off"
                                             data-frame_1="st:600;sR:600;"
                                             data-frame_999="o:0;st:w;sR:3100;"
                                             style="z-index:17;font-family:'Montserrat';"
                                             > -->
                                             <!-- $0 at signing after $1,750 cash back<br />
                                             $0 first payment paid by Ford up to $325<br />
                                             Taxes, title and fees extra. -->
                                             <!-- </rs-layer> -->
                                       </rs-slide>
                                    </rs-slides>
                                 </rs-module>
                                 <script>
                                    setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[600],gw:[1240],gh:[600],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider11"]!==undefined) {window.RS_MODULES.modules["revslider11"].once = false;window.revapi1 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
                                 </script>
                              </rs-module-wrap>
                              <!-- END REVOLUTION SLIDER -->
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
                           <!-- <div class="motors-elementor-widget car-listing-tabs-unit ">
                              <div class="car-listing-top-part">
                                 <div class="found-cars-cloned found-cars-51281 position-right hide-on-mobile"></div>
                                 <div class="title text-center">
                                    <h2><span style="color: #ffffff;">VEHICLE</span> <span style="color: #cc6118;">SEARCH</span></h2>
                                 </div>
                                 <div class="card text-white" style="background-color: #0d66c2;">
                                    <div class="row p-3 pb-4">
                                       <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                                          <label >Pick Up Location</label>
                                          <select class="form-control widthinput " id="pick-up-location" name="pick_up_location" >
                                             <option>Select Pick Up Location</option>
                                             <option>Ras Al Khor</option>
                                             <option>Karama</option>
                                             <option>Dubai Mall</option>
                                             <option>Airport</option>
                                          </select>
                                       </div>
                                       <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-6 col-sm-12">
                                          <label>Pick Up Date</label>
                                          <input type="date" class="form-control widthinput">
                                       </div>
                                       <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                                          <label>Drop Off Location</label>
                                          <select class="form-control widthinput" id="drop-off-location" name="drop_off_location">
                                             <option>Select Drop Off Location</option>
                                             <option>Ras Al Khor</option>
                                             <option>Karama</option>
                                             <option>Dubai Mall</option>
                                             <option>Airport</option>
                                          </select>
                                       </div>
                                       <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-6 col-sm-12">
                                          <label>Drop Off Date</label>
                                          <input type="date" class="form-control widthinput">
                                       </div>
                                       <div class="col-lg-2 col-md-12 col-sm-12 -md-none d-lg-block"  style="margin-top: 30px;">
                                          <button type="button" class="form-control widthinput search-btn ">
                                          Search
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                              </div>
                              </div> -->
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
                                             <!-- <div class="price discounted-price">
                                                <div class="sale-price">170 AED Daily</div>
                                                <div class="sale-price">1020 AED Weekly</div>
                                                <div class="sale-price">3600 AED Monthly</div>
                                                <div class="sale-price">39600 AED Yearly</div>
                                             </div> -->
                                             <div class="car-title">KIA K5</div>
                                          </div>
                                          <div class="car-meta-bottom">
                                             <ul>
                                                <!-- <li>
                                                   <i class="stm-icon-road"></i>
                                                   <span>130</span>
                                                   </li>
                                                   <li>
                                                   <i class="stm-icon-fuel"></i>
                                                   <span>18/100</span>
                                                   </li> -->
                                                <li>
                                                   <!-- <i class="stm-icon-transmission_fill"></i> -->
                                                   <!-- <span>Automatic</span> -->
                                                </li>
                                             </ul>
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
                                             <!-- <div class="price discounted-price">
                                                <div class="sale-price">90 AED Daily</div>
                                                <div class="sale-price">540 AED Weekly</div>
                                                <div class="sale-price">1800 AED Monthly</div>
                                                <div class="sale-price">19800 AED Yearly</div>
                                             </div> -->
                                             <div class="car-title">KIA PICANTO</div>
                                          </div>
                                          <div class="car-meta-bottom">
                                             <ul>
                                                <!-- <li>
                                                   <i class="stm-icon-road"></i>
                                                   <span>130</span>
                                                   </li>
                                                   <li>
                                                   <i class="stm-icon-fuel"></i>
                                                   <span>18/100</span>
                                                   </li> -->
                                                <li>
                                                   <!-- <i class="stm-icon-transmission_fill"></i> -->
                                                   <!-- <span>Automatic</span> -->
                                                </li>
                                             </ul>
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
                                             <!-- <div class="price discounted-price">
                                                <div class="sale-price">105 AED Daily</div>
                                                <div class="sale-price">630 AED Weekly</div>
                                                <div class="sale-price">2200 AED Monthly</div>
                                                <div class="sale-price">24400 AED Yearly</div>
                                             </div> -->
                                             <div class="car-title">HYUNDAI ACCENT</div>
                                          </div>
                                          <div class="car-meta-bottom">
                                             <ul>
                                                <!-- <li>
                                                   <i class="stm-icon-road"></i>
                                                   <span>130</span>
                                                   </li>
                                                   <li>
                                                   <i class="stm-icon-fuel"></i>
                                                   <span>18/100</span>
                                                   </li> -->
                                                <li>
                                                   <!-- <i class="stm-icon-transmission_fill"></i> -->
                                                   <!-- <span>Automatic</span> -->
                                                </li>
                                             </ul>
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
                                             <!-- <div class="price discounted-price">
                                                <div class="sale-price">180 AED Daily</div>
                                                <div class="sale-price">1080 AED Weekly</div>
                                                <div class="sale-price">3600 AED Monthly</div>
                                                <div class="sale-price">39600 AED Yearly</div>
                                             </div> -->
                                             <div class="car-title">NISSAN KICKS</div>
                                          </div>
                                          <div class="car-meta-bottom">
                                             <ul>
                                                <!-- <li>
                                                   <i class="stm-icon-road"></i>
                                                   <span>20</span>
                                                   </li>
                                                   <li>
                                                   <i class="stm-icon-fuel"></i>
                                                   <span>18/100</span>
                                                   </li> -->
                                                <li>
                                                   <!-- <i class="stm-icon-transmission_fill"></i> -->
                                                   <!-- <span>Automatic</span> -->
                                                </li>
                                             </ul>
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
                                             <!-- <div class="price">
                                                <div class="sale-price">230 AED Daily</div>
                                                <div class="sale-price">1380 AED Weekly</div>
                                                <div class="sale-price">3800 AED Monthly</div>
                                                <div class="sale-price">41800 AED Yearly</div>
                                             </div> -->
                                             <div class="car-title">Chevrolet Captiva</div>
                                          </div>
                                          <div class="car-meta-bottom">
                                             <ul>
                                                <!-- <li>
                                                   <i class="stm-icon-road"></i>
                                                   <span>20</span>
                                                   </li>
                                                   <li>
                                                   <i class="stm-icon-fuel"></i>
                                                   <span>18/100</span>
                                                   </li> -->
                                                <li>
                                                   <!-- <i class="stm-icon-transmission_fill"></i> -->
                                                   <!-- <span>Automatic</span> -->
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-2 col-sm-2 col-xs-12 col-xxs-12 stm-template-front-loop">
                                 </div>
                              </div>
                              <!-- <div class="row">
                                 <div class="col-xs-12 text-center">
                                    <div class="dp-in">
                                       <a class="load-more-btn" href="inventory/indexc85f.html?condition=new-cars">
                                       Show all
                                       </a>
                                    </div>
                                 </div>
                                 </div> -->
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr>


         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3aa3a3d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3aa3a3d" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cedb94f" data-id="cedb94f" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-1db9e38 elementor-widget elementor-widget-heading" data-id="1db9e38" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.16.0 - 14-09-2023 */
                              .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                           </style>
                           <h2 class="elementor-heading-title elementor-size-default">WHY CHOOSE US</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-15077bb elementor-widget elementor-widget-stm-colored-separator" data-id="15077bb" data-element_type="widget" data-widget_type="stm-colored-separator.default">
                        <div class="elementor-widget-container">
                           <div class="colored-separator" style="text-align: center;">
                              <div class="first-long stm-base-background-color"></div>
                              <div class="last-short stm-base-background-color"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-c1fc8fa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c1fc8fa" data-element_type="section">
            <div class="elementor-container elementor-column-gap-custom">
               <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-83aacd0" data-id="83aacd0" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-f0c11a6 elementor-widget elementor-widget-stm-icon-box" data-id="f0c11a6" data-element_type="widget" data-widget_type="stm-icon-box.default">
                        <div class="elementor-widget-container">
                           <div class="icon-box stm-layout-box-car_dealer ">
                              <div class="boat-line"></div>
                              <div class="icon boat-third-color icon_element">
                                 <i aria-hidden="true" class="stmicon- stm-icon-label"></i>
                              </div>
                              <div class="icon-text">
                                 <h6 class="title heading-font">
                                    FINANCING MADE EASY
                                 </h6>
                                 <div class="content heading-font">
                                    <p><span style="color: #888888;">Our stress-free finance department that can find financial solutions to save you money.</span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-241aa8c" data-id="241aa8c" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-45294a5 elementor-widget elementor-widget-stm-icon-box" data-id="45294a5" data-element_type="widget" data-widget_type="stm-icon-box.default">
                        <div class="elementor-widget-container">
                           <div class="icon-box stm-layout-box-car_dealer ">
                              <div class="boat-line"></div>
                              <div class="icon boat-third-color icon_element">
                                 <i aria-hidden="true" class="stmicon- stm-icon-speedometr"></i>
                              </div>
                              <div class="icon-text">
                                 <h6 class="title heading-font">
                                    WIDE RANGE OF BRANDS
                                 </h6>
                                 <div class="content heading-font">
                                    <p><span style="color: #888888;">With a robust selection of popular vehicles on hand, as well as leading vehicles from BMW and Ford.</span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0010754" data-id="0010754" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-7d016f3 elementor-widget elementor-widget-stm-icon-box" data-id="7d016f3" data-element_type="widget" data-widget_type="stm-icon-box.default">
                        <div class="elementor-widget-container">
                           <div class="icon-box stm-layout-box-car_dealer ">
                              <div class="boat-line"></div>
                              <div class="icon boat-third-color icon_element">
                                 <i aria-hidden="true" class="stmicon- stm-icon-chat"></i>
                              </div>
                              <div class="icon-text">
                                 <h6 class="title heading-font">
                                    TRUSTED BY THOUSANDS
                                 </h6>
                                 <div class="content heading-font">
                                    <p><span style="color: #888888;">10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7f79e8b" data-id="7f79e8b" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-ffbb1c6 elementor-widget elementor-widget-stm-icon-box" data-id="ffbb1c6" data-element_type="widget" data-widget_type="stm-icon-box.default">
                        <div class="elementor-widget-container">
                           <div class="icon-box stm-layout-box-car_dealer ">
                              <div class="boat-line"></div>
                              <div class="icon boat-third-color icon_element">
                                 <i aria-hidden="true" class="stmicon- stm-icon-application"></i>
                              </div>
                              <div class="icon-text">
                                 <h6 class="title heading-font">
                                    CAR SERVICE &amp; MAINTENANCE
                                 </h6>
                                 <div class="content heading-font">
                                    <p><span style="color: #888888;">Our stress-free finance department that can find financial solutions to save you money.</span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-b52de61 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b52de61" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ee125b" data-id="1ee125b" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-d9c5355 elementor-align-center elementor-widget elementor-widget-button" data-id="d9c5355" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="inventory/index.html" target="_blank">
                              <span class="elementor-button-content-wrapper">
                              <span class="elementor-button-icon elementor-align-icon-left">
                              <i aria-hidden="true" class="fas fa-suitcase"></i>			</span>
                              <span class="elementor-button-text">LEARN MORE</span>
                              </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </section> -->
         <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-533837e elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="533837e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2873b78" data-id="2873b78" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-6ec418a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6ec418a" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9ff30ba" data-id="9ff30ba" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-024e6ba elementor-widget elementor-widget-stm-icon-box" data-id="024e6ba" data-element_type="widget" data-widget_type="stm-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="icon-box stm-layout-box-car_dealer  no-icon">
                                          <div class="boat-line"></div>
                                          <div class="icon-text">
                                             <h2 class="title heading-font">
                                                CAR DEALERSHIP AUTOMOTIVE WP THEME
                                             </h2>
                                             <div class="content heading-font">
                                                <p>With specialists on hand to help with any part of the car shopping or vehicle ownership experience, Motors provides financing, car service and a great selection of vehicles for luxury car shoppers in Chicago, IL. Motors is ultimate Automotive, Car Dealer WordPress theme.</p>
                                             </div>
                                          </div>
                                          <div class="icon-box-bottom-triangle"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9e4f12d elementor-hidden-tablet elementor-hidden-mobile" data-id="9e4f12d" data-element_type="column">
                              <div class="elementor-widget-wrap">
                              </div>
                           </div>
                        </div>
                     </section>
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
                  Home
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
               <input name="vehicle_id" type="hidden" value="3091" />
            </div>
         </div>
      </div>
   </form>
</div>
{{--
<div class="modal" id="get-car-price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   --}}
   {{--
   <form id="get-car-price-form" action="http://localhost/rent/" method="post" >
      --}}
      {{--
      <div class="modal-dialog" role="document">
         --}}
         {{--
         <div class="modal-content">
            --}}
            {{--
            <div class="modal-header modal-header-iconed">
               --}}
               {{--               <i class="stm-icon-steering_wheel"></i>--}}
               {{--
               <h3 class="modal-title" id="myModalLabel">Request car price</h3>
               --}}
               {{--
               <div class="test-drive-car-name">--}}
                  {{--                  Home--}}
                  {{--
               </div>
               --}}
               {{--
               <div class="mobile-close-modal" data-dismiss="modal" aria-label="Close">--}}
                  {{--                  <i class="fas fa-times" aria-hidden="true"></i>--}}
                  {{--
               </div>
               --}}
               {{--
            </div>
            --}}
            {{--
            <div class="modal-body">
               --}}
               {{--
               <div class="row">
                  --}}
                  {{--
                  <div class="col-md-6 col-sm-6">
                     --}}
                     {{--
                     <div class="form-group">
                        --}}
                        {{--
                        <div class="form-modal-label">Name</div>
                        --}}
                        {{--                        <input name="name" type="text"/>--}}
                        {{--
                     </div>
                     --}}
                     {{--
                  </div>
                  --}}
                  {{--
                  <div class="col-md-6 col-sm-6">
                     --}}
                     {{--
                     <div class="form-group">
                        --}}
                        {{--
                        <div class="form-modal-label">Email</div>
                        --}}
                        {{--                        <input name="email" type="email" />--}}
                        {{--
                     </div>
                     --}}
                     {{--
                  </div>
                  --}}
                  {{--
               </div>
               --}}
               {{--
               <div class="row">
                  --}}
                  {{--
                  <div class="col-md-6 col-sm-6">
                     --}}
                     {{--
                     <div class="form-group">
                        --}}
                        {{--
                        <div class="form-modal-label">Phone</div>
                        --}}
                        {{--                        <input name="phone" type="tel" />--}}
                        {{--
                     </div>
                     --}}
                     {{--
                  </div>
                  --}}
                  {{--
               </div>
               --}}
               {{--
               <div class="row">
                  --}}
                  {{--
                  <div class="col-md-7 col-sm-7">
                     --}}
                     {{--
                     <div class="motors-gdpr" style="margin: 20px 0;"><label><input type="checkbox" name="motors-gdpr-agree" value="agree" data-need="true" required />I agree with storaging of my data by this website.</label></div>
                     --}}
                     {{--
                  </div>
                  --}}
                  {{--
                  <div class="col-md-5 col-sm-5">
                     --}}
                     {{--                     <button type="submit" class="stm-request-test-drive">Request</button>--}}
                     {{--
                     <div class="stm-ajax-loader" style="margin-top:10px;">--}}
                        {{--                        <i class="stm-icon-load1"></i>--}}
                        {{--
                     </div>
                     --}}
                     {{--
                  </div>
                  --}}
                  {{--
               </div>
               --}}
               {{--
               <div class="mg-bt-25px"></div>
               --}}
               {{--               <input name="vehicle_id" type="hidden" value="3091" />--}}
               {{--
            </div>
            --}}
            {{--
         </div>
         --}}
         {{--
      </div>
      --}}
      {{--
   </form>
   --}}
   {{--
</div>
--}}
{{--
<div class="single-add-to-compare">
   --}}
   {{--
   <div class="container">
      --}}
      {{--
      <div class="row">
         --}}
         {{--
         <div class="col-md-9 col-sm-9">
            --}}
            {{--
            <div class="single-add-to-compare-left">--}}
               {{--               <i class="add-to-compare-icon stm-icon-speedometr2"></i>--}}
               {{--               <span class="stm-title h5"></span>--}}
               {{--
            </div>
            --}}
            {{--
         </div>
         --}}
         {{--
         <div class="col-md-3 col-sm-3">--}}
            {{--            <a href="compare/index.html" class="compare-fixed-link pull-right heading-font">--}}
            {{--            Compare				</a>--}}
            {{--
         </div>
         --}}
         {{--
      </div>
      --}}
      {{--
   </div>
   --}}
   {{--
</div>
--}}
<div class="modal_content"></div>
<div id="stm-overlay"></div>
<!-- Button trigger modal -->
{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#testModal">--}}
{{--        Launch demo modal--}}
{{--    </button>--}}
{{--    <!-- Modal -->--}}
{{--
<div class="modal fade" id="testModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   --}}
   {{--
   <div class="modal-dialog" role="document">
      --}}
      {{--
      <div class="modal-content">
         --}}
         {{--
         <div class="modal-header">
            --}}
            {{--
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            --}}
            {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
            {{--                        <span aria-hidden="true">&times;</span>--}}
            {{--                    </button>--}}
            {{--
         </div>
         --}}
         {{--
         <div class="modal-body">--}}
            {{--                    ...--}}
            {{--
         </div>
         --}}
         {{--
         <div class="modal-footer">--}}
            {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--
         </div>
         --}}
         {{--
      </div>
      --}}
      {{--
   </div>
   --}}
   {{--
</div>
--}}
<!-- <script type="text/javascript">
  
  $(document).ready( function() {
   alert('hi');
  if($(window).scrollTop() + $(window).height() > $(document).height() - 850 && $(window).width() <= 600) {
    $('.myMobileClass').hide();
  }
  else {
    $('.myMobileClass').show();
  }
});
</script> -->
@endsection
