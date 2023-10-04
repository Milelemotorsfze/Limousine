<style>
   @media only screen and (max-device-width: 570px), only screen and (min-device-width: 320px) and (max-device-width: 1136px) and (-webkit-min-device-pixel-ratio: 2) {
   .logo-image {
   width: 160px !important;
   }
   }
   @media only screen and (max-device-width: 320px), only screen and (min-device-width: 240px) and (max-device-width: 1136px) and (-webkit-min-device-pixel-ratio: 2) {
   .logo-image {
   width: 130px !important;
   }
   }
</style>
<div id="header">
   <div class="header-main " style="padding: 2px">
      <div class="container">
         <div class="clearfix">
            <div class="logo-main " >
               <img src="{{asset ('images/car_rental_logo.png')}}" class="logo-image" style="width: 250px;" title="Home" alt="Logo"/>
               <div class="mobile-contacts-trigger visible-sm visible-xs">
                  <i class="stm-icon-phone-o"></i>
                  <i class="stm-icon-close-times"></i>
               </div>
               <div class="mobile-menu-trigger visible-sm visible-xs ">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </div>
            <div class="mobile-menu-holder">
               <ul class="header-menu clearfix">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('home')}}">Home</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089"><a href="{{route('vehicles')}}"> Vehicles</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('aboutUs')}}">About Us</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213"><a href="{{route('contactUs')}}">Contact Us</a></li>
               </ul>
            </div>
            <div class="top-info-wrap">
               <div class="header-top-info">
                  <div class="clearfix">
                     <div class="pull-right">
                        <div class="header-main-socs">
                           <ul class="clearfix">
                              <li>
                                 <a href="tel:971544519432" >
                                 <i class="fa fa-phone"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://api.whatsapp.com/send?phone=971544519432" target="_blank">
                                 <i class="fab fa-whatsapp"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.facebook.com/milelecarrental/" target="_blank">
                                 <i class="fab fa-facebook"></i>
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
                     <div class="pull-right ml-lg-5 mb-md-2 mb-2" >
                        <a href="{{ route('enquires.create') }}">
                        <button type="button" class="btn btn-sm " style="background-color: #cc6119;box-shadow: none">SEND ENQUIRY</button>
                        </a>
                     </div>
                     <div class="pull-right text-right" >
                        <div class="header-secondary-phone header-secondary-phone-single">
                           <div class="phone">
                              <i class="stm-icon-phone " style="color: #cc761a"></i>
                              <span class="phone-number heading-font">
                              <a href="tel:971544519432"> +971 544519432	 </a>
                              </span>
                           </div>
                           <div class="phone">
                              <i class="stm-icon-mail " style="color: #cc761a" ></i>
                              <span class="phone-number heading-font mt-1">
                              <a href="mailto:info@milelecarrental.com"> info@milelecarrental.com</a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="header-nav-holder" class="hidden-sm hidden-xs">
      <div class="header-nav header-nav-transparent header-nav-fixed">
         <div class="container">
            <div class="main-menu" >
               <ul class="header-menu clearfix float-right" id="navbar-home">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083" id="home"><a href="{{route('home')}}">Home</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089" id="vehicle"><a href="{{route('vehicles')}}"> Vehicles</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083" id="about-us"><a href="{{route('aboutUs')}}">About Us</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207" id="faq"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213" id="contact-us"><a href="{{route('contactUs')}}">Contact Us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
