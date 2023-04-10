<!-- app-Header -->
<div class="hor-header header">
    <div class="container main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
                <img src="assets/images/logo/logo.png" class="header-brand-img desktop-logo" alt="logo" style="width: 50px">
                <img src="assets/images/logo/logo.png" class="header-brand-img light-logo1"
                    alt="logo" style="width: 50px">
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                        <!-- SEARCH -->
                        <div class="header-nav-right p-5">
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->


