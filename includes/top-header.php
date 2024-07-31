<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGOs -->
            <div class="navbar-brand-box">

                <!-- <div class="hamburger hamburger--squeeze div-show" id="hamburger">
                    <svg class="svgburg" width="60" height="40" viewBox="0 0 45 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="path1" d="M1.5 7L27.5 33C27.5 33 30.5 36 36.5 40.5C42.5 45 48 33.5 41.5 33C35 32.5 2 33 2 33" stroke="#96268ed6" stroke-width="3" />
                        <path class="path2" d="M2 33L28 7C28 7 33.5 1 37 1C40.5 1 43 6.20692 40 7C37 7.79308 1 7 1 7" stroke="#96268ed6" stroke-width="3" />
                        <path class="mline" d="M1.5 20H28.5" stroke="#96268ed6" stroke-width="3" />
                    </svg>
                    <svg class="svgburg-1 div-hide" width="60" height="40" viewBox="0 0 45 43" fill="none" xmlns="http://www.w3.org/2000/svg" style="right: 0%;top: 0px;height: 30px;width: 30px;position: fixed;display: block;">
                        <path class="path1 path-1" d="M1.5 7L27.5 33C27.5 33 30.5 36 36.5 40.5C42.5 45 48 33.5 41.5 33C35 32.5 2 33 2 33" stroke="#96268ed6" stroke-width="3" />
                        <path class="path2 path-2" d="M2 33L28 7C28 7 33.5 1 37 1C40.5 1 43 6.20692 40 7C37 7.79308 1 7 1 7" stroke="#96268ed6" stroke-width="3" />
                        <path class="mline mline-2" d="M1.5 20H28.5" stroke="#96268ed6" stroke-width="3" />
                    </svg>
                </div> -->


                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <div></div>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="35">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- <div class="d-none d-sm-block">
                <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create <i class="mdi mdi-chevron-down"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="d-flex">

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <!-- <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="fa fa-search"></span>
                </div> -->
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close" type="button"></button>
                </div>
            </form>

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect noteBtn" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>
                        <i class="ti-bell"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </strong>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0"> Notifications (258) </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title border-success rounded-circle ">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title border-warning rounded-circle ">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title border-info rounded-circle ">
                                        <i class="mdi mdi-glass-cocktail"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">It is a long established fact that a reader will</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title border-primary rounded-circle ">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title border-warning rounded-circle ">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                            View all
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block heder_profile ms-2">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg" alt="Header Avatar">
                    <p>Waqas Badshah</p>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i>Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 text-muted align-middle me-1"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#">
                        <span class="badge bg-success float-end">11</span>
                        <i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-spin mdi-cog"></i>
                </button>
            </div> -->

        </div>
    </div>
</header>



