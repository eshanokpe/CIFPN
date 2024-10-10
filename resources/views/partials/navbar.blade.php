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
                <nav class="nav-main mainmenu-nav">
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
                
            </div>
        </div>
    </div>

</header>