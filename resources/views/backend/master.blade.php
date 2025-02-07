@include('backend.head')
    
@include('backend.nav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{route('addabout')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Add-About
                            </a>
                            <a class="nav-link" href="{{route('categorycover')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Add-Cover
                            </a>
                            <a class="nav-link" href="{{route('showcontact')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               messages
                            </a>
                            <a class="nav-link" href="{{route('showcontact')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               messages
                            </a>
                           
                            
                            
                            
                            
                            
                           
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                   
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
            @yield('content')
            
             </div>      
        </div>
        @include('backend.script')
