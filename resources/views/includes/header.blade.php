<header>

    <nav>
        <div class="header-menu-area header-menu-area-design-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-6">
                        <div class="logo text-left">
                            <a href="index-2.html"><img src="assets/images/logo-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-sm-6 col-6">
                        <a href="javascript:void(0)" class="hidden-lg hamburger">
                            <span class="h-top"></span>
                            <span class="h-middle"></span>
                            <span class="h-bottom"></span>
                        </a>
                        <nav class="main-nav">
                            <div class="logo mobile-ham-logo d-lg-none d-block text-left">
                                <a href="index-2.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <ul>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Home</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html">Home One</a></li>
                                        <li><a href="home-two.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li><a href="documents.html">Docs</a></li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Pages</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="documents.html">Documents</a></li>
                                        <li><a href="document-details.html">Document Details</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="sign-up.html">Sign Up</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="ask-a-qsn.html">Ask A Qsn?</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Forum</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="topic.html">Topic</a></li>
                                        <li></li>
                                        <li><a href="forum-q.html">Forum Q.</a></li>
                                        <li><a href="topic-details.html">Topic Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Blog</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <div class="menu-btn-wrap d-block d-lg-none">
                                <a class="common-btn btn-style-1" href="{{ route('login') }}">Connecter</a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="menu-btn-wrap">
                            <a class="common-btn btn-style-6" href="{{ route('login') }}">Connecter</a>
                            <div class="menu-toggle-btn">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    @yield('breadcamp')
    

</header>
