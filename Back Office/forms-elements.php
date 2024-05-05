<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from coderthemes.com/konrix/layouts/forms-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:52 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Form Elements | Konrix - Responsive Tailwind Admin Dashboard</title>
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
              Elements
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
                  >Forms</a
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
                  >Elements</a
                >
              </div>
            </div>
          </div>
          <!-- Page Title End -->

          <div class="flex flex-col gap-6">
            <div class="card">
              <div class="card-header">
                <div class="flex justify-between items-center">
                  <h4 class="card-title">Input</h4>

                  <div class="flex items-center gap-2">
                    <button
                      type="button"
                      class="btn-code"
                      data-fc-type="collapse"
                      data-fc-target="#FormInputsHtml"
                    >
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
                <p class="text-gray-400 mb-4">
                  Most common form control, text-based input fields. Includes
                  support for all HTML5 types:
                  <code class="text-primary">text</code>,
                  <code class="text-primary">password</code>,
                  <code class="text-primary">datetime</code>,
                  <code class="text-primary">datetime-local</code>,
                  <code class="text-primary">date</code>,
                  <code class="text-primary">month</code>,
                  <code class="text-primary">time</code>,
                  <code class="text-primary">week</code>,
                  <code class="text-primary">number</code>,
                  <code class="text-primary">email</code>,
                  <code class="text-primary">url</code>,
                  <code class="text-primary">search</code>,
                  <code class="text-primary">tel</code>, and
                  <code class="text-primary">color</code>.
                </p>

                <div class="grid lg:grid-cols-3 gap-6">
                  <div>
                    <label
                      for="simpleinput"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Text</label
                    >
                    <input type="text" id="simpleinput" class="form-input" />
                  </div>

                  <div>
                    <label
                      for="example-email"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Email</label
                    >
                    <input
                      type="email"
                      id="example-email"
                      name="example-email"
                      class="form-input"
                      placeholder="Email"
                    />
                  </div>

                  <div>
                    <label
                      for="example-password"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Password</label
                    >
                    <input
                      type="password"
                      id="example-password"
                      class="form-input"
                      value="password"
                    />
                  </div>

                  <div>
                    <label
                      for="example-palaceholder"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Placeholder</label
                    >
                    <input
                      type="text"
                      id="example-palaceholder"
                      class="form-input"
                      placeholder="placeholder"
                    />
                  </div>

                  <div>
                    <label
                      for="example-readonly"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Readonly</label
                    >
                    <input
                      type="text"
                      id="example-readonly"
                      class="form-input"
                      readonly=""
                      value="Readonly value"
                    />
                  </div>

                  <div>
                    <label
                      for="example-disable"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Disabled</label
                    >
                    <input
                      type="text"
                      class="form-input"
                      id="example-disable"
                      disabled=""
                      value="Disabled value"
                    />
                  </div>

                  <div>
                    <label
                      for="example-date"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Date</label
                    >
                    <input
                      class="form-input"
                      id="example-date"
                      type="date"
                      name="date"
                    />
                  </div>

                  <div>
                    <label
                      for="example-month"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Month</label
                    >
                    <input
                      class="form-input"
                      id="example-month"
                      type="month"
                      name="month"
                    />
                  </div>

                  <div>
                    <label
                      for="example-time"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Time</label
                    >
                    <input
                      class="form-input"
                      id="example-time"
                      type="time"
                      name="time"
                    />
                  </div>

                  <div>
                    <label
                      for="example-week"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Week</label
                    >
                    <input
                      class="form-input"
                      id="example-week"
                      type="week"
                      name="week"
                    />
                  </div>

                  <div>
                    <label
                      for="example-number"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Number</label
                    >
                    <input
                      class="form-input"
                      id="example-number"
                      type="number"
                      name="number"
                    />
                  </div>

                  <div>
                    <label
                      for="example-color"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Color</label
                    >
                    <input
                      class="form-input h-10"
                      id="example-color"
                      type="color"
                      name="color"
                      value="#1E85FF"
                    />
                  </div>

                  <div>
                    <label
                      for="example-select"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Input Select</label
                    >
                    <select class="form-select" id="example-select">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div>
                    <label
                      for="example-multiselect"
                      class="text-gray-800 text-sm font-medium inline-block mb-2"
                      >Multiple Select</label
                    >
                    <select
                      id="example-multiselect"
                      multiple
                      class="form-input"
                    >
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>

                <div
                  id="FormInputsHtml"
                  class="hidden w-full overflow-hidden transition-[height] duration-300"
                >
                  <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;grid lg:grid-cols-3 gap-6&quot;&gt;
                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; id=&quot;simpleinput&quot; class=&quot;form-input&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-email&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Email&lt;/label&gt;
                                                &lt;input type=&quot;email&quot; id=&quot;example-email&quot; name=&quot;example-email&quot; class=&quot;form-input&quot; placeholder=&quot;Email&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-password&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Password&lt;/label&gt;
                                                &lt;input type=&quot;password&quot; id=&quot;example-password&quot; class=&quot;form-input&quot; value=&quot;password&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-palaceholder&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Placeholder&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; id=&quot;example-palaceholder&quot; class=&quot;form-input&quot; placeholder=&quot;placeholder&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-readonly&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Readonly&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; id=&quot;example-readonly&quot; class=&quot;form-input&quot; readonly=&quot;&quot; value=&quot;Readonly value&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-disable&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Disabled&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-input&quot; id=&quot;example-disable&quot; disabled=&quot;&quot; value=&quot;Disabled value&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-date&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Date&lt;/label&gt;
                                                &lt;input class=&quot;form-input&quot; id=&quot;example-date&quot; type=&quot;date&quot; name=&quot;date&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-month&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Month&lt;/label&gt;
                                                &lt;input class=&quot;form-input&quot; id=&quot;example-month&quot; type=&quot;month&quot; name=&quot;month&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-time&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Time&lt;/label&gt;
                                                &lt;input class=&quot;form-input&quot; id=&quot;example-time&quot; type=&quot;time&quot; name=&quot;time&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-week&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Week&lt;/label&gt;
                                                &lt;input class=&quot;form-input&quot; id=&quot;example-week&quot; type=&quot;week&quot; name=&quot;week&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-number&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Number&lt;/label&gt;
                                                &lt;input class=&quot;form-input&quot; id=&quot;example-number&quot; type=&quot;number&quot; name=&quot;number&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-color&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Color&lt;/label&gt;
                                                &lt;input class=&quot;form-input h-10&quot; id=&quot;example-color&quot; type=&quot;color&quot; name=&quot;color&quot; value=&quot;#1E85FF&quot;&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-select&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Input Select&lt;/label&gt;
                                                &lt;select class=&quot;form-select&quot; id=&quot;example-select&quot;&gt;
                                                    &lt;option&gt;1&lt;/option&gt;
                                                    &lt;option&gt;2&lt;/option&gt;
                                                    &lt;option&gt;3&lt;/option&gt;
                                                    &lt;option&gt;4&lt;/option&gt;
                                                    &lt;option&gt;5&lt;/option&gt;
                                                &lt;/select&gt;
                                            &lt;/div&gt;
            
                                            &lt;div&gt;
                                                &lt;label for=&quot;example-multiselect&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Multiple
                                                    Select&lt;/label&gt;
                                                &lt;select id=&quot;example-multiselect&quot; multiple class=&quot;form-input&quot;&gt;
                                                    &lt;option&gt;1&lt;/option&gt;
                                                    &lt;option&gt;2&lt;/option&gt;
                                                    &lt;option&gt;3&lt;/option&gt;
                                                    &lt;option&gt;4&lt;/option&gt;
                                                    &lt;option&gt;5&lt;/option&gt;
                                                &lt;/select&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                </div>
              </div>
            </div>
            <!-- end card -->

            <div class="card">
              <div class="card-header">
                <div class="flex justify-between items-center">
                  <h4 class="card-title">Input Group</h4>

                  <div class="flex items-center gap-2">
                    <button
                      type="button"
                      class="btn-code"
                      data-fc-type="collapse"
                      data-fc-target="#FormInputGroupHtml"
                    >
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
                <p class="text-gray-400 mb-4">
                  Easily extend form controls by adding text, buttons, or button
                  groups on either side of textual inputs, custom selects, and
                  custom file inputs
                </p>

                <div class="grid lg:grid-cols-3 gap-6">
                  <div>
                    <div class="flex">
                      <div
                        class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                      >
                        @
                      </div>
                      <input
                        type="text"
                        placeholder="Username"
                        class="form-input ltr:rounded-l-none rtl:rounded-r-none"
                      />
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <input
                        type="text"
                        placeholder="Recipient's username"
                        class="form-input ltr:rounded-r-none rtl:rounded-l-none"
                      />
                      <div
                        class="inline-flex items-center px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                      >
                        @example.com
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div
                        class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                      >
                        $
                      </div>
                      <input
                        type="text"
                        placeholder=""
                        class="form-input rounded-none"
                      />
                      <div
                        class="inline-flex items-center px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                      >
                        .00
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="flex rounded-md shadow-sm -space-x-px">
                      <span
                        class="px-4 inline-flex items-center rounded-s border border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                        >Default</span
                      >
                      <input type="text" class="form-input rounded-s-none" />
                    </div>
                  </div>

                  <div>
                    <div class="sm:flex rounded-md shadow-sm">
                      <input type="text" class="form-input rounded-e-none" />
                      <input type="text" class="form-input rounded-s-none" />
                      <span
                        class="inline-flex items-center whitespace-nowrap px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                        >First and last name</span
                      >
                    </div>
                  </div>

                  <div>
                    <div class="relative">
                      <input
                        type="email"
                        id="leading-icon"
                        name="leading-icon"
                        class="form-input ps-11"
                        placeholder="you@site.com"
                      />
                      <div
                        class="absolute inset-y-0 start-4 flex items-center z-20"
                      >
                        <i class="mgc_mail_line text-lg text-gray-400"></i>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="relative">
                      <input
                        type="text"
                        id="input-with-leading-and-trailing-icon"
                        name="input-with-leading-and-trailing-icon"
                        class="form-input ps-11 pe-14"
                        placeholder="0.00"
                      />
                      <div
                        class="absolute inset-y-0 start-4 flex items-center pointer-events-none z-20"
                      >
                        <span class="text-gray-500">$</span>
                      </div>
                      <div
                        class="absolute inset-y-0 end-4 flex items-center pointer-events-none z-20"
                      >
                        <span class="text-gray-500">USD</span>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="flex rounded-md shadow-sm">
                      <div
                        class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-r-0 border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700"
                      >
                        <span class="text-sm text-gray-500 dark:text-gray-400"
                          >$</span
                        >
                      </div>
                      <div
                        class="px-4 inline-flex items-center min-w-fit border border-r-0 border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700"
                      >
                        <span class="text-sm text-gray-500 dark:text-gray-400"
                          >0.00</span
                        >
                      </div>
                      <input
                        type="text"
                        id="leading-multiple-add-on"
                        name="inline-add-on"
                        class="form-input rounded-s-none"
                        placeholder="www.example.com"
                      />
                    </div>
                  </div>
                  <div>
                    <div class="flex rounded-md shadow-sm">
                      <button
                        type="button"
                        class="btn btn-sm bg-primary text-white rounded-e-none"
                      >
                        Button
                      </button>
                      <input
                        type="text"
                        id="leading-button-add-on"
                        name="leading-button-add-on"
                        class="form-input"
                      />
                    </div>
                  </div>

                  <div>
                    <div class="flex rounded-md shadow-sm">
                      <button
                        type="button"
                        class="btn btn-sm bg-primary text-white rounded-e-none"
                      >
                        Button
                      </button>
                      <button
                        type="button"
                        class="-me-px py-2.5 px-4 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white"
                      >
                        Button
                      </button>
                      <input
                        type="text"
                        id="leading-button-add-on-multiple-add-ons"
                        name="leading-button-add-on-multiple-add-ons"
                        class="form-input"
                      />
                    </div>
                  </div>

                  <div>
                    <div class="flex">
                      <div
                        class="inline-flex items-center whitespace-nowrap px-3 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                      >
                        With textarea
                      </div>
                      <textarea
                        rows="4"
                        class="form-textarea ltr:rounded-s-none rtl:rounded-e-none"
                      ></textarea>
                    </div>
                  </div>
                </div>

                <div
                  id="FormInputGroupHtml"
                  class="hidden w-full overflow-hidden transition-[height] duration-300"
                >
                  <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;grid lg:grid-cols-3 gap-6&quot;&gt;
                                            &lt;div class=&quot;mb-5&quot;&gt;
                                                &lt;div class=&quot;flex&quot;&gt;
                                                    &lt;div class=&quot;inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        @
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;mb-5&quot;&gt;
                                                &lt;div class=&quot;flex&quot;&gt;
                                                    &lt;input type=&quot;text&quot; placeholder=&quot;Recipient's username&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
                                                    &lt;div class=&quot;inline-flex items-center px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        @example.com
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;mb-5&quot;&gt;
                                                &lt;div class=&quot;flex&quot;&gt;
                                                    &lt;div class=&quot;inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        $
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input rounded-none&quot; /&gt;
                                                    &lt;div class=&quot;inline-flex items-center px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        .00
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        
                                            &lt;div&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm -space-x-px&quot;&gt;
                                                    &lt;span class=&quot;px-4 inline-flex items-center rounded-s border border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;Default&lt;/span&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-input rounded-s-none&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;div class=&quot;sm:flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-input rounded-e-none&quot;&gt;
                                                    &lt;span class=&quot;py-2.5 px-4 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-l-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        &lt;svg class=&quot;hidden sm:block h-4 w-4 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                            &lt;path fill-rule=&quot;evenodd&quot; d=&quot;M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z&quot;&gt;
                                                        &lt;/svg&gt;
                                                        &lt;svg class=&quot;sm:hidden mx-auto h-4 w-4 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                            &lt;path fill-rule=&quot;evenodd&quot; d=&quot;M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z&quot;&gt;
                                                        &lt;/svg&gt;
                                                    &lt;/span&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-input rounded-s-none&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;div class=&quot;sm:flex rounded-md shadow-sm&quot;&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-input rounded-e-none&quot;&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-input rounded-s-none&quot;&gt;
                                                &lt;span class=&quot;inline-flex items-center whitespace-nowrap px-4 rounded-e border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;First and last name&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Email Address&lt;/label&gt;
                                                &lt;div class=&quot;relative&quot;&gt;
                                                    &lt;input type=&quot;email&quot; id=&quot;leading-icon&quot; name=&quot;leading-icon&quot; class=&quot;form-input ps-11&quot; placeholder=&quot;you@site.com&quot;&gt;
                                                    &lt;div class=&quot;absolute inset-y-0 start-4 flex items-center z-20&quot;&gt;
                                                        &lt;i class=&quot;mgc_mail_line text-lg text-gray-400&quot;&gt;&lt;/i&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;


                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;relative&quot;&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;input-with-leading-and-trailing-icon&quot; name=&quot;input-with-leading-and-trailing-icon&quot; class=&quot;form-input ps-11 pe-14&quot; placeholder=&quot;0.00&quot;&gt;
                                                    &lt;div class=&quot;absolute inset-y-0 start-4 flex items-center pointer-events-none z-20&quot;&gt;
                                                        &lt;span class=&quot;text-gray-500&quot;&gt;$&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;absolute inset-y-0 end-4 flex items-center pointer-events-none z-20&quot;&gt;
                                                        &lt;span class=&quot;text-gray-500&quot;&gt;USD&lt;/span&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;div class=&quot;inline-flex items-center px-4 rounded-s border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        &lt;span class=&quot;text-sm text-gray-500 dark:text-gray-400&quot;&gt;http://&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; name=&quot;input-with-add-on-url&quot; id=&quot;input-with-add-on-url&quot; class=&quot;form-input rounded-s-none&quot; placeholder=&quot;www.example.com&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;div class=&quot;px-4 inline-flex items-center min-w-fit rounded-l-md border border-r-0 border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700&quot;&gt;
                                                        &lt;span class=&quot;text-sm text-gray-500 dark:text-gray-400&quot;&gt;$&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;px-4 inline-flex items-center min-w-fit border border-r-0 border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700&quot;&gt;
                                                        &lt;span class=&quot;text-sm text-gray-500 dark:text-gray-400&quot;&gt;0.00&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;leading-multiple-add-on&quot; name=&quot;inline-add-on&quot; class=&quot;form-input rounded-s-none&quot; placeholder=&quot;www.example.com&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;span class=&quot;inline-flex items-center px-4 rounded-s border border-s-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        &lt;span class=&quot;text-sm text-gray-500 dark:text-gray-400&quot;&gt;http://&lt;/span&gt;
                                                    &lt;/span&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;trailing-button-add-on-with-leading-and-trailing&quot; name=&quot;trailing-button-add-on-with-leading-and-trailing&quot; class=&quot;form-input rounded-none&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;inline-flex items-center px-4 rounded-e bg-primary text-gray-100&quot;&gt;
                                                        &lt;svg class=&quot;h-4 w-4&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                            &lt;path d=&quot;M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z&quot;&gt;
                                                        &lt;/svg&gt;
                                                    &lt;/button&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;relative flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;trailing-button-add-on-with-icon-and-button&quot; name=&quot;trailing-button-add-on-with-icon-and-button&quot; class=&quot;form-input ps-11&quot;&gt;
                                                    &lt;div class=&quot;absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4&quot;&gt;
                                                        &lt;svg class=&quot;h-4 w-4 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
                                                            &lt;path d=&quot;M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z&quot;&gt;
                                                        &lt;/svg&gt;
                                                    &lt;/div&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm bg-primary text-white rounded-s-none&quot;&gt;Search&lt;/button&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm bg-primary text-white rounded-e-none&quot;&gt;
                                                        Button
                                                    &lt;/button&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;leading-button-add-on&quot; name=&quot;leading-button-add-on&quot; class=&quot;form-input&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex rounded-md shadow-sm&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm bg-primary text-white rounded-e-none&quot;&gt;
                                                        Button
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;-me-px py-2.5 px-4 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white&quot;&gt;
                                                        Button
                                                    &lt;/button&gt;
                                                    &lt;input type=&quot;text&quot; id=&quot;leading-button-add-on-multiple-add-ons&quot; name=&quot;leading-button-add-on-multiple-add-ons&quot; class=&quot;form-input&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div&gt;
                                                &lt;label for=&quot;simpleinput&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Text&lt;/label&gt;
                                                &lt;div class=&quot;flex&quot;&gt;
                                                    &lt;div class=&quot;inline-flex items-center whitespace-nowrap px-3 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400&quot;&gt;
                                                        With textarea
                                                    &lt;/div&gt;
                                                    &lt;textarea rows=&quot;4&quot; class=&quot;form-textarea ltr:rounded-s-none rtl:rounded-e-none&quot;&gt;&lt;/textarea&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                </div>
              </div>
            </div>
            <!-- end card -->

            <div class="grid lg:grid-cols-2 gap-6">
              <div class="card">
                <div class="card-header">
                  <div class="flex justify-between items-center">
                    <h4 class="card-title">Checkbox</h4>

                    <div class="flex items-center gap-2">
                      <button
                        type="button"
                        class="btn-code"
                        data-fc-type="collapse"
                        data-fc-target="#FormCheckboxHtml"
                      >
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
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <h6 class="text-sm mb-2">Default</h6>
                      <div class="flex flex-col gap-2">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-checkbox rounded text-primary"
                            id="customCheck1"
                          />
                          <label class="ms-1.5" for="customCheck1"
                            >Check this checkbox</label
                          >
                        </div>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-checkbox rounded text-primary"
                            id="customCheck2"
                          />
                          <label class="ms-1.5" for="customCheck2"
                            >Check this checkbox</label
                          >
                        </div>
                      </div>
                    </div>

                    <div>
                      <h6 class="text-sm mb-2">Disabled</h6>

                      <div class="flex flex-col gap-2">
                        <div class="opacity-75">
                          <input
                            type="checkbox"
                            class="form-checkbox rounded text-primary"
                            id="customCheck5"
                            checked
                            disabled
                          />
                          <label class="ms-1.5" for="customCheck5"
                            >Check this checkbox</label
                          >
                        </div>
                        <div class="opacity-75">
                          <input
                            type="checkbox"
                            class="form-checkbox rounded text-primary"
                            id="customCheck6"
                            disabled
                          />
                          <label class="ms-1.5" for="customCheck6"
                            >Check this checkbox</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <div>
                        <input
                          class="form-checkbox rounded text-primary"
                          type="checkbox"
                          id="customckeck1"
                          checked
                        />
                        <label class="ms-1.5" for="customckeck1">Primary</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-success"
                          type="checkbox"
                          id="customckeck2"
                          checked
                        />
                        <label class="ms-1.5" for="customckeck2">Success</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-danger"
                          type="checkbox"
                          id="customckeck3"
                          checked
                        />
                        <label class="ms-1.5" for="customckeck3">Danger</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-warning"
                          type="checkbox"
                          id="customckeck4"
                          checked
                        />
                        <label class="ms-1.5" for="customckeck4">Warning</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-pink-500"
                          type="checkbox"
                          id="checkBox5"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox5">Pink</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-blue"
                          type="checkbox"
                          id="checkBox7"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox7">Blue</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-info"
                          type="checkbox"
                          id="checkBox8"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox8">Info</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded text-dark"
                          type="checkbox"
                          id="checkBox9"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox9">Dark</label>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <div>
                        <input
                          class="form-checkbox rounded-full text-primary"
                          type="checkbox"
                          id="checkBox10"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox10">Primary</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-success"
                          type="checkbox"
                          id="checkBox11"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox11">Success</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-danger"
                          type="checkbox"
                          id="checkBox12"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox12">Danger</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-warning"
                          type="checkbox"
                          id="checkBox13"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox13">Warning</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-pink-500"
                          type="checkbox"
                          id="customckec14"
                          checked
                        />
                        <label class="ms-1.5" for="customckec14">Pink</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-blue"
                          type="checkbox"
                          id="checkBox15"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox15">Blue</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-info"
                          type="checkbox"
                          id="checkBox16"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox16">Info</label>
                      </div>

                      <div>
                        <input
                          class="form-checkbox rounded-full text-dark"
                          type="checkbox"
                          id="checkBox17"
                          checked
                        />
                        <label class="ms-1.5" for="checkBox17">Dark</label>
                      </div>
                    </div>
                  </div>

                  <div
                    id="FormCheckboxHtml"
                    class="hidden w-full overflow-hidden transition-[height] duration-300"
                  >
                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;grid md:grid-cols-2 gap-6&quot;&gt;
                                                &lt;div&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Default&lt;/h6&gt;
                                                    &lt;div class=&quot;flex flex-col gap-2&quot;&gt;
                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox rounded text-primary&quot; id=&quot;customCheck1&quot;&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;customCheck1&quot;&gt;Check this checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox rounded text-primary&quot; id=&quot;customCheck2&quot;&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;customCheck2&quot;&gt;Check this checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
                                                &lt;div&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Disabled&lt;/h6&gt;
            
                                                    &lt;div class=&quot;flex flex-col gap-2&quot;&gt;
                                                        &lt;div class=&quot;opacity-75&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox rounded text-primary&quot; id=&quot;customCheck5&quot; checked disabled&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;customCheck5&quot;&gt;Check this checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;opacity-75&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox rounded text-primary&quot; id=&quot;customCheck6&quot; disabled&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;customCheck6&quot;&gt;Check this checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-primary&quot; type=&quot;checkbox&quot; id=&quot;customckeck1&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;customckeck1&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-success&quot; type=&quot;checkbox&quot; id=&quot;customckeck2&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;customckeck2&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-danger&quot; type=&quot;checkbox&quot; id=&quot;customckeck3&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;customckeck3&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-warning&quot; type=&quot;checkbox&quot; id=&quot;customckeck4&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;customckeck4&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-pink-500&quot; type=&quot;checkbox&quot; id=&quot;checkBox5&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox5&quot;&gt;Pink&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-blue&quot; type=&quot;checkbox&quot; id=&quot;checkBox7&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox7&quot;&gt;Blue&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-info&quot; type=&quot;checkbox&quot; id=&quot;checkBox8&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox8&quot;&gt;Info&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded text-dark&quot; type=&quot;checkbox&quot; id=&quot;checkBox9&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox9&quot;&gt;Dark&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
            
                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-primary&quot; type=&quot;checkbox&quot; id=&quot;checkBox10&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox10&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-success&quot; type=&quot;checkbox&quot; id=&quot;checkBox11&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox11&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-danger&quot; type=&quot;checkbox&quot; id=&quot;checkBox12&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox12&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-warning&quot; type=&quot;checkbox&quot; id=&quot;checkBox13&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox13&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-pink-500&quot; type=&quot;checkbox&quot; id=&quot;customckec14&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;customckec14&quot;&gt;Pink&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-blue&quot; type=&quot;checkbox&quot; id=&quot;checkBox15&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox15&quot;&gt;Blue&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-info&quot; type=&quot;checkbox&quot; id=&quot;checkBox16&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox16&quot;&gt;Info&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-checkbox rounded-full text-dark&quot; type=&quot;checkbox&quot; id=&quot;checkBox17&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;checkBox17&quot;&gt;Dark&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <div class="flex justify-between items-center">
                    <h4 class="card-title">Radio Button</h4>

                    <div class="flex items-center gap-2">
                      <button
                        type="button"
                        class="btn-code"
                        data-fc-type="collapse"
                        data-fc-target="#radioButton"
                      >
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
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <h6 class="text-sm mb-2">Default</h6>
                      <div class="flex flex-col gap-2">
                        <div class="form-check">
                          <input
                            type="radio"
                            class="form-radio text-primary"
                            name="formRadio"
                            id="formRadio01"
                            checked
                          />
                          <label class="ms-1.5" for="formRadio01"
                            >Check this radio</label
                          >
                        </div>
                        <div class="form-check">
                          <input
                            type="radio"
                            class="form-radio text-primary"
                            name="formRadio"
                            id="formRadio02"
                          />
                          <label class="ms-1.5" for="formRadio02"
                            >Check this radio</label
                          >
                        </div>
                      </div>
                    </div>

                    <div>
                      <h6 class="text-sm mb-2">Disabled</h6>

                      <div class="flex flex-col gap-2">
                        <div class="opacity-75">
                          <input
                            type="radio"
                            class="form-radio text-primary"
                            id="formRadio04"
                            checked
                            disabled
                          />
                          <label class="ms-1.5" for="formRadio04"
                            >Check this radio</label
                          >
                        </div>

                        <div class="opacity-75">
                          <input
                            type="radio"
                            class="form-radio text-primary"
                            id="formRadio05"
                            disabled
                          />
                          <label class="ms-1.5" for="formRadio05"
                            >Check this radio</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <div>
                        <input
                          class="form-radio text-primary"
                          type="radio"
                          id="formRadio10"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio10">Primary</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-success"
                          type="radio"
                          id="formRadio11"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio11">Success</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-danger"
                          type="radio"
                          id="formRadio12"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio12">Danger</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-warning"
                          type="radio"
                          id="formRadio13"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio13">Warning</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-pink-500"
                          type="radio"
                          id="formRadio14"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio14">Pink</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-blue"
                          type="radio"
                          id="formRadio15"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio15">Blue</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-info"
                          type="radio"
                          id="formRadio16"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio16">Info</label>
                      </div>

                      <div>
                        <input
                          class="form-radio text-dark"
                          type="radio"
                          id="formRadio17"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio17">Dark</label>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <div>
                        <input
                          class="form-radio rounded text-primary"
                          type="radio"
                          id="formRadio1"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio1">Primary</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-success"
                          type="radio"
                          id="formRadio2"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio2">Success</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-danger"
                          type="radio"
                          id="formRadio3"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio3">Danger</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-warning"
                          type="radio"
                          id="formRadio4"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio4">Warning</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-pink-500"
                          type="radio"
                          id="formRadio5"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio5">Pink</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-blue"
                          type="radio"
                          id="formRadio7"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio7">Blue</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-info"
                          type="radio"
                          id="formRadio8"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio8">Info</label>
                      </div>

                      <div>
                        <input
                          class="form-radio rounded text-dark"
                          type="radio"
                          id="formRadio9"
                          checked
                        />
                        <label class="ms-1.5" for="formRadio9">Dark</label>
                      </div>
                    </div>
                  </div>

                  <div
                    id="radioButton"
                    class="hidden w-full overflow-hidden transition-[height] duration-300"
                  >
                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;grid md:grid-cols-2 gap-6&quot;&gt;
                                                &lt;div&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Default&lt;/h6&gt;
                                                    &lt;div class=&quot;flex flex-col gap-2&quot;&gt;
                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; class=&quot;form-radio text-primary&quot; name=&quot;formRadio&quot; id=&quot;formRadio01&quot; checked&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio01&quot;&gt;Check this radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; class=&quot;form-radio text-primary&quot; name=&quot;formRadio&quot; id=&quot;formRadio02&quot;&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio02&quot;&gt;Check this radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
                                                &lt;div&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Disabled&lt;/h6&gt;
            
                                                    &lt;div class=&quot;flex flex-col gap-2&quot;&gt;
                                                        &lt;div class=&quot;opacity-75&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; class=&quot;form-radio text-primary&quot; id=&quot;formRadio04&quot; checked disabled&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio04&quot;&gt;Check this radio&lt;/label&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;div class=&quot;opacity-75&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; class=&quot;form-radio text-primary&quot; id=&quot;formRadio05&quot; disabled&gt;
                                                            &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio05&quot;&gt;Check this radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-primary&quot; type=&quot;radio&quot; id=&quot;formRadio10&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio10&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-success&quot; type=&quot;radio&quot; id=&quot;formRadio11&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio11&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-danger&quot; type=&quot;radio&quot; id=&quot;formRadio12&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio12&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-warning&quot; type=&quot;radio&quot; id=&quot;formRadio13&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio13&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-pink-500&quot; type=&quot;radio&quot; id=&quot;formRadio14&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio14&quot;&gt;Pink&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-blue&quot; type=&quot;radio&quot; id=&quot;formRadio15&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio15&quot;&gt;Blue&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-info&quot; type=&quot;radio&quot; id=&quot;formRadio16&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio16&quot;&gt;Info&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio text-dark&quot; type=&quot;radio&quot; id=&quot;formRadio17&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio17&quot;&gt;Dark&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
            
                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-primary&quot; type=&quot;radio&quot; id=&quot;formRadio1&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio1&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-success&quot; type=&quot;radio&quot; id=&quot;formRadio2&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio2&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-danger&quot; type=&quot;radio&quot; id=&quot;formRadio3&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio3&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-warning&quot; type=&quot;radio&quot; id=&quot;formRadio4&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio4&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-pink-500&quot; type=&quot;radio&quot; id=&quot;formRadio5&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio5&quot;&gt;Pink&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-blue&quot; type=&quot;radio&quot; id=&quot;formRadio7&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio7&quot;&gt;Blue&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-info&quot; type=&quot;radio&quot; id=&quot;formRadio8&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio8&quot;&gt;Info&lt;/label&gt;
                                                    &lt;/div&gt;
            
                                                    &lt;div&gt;
                                                        &lt;input class=&quot;form-radio rounded text-dark&quot; type=&quot;radio&quot; id=&quot;formRadio9&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;formRadio9&quot;&gt;Dark&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="flex justify-between items-center">
                    <h4 class="card-title">Switch</h4>

                    <div class="flex items-center gap-2">
                      <button
                        type="button"
                        class="btn-code"
                        data-fc-type="collapse"
                        data-fc-target="#formSwitchHTML"
                      >
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
                  <div class="grid xl:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-3">
                      <h6 class="text-sm mb-2">Default</h6>
                      <div class="flex items-center">
                        <input
                          class="form-switch"
                          type="checkbox"
                          role="switch"
                          id="flexSwitchCheckDefault"
                        />
                        <label class="ms-1.5" for="flexSwitchCheckDefault"
                          >Default switch checkbox</label
                        >
                      </div>
                      <div class="flex items-center">
                        <input
                          class="form-switch"
                          type="checkbox"
                          role="switch"
                          id="flexSwitchCheckChecked"
                          checked
                        />
                        <label class="ms-1.5" for="flexSwitchCheckChecked"
                          >Checked switch checkbox</label
                        >
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <h6 class="text-sm mb-2">Disabled</h6>
                      <div class="flex items-center opacity-60">
                        <input
                          class="form-switch"
                          type="checkbox"
                          role="switch"
                          id="flexSwitchCheckDisabled"
                          disabled
                        />
                        <label class="ms-1.5" for="flexSwitchCheckDisabled"
                          >Disabled Switch</label
                        >
                      </div>
                      <div class="flex items-center opacity-60">
                        <input
                          class="form-switch"
                          type="checkbox"
                          role="switch"
                          id="flexSwitchCheckCheckedDisabled"
                          checked
                          disabled
                        />
                        <label
                          class="ms-1.5"
                          for="flexSwitchCheckCheckedDisabled"
                          >Disabled checked Switch</label
                        >
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <h6 class="text-sm mb-2">Colored</h6>
                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch"
                          class="form-switch text-primary"
                          checked
                        />
                        <label for="formSwitch" class="ms-1.5">Primary</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch2"
                          class="form-switch text-warning"
                          checked
                        />
                        <label for="formSwitch2" class="ms-1.5">Warning</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch3"
                          class="form-switch text-danger"
                          checked
                        />
                        <label for="formSwitch3" class="ms-1.5">Danger</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch4"
                          class="form-switch text-success"
                          checked
                        />
                        <label for="formSwitch4" class="ms-1.5">Success</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch5"
                          class="form-switch text-secondary"
                          checked
                        />
                        <label for="formSwitch5" class="ms-1.5"
                          >Secondary</label
                        >
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <h6 class="text-sm mb-2">Square</h6>
                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch6"
                          class="form-switch square text-primary"
                          checked
                        />
                        <label for="formSwitch6" class="ms-2">Primary</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch7"
                          class="form-switch square text-warning"
                          checked
                        />
                        <label for="formSwitch7" class="ms-2">Warning</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch8"
                          class="form-switch square text-danger"
                          checked
                        />
                        <label for="formSwitch8" class="ms-2">Danger</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch9"
                          class="form-switch square text-success"
                          checked
                        />
                        <label for="formSwitch9" class="ms-2">Success</label>
                      </div>

                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="formSwitch10"
                          class="form-switch square text-secondary"
                          checked
                        />
                        <label for="formSwitch10" class="ms-2">Secondary</label>
                      </div>
                    </div>
                  </div>
                  <div
                    id="formSwitchHTML"
                    class="hidden w-full overflow-hidden transition-[height] duration-300"
                  >
                    <pre class="language-html h-56">
                                        <code>
                                            &lt;div class=&quot;grid xl:grid-cols-2 gap-6&quot;&gt;
                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Default&lt;/h6&gt;
                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input class=&quot;form-switch&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDefault&quot;&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default switch checkbox&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input class=&quot;form-switch&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckChecked&quot; checked&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked switch checkbox&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Disabled&lt;/h6&gt;
                                                    &lt;div class=&quot;flex items-center opacity-60&quot;&gt;
                                                        &lt;input class=&quot;form-switch&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDisabled&quot; disabled&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled Switch&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;flex items-center opacity-60&quot;&gt;
                                                        &lt;input class=&quot;form-switch&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; checked disabled&gt;
                                                        &lt;label class=&quot;ms-1.5&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked Switch&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Colored&lt;/h6&gt;
                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch&quot; class=&quot;form-switch text-primary&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch&quot; class=&quot;ms-1.5&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch2&quot; class=&quot;form-switch text-warning&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch2&quot; class=&quot;ms-1.5&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch3&quot; class=&quot;form-switch text-danger&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch3&quot; class=&quot;ms-1.5&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch4&quot; class=&quot;form-switch text-success&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch4&quot; class=&quot;ms-1.5&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch5&quot; class=&quot;form-switch text-secondary&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch5&quot; class=&quot;ms-1.5&quot;&gt;Secondary&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;flex flex-col gap-3&quot;&gt;
                                                    &lt;h6 class=&quot;text-sm mb-2&quot;&gt;Square&lt;/h6&gt;
                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch6&quot; class=&quot;form-switch square text-primary&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch6&quot; class=&quot;ms-2&quot;&gt;Primary&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch7&quot; class=&quot;form-switch square text-warning&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch7&quot; class=&quot;ms-2&quot;&gt;Warning&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch8&quot; class=&quot;form-switch square text-danger&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch8&quot; class=&quot;ms-2&quot;&gt;Danger&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch9&quot; class=&quot;form-switch square text-success&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch9&quot; class=&quot;ms-2&quot;&gt;Success&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;flex items-center&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;formSwitch10&quot; class=&quot;form-switch square text-secondary&quot; checked&gt;
                                                        &lt;label for=&quot;formSwitch10&quot; class=&quot;ms-2&quot;&gt;Secondary&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

  <!-- Mirrored from coderthemes.com/konrix/layouts/forms-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:52 GMT -->
</html>
