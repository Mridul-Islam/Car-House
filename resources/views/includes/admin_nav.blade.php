<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="{{ route('admin.home') }}">
                    <img src="images/bmw-logo.jpg" alt="Car-House" width="60px"/>
                    Car-House
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li class="has-sub">
                        <a href="{{ route('admin.home') }}">
{{--                            <i class="fas fa-tachometer-alt"></i>--}}
                            Dashboard
                            <span class="bot-line"></span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="#">
{{--                            <i class="fas fa-shopping-basket"></i>--}}
                            <span class="bot-line"></span>
                            Users
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{ route('users.index') }}">All Users</a>
                            </li>
                            <li>
                                <a href="{{ route('users.create') }}">Add new User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">
{{--                            <i class="fas fa-copy"></i>--}}
                            <span class="bot-line"></span>
                            Brands
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{ route('brands.index') }}">All Brands</a>
                            </li>
                            <li>
                                <a href="{{ route('brands.create') }}">Add new Brand</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="table.html">
{{--                            <i class="fas fa-trophy"></i>--}}
                            <span class="bot-line"></span>
                            Cars
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{ route('cars.index') }}">All Cars</a>
                            </li>
                            <li>
                                <a href="{{ route('cars.create') }}">Add new Car</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="{{ route('home') }}">
                            Home
                            <span class="bot-line"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="../images/mridul.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">Mridul Islam</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="../images/mridul.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">Mridul Islam</a>
                                    </h5>
                                    <span class="email">1610947@iub.edu.bd</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->





<!-- HEADER MOBILE-->
<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="../images/bmw-logo.jpg" alt="Car-House" width="60px"/>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="{{ route('admin.home') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Users</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Brands</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Cars</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">
        <div class="account-wrap">
            <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                    <img src="../images/mridul.jpg" alt="Mridul Islam" />
                </div>
                <div class="content">
                    <a class="js-acc-btn" href="#">Mridul Islam</a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="../images/mridul.jpg" alt="John Doe" />
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                                <a href="#">Mridul Islam</a>
                            </h5>
                            <span class="email">1610947@iub.edu.bd</span>
                        </div>
                    </div>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                        <a href="#">
                            <i class="zmdi zmdi-power"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER MOBILE -->
