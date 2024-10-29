 <!-- start header area -->
 <header class="header-two header--sticky">
    <div class="header-top">
        <div class="content">
            <div class="left-header-top">
                <p class="top-details">
                    Are you ready to grow up your business? <a href="{{ route('home.pages', 'contactus') }}">Contact Us <i class="fal fa-arrow-right"></i></a>
                </p>
            </div> 
            <div class="right-header-top">
                <div class="working-time">
                    <i class="far fa-clock"></i>
                    <span>Working: 8:00am - 5pm</span>
                </div>
                <div class="ht-social">
                    <span>Visit Us:</span>
                    <ul>
                        <li>
                            <a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $sociallink->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header">
        <div class="content">
            <div class="header-left">
                <a class="thumbnail" href="{{ route('home') }}">
                    <img src="{{ asset($contactUs->site_logo)}}" alt="">
                </a>
                <nav class="nav-main mainmenu-nav d-none d-xl-block">
                    <ul class="mainmenu">
                        @forelse ($menuItems as $item)
                            <li class="menu-item {{ $item->dropdownItems->count() > 0 ? 'has-droupdown' : '' }}">
                                <a class="menu-link" href="{{ route('home.pages', $item->slug) }}">{{ $item->name }}</a>
                                
                                @if($item->dropdownItems->count() > 0)
                                    <ul class="submenu">
                                        @foreach ($item->dropdownItems as $dropdownItem)
                                            <li >
                                                <a href="{{ route('home.pages', $dropdownItem->slug) }}">{{ $dropdownItem->name }}</a>
                                                 
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @empty
                            <p>No data found</p>
                        @endforelse
                        
                     </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="call-area">
                   
                    <div class="number-area">
                        <span>Call us anytime</span>
                        <a href="tel:{{$contactUs->first_phone}}">
                            <h6 class="call">{{$contactUs->first_phone}}</h6>
                        </a>
                    </div>
                </div> 
                <a class="rts-btn btn-primary-2 menu-block-none" href="{{ route('home.pages', 'appointment') }}">Book a Meeting</a>
                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                    <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png')}}" alt="Menu-icon">
                    <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png')}}" alt="Menu-icon">
                </button>
            </div>
        </div>
    </div>

</header>

<div id="anywhere-home"></div>
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-2" href="{{ route('home') }}"><img class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-3" href="{{ route('home') }}"><img class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-4" href="{{ route('home') }}"><img class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                Infoscert Xpression Streams Limited is a forward-thinking technology systems integration company dedicated to delivering ...
                <snap ><a href="{{ route('home.pages', 'about-us') }}" class="" style="font-weight: bold">Read more</a></snap>
           </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">{{$contactUs->first_phone}} | {{$contactUs->second_phone}}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">{{$contactUs->first_email}}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="https://infoscert.com">https://infoscert.com/</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">{{$contactUs->first_address}}</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $sociallink->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>

        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                    
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="our-service.html">Service 1</a></li>
                                    <li><a href="service-2.html">Service 2</a></li>
                                    <li><a href="service-3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                            <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                            <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item"><a class="menu-link" href="contactus.html">Contact</a></li>
                </ul>
            </nav>
            
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
        </div>

    </div>
    <!-- inner menu area desktop End -->
</div>