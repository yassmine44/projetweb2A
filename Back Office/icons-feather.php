<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from coderthemes.com/konrix/layouts/icons-feather.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:45:03 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Feather Icons | Konrix - Responsive Tailwind Admin Dashboard</title>
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
              Feather
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
                  >Icons</a
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
                  >Feather</a
                >
              </div>
            </div>
          </div>
          <!-- Page Title End -->

          <div class="card">
            <div class="card-header">
              <div class="flex justify-between items-center">
                <h5 class="card-title">All Icons</h5>

                <a
                  href="https://feathericons.com/"
                  target="_blank"
                  class="btn-code"
                >
                  <span class="me-2">Documentaion</span>
                  <i class="mgc_link_2_line text-sm"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div
                class="grid lg:grid-cols-5 md:grid-cols-3 gap-6 icons-list-demo"
                id="icons"
              >
                <div>
                  <i data-feather="alert-octagon"></i><span>alert-octagon</span>
                </div>
                <div>
                  <i data-feather="alert-circle"></i><span>alert-circle</span>
                </div>
                <div><i data-feather="activity"></i><span>activity</span></div>
                <div>
                  <i data-feather="alert-triangle"></i
                  ><span>alert-triangle</span>
                </div>
                <div>
                  <i data-feather="align-center"></i><span>align-center</span>
                </div>
                <div><i data-feather="airplay"></i><span>airplay</span></div>
                <div>
                  <i data-feather="align-justify"></i><span>align-justify</span>
                </div>
                <div>
                  <i data-feather="align-left"></i><span>align-left</span>
                </div>
                <div>
                  <i data-feather="align-right"></i><span>align-right</span>
                </div>
                <div>
                  <i data-feather="arrow-down-left"></i
                  ><span>arrow-down-left</span>
                </div>
                <div>
                  <i data-feather="arrow-down-right"></i
                  ><span>arrow-down-right</span>
                </div>
                <div><i data-feather="anchor"></i><span>anchor</span></div>
                <div><i data-feather="aperture"></i><span>aperture</span></div>
                <div>
                  <i data-feather="arrow-left"></i><span>arrow-left</span>
                </div>
                <div>
                  <i data-feather="arrow-right"></i><span>arrow-right</span>
                </div>
                <div>
                  <i data-feather="arrow-down"></i><span>arrow-down</span>
                </div>
                <div>
                  <i data-feather="arrow-up-left"></i><span>arrow-up-left</span>
                </div>
                <div>
                  <i data-feather="arrow-up-right"></i
                  ><span>arrow-up-right</span>
                </div>
                <div><i data-feather="arrow-up"></i><span>arrow-up</span></div>
                <div><i data-feather="award"></i><span>award</span></div>
                <div>
                  <i data-feather="bar-chart"></i><span>bar-chart</span>
                </div>
                <div><i data-feather="at-sign"></i><span>at-sign</span></div>
                <div>
                  <i data-feather="bar-chart-2"></i><span>bar-chart-2</span>
                </div>
                <div>
                  <i data-feather="battery-charging"></i
                  ><span>battery-charging</span>
                </div>
                <div><i data-feather="bell-off"></i><span>bell-off</span></div>
                <div><i data-feather="battery"></i><span>battery</span></div>
                <div>
                  <i data-feather="bluetooth"></i><span>bluetooth</span>
                </div>
                <div><i data-feather="bell"></i><span>bell</span></div>
                <div><i data-feather="book"></i><span>book</span></div>
                <div>
                  <i data-feather="briefcase"></i><span>briefcase</span>
                </div>
                <div>
                  <i data-feather="camera-off"></i><span>camera-off</span>
                </div>
                <div><i data-feather="calendar"></i><span>calendar</span></div>
                <div><i data-feather="bookmark"></i><span>bookmark</span></div>
                <div><i data-feather="box"></i><span>box</span></div>
                <div><i data-feather="camera"></i><span>camera</span></div>
                <div>
                  <i data-feather="check-circle"></i><span>check-circle</span>
                </div>
                <div><i data-feather="check"></i><span>check</span></div>
                <div>
                  <i data-feather="check-square"></i><span>check-square</span>
                </div>
                <div><i data-feather="cast"></i><span>cast</span></div>
                <div>
                  <i data-feather="chevron-down"></i><span>chevron-down</span>
                </div>
                <div>
                  <i data-feather="chevron-left"></i><span>chevron-left</span>
                </div>
                <div>
                  <i data-feather="chevron-right"></i><span>chevron-right</span>
                </div>
                <div>
                  <i data-feather="chevron-up"></i><span>chevron-up</span>
                </div>
                <div>
                  <i data-feather="chevrons-down"></i><span>chevrons-down</span>
                </div>
                <div>
                  <i data-feather="chevrons-right"></i
                  ><span>chevrons-right</span>
                </div>
                <div>
                  <i data-feather="chevrons-up"></i><span>chevrons-up</span>
                </div>
                <div>
                  <i data-feather="chevrons-left"></i><span>chevrons-left</span>
                </div>
                <div><i data-feather="circle"></i><span>circle</span></div>
                <div>
                  <i data-feather="clipboard"></i><span>clipboard</span>
                </div>
                <div><i data-feather="chrome"></i><span>chrome</span></div>
                <div><i data-feather="clock"></i><span>clock</span></div>
                <div>
                  <i data-feather="cloud-lightning"></i
                  ><span>cloud-lightning</span>
                </div>
                <div>
                  <i data-feather="cloud-drizzle"></i><span>cloud-drizzle</span>
                </div>
                <div>
                  <i data-feather="cloud-rain"></i><span>cloud-rain</span>
                </div>
                <div>
                  <i data-feather="cloud-off"></i><span>cloud-off</span>
                </div>
                <div><i data-feather="codepen"></i><span>codepen</span></div>
                <div>
                  <i data-feather="cloud-snow"></i><span>cloud-snow</span>
                </div>
                <div><i data-feather="compass"></i><span>compass</span></div>
                <div><i data-feather="copy"></i><span>copy</span></div>
                <div>
                  <i data-feather="corner-down-right"></i
                  ><span>corner-down-right</span>
                </div>
                <div>
                  <i data-feather="corner-down-left"></i
                  ><span>corner-down-left</span>
                </div>
                <div>
                  <i data-feather="corner-left-down"></i
                  ><span>corner-left-down</span>
                </div>
                <div>
                  <i data-feather="corner-left-up"></i
                  ><span>corner-left-up</span>
                </div>
                <div>
                  <i data-feather="corner-up-left"></i
                  ><span>corner-up-left</span>
                </div>
                <div>
                  <i data-feather="corner-up-right"></i
                  ><span>corner-up-right</span>
                </div>
                <div>
                  <i data-feather="corner-right-down"></i
                  ><span>corner-right-down</span>
                </div>
                <div>
                  <i data-feather="corner-right-up"></i
                  ><span>corner-right-up</span>
                </div>
                <div><i data-feather="cpu"></i><span>cpu</span></div>
                <div>
                  <i data-feather="credit-card"></i><span>credit-card</span>
                </div>
                <div>
                  <i data-feather="crosshair"></i><span>crosshair</span>
                </div>
                <div><i data-feather="disc"></i><span>disc</span></div>
                <div><i data-feather="delete"></i><span>delete</span></div>
                <div>
                  <i data-feather="download-cloud"></i
                  ><span>download-cloud</span>
                </div>
                <div><i data-feather="download"></i><span>download</span></div>
                <div><i data-feather="droplet"></i><span>droplet</span></div>
                <div><i data-feather="edit-2"></i><span>edit-2</span></div>
                <div><i data-feather="edit"></i><span>edit</span></div>
                <div><i data-feather="edit-3"></i><span>edit-3</span></div>
                <div>
                  <i data-feather="external-link"></i><span>external-link</span>
                </div>
                <div><i data-feather="eye"></i><span>eye</span></div>
                <div><i data-feather="feather"></i><span>feather</span></div>
                <div><i data-feather="facebook"></i><span>facebook</span></div>
                <div>
                  <i data-feather="file-minus"></i><span>file-minus</span>
                </div>
                <div><i data-feather="eye-off"></i><span>eye-off</span></div>
                <div>
                  <i data-feather="fast-forward"></i><span>fast-forward</span>
                </div>
                <div>
                  <i data-feather="file-text"></i><span>file-text</span>
                </div>
                <div><i data-feather="film"></i><span>film</span></div>
                <div><i data-feather="file"></i><span>file</span></div>
                <div>
                  <i data-feather="file-plus"></i><span>file-plus</span>
                </div>
                <div><i data-feather="folder"></i><span>folder</span></div>
                <div><i data-feather="filter"></i><span>filter</span></div>
                <div><i data-feather="flag"></i><span>flag</span></div>
                <div><i data-feather="globe"></i><span>globe</span></div>
                <div><i data-feather="grid"></i><span>grid</span></div>
                <div><i data-feather="heart"></i><span>heart</span></div>
                <div><i data-feather="home"></i><span>home</span></div>
                <div><i data-feather="github"></i><span>github</span></div>
                <div><i data-feather="image"></i><span>image</span></div>
                <div><i data-feather="inbox"></i><span>inbox</span></div>
                <div><i data-feather="layers"></i><span>layers</span></div>
                <div><i data-feather="info"></i><span>info</span></div>
                <div>
                  <i data-feather="instagram"></i><span>instagram</span>
                </div>
                <div><i data-feather="layout"></i><span>layout</span></div>
                <div><i data-feather="link-2"></i><span>link-2</span></div>
                <div>
                  <i data-feather="life-buoy"></i><span>life-buoy</span>
                </div>
                <div><i data-feather="link"></i><span>link</span></div>
                <div><i data-feather="log-in"></i><span>log-in</span></div>
                <div><i data-feather="list"></i><span>list</span></div>
                <div><i data-feather="lock"></i><span>lock</span></div>
                <div><i data-feather="log-out"></i><span>log-out</span></div>
                <div><i data-feather="loader"></i><span>loader</span></div>
                <div><i data-feather="mail"></i><span>mail</span></div>
                <div>
                  <i data-feather="maximize-2"></i><span>maximize-2</span>
                </div>
                <div><i data-feather="map"></i><span>map</span></div>
                <div><i data-feather="maximize"></i><span>maximize</span></div>
                <div><i data-feather="map-pin"></i><span>map-pin</span></div>
                <div><i data-feather="menu"></i><span>menu</span></div>
                <div>
                  <i data-feather="message-circle"></i
                  ><span>message-circle</span>
                </div>
                <div>
                  <i data-feather="message-square"></i
                  ><span>message-square</span>
                </div>
                <div>
                  <i data-feather="minimize-2"></i><span>minimize-2</span>
                </div>
                <div><i data-feather="minimize"></i><span>minimize</span></div>
                <div><i data-feather="mic-off"></i><span>mic-off</span></div>
                <div>
                  <i data-feather="minus-circle"></i><span>minus-circle</span>
                </div>
                <div><i data-feather="mic"></i><span>mic</span></div>
                <div>
                  <i data-feather="minus-square"></i><span>minus-square</span>
                </div>
                <div><i data-feather="minus"></i><span>minus</span></div>
                <div><i data-feather="moon"></i><span>moon</span></div>
                <div><i data-feather="monitor"></i><span>monitor</span></div>
                <div>
                  <i data-feather="more-vertical"></i><span>more-vertical</span>
                </div>
                <div>
                  <i data-feather="more-horizontal"></i
                  ><span>more-horizontal</span>
                </div>
                <div><i data-feather="move"></i><span>move</span></div>
                <div><i data-feather="music"></i><span>music</span></div>
                <div>
                  <i data-feather="navigation-2"></i><span>navigation-2</span>
                </div>
                <div>
                  <i data-feather="navigation"></i><span>navigation</span>
                </div>
                <div><i data-feather="octagon"></i><span>octagon</span></div>
                <div><i data-feather="package"></i><span>package</span></div>
                <div>
                  <i data-feather="pause-circle"></i><span>pause-circle</span>
                </div>
                <div><i data-feather="pause"></i><span>pause</span></div>
                <div><i data-feather="percent"></i><span>percent</span></div>
                <div>
                  <i data-feather="phone-call"></i><span>phone-call</span>
                </div>
                <div>
                  <i data-feather="phone-forwarded"></i
                  ><span>phone-forwarded</span>
                </div>
                <div>
                  <i data-feather="phone-missed"></i><span>phone-missed</span>
                </div>
                <div>
                  <i data-feather="phone-off"></i><span>phone-off</span>
                </div>
                <div>
                  <i data-feather="phone-incoming"></i
                  ><span>phone-incoming</span>
                </div>
                <div><i data-feather="phone"></i><span>phone</span></div>
                <div>
                  <i data-feather="phone-outgoing"></i
                  ><span>phone-outgoing</span>
                </div>
                <div>
                  <i data-feather="pie-chart"></i><span>pie-chart</span>
                </div>
                <div>
                  <i data-feather="play-circle"></i><span>play-circle</span>
                </div>
                <div><i data-feather="play"></i><span>play</span></div>
                <div>
                  <i data-feather="plus-square"></i><span>plus-square</span>
                </div>
                <div>
                  <i data-feather="plus-circle"></i><span>plus-circle</span>
                </div>
                <div><i data-feather="plus"></i><span>plus</span></div>
                <div><i data-feather="pocket"></i><span>pocket</span></div>
                <div><i data-feather="printer"></i><span>printer</span></div>
                <div><i data-feather="power"></i><span>power</span></div>
                <div><i data-feather="radio"></i><span>radio</span></div>
                <div><i data-feather="repeat"></i><span>repeat</span></div>
                <div>
                  <i data-feather="refresh-ccw"></i><span>refresh-ccw</span>
                </div>
                <div><i data-feather="rewind"></i><span>rewind</span></div>
                <div>
                  <i data-feather="rotate-ccw"></i><span>rotate-ccw</span>
                </div>
                <div>
                  <i data-feather="refresh-cw"></i><span>refresh-cw</span>
                </div>
                <div>
                  <i data-feather="rotate-cw"></i><span>rotate-cw</span>
                </div>
                <div><i data-feather="save"></i><span>save</span></div>
                <div><i data-feather="search"></i><span>search</span></div>
                <div><i data-feather="server"></i><span>server</span></div>
                <div><i data-feather="scissors"></i><span>scissors</span></div>
                <div><i data-feather="share-2"></i><span>share-2</span></div>
                <div><i data-feather="share"></i><span>share</span></div>
                <div><i data-feather="shield"></i><span>shield</span></div>
                <div><i data-feather="settings"></i><span>settings</span></div>
                <div>
                  <i data-feather="skip-back"></i><span>skip-back</span>
                </div>
                <div><i data-feather="shuffle"></i><span>shuffle</span></div>
                <div><i data-feather="sidebar"></i><span>sidebar</span></div>
                <div>
                  <i data-feather="skip-forward"></i><span>skip-forward</span>
                </div>
                <div><i data-feather="slack"></i><span>slack</span></div>
                <div><i data-feather="slash"></i><span>slash</span></div>
                <div>
                  <i data-feather="smartphone"></i><span>smartphone</span>
                </div>
                <div><i data-feather="square"></i><span>square</span></div>
                <div><i data-feather="speaker"></i><span>speaker</span></div>
                <div><i data-feather="star"></i><span>star</span></div>
                <div>
                  <i data-feather="stop-circle"></i><span>stop-circle</span>
                </div>
                <div><i data-feather="sun"></i><span>sun</span></div>
                <div><i data-feather="sunrise"></i><span>sunrise</span></div>
                <div><i data-feather="tablet"></i><span>tablet</span></div>
                <div><i data-feather="tag"></i><span>tag</span></div>
                <div><i data-feather="sunset"></i><span>sunset</span></div>
                <div><i data-feather="target"></i><span>target</span></div>
                <div>
                  <i data-feather="thermometer"></i><span>thermometer</span>
                </div>
                <div>
                  <i data-feather="thumbs-up"></i><span>thumbs-up</span>
                </div>
                <div>
                  <i data-feather="thumbs-down"></i><span>thumbs-down</span>
                </div>
                <div>
                  <i data-feather="toggle-left"></i><span>toggle-left</span>
                </div>
                <div>
                  <i data-feather="toggle-right"></i><span>toggle-right</span>
                </div>
                <div><i data-feather="trash-2"></i><span>trash-2</span></div>
                <div><i data-feather="trash"></i><span>trash</span></div>
                <div>
                  <i data-feather="trending-up"></i><span>trending-up</span>
                </div>
                <div>
                  <i data-feather="trending-down"></i><span>trending-down</span>
                </div>
                <div><i data-feather="triangle"></i><span>triangle</span></div>
                <div><i data-feather="type"></i><span>type</span></div>
                <div><i data-feather="twitter"></i><span>twitter</span></div>
                <div><i data-feather="upload"></i><span>upload</span></div>
                <div><i data-feather="umbrella"></i><span>umbrella</span></div>
                <div>
                  <i data-feather="upload-cloud"></i><span>upload-cloud</span>
                </div>
                <div><i data-feather="unlock"></i><span>unlock</span></div>
                <div>
                  <i data-feather="user-check"></i><span>user-check</span>
                </div>
                <div>
                  <i data-feather="user-minus"></i><span>user-minus</span>
                </div>
                <div>
                  <i data-feather="user-plus"></i><span>user-plus</span>
                </div>
                <div><i data-feather="user-x"></i><span>user-x</span></div>
                <div><i data-feather="user"></i><span>user</span></div>
                <div><i data-feather="users"></i><span>users</span></div>
                <div>
                  <i data-feather="video-off"></i><span>video-off</span>
                </div>
                <div><i data-feather="video"></i><span>video</span></div>
                <div>
                  <i data-feather="voicemail"></i><span>voicemail</span>
                </div>
                <div><i data-feather="volume-x"></i><span>volume-x</span></div>
                <div><i data-feather="volume-1"></i><span>volume-1</span></div>
                <div><i data-feather="volume-2"></i><span>volume-2</span></div>
                <div><i data-feather="volume"></i><span>volume</span></div>
                <div><i data-feather="watch"></i><span>watch</span></div>
                <div><i data-feather="wifi"></i><span>wifi</span></div>
                <div><i data-feather="x-square"></i><span>x-square</span></div>
                <div><i data-feather="wind"></i><span>wind</span></div>
                <div><i data-feather="x"></i><span>x</span></div>
                <div><i data-feather="x-circle"></i><span>x-circle</span></div>
                <div><i data-feather="zap"></i><span>zap</span></div>
                <div><i data-feather="zoom-in"></i><span>zoom-in</span></div>
                <div><i data-feather="zoom-out"></i><span>zoom-out</span></div>
                <div><i data-feather="command"></i><span>command</span></div>
                <div><i data-feather="cloud"></i><span>cloud</span></div>
                <div><i data-feather="hash"></i><span>hash</span></div>
                <div>
                  <i data-feather="headphones"></i><span>headphones</span>
                </div>
                <div>
                  <i data-feather="underline"></i><span>underline</span>
                </div>
                <div><i data-feather="italic"></i><span>italic</span></div>
                <div><i data-feather="bold"></i><span>bold</span></div>
                <div><i data-feather="crop"></i><span>crop</span></div>
                <div>
                  <i data-feather="help-circle"></i><span>help-circle</span>
                </div>
                <div>
                  <i data-feather="paperclip"></i><span>paperclip</span>
                </div>
                <div>
                  <i data-feather="shopping-cart"></i><span>shopping-cart</span>
                </div>
                <div><i data-feather="tv"></i><span>tv</span></div>
                <div><i data-feather="wifi-off"></i><span>wifi-off</span></div>
                <div><i data-feather="gitlab"></i><span>gitlab</span></div>
                <div><i data-feather="sliders"></i><span>sliders</span></div>
                <div><i data-feather="star"></i><span>star</span></div>
                <div><i data-feather="heart"></i><span>heart</span></div>
                <div><i data-feather="archive"></i><span>archive</span></div>
                <div>
                  <i data-feather="arrow-down-circle"></i
                  ><span>arrow-down-circle</span>
                </div>
                <div>
                  <i data-feather="arrow-up-circle"></i
                  ><span>arrow-up-circle</span>
                </div>
                <div>
                  <i data-feather="arrow-left-circle"></i
                  ><span>arrow-left-circle</span>
                </div>
                <div>
                  <i data-feather="arrow-right-circle"></i
                  ><span>arrow-right-circle</span>
                </div>
                <div>
                  <i data-feather="bar-chart"></i><span>bar-chart</span>
                </div>
                <div>
                  <i data-feather="bar-chart-2"></i><span>bar-chart-2</span>
                </div>
                <div>
                  <i data-feather="book-open"></i><span>book-open</span>
                </div>
                <div><i data-feather="code"></i><span>code</span></div>
                <div><i data-feather="database"></i><span>database</span></div>
                <div>
                  <i data-feather="dollar-sign"></i><span>dollar-sign</span>
                </div>
                <div>
                  <i data-feather="folder-plus"></i><span>folder-plus</span>
                </div>
                <div><i data-feather="gift"></i><span>gift</span></div>
                <div>
                  <i data-feather="folder-minus"></i><span>folder-minus</span>
                </div>
                <div>
                  <i data-feather="git-commit"></i><span>git-commit</span>
                </div>
                <div>
                  <i data-feather="git-branch"></i><span>git-branch</span>
                </div>
                <div>
                  <i data-feather="git-pull-request"></i
                  ><span>git-pull-request</span>
                </div>
                <div>
                  <i data-feather="git-merge"></i><span>git-merge</span>
                </div>
                <div><i data-feather="linkedin"></i><span>linkedin</span></div>
                <div>
                  <i data-feather="hard-drive"></i><span>hard-drive</span>
                </div>
                <div>
                  <i data-feather="more-vertical"></i><span>more-vertical</span>
                </div>
                <div>
                  <i data-feather="more-horizontal"></i
                  ><span>more-horizontal</span>
                </div>
                <div><i data-feather="rss"></i><span>rss</span></div>
                <div><i data-feather="send"></i><span>send</span></div>
                <div>
                  <i data-feather="shield-off"></i><span>shield-off</span>
                </div>
                <div>
                  <i data-feather="shopping-bag"></i><span>shopping-bag</span>
                </div>
                <div><i data-feather="terminal"></i><span>terminal</span></div>
                <div><i data-feather="truck"></i><span>truck</span></div>
                <div><i data-feather="zap-off"></i><span>zap-off</span></div>
                <div><i data-feather="youtube"></i><span>youtube</span></div>
              </div>
            </div>
          </div>
          <!-- end card -->
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
  </body>

  <!-- Mirrored from coderthemes.com/konrix/layouts/icons-feather.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:45:04 GMT -->
</html>
