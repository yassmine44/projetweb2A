<!DOCTYPE html>
<html lang="en" data-menu-color="dark">
  <!-- Mirrored from coderthemes.com/konrix/layouts/sidebar-dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:43:52 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
            <img
              src="assets/images/logo-light.png"
              class="logo-lg h-6"
              alt="Light logo"
            />
            <img
              src="assets/images/logo-sm.png"
              class="logo-sm"
              alt="Small logo"
            />
          </div>

          <!-- Dark Brand Logo -->
          <div class="logo-dark">
            <img
              src="assets/images/logo-dark.png"
              class="logo-lg h-6"
              alt="Dark logo"
            />
            <img
              src="assets/images/logo-sm.png"
              class="logo-sm"
              alt="Small logo"
            />
          </div>
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button
          id="button-hover-toggle"
          class="absolute top-5 end-2 rounded-full p-1.5"
        >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
                <span class="menu-icon"
                  ><i class="mgc_building_2_line"></i
                ></span>
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
                <span class="menu-icon"><i class="mgc_layout_line"></i></span>
                <span class="menu-text"> Layout </span>
                <span class="menu-arrow"></span>
              </a>

              <ul class="sub-menu hidden">
                <li class="menu-item">
                  <a
                    href="layout-hover-view.php"
                    target="_blank"
                    class="menu-link"
                  >
                    <span class="menu-text">Hovered Menu</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="layout-icon-view.php"
                    target="_blank"
                    class="menu-link"
                  >
                    <span class="menu-text">Icon View Menu</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="layout-compact-view.php"
                    target="_blank"
                    class="menu-link"
                  >
                    <span class="menu-text">Compact Menu</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="layout-mobile-view.php"
                    target="_blank"
                    class="menu-link"
                  >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
                <span class="menu-icon"
                  ><i class="mgc_classify_2_line"></i
                ></span>
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
                <span class="menu-icon"
                  ><i class="mgc_file_check_line"></i
                ></span>
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
                <span class="menu-icon"
                  ><i class="mgc_layout_grid_line"></i
                ></span>
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
                <span class="menu-icon"
                  ><i class="mgc_chart_bar_line"></i
                ></span>
                <span class="menu-text"> Chart </span>
              </a>
            </li>

            <li class="menu-item">
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
              <a
                href="javascript:void(0)"
                data-fc-type="collapse"
                class="menu-link"
              >
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
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z"
                    fill="#38BDF8"
                  ></path>
                </svg>
              </div>
              <h5 class="mb-2">Unlimited Access</h5>
              <p class="mb-3">
                Upgrade to plan to get access to unlimited reports
              </p>
              <a
                href="javascript: void(0);"
                class="btn btn-sm bg-secondary text-white"
                >Upgrade</a
              >
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
              <img
                src="assets/images/logo-light.png"
                class="logo-lg h-6"
                alt="Light logo"
              />
              <img
                src="assets/images/logo-sm.png"
                class="logo-sm"
                alt="Small logo"
              />
            </div>

            <!-- Dark Brand Logo -->
            <div class="logo-dark">
              <img
                src="assets/images/logo-dark.png"
                class="logo-lg h-6"
                alt="Dark logo"
              />
              <img
                src="assets/images/logo-sm.png"
                class="logo-sm"
                alt="Small logo"
              />
            </div>
          </a>

          <!-- Topbar Search Modal Button -->
          <button
            type="button"
            data-fc-type="modal"
            data-fc-target="topbar-search-modal"
            class="nav-link p-2 me-auto"
          >
            <span class="sr-only">Search</span>
            <span class="flex items-center justify-center h-6 w-6">
              <i class="mgc_search_line text-2xl"></i>
            </span>
          </button>

          <!-- Language Dropdown Button -->
          <div class="relative">
            <button
              data-fc-type="dropdown"
              data-fc-placement="bottom-end"
              type="button"
              class="nav-link p-2 fc-dropdown"
            >
              <span class="flex items-center justify-center h-6 w-6">
                <img
                  src="assets/images/flags/us.jpg"
                  alt="user-image"
                  class="h-4 w-6"
                />
              </span>
            </button>
            <div
              class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
            >
              <!-- item-->
              <a
                href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
              >
                <img
                  src="assets/images/flags/germany.jpg"
                  alt="user-image"
                  class="h-4"
                />
                <span class="align-middle">German</span>
              </a>

              <!-- item-->
              <a
                href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
              >
                <img
                  src="assets/images/flags/italy.jpg"
                  alt="user-image"
                  class="h-4"
                />
                <span class="align-middle">Italian</span>
              </a>

              <!-- item-->
              <a
                href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
              >
                <img
                  src="assets/images/flags/spain.jpg"
                  alt="user-image"
                  class="h-4"
                />
                <span class="align-middle">Spanish</span>
              </a>

              <!-- item-->
              <a
                href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
              >
                <img
                  src="assets/images/flags/russia.jpg"
                  alt="user-image"
                  class="h-4"
                />
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
            <button
              data-fc-type="dropdown"
              data-fc-placement="bottom-end"
              type="button"
              class="nav-link p-2"
            >
              <span class="sr-only">View notifications</span>
              <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_notification_line text-2xl"></i>
              </span>
            </button>
            <div
              class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg"
            >
              <div
                class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700"
              >
                <div class="flex items-center justify-between">
                  <h6 class="text-sm">Notification</h6>
                  <a
                    href="javascript: void(0);"
                    class="text-gray-500 underline"
                  >
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
                        <div
                          class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary"
                        >
                          <i class="mgc_message_3_line text-lg"></i>
                        </div>
                      </div>
                      <div class="flex-grow truncate ms-2">
                        <h5 class="text-sm font-semibold mb-1">
                          Datacorp
                          <small class="font-normal text-gray-500 ms-1"
                            >1 min ago</small
                          >
                        </h5>
                        <small class="noti-item-subtitle text-muted"
                          >Caleb Flakelar commented on Admin</small
                        >
                      </div>
                    </div>
                  </div>
                </a>

                <a href="javascript:void(0);" class="block mb-4">
                  <div class="card-body">
                    <div class="flex items-center">
                      <div class="flex-shrink-0">
                        <div
                          class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white"
                        >
                          <i class="mgc_user_add_line text-lg"></i>
                        </div>
                      </div>
                      <div class="flex-grow truncate ms-2">
                        <h5 class="text-sm font-semibold mb-1">
                          Admin
                          <small class="font-normal text-gray-500 ms-1"
                            >1 hr ago</small
                          >
                        </h5>
                        <small class="noti-item-subtitle text-muted"
                          >New user registered</small
                        >
                      </div>
                    </div>
                  </div>
                </a>

                <a href="javascript:void(0);" class="block mb-4">
                  <div class="card-body">
                    <div class="flex items-center">
                      <div class="flex-shrink-0">
                        <img
                          src="assets/images/users/avatar-2.jpg"
                          class="rounded-full h-9 w-9"
                          alt=""
                        />
                      </div>
                      <div class="flex-grow truncate ms-2">
                        <h5 class="text-sm font-semibold mb-1">
                          Cristina Pride
                          <small class="font-normal text-gray-500 ms-1"
                            >1 day ago</small
                          >
                        </h5>
                        <small class="noti-item-subtitle text-muted"
                          >Hi, How are you? What about our next meeting</small
                        >
                      </div>
                    </div>
                  </div>
                </a>

                <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                <a href="javascript:void(0);" class="block mb-4">
                  <div class="card-body">
                    <div class="flex items-center">
                      <div class="flex-shrink-0">
                        <div
                          class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white"
                        >
                          <i class="mgc_message_1_line text-lg"></i>
                        </div>
                      </div>
                      <div class="flex-grow truncate ms-2">
                        <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                        <small class="noti-item-subtitle text-muted"
                          >Caleb Flakelar commented on Admin</small
                        >
                      </div>
                    </div>
                  </div>
                </a>

                <a href="javascript:void(0);" class="block">
                  <div class="card-body">
                    <div class="flex items-center">
                      <div class="flex-shrink-0">
                        <img
                          src="assets/images/users/avatar-4.jpg"
                          class="rounded-full h-9 w-9"
                          alt=""
                        />
                      </div>
                      <div class="flex-grow truncate ms-2">
                        <h5 class="text-sm font-semibold mb-1">
                          Karen Robinson
                        </h5>
                        <small class="noti-item-subtitle text-muted"
                          >Wow ! this admin looks good and awesome design</small
                        >
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <a
                href="javascript:void(0);"
                class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold"
              >
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
            <button
              data-fc-type="dropdown"
              data-fc-placement="bottom-end"
              type="button"
              class="nav-link"
            >
              <img
                src="assets/images/users/user-6.jpg"
                alt="user-image"
                class="rounded-full h-10"
              />
            </button>
            <div
              class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800"
            >
              <a
                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="pages-gallery.php"
              >
                <i class="mgc_pic_2_line me-2"></i>
                <span>Gallery</span>
              </a>
              <a
                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="apps-kanban.php"
              >
                <i class="mgc_task_2_line me-2"></i>
                <span>Kanban</span>
              </a>
              <a
                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="auth-login.php"
              >
                <i class="mgc_lock_line me-2"></i>
                <span>Lock Screen</span>
              </a>
              <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700" />
              <a
                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="auth-login.php"
              >
                <i class="mgc_exit_line me-2"></i>
                <span>Log Out</span>
              </a>
            </div>
          </div>
        </header>
        <!-- Topbar End -->

        <!-- Topbar Search Modal -->
        <div>
          <div
            id="topbar-search-modal"
            class="fc-modal hidden w-full h-full fixed top-0 start-0 z-50"
          >
            <div
              class="fc-modal-open:opacity-100 fc-modal-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-12 sm:mx-auto"
            >
              <div
                class="mx-auto max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl transition-all dark:bg-slate-800"
              >
                <div class="relative">
                  <div
                    class="pointer-events-none absolute top-3.5 start-4 text-gray-900 text-opacity-40 dark:text-gray-200"
                  >
                    <i class="mgc_search_line text-xl"></i>
                  </div>
                  <input
                    type="search"
                    class="h-12 w-full border-0 bg-transparent ps-11 pe-4 text-gray-900 placeholder-gray-500 dark:placeholder-gray-300 dark:text-gray-200 focus:ring-0 sm:text-sm"
                    placeholder="Search..."
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <main class="flex-grow p-6">
          <!-- Page Title Start -->
          <div class="flex justify-between items-center mb-6">
            <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">
              Dashboard
            </h4>

            <div
              class="md:flex hidden items-center gap-2.5 text-sm font-semibold"
            >
              <div class="flex items-center gap-2">
                <a
                  href="#"
                  class="text-sm font-medium text-slate-700 dark:text-slate-400"
                  >Konrix</a
                >
              </div>

              <div class="flex items-center gap-2">
                <i
                  class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"
                ></i>
                <a
                  href="#"
                  class="text-sm font-medium text-slate-700 dark:text-slate-400"
                  >Menu</a
                >
              </div>

              <div class="flex items-center gap-2">
                <i
                  class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"
                ></i>
                <a
                  href="#"
                  class="text-sm font-medium text-slate-700 dark:text-slate-400"
                  aria-current="page"
                  >Dashboard</a
                >
              </div>
            </div>
          </div>
          <!-- Page Title End -->

          <div class="grid 2xl:grid-cols-4 gap-6 mb-6">
            <div class="2xl:col-span-3">
              <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                <div class="card">
                  <div class="p-6">
                    <div class="flex justify-between items-start">
                      <div>
                        <h4
                          class="text-base mb-1 text-gray-600 dark:text-gray-400"
                        >
                          Project Dashboard
                        </h4>
                        <p
                          class="font-normal text-sm text-gray-400 truncate dark:text-gray-500"
                        >
                          New Task Assign
                        </p>
                      </div>

                      <div>
                        <button
                          class="text-gray-600 dark:text-gray-400"
                          data-fc-type="dropdown"
                          data-fc-placement="left-start"
                          type="button"
                        >
                          <i class="mgc_more_1_fill text-xl"></i>
                        </button>

                        <div
                          class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                        >
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_add_circle_line"></i> Add
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_edit_line"></i> Edit
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_copy_2_line"></i> Copy
                          </a>
                          <div
                            class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"
                          ></div>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_delete_line"></i> Delete
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="flex items-end">
                      <div class="flex-grow">
                        <p
                          class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"
                        >
                          <i class="mgc_alarm_2_line"></i> 4 Hrs ago
                        </p>
                      </div>
                      <div class="flex">
                        <a href="javascript:void(0);">
                          <img
                            src="assets/images/users/avatar-1.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                        <a href="javascript:void(0);" class="-ms-2">
                          <img
                            src="assets/images/users/avatar-2.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="p-6">
                    <div class="flex justify-between items-start">
                      <div>
                        <h4
                          class="text-base mb-1 text-gray-600 dark:text-gray-400"
                        >
                          Admin Template
                        </h4>
                        <p
                          class="font-normal text-sm text-gray-400 truncate dark:text-gray-500"
                        >
                          New Task Assign
                        </p>
                      </div>
                      <div>
                        <button
                          class="text-gray-600 dark:text-gray-400"
                          data-fc-type="dropdown"
                          data-fc-placement="left-start"
                          type="button"
                        >
                          <i class="mgc_more_1_fill text-xl"></i>
                        </button>

                        <div
                          class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                        >
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_add_circle_line"></i> Add
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_edit_line"></i> Edit
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_copy_2_line"></i> Copy
                          </a>
                          <div
                            class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"
                          ></div>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_delete_line"></i> Delete
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="flex items-end">
                      <div class="flex-grow">
                        <p
                          class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"
                        >
                          <i class="mgc_alarm_2_line"></i> 3 Hrs ago
                        </p>
                      </div>
                      <div class="flex">
                        <a href="javascript:void(0);">
                          <img
                            src="assets/images/users/avatar-3.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                        <a href="javascript:void(0);" class="-ms-2">
                          <img
                            src="assets/images/users/avatar-4.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="p-6">
                    <div class="flex justify-between items-start">
                      <div>
                        <h4
                          class="text-base mb-1 text-gray-600 dark:text-gray-400"
                        >
                          Client Project
                        </h4>
                        <p
                          class="font-normal text-sm text-gray-400 truncate dark:text-gray-500"
                        >
                          New Task Assign
                        </p>
                      </div>
                      <div>
                        <button
                          class="text-gray-600 dark:text-gray-400"
                          data-fc-type="dropdown"
                          data-fc-placement="left-start"
                          type="button"
                        >
                          <i class="mgc_more_1_fill text-xl"></i>
                        </button>

                        <div
                          class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                        >
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_add_circle_line"></i> Add
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_edit_line"></i> Edit
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_copy_2_line"></i> Copy
                          </a>
                          <div
                            class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"
                          ></div>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_delete_line"></i> Delete
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="flex items-end">
                      <div class="flex-grow">
                        <p
                          class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"
                        >
                          <i class="mgc_alarm_2_line"></i> 5 Hrs ago
                        </p>
                      </div>
                      <div class="flex">
                        <a href="javascript:void(0);">
                          <img
                            src="assets/images/users/avatar-5.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                        <a href="javascript:void(0);" class="-ms-2">
                          <img
                            src="assets/images/users/avatar-6.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="p-6">
                    <div class="flex justify-between items-start">
                      <div>
                        <h4
                          class="text-base mb-1 text-gray-600 dark:text-gray-400"
                        >
                          Figma Design
                        </h4>
                        <p
                          class="font-normal text-sm text-gray-400 truncate dark:text-gray-500"
                        >
                          New Task Assign
                        </p>
                      </div>
                      <div>
                        <button
                          class="text-gray-600 dark:text-gray-400"
                          data-fc-type="dropdown"
                          data-fc-placement="left-start"
                          type="button"
                        >
                          <i class="mgc_more_1_fill text-xl"></i>
                        </button>

                        <div
                          class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                        >
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_add_circle_line"></i> Add
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_edit_line"></i> Edit
                          </a>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_copy_2_line"></i> Copy
                          </a>
                          <div
                            class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"
                          ></div>
                          <a
                            class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                            href="javascript:void(0)"
                          >
                            <i class="mgc_delete_line"></i> Delete
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="flex items-end">
                      <div class="flex-grow">
                        <p
                          class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"
                        >
                          <i class="mgc_alarm_2_line"></i> 1 Day ago
                        </p>
                      </div>
                      <div class="flex">
                        <a href="javascript:void(0);">
                          <img
                            src="assets/images/users/avatar-7.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                        <a href="javascript:void(0);" class="-ms-2">
                          <img
                            src="assets/images/users/avatar-8.jpg"
                            class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700"
                            alt="friend"
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="grid lg:grid-cols-3 gap-6">
                <div class="col-span-1">
                  <div class="card">
                    <div class="p-6">
                      <h4 class="card-title">Monthly Target</h4>

                      <div
                        id="monthly-target"
                        class="apex-charts my-8"
                        data-colors="#0acf97,#3073F1"
                      ></div>

                      <div class="flex justify-center">
                        <div class="w-1/2 text-center">
                          <h5>Pending</h5>
                          <p class="fw-semibold text-muted">
                            <i class="mgc_round_fill text-primary"></i> Projects
                          </p>
                        </div>
                        <div class="w-1/2 text-center">
                          <h5>Done</h5>
                          <p class="fw-semibold text-muted">
                            <i class="mgc_round_fill text-success"></i> Projects
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-2">
                  <div class="card">
                    <div class="p-6">
                      <div class="flex justify-between items-center">
                        <h4 class="card-title">Project Statistics</h4>
                        <div class="flex gap-2">
                          <button
                            type="button"
                            class="btn btn-sm bg-primary/25 text-primary hover:bg-primary hover:text-white"
                          >
                            All
                          </button>
                          <button
                            type="button"
                            class="btn btn-sm bg-gray-400/25 text-gray-400 hover:bg-gray-400 hover:text-white"
                          >
                            6M
                          </button>
                          <button
                            type="button"
                            class="btn btn-sm bg-gray-400/25 text-gray-400 hover:bg-gray-400 hover:text-white"
                          >
                            1Y
                          </button>
                        </div>
                      </div>

                      <div dir="ltr" class="mt-2">
                        <div
                          id="crm-project-statistics"
                          class="apex-charts"
                          data-colors="#cbdcfc,#3073F1"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card mb-6">
                <div class="px-6 py-5 flex justify-between items-center">
                  <h4 class="header-title">Project Summary</h4>
                  <div>
                    <button
                      class="text-gray-600 dark:text-gray-400"
                      data-fc-type="dropdown"
                      data-fc-placement="left-start"
                      type="button"
                    >
                      <i class="mgc_more_1_fill text-xl"></i>
                    </button>

                    <div
                      class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                    >
                      <a
                        class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                        href="javascript:void(0)"
                      >
                        <i class="mgc_add_circle_line"></i> Add
                      </a>
                      <a
                        class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                        href="javascript:void(0)"
                      >
                        <i class="mgc_edit_line"></i> Edit
                      </a>
                      <a
                        class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                        href="javascript:void(0)"
                      >
                        <i class="mgc_copy_2_line"></i> Copy
                      </a>
                      <div
                        class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"
                      ></div>
                      <a
                        class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                        href="javascript:void(0)"
                      >
                        <i class="mgc_delete_line"></i> Delete
                      </a>
                    </div>
                  </div>
                </div>
                <div class="px-4 py-2 bg-warning/20 text-warning" role="alert">
                  <i
                    class="mgc_folder_star_line me-1 text-lg align-baseline"
                  ></i>
                  <b>38</b> Total Admin & Client Projects
                </div>

                <div class="p-6 space-y-3">
                  <div
                    class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2"
                  >
                    <div class="flex-shrink-0 me-2">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded-full text-primary bg-primary/25"
                      >
                        <i class="mgc_group_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="font-semibold mb-1">Project Discssion</h5>
                      <p class="text-gray-400">6 Person</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-400"
                        data-fc-type="tooltip"
                        data-fc-placement="top"
                      >
                        <i class="mgc_information_line text-xl"></i>
                      </button>
                      <div
                        class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                        role="tooltip"
                      >
                        Info
                        <div
                          class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                          data-fc-arrow
                        ></div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2"
                  >
                    <div class="flex-shrink-0 me-2">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded-full text-warning bg-warning/25"
                      >
                        <i class="mgc_compass_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="fw-semibold my-0">In Progress</h5>
                      <p>16 Projects</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-400"
                        data-fc-type="tooltip"
                        data-fc-placement="top"
                      >
                        <i class="mgc_information_line text-xl"></i>
                      </button>
                      <div
                        class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                        role="tooltip"
                      >
                        Info
                        <div
                          class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                          data-fc-arrow
                        ></div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2"
                  >
                    <div class="flex-shrink-0 me-2">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded-full text-danger bg-danger/25"
                      >
                        <i class="mgc_check_circle_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="fw-semibold my-0">Completed Projects</h5>
                      <p>24</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-400"
                        data-fc-type="tooltip"
                        data-fc-placement="top"
                      >
                        <i class="mgc_information_line text-xl"></i>
                      </button>
                      <div
                        class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                        role="tooltip"
                      >
                        Info
                        <div
                          class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                          data-fc-arrow
                        ></div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2"
                  >
                    <div class="flex-shrink-0 me-2">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded-full text-success bg-success/25"
                      >
                        <i class="mgc_send_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="fw-semibold my-0">Delivery Projects</h5>
                      <p>20</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-400"
                        data-fc-type="tooltip"
                        data-fc-placement="top"
                      >
                        <i class="mgc_information_line text-xl"></i>
                      </button>
                      <div
                        class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                        role="tooltip"
                      >
                        Info
                        <div
                          class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                          data-fc-arrow
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card p-6">
                <h4 class="text-gray-600 dark:text-gray-300 mb-2.5">
                  On Time Completed Rate
                  <span
                    class="px-2 py-0.5 rounded bg-success/25 text-success ms-2"
                    ><i
                      class="mgc_arrow_up_line text-sm align-baseline me-1"
                    ></i
                    >59%</span
                  >
                </h4>
                <div class="flex justify-between items-center mb-2">
                  <h5 class="text-base font-semibold">Completed Projects</h5>
                  <h5 class="text-gray-600 dark:text-gray-300">65%</h5>
                </div>
                <div
                  class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700"
                >
                  <div
                    class="flex flex-col justify-center overflow-hidden bg-primary w-1/4"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Grid End -->

          <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
            <div class="col-span-1">
              <div class="card">
                <div class="p-6">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 me-3">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded text-primary bg-primary/25"
                      >
                        <i class="mgc_document_2_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="mb-1">Active Projects</h5>
                      <p>85</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-600 dark:text-gray-400"
                        data-fc-type="dropdown"
                        data-fc-placement="left-start"
                        type="button"
                      >
                        <i class="mgc_more_2_fill text-xl"></i>
                      </button>

                      <div
                        class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                      >
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Today
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Yesterday
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Week
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Month
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card">
                <div class="p-6">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 me-3">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded text-success bg-success/25"
                      >
                        <i class="mgc_group_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="mb-1">Total Employees</h5>
                      <p>32</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-600 dark:text-gray-400"
                        data-fc-type="dropdown"
                        data-fc-placement="left-start"
                        type="button"
                      >
                        <i class="mgc_more_2_fill text-xl"></i>
                      </button>

                      <div
                        class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                      >
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Today
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Yesterday
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Week
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Month
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card">
                <div class="p-6">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 me-3">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded text-info bg-info/25"
                      >
                        <i class="mgc_star_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="mb-1">Project Reviews</h5>
                      <p>40</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-600 dark:text-gray-400"
                        data-fc-type="dropdown"
                        data-fc-placement="left-start"
                        type="button"
                      >
                        <i class="mgc_more_2_fill text-xl"></i>
                      </button>

                      <div
                        class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                      >
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Today
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Yesterday
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Week
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Month
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card">
                <div class="p-6">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 me-3">
                      <div
                        class="w-12 h-12 flex justify-center items-center rounded text-warning bg-warning/25"
                      >
                        <i class="mgc_new_folder_line text-xl"></i>
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h5 class="mb-1">New Projects</h5>
                      <p>25</p>
                    </div>
                    <div>
                      <button
                        class="text-gray-600 dark:text-gray-400"
                        data-fc-type="dropdown"
                        data-fc-placement="left-start"
                        type="button"
                      >
                        <i class="mgc_more_2_fill text-xl"></i>
                      </button>

                      <div
                        class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                      >
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Today
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Yesterday
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Week
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Month
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Grid End -->

          <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6">
            <div class="2xl:col-span-2 md:col-span-2">
              <div class="card">
                <div class="p-6">
                  <div class="flex justify-between items-center">
                    <h4 class="card-title">Project Overview</h4>
                    <div>
                      <button
                        class="text-gray-600 dark:text-gray-400"
                        data-fc-type="dropdown"
                        data-fc-placement="left-start"
                        type="button"
                      >
                        <i class="mgc_more_2_fill text-xl"></i>
                      </button>

                      <div
                        class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                      >
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Today
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                          href="javascript:void(0)"
                        >
                          Yesterday
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Week
                        </a>
                        <a
                          class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                          href="javascript:void(0)"
                        >
                          Last Month
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="grid md:grid-cols-2 items-center gap-4">
                    <div class="md:order-1 order-2">
                      <div class="flex flex-col gap-6">
                        <div class="flex items-center">
                          <div class="flex-shrink-0">
                            <i
                              class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-primary/25 text-lg text-primary"
                            ></i>
                          </div>
                          <div class="flex-grow ms-3">
                            <h5 class="fw-semibold mb-1">Product Design</h5>
                            <ul class="flex items-center gap-2">
                              <li class="list-inline-item">
                                <b>26</b> Total Projects
                              </li>
                              <li class="list-inline-item">
                                <div class="w-1 h-1 rounded bg-gray-400"></div>
                              </li>
                              <li class="list-inline-item">
                                <b>4</b> Employees
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="flex items-center">
                          <div class="flex-shrink-0">
                            <i
                              class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-danger/25 text-lg text-danger"
                            ></i>
                          </div>
                          <div class="flex-grow ms-3">
                            <h5 class="fw-semibold mb-1">Web Development</h5>
                            <ul class="flex items-center gap-2">
                              <li class="list-inline-item">
                                <b>30</b> Total Projects
                              </li>
                              <li class="list-inline-item">
                                <div class="w-1 h-1 rounded bg-gray-400"></div>
                              </li>
                              <li class="list-inline-item">
                                <b>5</b> Employees
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="flex items-center">
                          <div class="flex-shrink-0">
                            <i
                              class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-success/25 text-lg text-success"
                            ></i>
                          </div>
                          <div class="flex-grow ms-3">
                            <h5 class="fw-semibold mb-1">
                              Illustration Design
                            </h5>
                            <ul class="flex items-center gap-2">
                              <li class="list-inline-item">
                                <b>12</b> Total Projects
                              </li>
                              <li class="list-inline-item">
                                <div class="w-1 h-1 rounded bg-gray-400"></div>
                              </li>
                              <li class="list-inline-item">
                                <b>3</b> Employees
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="flex items-center">
                          <div class="flex-shrink-0">
                            <i
                              class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-warning/25 text-lg text-warning"
                            ></i>
                          </div>
                          <div class="flex-grow ms-3">
                            <h5 class="fw-semibold mb-1">UI/UX Design</h5>
                            <ul class="flex items-center gap-2">
                              <li class="list-inline-item">
                                <b>8</b> Total Projects
                              </li>
                              <li class="list-inline-item">
                                <div class="w-1 h-1 rounded bg-gray-400"></div>
                              </li>
                              <li class="list-inline-item">
                                <b>4</b> Employees
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="md:order-2 order-1">
                      <div
                        id="project-overview-chart"
                        class="apex-charts"
                        data-colors="#3073F1,#ff679b,#0acf97,#ffbc00"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card">
                <div class="card-header">
                  <div class="flex justify-between items-center">
                    <h4 class="card-title">Daily Task</h4>
                    <div>
                      <select class="form-input form-select-sm">
                        <option selected>Today</option>
                        <option value="1">Yesterday</option>
                        <option value="2">Tomorrow</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="py-6">
                  <div class="px-6" data-simplebar style="max-height: 304px">
                    <div class="space-y-4">
                      <div
                        class="border border-gray-200 dark:border-gray-700 rounded p-2"
                      >
                        <ul class="flex items-center gap-2 mb-2">
                          <a
                            href="javascript:void(0);"
                            class="text-base text-gray-600 dark:text-gray-400"
                            >Landing Page Design</a
                          >
                          <i class="mgc_round_fill text-[5px]"></i>
                          <h5 class="text-sm font-semibold">2 Hrs ago</h5>
                        </ul>
                        <p
                          class="text-gray-500 dark:text-gray-400 text-sm mb-1"
                        >
                          Create a new landing page (Saas Product)
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                          <i
                            class="mgc_group_line text-xl me-1 align-middle"
                          ></i>
                          <b>5</b> People
                        </p>
                      </div>

                      <div
                        class="border border-gray-200 dark:border-gray-700 rounded p-2"
                      >
                        <ul class="flex items-center gap-2 mb-2">
                          <a
                            href="javascript:void(0);"
                            class="text-base text-gray-600 dark:text-gray-400"
                            >Admin Dashboard</a
                          >
                          <i class="mgc_round_fill text-[5px]"></i>
                          <h5 class="text-sm font-semibold">3 Hrs ago</h5>
                        </ul>
                        <p
                          class="text-gray-500 dark:text-gray-400 text-sm mb-1"
                        >
                          Create a new Admin dashboard
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                          <i
                            class="mgc_group_line text-xl me-1 align-middle"
                          ></i>
                          <b>2</b> People
                        </p>
                      </div>

                      <div
                        class="border border-gray-200 dark:border-gray-700 rounded p-2"
                      >
                        <ul class="flex items-center gap-2 mb-2">
                          <a
                            href="javascript:void(0);"
                            class="text-base text-gray-600 dark:text-gray-400"
                            >Client Work</a
                          >
                          <i class="mgc_round_fill text-[5px]"></i>
                          <h5 class="text-sm font-semibold">5 Hrs ago</h5>
                        </ul>
                        <p
                          class="text-gray-500 dark:text-gray-400 text-sm mb-1"
                        >
                          Create a new Power Project (Sktech design)
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                          <i
                            class="mgc_group_line text-xl me-1 align-middle"
                          ></i>
                          <b>2</b> People
                        </p>
                      </div>

                      <div
                        class="border border-gray-200 dark:border-gray-700 rounded p-2"
                      >
                        <ul class="flex items-center gap-2 mb-2">
                          <a
                            href="javascript:void(0);"
                            class="text-base text-gray-600 dark:text-gray-400"
                            >UI/UX Design</a
                          >
                          <i class="mgc_round_fill text-[5px]"></i>
                          <h5 class="text-sm font-semibold">6 Hrs ago</h5>
                        </ul>
                        <p
                          class="text-gray-500 dark:text-gray-400 text-sm mb-1"
                        >
                          Create a new UI Kit in figma
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                          <i
                            class="mgc_group_line text-xl me-1 align-middle"
                          ></i>
                          <b>3</b> People
                        </p>
                      </div>

                      <div class="flex items-center justify-center">
                        <div class="animate-spin flex">
                          <i class="mgc_loading_2_line text-xl"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-span-1">
              <div class="card">
                <div class="card-header flex justify-between items-center">
                  <h4 class="card-title">Team Members</h4>
                  <div>
                    <select class="form-select form-select-sm">
                      <option selected>Active</option>
                      <option value="1">Offline</option>
                    </select>
                  </div>
                </div>

                <div class="py-6">
                  <div class="px-6" data-simplebar style="max-height: 304px">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-1.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Risa Pearson</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>UI/UX Designer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>2.5 Year Experience</div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-2.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Margaret D. Evans</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>PHP Developer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>2 Year Experience</div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-3.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Bryan J. Luellen</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>Front end Developer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>1 Year Experience</div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-4.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Kathryn S. Collier</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>UI/UX Designer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>3 Year Experience</div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-5.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Timothy Kauper</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>Backend Developer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>2 Year Experience</div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center">
                        <img
                          class="me-3 rounded-full"
                          src="assets/images/users/avatar-6.jpg"
                          width="40"
                          alt="Generic placeholder image"
                        />
                        <div class="w-full overflow-hidden">
                          <h5 class="font-semibold">
                            <a
                              href="javascript:void(0);"
                              class="text-gray-600 dark:text-gray-400"
                              >Zara Raws</a
                            >
                          </h5>
                          <div class="flex items-center gap-2">
                            <div>Python Developer</div>
                            <i class="mgc_round_fill text-[5px]"></i>
                            <div>1 Year Experience</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Grid End -->
        </main>

        <!-- Footer Start -->
        <footer
          class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800"
        >
          <div class="flex justify-center w-full gap-4">
            <div>
              <script>
                document.write(new Date().getFullYear());
              </script>
              © Konrix -
              <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
            </div>
          </div>
        </footer>
        <!-- Footer End -->
      </div>

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>

    <!-- Back to Top Button -->
    <button
      data-toggle="back-to-top"
      class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white"
    >
      <i class="mgc_arrow_up_line text-lg"></i>
    </button>

    <!-- Theme Settings -->
    <div>
      <!-- Theme Setting Button -->
      <div class="fixed end-0 bottom-20">
        <button
          data-fc-type="offcanvas"
          data-fc-target="theme-customization"
          type="button"
          class="bg-white rounded-s-full shadow-lg p-2.5 ps-3 transition-all dark:bg-slate-800"
        >
          <span class="sr-only">Setting</span>
          <span class="flex items-center justify-center animate-spin">
            <i class="mgc_settings_4_line text-2xl"></i>
          </span>
        </button>
      </div>

      <!-- Theme Settings Offcanvas -->
      <div
        id="theme-customization"
        class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0 transition-all duration-300 transform max-w-sm w-full z-50 bg-white border-s border-gray-900/10 dark:bg-gray-800 dark:border-white/10"
        tabindex="-1"
      >
        <div
          class="h-16 flex items-center text-gray-800 dark:text-white border-b border-dashed border-gray-900/10 dark:border-white/10 px-6 gap-3"
        >
          <h5 class="text-base grow">Theme Settings</h5>
          <button type="button" class="p-2" id="reset-layout">
            <i class="mgc_refresh_1_line text-xl"></i>
          </button>
          <button type="button" data-fc-dismiss>
            <i class="mgc_close_line text-xl"></i>
          </button>
        </div>

        <div class="h-[calc(100vh-64px)]" data-simplebar>
          <div
            class="divide-y divide-dashed divide-slate-900/10 dark:divide-white/10"
          >
            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Theme</h5>
              <div class="grid grid-cols-3 gap-2">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-mode"
                    id="layout-color-light"
                    value="light"
                  />
                  <label class="form-label rounded-md" for="layout-color-light">
                    <span class="flex items-center justify-center px-4 py-3">
                      <i class="mgc_sun_line text-2xl"></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Light
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-mode"
                    id="layout-color-dark"
                    value="dark"
                  />
                  <label class="form-label rounded-md" for="layout-color-dark">
                    <span class="flex items-center justify-center px-4 py-3">
                      <i class="mgc_moon_line text-2xl"></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Dark
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Direction</h5>
              <div class="grid grid-cols-3 gap-2">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="dir"
                    id="direction-ltr"
                    value="ltr"
                  />
                  <label class="form-label rounded-md" for="direction-ltr">
                    <span class="flex items-center justify-center px-4 py-3">
                      <i class="mgc_align_left_line text-2xl"></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    LTR
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="dir"
                    id="direction-rtl"
                    value="rtl"
                  />
                  <label class="form-label rounded-md" for="direction-rtl">
                    <span class="flex items-center justify-center px-4 py-3">
                      <i class="mgc_align_right_line text-2xl"></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    RTL
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6 2xl:block hidden">
              <h5 class="font-semibold text-sm mb-3">Content Width</h5>
              <div class="grid grid-cols-3 gap-2">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-layout-width"
                    id="layout-mode-default"
                    value="default"
                  />
                  <label
                    class="form-label rounded-md"
                    for="layout-mode-default"
                  >
                    <span class="flex items-center justify-center px-4 py-3">
                      <i class="mgc_fullscreen_2_line text-2xl rotate-45"></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Fluid
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-layout-width"
                    id="layout-mode-boxed"
                    value="boxed"
                  />
                  <label class="form-label rounded-md" for="layout-mode-boxed">
                    <span class="flex items-center justify-center px-4 py-3">
                      <i
                        class="mgc_fullscreen_exit_2_line text-2xl rotate-45"
                      ></i>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Boxed
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
              <div class="grid grid-cols-3 gap-3">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-default"
                    value="default"
                  />
                  <label
                    class="form-label rounded-md"
                    for="sidenav-view-default"
                  >
                    <span class="flex h-16 overflow-hidden">
                      <span class="block w-8 bg-gray-100 dark:bg-gray-800">
                        <span class="mt-1.5 mx-1.5 block space-y-1">
                          <span
                            class="h-1 block rounded-sm mb-2.5 bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                        </span>
                      </span>
                      <span
                        class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700"
                      >
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span
                            class="flex items-center justify-end h-full mr-1.5"
                          >
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Default
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-hover"
                    value="hover"
                  />
                  <label class="form-label rounded-md" for="sidenav-view-hover">
                    <span class="flex h-16 overflow-hidden">
                      <span class="w-3 bg-gray-100 dark:bg-gray-800">
                        <span
                          class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"
                        ></span>
                        <span
                          class="flex flex-col items-center w-full mt-1.5 space-y-1"
                        >
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                        </span>
                      </span>
                      <span
                        class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700"
                      >
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span
                            class="flex items-center justify-end h-full mr-1.5"
                          >
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Hover
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-hover-active"
                    value="hover-active"
                  />
                  <label
                    class="form-label rounded-md"
                    for="sidenav-view-hover-active"
                  >
                    <span class="flex h-16 overflow-hidden">
                      <span class="w-8 bg-gray-100 dark:bg-gray-800">
                        <span class="mt-1.5 mx-1.5 block space-y-1">
                          <span class="flex mb-2.5 gap-1">
                            <span
                              class="h-1 block w-full rounded-sm bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="h-1 block w-2 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                        </span>
                      </span>
                      <span
                        class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700"
                      >
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span
                            class="flex items-center justify-end h-full mr-1.5"
                          >
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Hover Active
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-sm"
                    value="sm"
                  />
                  <label class="form-label rounded-md" for="sidenav-view-sm">
                    <span class="flex h-16 overflow-hidden">
                      <span class="w-3 bg-gray-100 dark:bg-gray-800">
                        <span
                          class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"
                        ></span>
                        <span
                          class="flex flex-col items-center w-full mt-1.5 space-y-1"
                        >
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"
                          ></span>
                        </span>
                      </span>
                      <span
                        class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700"
                      >
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span class="flex items-center h-full mr-1.5">
                            <span class="grow">
                              <span
                                class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                              ></span>
                            </span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Small
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-md"
                    value="md"
                  />
                  <label class="form-label rounded-md" for="sidenav-view-md">
                    <span class="flex h-16 rounded-md overflow-hidden">
                      <span class="w-4 bg-gray-100 dark:bg-gray-800">
                        <span
                          class="w-2 h-2 mt-2 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"
                        ></span>
                        <span
                          class="flex flex-col items-center w-full mt-2 space-y-1"
                        >
                          <span
                            class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                          <span
                            class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"
                          ></span>
                        </span>
                      </span>
                      <span
                        class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700"
                      >
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span class="flex items-center h-full mr-1.5">
                            <span class="grow">
                              <span
                                class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                              ></span>
                            </span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Compact
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-mobile"
                    value="mobile"
                  />
                  <label
                    class="form-label rounded-md"
                    for="sidenav-view-mobile"
                  >
                    <span class="flex h-16 overflow-hidden">
                      <span class="flex flex-col flex-auto">
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span class="flex items-center h-full mr-1.5">
                            <span
                              class="w-1.5 h-1.5 ms-1 rounded-sm bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Mobile
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-sidenav-view"
                    id="sidenav-view-hidden"
                    value="hidden"
                  />
                  <label
                    class="form-label rounded-md"
                    for="sidenav-view-hidden"
                  >
                    <span class="flex h-16 overflow-hidden">
                      <span class="flex flex-col flex-auto">
                        <span class="h-3 bg-gray-100 dark:bg-gray-800">
                          <span
                            class="flex flex-auto items-center h-full me-1.5"
                          >
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                            <span
                              class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"
                            ></span>
                          </span>
                        </span>
                        <span
                          class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"
                        ></span>
                      </span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Hidden
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
              <div class="grid grid-cols-4 gap-2">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-menu-color"
                    id="menu-color-light"
                    value="light"
                  />
                  <label class="form-label rounded-md" for="menu-color-light">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-white"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Light
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-menu-color"
                    id="menu-color-dark"
                    value="dark"
                  />
                  <label class="form-label rounded-md" for="menu-color-dark">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-dark"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Dark
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-menu-color"
                    id="menu-color-brand"
                    value="brand"
                  />
                  <label class="form-label rounded-md" for="menu-color-brand">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-primary"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Brand
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-menu-color"
                    id="menu-color-gradient"
                    value="gradient"
                  />
                  <label
                    class="form-label rounded-md"
                    for="menu-color-gradient"
                  >
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full"
                        style="
                          background: linear-gradient(
                            135deg,
                            #6379c3 0%,
                            #546ee5 60%
                          );
                        "
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Gradient
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
              <div class="grid grid-cols-4 gap-2">
                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-topbar-color"
                    id="topbar-color-light"
                    value="light"
                  />
                  <label class="form-label rounded-md" for="topbar-color-light">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-white"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Light
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-topbar-color"
                    id="topbar-color-dark"
                    value="dark"
                  />
                  <label class="form-label rounded-md" for="topbar-color-dark">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-dark"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Dark
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-topbar-color"
                    id="topbar-color-brand"
                    value="brand"
                  />
                  <label class="form-label rounded-md" for="topbar-color-brand">
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full bg-primary"
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Brand
                  </div>
                </div>

                <div class="card-radio">
                  <input
                    class="form-radio"
                    type="radio"
                    name="data-topbar-color"
                    id="topbar-color-gradient"
                    value="gradient"
                  />
                  <label
                    class="form-label rounded-md"
                    for="topbar-color-gradient"
                  >
                    <span
                      class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900"
                    >
                      <span
                        class="w-5 h-5 shadow-lg rounded-full"
                        style="
                          background: linear-gradient(
                            135deg,
                            #6379c3 0%,
                            #546ee5 60%
                          );
                        "
                      ></span>
                    </span>
                  </label>
                  <div
                    class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"
                  >
                    Gradient
                  </div>
                </div>
              </div>
            </div>

            <div class="p-6">
              <h5 class="font-semibold text-sm mb-3">Layout Position</h5>
              <div class="flex btn-radio">
                <input
                  type="radio"
                  class="form-radio hidden"
                  name="data-layout-position"
                  id="layout-position-fixed"
                  value="fixed"
                />
                <label
                  class="btn rounded-e-none bg-gray-100 dark:bg-gray-700"
                  for="layout-position-fixed"
                  >Fixed</label
                >
                <input
                  type="radio"
                  class="form-radio hidden"
                  name="data-layout-position"
                  id="layout-position-scrollable"
                  value="scrollable"
                />
                <label
                  class="btn rounded-s-none bg-gray-100 dark:bg-gray-700"
                  for="layout-position-scrollable"
                  >Scrollable</label
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Plugin Js -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/%40frostui/tailwindcss/frostui.js"></script>

    <!-- App Js -->
    <script src="assets/js/app.js"></script>

    <!-- Apexcharts js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="assets/js/pages/dashboard.js"></script>
  </body>

  <!-- Mirrored from coderthemes.com/konrix/layouts/sidebar-dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:19 GMT -->
</html>
