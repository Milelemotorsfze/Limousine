<div id="header">
		<div class="header-main " style="padding: 2px">
			<div class="container">
				<div class="clearfix">
					<!--Logo-->
					<div class="logo-main  " style="margin-top: 17px; ">
											<a class="bloglogo" href="index.html">
								<img src="{{asset ('images/car_rental_logo.png')}}"
									style="width: 138px;"
									title="Home"
									alt="Logo"
								/>
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



{{--							<li id="menu-item-3206" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3206"><a href="inventory/index.html">Inventory</a></li>--}}
{{--							<li id="menu-item-3084" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3084"><a href="#">Pages</a>--}}
{{--							<ul class="sub-menu">--}}
{{--								<!-- <li id="menu-item-3212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3212"><a href="about-us/index.html">About us</a></li> -->--}}
{{--								<li id="menu-item-3214" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3214"><a href="services/index.html">Services</a></li>--}}
{{--								<li id="menu-item-3204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3204"><a href="auto-loan-calculator/index.html">Auto Loan Calculator</a></li>--}}
{{--								<li id="menu-item-3205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3205"><a href="compare/index.html">Vehicle Comparison</a></li>--}}
{{--								<li id="menu-item-3207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="faq-2/index.html">FAQ</a></li>--}}
{{--								<li id="menu-item-3203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3203"><a href="coming-soon/index.html">Coming Soon</a></li>--}}
{{--								<li id="menu-item-3085" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3085"><a href="http://localhost/404-page/">404 page</a></li>--}}
{{--							</ul>--}}
{{--							</li>--}}
{{--							<li id="menu-item-3086" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3086 stm_megamenu stm_megamenu__boxed"><a href="#">Mega Menu</a>--}}
{{--							<ul class="sub-menu">--}}
{{--								<li id="menu-item-3087" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3087"><div class="menu-title heading-font">Special Offers</div><div class="stm-special-offers"><div class="special-wrap"><div class="img-wrap"><a href="listings/lamborghini-urus-2021/index.html"><img src="{{asset ('uploads/2021/03/01-18-120x120.jpg')}}" /></a></div><div class="title-price-wrap"><div class="car-title"><a href="listings/lamborghini-urus-2021/index.html">Lamborghini Urus 2021 Stage 2, Akrapovic Exhaust</a></div><div class="prices"><span class="normal_price normal_font has_sale">$340 000</span><span class="sale_price heading-font">$305 000</span></div></div></div><div class="special-wrap"><div class="img-wrap"><a href="listings/bmw-m5/index.html"><img src="{{asset ('uploads/2021/03/01-6-120x120.jpg')}}" /></a></div><div class="title-price-wrap"><div class="car-title"><a href="listings/bmw-m5/index.html">2021 BMW M5 F90 FULL OPTIONS</a></div><div class="prices"><span class="normal_price normal_font has_sale">$115 000</span><span class="sale_price heading-font">$99 000</span></div></div></div></div></li>--}}
{{--								<li id="menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3088"><div class="menu-title heading-font">New Vehicles</div>--}}
{{--								<ul class="sub-menu">--}}
{{--									<li id="menu-item-3089" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089"><a href="http://localhost/inventory/?condition=new-cars">New Vehicles</a></li>--}}
{{--									<li id="menu-item-3095" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3095"><a href="http://localhost/inventory/?condition=new-cars&amp;make=chevrolet">Chevrolet Cars</a></li>--}}
{{--									<li id="menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3096"><a href="http://localhost/inventory/?body%5B0%5D=off-road">Off-Road Cars</a></li>--}}
{{--									<li id="menu-item-3097" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3097"><a href="http://localhost/inventory/?make=tesla">Tesla Cars</a></li>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--								<li id="menu-item-3098" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3098"><div class="menu-title heading-font">Quick Search</div>--}}
{{--								<ul class="sub-menu">--}}
{{--									<li id="menu-item-3100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3100"><a href="http://localhost/inventory/?serie=c-class">C-Class Cars</a></li>--}}
{{--									<li id="menu-item-3099" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3099"><a href="http://localhost/inventory/?condition=used-cars">Used Vehicles</a></li>--}}
{{--									<li id="menu-item-3101" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3101"><a href="http://localhost/inventory/?min_price=2000&amp;max_price=30500">Cheaper Cars</a></li>--}}
{{--									<li id="menu-item-3102" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3102"><a href="http://localhost/inventory/?ca-year=1990">Older than 2000</a></li>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--								<li id="menu-item-3103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3103"><div class="menu-title heading-font">Contacts</div><ul class='mm-list'><li class='normal_font'><i class='fas fa-envelope'></i>info@stylemixthemes.com</li><li class='normal_font'><i class='fas fa-phone'></i>+1 628 123 4000</li><li class='normal_font'><i class='fas fa-map-marker'></i>1010 Avenue of the Moon, NY 10018 US.</li><li class='normal_font'><i class=''></i>Mon-Sat: 8:00AM-6:00PM</li></ul></li>--}}
{{--							</ul>--}}
{{--							</li>--}}
{{--							<li id="menu-item-3211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3211"><a href="blog/index.html">Blog</a>--}}
{{--							<ul class="sub-menu">--}}
{{--								<li id="menu-item-3094" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3094"><a href="http://localhost/blog/?sidebar-position=none">Blog &#8211; Grid Full Width</a></li>--}}
{{--								<li id="menu-item-3093" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3093"><a href="http://localhost/blog/?&amp;view-type=list&amp;show-title-box=hide&amp;show-breadcrumbs=yes">List with Right Sidebar</a></li>--}}
{{--								<li id="menu-item-3092" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3092"><a href="#">Single Post Templates</a>--}}
{{--								<ul class="sub-menu">--}}
{{--									<li id="menu-item-3208" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3208"><a href="2015/11/17/motors-rocks/index.html">Post Full Width</a></li>--}}
{{--									<li id="menu-item-3209" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3209"><a href="2015/11/23/tesla-says-reliability-problems-cut-in-half-after-consumer-reports-snub/index.html">Post Modern Layout</a></li>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--							</ul>--}}
{{--							</li>--}}
{{--							<li id="menu-item-3210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3210"><a href="shop-2/index.html">Shop</a></li>--}}
{{--							<li id="menu-item-3213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213"><a href="contact-us/index.html">Contact Us</a></li>--}}
{{--							<li class="stm_compare_mobile">--}}
{{--								<a href="index.html">Account</a>--}}
{{--							</li>--}}
{{--                            <li class="stm_compare_mobile">--}}
{{--									<a href="compare/index.html">Compare</a>--}}
{{--							</li>--}}
{{--							<li class="stm_cart_mobile">--}}
{{--									<a href="cart/index.html">Cart	</a>--}}
{{--							</li>--}}
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
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="fa fa-phone"></i>
                                                    </a>
												</li>
												<li>
                                                    <a href="https://www.twitter.com/" target="_blank">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
												</li>
                                                <li>
                                                    <a href="https://www.twitter.com/" target="_blank">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.twitter.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
											</ul>
										</div>
									</div>

{{--									<div class="pull-right">--}}
{{--										<div class="header-secondary-phone header-secondary-phone-single">--}}
{{--											<div class="phone">--}}
{{--                                                <span class="phone-label">--}}
{{--                                                    Service--}}
{{--        										</span>--}}
{{--												<span class="phone-number heading-font">--}}
{{--													<a href="tel:878-3853-9576">--}}
{{--														878-3853-9576--}}
{{--                                                    </a>--}}
{{--												</span>--}}
{{--											</div>--}}
{{--                                            <div class="phone">--}}
{{--                                                <span class="phone-label">--}}
{{--                                                    Parts--}}
{{--                                                </span>--}}
{{--                                                <span class="phone-number heading-font">--}}
{{--                                                    <a href="tel:878-0505-0440">--}}
{{--                                                                878-0505-0440--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                            </div>--}}
{{--									    </div>--}}
{{--									</div>--}}
                                    <div class="pull-right ml-lg-5 mb-md-2 " >
{{--                                        <div class="header-main-socs">--}}
                                            <button type="button" class="btn btn-sm " style="background-color: #cc761a;box-shadow: none">SEND ENQUIRY</button>
{{--                                        </div>--}}
                                    </div>
                                    <div class="pull-right text-right" >
                                        <div class="header-secondary-phone header-secondary-phone-single">
                                            <div class="phone">
                                                {{--                                                <span class="phone-label">--}}
                                                                                                             <i class="stm-icon-phone " style="color: #cc761a"></i>
                                                {{--                                                </span>--}}
                                                <span class="phone-number heading-font">
                                                    <a href="tel:878-3853-9576">+971 56784932	</a>
                                                </span>
                                            </div>
                                            <div class="phone">
                                                {{--                                                <span class="phone-label">--}}
                                                                                                             <i class="stm-icon-phone " style="color: #cc761a"></i>
                                                {{--                                                </span>--}}
                                                <span class="phone-number heading-font">
                                                    <a href="tel:878-0505-0440"> +971 59784922	 </a>
                                                </span>
                                            </div>
                                            <div class="phone">
{{--                                                <span class="phone-label">--}}
                                                             <i class="stm-icon-mail " style="color: #cc761a" ></i>
{{--                                                </span>--}}

                                                <span class="phone-number heading-font">
                                                    <span> info@milelecarrental.com</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
														<!--Header main phone-->
{{--									<div class="pull-right">--}}
{{--										<div class="header-main-phone heading-font">--}}
{{--											<i class="stm-icon-phone "></i>--}}
{{--                                            <div class="phone">--}}
{{--												<span class="phone-number heading-font">--}}
{{--													<a href="tel:878-9674-4455">--}}
{{--														+971 5678952--}}
{{--                                                    </a>--}}
{{--												</span>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--														<!--Header address-->--}}
{{--									<div class="pull-right">--}}
{{--										<div class="header-address">--}}
{{--											<i class="stm-icon-pin "></i>--}}
{{--                                                <div class="address">--}}
{{--													<span class="heading-font">--}}
{{--														1840 E Garvey Ave South West Covina, CA 91791--}}
{{--                                                    </span>--}}
{{--													<span id="stm-google-map" class="fancy-iframe" data-iframe="true"--}}
{{--															data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.800286590775!2d-73.9883789841383!3d40.7224127793308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25983b59a3e29%3A0xbe92821c6b349d4a!2sA%20Ave%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1569240444152!5m2!1sen!2s"--}}
{{--														>--}}
{{--															View on map--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--										</div>--}}
{{--									</div>--}}

							</div> <!--clearfix-->
						</div> <!--header-top-info-->
					</div> <!-- Top info wrap -->
				</div> <!--clearfix-->
			</div> <!--container-->
		</div> <!--header-main-->

		<div id="header-nav-holder" class="hidden-sm hidden-xs">
			<div class="header-nav header-nav-transparent header-nav-fixed">
				<div class="container">
{{--					<div class="header-help-bar-trigger">--}}
{{--						<i class="fas fa-chevron-down"></i>--}}
{{--					</div>--}}
{{--					<div class="header-help-bar">--}}
{{--						<ul>--}}
{{--																		<li class="help-bar-compare">--}}
{{--									<a href="compare/index.html" title="View compared items">--}}
{{--										<span class="list-label heading-font">Compare</span>--}}
{{--										<i class="stm-icon-speedometr2 list-icon" style=""></i>								<span class="list-badge">--}}
{{--											<span class="stm-current-cars-in-compare" data-contains="compare-count"></span>--}}
{{--										</span>--}}
{{--									</a>--}}
{{--								</li>--}}
{{--																								<!--Shop archive-->--}}
{{--								<li class="help-bar-shop">--}}
{{--									<a href="cart/index.html" title="Watch shop items">--}}
{{--										<span class="list-label heading-font">--}}
{{--											Cart								</span>--}}
{{--										<i class="stm-icon-shop_bag list-icon" style=""></i>			--}}
{{--                                        <span class="list-badge">--}}
{{--											<span class="stm-current-items-in-cart">--}}
{{--																					</span>--}}
{{--										</span>--}}
{{--									</a>--}}
{{--								</li>--}}
{{--																					</ul>--}}
{{--					</div>--}}
					<div class="main-menu " >

						<ul class="header-menu clearfix float-right" style="">
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('home')}}">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089"><a href="{{route('vehicles')}}"> Vehicles</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="{{route('aboutUs')}}">About Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="{{ route('faq') }}">FAQ</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213"><a href="{{route('contactUs')}}">Contact Us</a></li>


{{--				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3206"><a href="inventory/index.html">Inventory</a></li>--}}
{{--				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3084"><a href="#">Pages</a>--}}
{{--				<ul class="sub-menu">--}}
{{--					<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3212"><a href="about-us/index.html">About us</a></li> -->--}}
{{--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3214"><a href="services/index.html">Services</a></li>--}}
{{--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3204"><a href="auto-loan-calculator/index.html">Auto Loan Calculator</a></li>--}}
{{--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3205"><a href="compare/index.html">Vehicle Comparison</a></li>--}}
{{--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3207"><a href="faq-2/index.html">FAQ</a></li>--}}
{{--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3203"><a href="coming-soon/index.html">Coming Soon</a></li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3085"><a href="http://localhost/404-page/">404 page</a></li>--}}
{{--				</ul>--}}
{{--				</li>--}}
{{--				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3086 stm_megamenu stm_megamenu__boxed"><a href="#">Mega Menu</a>--}}
{{--				<ul class="sub-menu">--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3087"><div class="menu-title heading-font">Special Offers</div><div class="stm-special-offers"><div class="special-wrap"><div class="img-wrap"><a href="listings/bmw-m5/index.html"><img src="{{asset ('uploads/2021/03/01-6-120x120.jpg')}}" /></a></div><div class="title-price-wrap"><div class="car-title"><a href="listings/bmw-m5/index.html">2021 BMW M5 F90 FULL OPTIONS</a></div><div class="prices"><span class="normal_price normal_font has_sale">$115 000</span><span class="sale_price heading-font">$99 000</span></div></div></div><div class="special-wrap"><div class="img-wrap"><a href="listings/lamborghini-urus-2021/index.html"><img src="{{asset ('uploads/2021/03/01-18-120x120.jpg')}}" /></a></div><div class="title-price-wrap"><div class="car-title"><a href="listings/lamborghini-urus-2021/index.html">Lamborghini Urus 2021 Stage 2, Akrapovic Exhaust</a></div><div class="prices"><span class="normal_price normal_font has_sale">$340 000</span><span class="sale_price heading-font">$305 000</span></div></div></div></div></li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3088"><div class="menu-title heading-font">New Vehicles</div>--}}
{{--					<ul class="sub-menu">--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3089"><a href="http://localhost/inventory/?condition=new-cars">New Vehicles</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3095"><a href="http://localhost/inventory/?condition=new-cars&amp;make=chevrolet">Chevrolet Cars</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3096"><a href="http://localhost/inventory/?body%5B0%5D=off-road">Off-Road Cars</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3097"><a href="http://localhost/inventory/?make=tesla">Tesla Cars</a></li>--}}
{{--					</ul>--}}
{{--				</li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3098"><div class="menu-title heading-font">Quick Search</div>--}}
{{--					<ul class="sub-menu">--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3100"><a href="http://localhost/inventory/?serie=c-class">C-Class Cars</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3099"><a href="http://localhost/inventory/?condition=used-cars">Used Vehicles</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3101"><a href="http://localhost/inventory/?min_price=2000&amp;max_price=30500">Cheaper Cars</a></li>--}}
{{--						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3102"><a href="http://localhost/inventory/?ca-year=1990">Older than 2000</a></li>--}}
{{--					</ul>--}}
{{--				</li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3103"><div class="menu-title heading-font">Contacts</div><ul class='mm-list'><li class='normal_font'><i class='fas fa-envelope'></i>info@stylemixthemes.com</li><li class='normal_font'><i class='fas fa-phone'></i>+1 628 123 4000</li><li class='normal_font'><i class='fas fa-map-marker'></i>1010 Avenue of the Moon, NY 10018 US.</li><li class='normal_font'><i class=''></i>Mon-Sat: 8:00AM-6:00PM</li></ul></li>--}}
{{--				</ul>--}}
{{--				</li>--}}
{{--				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3211"><a href="blog/index.html">Blog</a>--}}
{{--				<ul class="sub-menu">--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3094"><a href="http://localhost/blog/?sidebar-position=none">Blog &#8211; Grid Full Width</a></li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3093"><a href="http://localhost/blog/?&amp;view-type=list&amp;show-title-box=hide&amp;show-breadcrumbs=yes">List with Right Sidebar</a></li>--}}
{{--					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3092"><a href="#">Single Post Templates</a>--}}
{{--					<ul class="sub-menu">--}}
{{--						<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3208"><a href="2015/11/17/motors-rocks/index.html">Post Full Width</a></li>--}}
{{--						<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3209"><a href="2015/11/23/tesla-says-reliability-problems-cut-in-half-after-consumer-reports-snub/index.html">Post Modern Layout</a></li>--}}
{{--					</ul>--}}
{{--				</li>--}}
{{--				</ul>--}}
{{--				</li>--}}
{{--				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3210"><a href="shop-2/index.html">Shop</a></li>--}}
{{--				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3213"><a href="contact-us/index.html">Contact Us</a></li>--}}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- id header -->

