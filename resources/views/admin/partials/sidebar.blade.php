<div class="deznav">
    <div class="deznav-scroll mm-active">
        <ul class="metismenu mm-show" id="menu">
            <li class="mm-active">
                <a class="has-arrow ai-icon" href="{{ route('admin.index') }}" aria-expanded="false">
                    <i class="flaticon-dashboard-1"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.about-us') }}" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">About Us</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.members') }}" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Membership</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.certification') }}" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Certification</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.advocacyPolicy') }}" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Advocacy & Policy</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.contactForm.index') }}"  aria-expanded="false">
                    <i class="flaticon-381-user-5"></i>
                    <span class="nav-text">Contact Form</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.event.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Events</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.livestream.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Livestream</span>
                </a>
            </li>
          
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.blog.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Blog</span>
                </a>
            </li>
           
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.coreActivities.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Core activities</span>
                </a>
            </li> 

            <li>
                <a  href="{{ route('admin.testimonials.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Testimonials</span>
                </a> 
            </li> 
           
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.faq.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">FAQs</span>
                </a> 
                <ul aria-expanded="false" class="mm-collapse">
                
                    <li>
                        <a href="{{ route('admin.faq.index') }}" aria-expanded="false"> View FAQs</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.faq.submtForm') }}" aria-expanded="false">FAQs Submit Form</a>
                    </li>
                    
                </ul>
            </li> 

            <li>
                <a  href="{{ route('admin.faq.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">FAQs</span>
                </a> 
            </li> 

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-settings"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                   
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"> Menu</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            {{-- <li><a href="{{route('admin.project.projectMenu')}}" previewlistener="true">Project Menu</a></li> --}}
                            <li><a href="{{route('admin.menu.index')}}" previewlistener="true">Manage Menu</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"> slider</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{route('admin.slider.index')}}" previewlistener="true">Manage Slider</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('admin.settings.content') }}" aria-expanded="false">Contents</a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('admin.show.password') }}" aria-expanded="false">Reset Password</a>
                    </li>
                </ul>
            </li>
        </ul>
    
        <div class="copyright">
            <p><strong> </strong> ©  <span id="current-year"></span> All Rights Reserved</p>
            <p>by Archway Home</p>
        </div>
    </div>
</div>
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>