<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/konrix/layouts/tables-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:45:02 GMT -->
<head>
    <meta charset="utf-8">
    <title>Basic Table | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<body>

    <div class="flex wrapper">

        <!-- Sidenav Menu -->
        <div class="app-menu">

            <!-- Sidenav Brand Logo -->
            <a href="index.php" class="logo-box">
                <!-- Light Brand Logo -->
                <div class="logo-light">
                    <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>

                <!-- Dark Brand Logo -->
                <div class="logo-dark">
                    <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>
            </a>

            <!-- Sidenav Menu Toggle Button -->
            <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
                <span class="sr-only">Menu Toggle Button</span>
                <i class="mgc_round_line text-xl"></i>
            </button>

            <!--- Menu -->
            <div class="srcollbar" data-simplebar>
                <ul class="menu" data-fc-type="accordion">
                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="index.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="menu-item">
                        <a href="apps-calendar.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-tickets.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_coupon_line"></i></span>
                            <span class="menu-text"> Tickets </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-file-manager.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_folder_2_line"></i></span>
                            <span class="menu-text"> File Manager </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-kanban.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_task_2_line"></i></span>
                            <span class="menu-text">Kanban</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                            <span class="menu-text"> Project </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="apps-project-list.php" class="menu-link">
                                    <span class="menu-text">List</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="apps-project-detail.php" class="menu-link">
                                    <span class="menu-text">Detail</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="apps-project-create.php" class="menu-link">
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">Custom</li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                            <span class="menu-text"> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="auth-login.php" class="menu-link">
                                    <span class="menu-text">Log In</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register.php" class="menu-link">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-recoverpw.php" class="menu-link">
                                    <span class="menu-text">Recover Password</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-lock-screen.php" class="menu-link">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                            <span class="menu-text"> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="pages-starter.php" class="menu-link">
                                    <span class="menu-text">Starter</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-timeline.php" class="menu-link">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-invoice.php" class="menu-link">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-gallery.php" class="menu-link">
                                    <span class="menu-text">Gallery</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-faqs.php" class="menu-link">
                                    <span class="menu-text">FAQs</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-pricing.php" class="menu-link">
                                    <span class="menu-text">Pricing</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-maintenance.php" class="menu-link">
                                    <span class="menu-text">Maintenance</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-coming-soon.php" class="menu-link">
                                    <span class="menu-text">Coming Soon</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-404.php" class="menu-link">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-404-alt.php" class="menu-link">
                                    <span class="menu-text">Error 404-alt</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-500.php" class="menu-link">
                                    <span class="menu-text">Error 500</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_layout_line"></i></span>
                            <span class="menu-text"> Layout </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="layout-hover-view.php" target="_blank" class="menu-link">
                                    <span class="menu-text">Hovered Menu</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-icon-view.php" target="_blank" class="menu-link">
                                    <span class="menu-text">Icon View Menu</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-compact-view.php" target="_blank" class="menu-link">
                                    <span class="menu-text">Compact Menu</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-mobile-view.php" target="_blank" class="menu-link">
                                    <span class="menu-text">Mobile View Menu</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-hidden.php" target="_blank" class="menu-link">
                                    <span class="menu-text">Hidden Menu</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">Elements</li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_classify_2_line"></i></span>
                            <span class="menu-text"> Components </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="ui-accordions.php" class="menu-link">
                                    <span class="menu-text">Accordions</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.php" class="menu-link">
                                    <span class="menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-avatars.php" class="menu-link">
                                    <span class="menu-text">Avatars</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.php" class="menu-link">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.php" class="menu-link">
                                    <span class="menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-breadcrumbs.php" class="menu-link">
                                    <span class="menu-text">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-cards.php" class="menu-link">
                                    <span class="menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.php" class="menu-link">
                                    <span class="menu-text">Collapse</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dismissible.php" class="menu-link">
                                    <span class="menu-text">Dismissible</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.php" class="menu-link">
                                    <span class="menu-text">Dropdowns</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.php" class="menu-link">
                                    <span class="menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-skeleton.php" class="menu-link">
                                    <span class="menu-text">Skeleton</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.php" class="menu-link">
                                    <span class="menu-text">Spinners</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-group.php" class="menu-link">
                                    <span class="menu-text">List Group</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-ratio.php" class="menu-link">
                                    <span class="menu-text">Ratio</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs.php" class="menu-link">
                                    <span class="menu-text">Tab</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.php" class="menu-link">
                                    <span class="menu-text">Modals</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.php" class="menu-link">
                                    <span class="menu-text">Offcanvas</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-popovers.php" class="menu-link">
                                    <span class="menu-text">Popovers</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips.php" class="menu-link">
                                    <span class="menu-text">Tooltips</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.php" class="menu-link">
                                    <span class="menu-text">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                            <span class="menu-text"> Extended </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="extended-swiper.php" class="menu-link">
                                    <span class="menu-text">Swiper</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-nestable.php" class="menu-link">
                                    <span class="menu-text">Nestable List</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ratings.php" class="menu-link">
                                    <span class="menu-text">Ratings</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-animation.php" class="menu-link">
                                    <span class="menu-text">Animation</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-player.php" class="menu-link">
                                    <span class="menu-text">Player</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-scrollbar.php" class="menu-link">
                                    <span class="menu-text">Scrollbar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-sweet-alert.php" class="menu-link">
                                    <span class="menu-text">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-tour.php" class="menu-link">
                                    <span class="menu-text">Tour Page</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-tippy-tooltips.php" class="menu-link">
                                    <span class="menu-text">Tippy Tooltip</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-lightbox.php" class="menu-link">
                                    <span class="menu-text">Lightbox</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_file_check_line"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="forms-elements.php" class="menu-link">
                                    <span class="menu-text">Form Elements</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-select.php" class="menu-link">
                                    <span class="menu-text">Select</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-range.php" class="menu-link">
                                    <span class="menu-text">Range</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-pickers.php" class="menu-link">
                                    <span class="menu-text">Pickers</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-masks.php" class="menu-link">
                                    <span class="menu-text">Masks</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-editor.php" class="menu-link">
                                    <span class="menu-text">Editor</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-file-uploads.php" class="menu-link">
                                    <span class="menu-text">File Uploads</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-validation.php" class="menu-link">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-layout.php" class="menu-link">
                                    <span class="menu-text">Form Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_layout_grid_line"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="tables-basic.php" class="menu-link">
                                    <span class="menu-text">Basic Tables</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables.php" class="menu-link">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_dribbble_line"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="icons-mingcute.php" class="menu-link">
                                    <span class="menu-text">Mingcute</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-feather.php" class="menu-link">
                                    <span class="menu-text">Feather</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-material-symbols.php" class="menu-link">
                                    <span class="menu-text">Material Symbols </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="charts.php" class="menu-link">
                            <span class="menu-icon"><i class="mgc_chart_bar_line"></i></span>
                            <span class="menu-text"> Chart </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_location_line"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="maps-vector.php" class="menu-link">
                                    <span class="menu-text">Vector Maps</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="maps-google.php" class="menu-link">
                                    <span class="menu-text">Google Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">Documentation</li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mgc_document_line"></i></span>
                            <span class="menu-text"> Documentation </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="docs-introduction.php" class="menu-link">
                                    <span class="menu-text">Introduction</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="docs-installation.php" class="menu-link">
                                    <span class="menu-text">Installation</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="docs-customization.php" class="menu-link">
                                    <span class="menu-text">Customization</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="docs-changelog.php" class="menu-link">
                                    <span class="menu-text">Changelog</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Help Box Widget -->
                <div class="my-10 mx-5">
                    <div class="help-box p-6 bg-black/5 text-center rounded-md">
                        <div class="flex justify-center mb-4">
                            <svg width="30" height="18" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z" fill="#38BDF8"></path>
                            </svg>
                        </div>
                        <h5 class="mb-2">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-secondary text-white">Upgrade</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- Topbar Start -->
            <header class="app-header flex items-center px-4 gap-3">
                <!-- Sidenav Menu Toggle Button -->
                <button id="button-toggle-menu" class="nav-link p-2">
                    <span class="sr-only">Menu Toggle Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_menu_line text-xl"></i>
                    </span>
                </button>

                <!-- Topbar Brand Logo -->
                <a href="index.php" class="logo-box">
                    <!-- Light Brand Logo -->
                    <div class="logo-light">
                        <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                        <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                    </div>

                    <!-- Dark Brand Logo -->
                    <div class="logo-dark">
                        <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                        <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                    </div>
                </a>

                <!-- Topbar Search Modal Button -->
                <button type="button" data-fc-type="modal" data-fc-target="topbar-search-modal" class="nav-link p-2 me-auto">
                    <span class="sr-only">Search</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_search_line text-2xl"></i>
                    </span>
                </button>

                <!-- Language Dropdown Button -->
                <div class="relative">
                    <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2 fc-dropdown">
                        <span class="flex items-center justify-center h-6 w-6">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="h-4 w-6">
                        </span>
                    </button>
                    <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                        <!-- item-->
                        <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="h-4">
                            <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="h-4">
                            <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="h-4">
                            <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="h-4">
                            <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <!-- Fullscreen Toggle Button -->
                <div class="md:flex hidden">
                    <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                        <span class="sr-only">Fullscreen Mode</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i class="mgc_fullscreen_line text-2xl"></i>
                        </span>
                    </button>
                </div>

                <!-- Notification Bell Button -->
                <div class="relative md:flex hidden">
                    <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                        <span class="sr-only">View notifications</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i class="mgc_notification_line text-2xl"></i>
                        </span>
                    </button>
                    <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

                        <div class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between">
                                <h6 class="text-sm"> Notification</h6>
                                <a href="javascript: void(0);" class="text-gray-500 underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>

                        <div class="p-4 h-80" data-simplebar>

                            <h5 class="text-xs text-gray-500 mb-2">Today</h5>

                            <a href="javascript:void(0);" class="block mb-4">
                                <div class="card-body">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                                <i class="mgc_message_3_line text-lg"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow truncate ms-2">
                                            <h5 class="text-sm font-semibold mb-1">Datacorp <small class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="block mb-4">
                                <div class="card-body">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                                <i class="mgc_user_add_line text-lg"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow truncate ms-2">
                                            <h5 class="text-sm font-semibold mb-1">Admin <small class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">New user registered</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="block mb-4">
                                <div class="card-body">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-9 w-9" alt="">
                                        </div>
                                        <div class="flex-grow truncate ms-2">
                                            <h5 class="text-sm font-semibold mb-1">Cristina Pride <small class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                            <a href="javascript:void(0);" class="block mb-4">
                                <div class="card-body">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                                <i class="mgc_message_1_line text-lg"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow truncate ms-2">
                                            <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                            <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="block">
                                <div class="card-body">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-9 w-9" alt="">
                                        </div>
                                        <div class="flex-grow truncate ms-2">
                                            <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                            <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                            View All
                        </a>
                    </div>
                </div>

                <!-- Light/Dark Toggle Button -->
                <div class="flex">
                    <button id="light-dark-mode" type="button" class="nav-link p-2">
                        <span class="sr-only">Light/Dark Mode</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i class="mgc_moon_line text-2xl"></i>
                        </span>
                    </button>
                </div>

                <!-- Profile Dropdown Button -->
                <div class="relative">
                    <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link">
                        <img src="assets/images/users/user-6.jpg" alt="user-image" class="rounded-full h-10">
                    </button>
                    <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="pages-gallery.php">
                            <i class="mgc_pic_2_line  me-2"></i> 
                            <span>Gallery</span>
                        </a>
                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="apps-kanban.php">
                            <i class="mgc_task_2_line  me-2"></i> 
                            <span>Kanban</span>
                        </a>
                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                            <i class="mgc_lock_line  me-2"></i> 
                            <span>Lock Screen</span>
                        </a>
                        <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                            <i class="mgc_exit_line  me-2"></i> 
                            <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <!-- Topbar Search Modal -->
            <div>
                <div id="topbar-search-modal" class="fc-modal hidden w-full h-full fixed top-0 start-0 z-50">
                    <div class="fc-modal-open:opacity-100 fc-modal-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-12 sm:mx-auto">
                        <div class="mx-auto max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl transition-all dark:bg-slate-800">
                            <div class="relative">
                                <div class="pointer-events-none absolute top-3.5 start-4 text-gray-900 text-opacity-40 dark:text-gray-200">
                                    <i class="mgc_search_line text-xl"></i>
                                </div>
                                <input type="search" class="h-12 w-full border-0 bg-transparent ps-11 pe-4 text-gray-900 placeholder-gray-500 dark:placeholder-gray-300 dark:text-gray-200 focus:ring-0 sm:text-sm" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="flex-grow p-6">

                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Basic Table</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Konrix</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Table</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Basic Table</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Example</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="ExampleTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="ExampleTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="p-6">
                                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                                &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Striped rows</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="StripedRowTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="StripedRowTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="p-6">
                                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                                &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 dark:odd:bg-slate-700 dark:even:bg-slate-800&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Hoverable rows</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="HoverableTableHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="HoverableTableHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="p-6">
                                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                                &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;tr class=&quot;hover:bg-gray-100 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;hover:bg-gray-100 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;hover:bg-gray-100 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;hover:bg-gray-100 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;hover:bg-gray-100 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->



                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Striped Hoverable</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="StripedHoverableTableHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="StripedHoverableTableHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="p-6">
                                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                                &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                
                                                                &lt;tr class=&quot;odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700&quot;&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">highlighted tables</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="HighliteTargetHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-800">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="bg-orange-100 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="bg-red-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-800">Joe Black</td>
                                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">31</td>
                                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="HighliteTargetHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="p-6">
                                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                                &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;bg-primary/25 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-800&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;bg-orange-100 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;

                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;bg-red-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-800&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Bordered tables</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="BorderedTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border overflow-hidden dark:border-gray-700">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="BorderedTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border overflow-hidden dark:border-gray-700&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Rounded tables</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="RoundedTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="RoundedTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg overflow-hidden dark:border-gray-700&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Table thead horizontally divided</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="DivideTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr class="divide-x divide-gray-200 dark:divide-gray-700">
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="DivideTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr class=&quot;divide-x divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Header in Gray color</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="HeaderColorTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="HeaderColorTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg overflow-hidden dark:border-gray-700&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">With shadow</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="ShadowTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="ShadowTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Headless</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="HeadlessTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="HeadlessTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Table foot</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="FootTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Footer</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Footer</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Footer</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Footer</a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="FootTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
            
                                                        &lt;tfoot&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Footer&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Footer&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Footer&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Footer&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tfoot&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Captions</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="CaptionTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <caption class="py-2 text-left text-sm text-gray-600 dark:text-gray-500">List of users</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="CaptionTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;caption class=&quot;py-2 text-left text-sm text-gray-600 dark:text-gray-500&quot;&gt;List of users&lt;/caption&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Overflow</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="OverflowTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Regional Paradigm Technician</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">john@site.com</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Forward Response Developer</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">jim@site.com</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Product Directives Officer</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">joe@site.com</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="OverflowTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Title&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Email&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Regional Paradigm Technician&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;john@site.com&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Forward Response Developer&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;jim@site.com&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;

                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Product Directives Officer&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;joe@site.com&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Selection</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="SelectionTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-all" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-all" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-1" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-2" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-2" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-3" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-3" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-4" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-4" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="table-checkbox-5" type="checkbox" class="form-checkbox rounded">
                                                            <label for="table-checkbox-5" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="SelectionTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                        &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                            &lt;div class=&quot;border rounded-lg overflow-hidden dark:border-gray-700&quot;&gt;
                                                &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                    &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                        &lt;tr&gt;
                                                            &lt;th scope=&quot;col&quot; class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-all&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-all&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/th&gt;
                                                            &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                            &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                            &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                            &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                        &lt;/tr&gt;
                                                    &lt;/thead&gt;
                                                    &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;tr&gt;
                                                            &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-1&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-1&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                            &lt;/td&gt;
                                                        &lt;/tr&gt;
        
                                                        &lt;tr&gt;
                                                            &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-2&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-2&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                            &lt;/td&gt;
                                                        &lt;/tr&gt;
        
                                                        &lt;tr&gt;
                                                            &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-3&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-3&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                            &lt;/td&gt;
                                                        &lt;/tr&gt;
        
                                                        &lt;tr&gt;
                                                            &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-4&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-4&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                            &lt;/td&gt;
                                                        &lt;/tr&gt;
        
                                                        &lt;tr&gt;
                                                            &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                    &lt;input id=&quot;table-checkbox-5&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                    &lt;label for=&quot;table-checkbox-5&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                            &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                            &lt;/td&gt;
                                                        &lt;/tr&gt;
                                                    &lt;/tbody&gt;
                                                &lt;/table&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Search input</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="SearchTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                        <div class="py-3 px-4">
                                            <div class="relative max-w-xs">
                                                <label for="table-search" class="sr-only">Search</label>
                                                <input type="text" name="table-search" id="table-search" class="form-input ps-11" placeholder="Search for items">
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" >
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col" class="py-3 px-4 pe-0">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-all" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-all" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-1" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-2" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-2" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-3" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-3" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-4" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-4" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-search-checkbox-5" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-search-checkbox-5" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="SearchTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700&quot;&gt;
                                                    &lt;div class=&quot;py-3 px-4&quot;&gt;
                                                        &lt;div class=&quot;relative max-w-xs&quot;&gt;
                                                            &lt;label for=&quot;table-search&quot; class=&quot;sr-only&quot;&gt;Search&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; name=&quot;table-search&quot; id=&quot;table-search&quot; class=&quot;form-input ps-11&quot; placeholder=&quot;Search for items&quot;&gt;
                                                            &lt;div class=&quot;absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4&quot;&gt;
                                                                &lt;svg class=&quot;h-3.5 w-3.5 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                                    &lt;path d=&quot;M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z&quot; &gt;
                                                                &lt;/svg&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;py-3 px-4 pe-0&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-all&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-all&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-1&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-1&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-2&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-2&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-3&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-3&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-4&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-4&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-search-checkbox-5&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-search-checkbox-5&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">With pagination</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="PaginitionTableHtml">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                        <div class="py-3 px-4">
                                            <div class="relative max-w-xs">
                                                <label for="table-with-pagination-search" class="sr-only">Search</label>
                                                <input type="text" name="table-with-pagination-search" id="table-with-pagination-search" class="form-input ps-11" placeholder="Search for items">
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" >
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col" class="py-3 px-4 pe-0">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-all" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-2" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-2" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-3" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-3" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-4" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-4" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="py-3 ps-4">
                                                            <div class="flex items-center h-5">
                                                                <input id="table-pagination-checkbox-5" type="checkbox" class="form-checkbox rounded">
                                                                <label for="table-pagination-checkbox-5" class="sr-only">Checkbox</label>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="py-1 px-4">
                                            <nav class="flex items-center space-x-2">
                                                <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
                                                <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
                                                <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
                                                <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                                    <span class="sr-only">Next</span>
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="PaginitionTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700&quot;&gt;
                                                    &lt;div class=&quot;py-3 px-4&quot;&gt;
                                                        &lt;div class=&quot;relative max-w-xs&quot;&gt;
                                                            &lt;label for=&quot;table-with-pagination-search&quot; class=&quot;sr-only&quot;&gt;Search&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; name=&quot;table-with-pagination-search&quot; id=&quot;table-with-pagination-search&quot; class=&quot;form-input ps-11&quot; placeholder=&quot;Search for items&quot;&gt;
                                                            &lt;div class=&quot;absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4&quot;&gt;
                                                                &lt;svg class=&quot;h-3.5 w-3.5 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                                    &lt;path d=&quot;M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z&quot; &gt;
                                                                &lt;/svg&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;overflow-hidden&quot;&gt;
                                                        &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;py-3 px-4 pe-0&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-all&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-all&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-1&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-1&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-2&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-2&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-3&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-3&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-4&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-4&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
            
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;py-3 ps-4&quot;&gt;
                                                                        &lt;div class=&quot;flex items-center h-5&quot;&gt;
                                                                            &lt;input id=&quot;table-pagination-checkbox-5&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
                                                                            &lt;label for=&quot;table-pagination-checkbox-5&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
                                                                    &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                        &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;py-1 px-4&quot;&gt;
                                                        &lt;nav class=&quot;flex items-center space-x-2&quot;&gt;
                                                            &lt;a class=&quot;text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md&quot; href=&quot;#&quot;&gt;
                                                                &lt;span aria-hidden=&quot;true&quot;&gt;&laquo;&lt;/span&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot; aria-current=&quot;page&quot;&gt;1&lt;/a&gt;
                                                            &lt;a class=&quot;w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
                                                            &lt;a class=&quot;w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
                                                            &lt;a class=&quot;text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md&quot; href=&quot;#&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                                &lt;span aria-hidden=&quot;true&quot;&gt;&raquo;&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/nav&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->

                </div>

            </main>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            <!-- Footer Start -->
            <footer class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800">
                <div class="flex justify-center w-full gap-4">
                    <div>
                        <script>document.write(new Date().getFullYear())</script> © Konrix - <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

    </div>

    <!-- Back to Top Button -->
    <button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
        <i class="mgc_arrow_up_line text-lg"></i>
    </button>

    <!-- Theme Settings -->
    <div>
        <!-- Theme Setting Button -->
        <div class="fixed end-0 bottom-20">
            <button data-fc-type="offcanvas" data-fc-target="theme-customization" type="button" class="bg-white rounded-s-full shadow-lg p-2.5 ps-3 transition-all dark:bg-slate-800">
                <span class="sr-only">Setting</span>
                <span class="flex items-center justify-center animate-spin">
                    <i class="mgc_settings_4_line text-2xl"></i>
                </span>
            </button>
        </div>
    
        <!-- Theme Settings Offcanvas -->
        <div id="theme-customization" class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0
             transition-all duration-300 transform max-w-sm w-full z-50 bg-white border-s border-gray-900/10 dark:bg-gray-800 dark:border-white/10" tabindex="-1">
            <div class="h-16 flex items-center text-gray-800 dark:text-white border-b border-dashed border-gray-900/10 dark:border-white/10 px-6 gap-3">
                <h5 class="text-base grow">Theme Settings</h5>
                <button type="button" class="p-2" id="reset-layout"><i class="mgc_refresh_1_line text-xl"></i></button>
                <button type="button" data-fc-dismiss><i class="mgc_close_line text-xl"></i></button>
            </div>
    
            <div class="h-[calc(100vh-64px)]" data-simplebar>
                <div class="divide-y divide-dashed divide-slate-900/10  dark:divide-white/10">
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Theme</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-mode" id="layout-color-light" value="light">
                                <label class="form-label rounded-md" for="layout-color-light">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_sun_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-mode" id="layout-color-dark" value="dark">
                                <label class="form-label rounded-md" for="layout-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_moon_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="dir" id="direction-ltr" value="ltr">
                                <label class="form-label rounded-md" for="direction-ltr">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_left_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> LTR </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="dir" id="direction-rtl" value="rtl">
                                <label class="form-label rounded-md" for="direction-rtl">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_right_line text-2xl"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> RTL </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6 2xl:block hidden">
                        <h5 class="font-semibold text-sm mb-3">Content Width</h5>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-layout-width" id="layout-mode-default" value="default">
                                <label class="form-label rounded-md" for="layout-mode-default">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_2_line text-2xl rotate-45"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Fluid </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-layout-width" id="layout-mode-boxed" value="boxed">
                                <label class="form-label rounded-md" for="layout-mode-boxed">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_exit_2_line text-2xl rotate-45"></i>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Boxed </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-default" value="default">
                                <label class="form-label rounded-md" for="sidenav-view-default">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="block w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="h-1 block rounded-sm mb-2.5 bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Default </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hover" value="hover">
                                <label class="form-label rounded-md" for="sidenav-view-hover">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hover </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hover-active" value="hover-active">
                                <label class="form-label rounded-md" for="sidenav-view-hover-active">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="flex mb-2.5 gap-1">
                                                    <span class="h-1 block w-full rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="h-1 block w-2 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hover Active </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-sm" value="sm">
                                <label class="form-label rounded-md" for="sidenav-view-sm">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Small </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-md" value="md">
                                <label class="form-label rounded-md" for="sidenav-view-md">
                                    <span class="flex h-16 rounded-md overflow-hidden">
                                        <span class="w-4 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-2 h-2 mt-2 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-2 space-y-1">
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Compact </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                                <label class="form-label rounded-md" for="sidenav-view-mobile">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="w-1.5 h-1.5  ms-1 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1  rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Mobile </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                                <label class="form-label rounded-md" for="sidenav-view-hidden">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex flex-auto items-center h-full me-1.5">
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hidden </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-light" value="light">
                                <label class="form-label rounded-md" for="menu-color-light">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-dark" value="dark">
                                <label class="form-label rounded-md" for="menu-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-brand" value="brand">
                                <label class="form-label rounded-md" for="menu-color-brand">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Brand </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-gradient" value="gradient">
                                <label class="form-label rounded-md" for="menu-color-gradient">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full" style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Gradient </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-label rounded-md" for="topbar-color-light">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-label rounded-md" for="topbar-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-brand" value="brand">
                                <label class="form-label rounded-md" for="topbar-color-brand">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Brand </div>
                            </div>
    
                            <div class="card-radio">
                                <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-gradient" value="gradient">
                                <label class="form-label rounded-md" for="topbar-color-gradient">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full" style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Gradient </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Layout Position</h5>
                        <div class="flex btn-radio">
                            <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn rounded-e-none bg-gray-100 dark:bg-gray-700" for="layout-position-fixed">Fixed</label>
                            <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn rounded-s-none bg-gray-100 dark:bg-gray-700" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Code Preview Plugin Js -->
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
    <script src="assets/libs/clipboard/clipboard.min.js"></script>
    <script src="assets/js/pages/highlight.js"></script>

    <!-- Plugin Js -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/%40frostui/tailwindcss/frostui.js"></script>

    <!-- App Js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from coderthemes.com/konrix/layouts/tables-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:45:02 GMT -->
</html>