<!--
    START: Share Place

    Additional Classes:
        .nk-share-place-light
-->
<div class="nk-share-place">
    <div>
        <div class="container">
            <div class="nk-share-icons" data-url="https://google.com/">
                <div class="plusone nk-share-icon fa fa-google-plus" title="Share page on Google+"></div>
                <div class="facebook nk-share-icon fa fa-facebook" title="Share page on Facebook"></div>
                <div class="twitter nk-share-icon fa fa-twitter" title="Share page on Twitter"></div>
                <div class="pinterest nk-share-icon fa fa-pinterest" title="Share page on Pinterest"></div>
                <!-- <div class="vkontakte nk-share-icon fa fa-vk" title="Share page on VK"></div> -->
            </div>
        </div>
    </div>
</div>
<!-- END: Share Place -->

    
    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header">

    
    
<!--
    START: Top Contacts

    Additional Classes:
        .nk-contacts-top-light
-->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <div class="nk-navbar">
                <ul class="nk-nav">
                    <li class="nk-drop-item">
                        <a href="#">EN</a>
                        <ul class="dropdown">
                            <li><a href="#">DE</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">RU</a></li>
                            <li><a href="#">JA</a></li>
                        </ul>
                    </li>
                    <li><a href="tel:+37001231078"><span class="nk-contact-icon"><i class="ion-ios-telephone"></i></span> + 3 (700) 123-1078</a></li>
                    <li><a href="mailto:info@khaki.com"><span class="nk-contact-icon"><i class="ion-ios-email"></i></span> info@khaki.com</a></li>
                </ul>
            </div>
        </div>
        <div class="nk-contacts-right">
            <div class="nk-navbar">
                <ul class="nk-nav">
                    <li><a href="https://twitter.com/nkdevv" target="_blank" class="nk-contact-icon"><span class="ion-social-twitter"></span></a></li>
                    <li><a href="https://dribbble.com/_nK" target="_blank" class="nk-contact-icon"><span class="ion-social-dribbble-outline"></span></a></li>
                    <li><a href="#" class="nk-contact-icon"><span class="ion-social-instagram-outline"></span></a></li>
                    <li><a href="#" class="nk-contact-icon"><span class="ion-social-pinterest"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
                    <img src="{{ Request::root()}}/assets/images/logo.svg" alt="" width="70">
                </a>
                
                <ul class="nk-nav nk-nav-left hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    {{ menu('main', 'include.menus.main') }}
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                    
                    <li class="single-icon nk-drop-item">
                        <a href="#" class="no-link-effect">
                            <span class="fa fa-sign-in"></span>
                        </a>
                        <div class="dropdown">
                            <div class="nk-sign-form">
                                <div class="nk-sign-form-container">
                                    <!-- START: Login Form -->
                                    <form class="nk-sign-form-login active" action="#">
                                        <h4>Log In</h4>

                                        <input class="form-control" type="text" placeholder="Username or Email">
                                        <div class="nk-gap"></div>

                                        <input class="form-control" type="password" placeholder="Password">
                                        <div class="nk-gap"></div>

                                        <div class="form-check pull-left">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember Me
                                            </label>
                                        </div>
                                        <button class="nk-btn nk-btn-color-white text-dark-1 pull-right">Log In</button>

                                        <div class="clearfix"></div>
                                        <div class="nk-gap"></div>
                                        <div class="text-right">
                                            <a class="nk-sign-form-register-toggle" href="#">Register</a>
                                            |
                                            <a class="nk-sign-form-lost-toggle" href="#">Lost Password?</a>
                                        </div>
                                    </form>
                                    <!-- END: Login Form -->

                                    <!-- START: Lost Password Form -->
                                    <form class="nk-sign-form-lost" action="#">
                                        <h4>Lost Password</h4>

                                        <input class="form-control" type="text" placeholder="Username or Email">
                                        <div class="nk-gap"></div>

                                        <button class="nk-btn nk-btn-color-white text-dark-1 pull-right">Get New Password</button>

                                        <div class="clearfix"></div>
                                        <div class="nk-gap"></div>
                                        <a class="nk-sign-form-login-toggle pull-right" href="#">Back to Log In</a>
                                    </form>
                                    <!-- END: Lost Password Form -->

                                    <!-- START: Register Form -->
                                    <form class="nk-sign-form-register" action="#">
                                        <h4>Register</h4>

                                        <input class="form-control" type="text" placeholder="Username">
                                        <div class="nk-gap"></div>

                                        <input class="form-control" type="email" placeholder="Email">
                                        <div class="nk-gap"></div>

                                        <div>A password will be emailed to you.</div>
                                        <div class="nk-gap"></div>

                                        <button class="nk-btn nk-btn-color-white text-dark-1 pull-right">Register</button>

                                        <div class="clearfix"></div>
                                        <div class="nk-gap"></div>
                                        <a class="nk-sign-form-login-toggle pull-right" href="#">Back to Log In</a>
                                    </form>
                                    <!-- END: Register Form -->
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- START: Silk -->
                    <li class="single-icon nk-drop-item">
                        <a href="#" class="no-link-effect">
                            <span class="ion-bag"></span>
                        </a>
                        <span class="nk-badge">3</span>
                    </li>
                    <!-- END: Silk -->
                    
                    <li class="single-icon">
                        <a href="#" class="nk-share-toggle no-link-effect">
                            <span class="ion-android-share-alt"></span>
                        </a>
                    </li>
                    
                    
                    <li class="single-icon">
                        <a href="#" class="nk-search-toggle no-link-effect">
                            <span class="nk-icon-search"></span>
                        </a>
                    </li>
                    
                    
                    
                    <li class="single-icon">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
        .nk-navbar-light
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
                <div class="nk-nav-row">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="70">
                    </a>
                </div>
                <div class="nk-nav-row nk-nav-row-full nk-nav-row-top">
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->