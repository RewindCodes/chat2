<div class="top sticky overflow-hidden">
    <!--APP-SIDEBAR-->
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar bg-transparent horizontal-main">
        <div class="container">
            <div class="row">
                <div class="main-sidemenu navbar px-0">
                    <a class="navbar-brand ps-0 d-none d-lg-block pr-10" href="{{ route('home') }}">
                        <img alt="" class="logo-2" src="assets/images/logo/logo.png" width="50">
                        <img src="assets/images/logo/logo.png" class="logo-3" alt="logo">
                    </a>

                    <ul class="side-menu">
                        <li class="slide">
                            <a class="slide-item" data-bs-toggle="slide" href="/pricing"><span
                                    class="side-menu__label">Pricing</span></a>
                        </li>
                        <li class="slide">
                            <a class="slide-item" data-bs-toggle="slide" href="{{ route('about.page') }}"><span
                                    class="side-menu__label">About</span></a>
                        </li>
                        <li class="slide">
                            <a class="slide-item" data-bs-toggle="slide" href="{{ route('faq.page') }}"><span
                                    class="side-menu__label">Faq's</span></a>
                        </li>
                        <li class="slide">
                            <a class="slide-item" data-bs-toggle="slide" href="{{ route('contact.page') }}"><span
                                    class="side-menu__label">Contact</span></a>
                        </li>
                    </ul>

                    <div class="header-nav-right d-none d-lg-flex">
                            @if (!Auth::check())
                            <a href="{{route('showlogin')}}"
                            class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto d-lg-none d-xl-block d-block"
                            target="">Sign in
                           </a>
                           <a href="{{route('showregister')}}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                            target="">Sign up
                             </a>
                            @else
                            <a href="{{route('user.dashboard')}}"  class="btn ripple btn-min w-sm btn-outline-default me-2 my-auto d-lg-none d-xl-block d-block">Dashboard</a>
                            <a href="{{route('logout')}}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                  target="">Logout
                            </a>
                            <a href="{{route('logout')}}" class="btn btn-icon  btn-primary brround" title="Start Chat"><i class="fa fa-commenting"></i>
                            </a>
                            @endif




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
