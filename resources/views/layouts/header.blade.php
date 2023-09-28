
<div id="header">
   <div class="header-main " style="padding: 2px">
      <div class="container">
         <div class="clearfix">
            <!--Logo-->
            <div class="logo-main  " style="">
               <a class="bloglogo" href="{{route('home')}}">
               <img src="{{asset ('images/car_rental_logo.png')}}" style="width: 250px;" title="Home" alt="Logo"/>
               </a>
               <div class="mobile-contacts-trigger visible-sm visible-xs">
                  <i class="stm-icon-phone-o"></i>
                  <i class="stm-icon-close-times"></i>
               </div>
               <div class="mobile-menu-trigger visible-sm visible-xs">
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
                     <!-- Header top bar Socials -->
                     <div class="pull-right">
                        <div class="header-main-socs">
                           <ul class="clearfix">
                              <li>
                                 <a href="tel:971504996459" >
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
                                 <a href="https://www.instagram.com/milelecarrent/?hl=en" target="_blank">
                                 <i class="fab fa-instagram"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <div class="pull-right ml-lg-5 mb-md-2 mb-2" >
                        {{--
                        <div class="header-main-socs">--}}
{{--                         <form action="{{route('enquires.store')}}" method="POST">--}}
{{--                             @csrf--}}
                            <a href="{{ route('enquires.create') }}">
                                <button type="button" class="btn btn-sm " style="background-color: #cc761a;box-shadow: none"
{{--                                     data-toggle="modal" data-target="#exampleModalCenter"--}}
                             >SEND ENQUIRY</button>
                            </a>
                         {{--                         </form>--}}

{{--                         <a type="button" class="btn btn-sm " style="background-color: #1592e0;box-shadow: none" href="{{route('enquires.store')}}"--}}
{{--                             --}}{{--                                   data-toggle="modal" data-target="#exampleModalCenter"--}}
{{--                         >SEND ENQUIRY</a>--}}
                           {{--
                        </div>
                        --}}
                     </div>
                     <div class="pull-right text-right" >
                        <div class="header-secondary-phone header-secondary-phone-single">
{{--                           <div class="phone">--}}
{{--                              --}}{{--                                                <span class="phone-label">--}}
{{--                              <i class="stm-icon-phone " style="color: #cc761a"></i>--}}
{{--                              --}}{{--                                                </span>--}}
{{--                              <span class="phone-number heading-font">--}}
{{--                              <a href="tel:971504996459"> +971 504996459	</a>--}}
{{--                              </span>--}}
{{--                           </div>--}}
                           <div class="phone">
                              {{--                                                <span class="phone-label">--}}
                              <i class="stm-icon-phone " style="color: #cc761a"></i>
                              {{--                                                </span>--}}
                              <span class="phone-number heading-font">
                              <a href="tel:971544519432"> +971 544519432	 </a>
                              </span>
                           </div>
                           <div class="phone">
                              {{--                                                <span class="phone-label">--}}
                              <i class="stm-icon-mail " style="color: #cc761a" ></i>
                              {{--                                                </span>--}}
                              <span class="phone-number heading-font mt-1">
                              <a href="mailto:info@milelecarrental.com"> info@milelecarrental.com</a>
                              </span>
                           </div>
                        </div>
                     </div>

                  </div>
                  <!--clearfix-->
               </div>
               <!--header-top-info-->
            </div>
            <!-- Top info wrap -->
         </div>
         <!--clearfix-->
      </div>
      <!--container-->
   </div>
   <!--header-main-->
   <div id="header-nav-holder" class="hidden-sm hidden-xs">
      <div class="header-nav header-nav-transparent header-nav-fixed">
         <div class="container">

            <div class="main-menu " >
               <ul class="header-menu clearfix float-right" style="">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('home')}}">Home</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089"><a href="{{route('vehicles')}}"> Vehicles</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('aboutUs')}}">About Us</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213"><a href="{{route('contactUs')}}">Contact Us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="exampleModalCenter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal  -->
{{--<button type="button" class="btn btn-sm modal-toggle" style="background-color: #1592e0;box-shadow: none"--}}
{{--        data-toggle="modal" data-target="#exampleModalCenter1"--}}
{{-->SEND </button>--}}
{{--<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLongTitle">Send Enquiry</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                <label class="form-label font-size-13 text-muted">Contact Number</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                <input type="text"  class="form-control" name="contact_number" >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                <label class="form-label font-size-13 text-muted">Vehicle</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                <select class="form-control" name="vehicle">--}}
{{--                                    <option></option>--}}
{{--                                    <option>HYUNDAI ACCENT – WHITE</option>--}}
{{--                                    <option>NISSAN KICKS  - BLACK</option>--}}
{{--                                    <option>KIA K5 – WHITE</option>--}}
{{--                                    <option>CHEVROLET CAPTIVA PREMIER – Silver</option>--}}
{{--                                    <option>KIA PICANTO– SPARKLING SILVER</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                <label class="form-label font-size-13 text-muted">Start Date </label>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                <input type="date"  class="form-control" name="start_date" >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                <label class="form-label font-size-13 text-muted">End Date </label>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                <input type="date"  class="form-control" name="end_date" >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Send</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Modal -->
