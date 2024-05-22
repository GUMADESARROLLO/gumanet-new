<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    
    <title>{{ env('APP_NAME') }} | DASHBOARD</title>
    <!-- <meta http-equiv="refresh" content="5"/> -->

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-2.0.5.css') }}" type="text/css" media="screen" />
  </head>

  <body>
    <div class="wrapper d-flex h-100">
      <!-- #mainSidebar -->
      @include('template.nav-template')
     
      <!-- #mainSidebar ends -->

      <!-- #pageContent -->
      <div id="pageContent" class="d-flex flex-column">
        <!-- topnav -->

        <div id="topNavigation" class="px-3 py-2">
          <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
              <!-- nav-left, breadcrumb -->
              <a
                href="index.html#"
                class="nav-left d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none"
              >
                <i class="bi bi-list" id="sidebarToggleBtn"></i>
              </a>

              <div class="d-flex justify-content-end align-items-center">
                <!-- search form -->
                <form
                  class="col-xl-4 col-md-auto col-lg-auto mb-0 me-xl-3"
                  role="search"
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="search here"
                    />
                    <a class="btn" href="../search-results/index.html">
                      <i class="bi bi-search"></i>
                    </a>
                  </div>
                </form>

                <!-- nav-right -->
                <div class="nav-right col-md-auto col-lg-auto my-2">
                  <!-- nav -->
                  <ul class="nav">
                    <!-- Home icon for sm screen -->
                    <li class="only-d-sm">
                      <a href="../index.html" class="nav-link text-white">
                        <i class="bi bi-house-door-fill"></i>
                      </a>
                    </li>

                    <!-- Email -->
                    <li>
                      <a href="../mail/index.html" class="nav-link text-white">
                        <i class="bi bi-envelope">
                          <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-info rounded-circle"
                          >
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </i>
                      </a>
                    </li>
                    <!-- notification -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="bi bi-bell">
                          <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-info rounded-circle"
                          >
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a
                            class="dropdown-item"
                            href="../messenger/index.html"
                          >
                            <small
                              ><i class="bi bi-envelope me-2"></i>10 new
                              messages</small
                            >
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="../single-page/index.html"
                          >
                            <small
                              ><i class="bi bi-file-pdf me-2"></i>5 new
                              reports</small
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- for profile page -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="bi bi-person-circle"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="../profile/index.html">
                            <small>
                              <i class="bi bi-person-fill me-2"></i>My Profile
                            </small>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="../system-logs/index.html"
                          >
                            <small>
                              <i class="bi bi-body-text me-2"></i>Acitivity Log
                            </small>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="../profile/index.html">
                            <small>
                              <i class="bi bi-gear-fill me-2"></i>Settings
                            </small>
                          </a>
                        </li>
                        <!-- <hr class="my-1"> -->
                        <div class="divider my-1"></div>
                        <li>
                          <a
                            class="dropdown-item"
                            href="../accounts/login/index.html"
                          >
                            <small>
                              <i class="bi bi-box-arrow-right me-2"></i>Sign out
                            </small>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- for modal applications -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="modal"
                        data-bs-target="#modalApplication"
                      >
                        <i class="bi bi-boxes"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- topnav ends -->

        <div class="container-fluid px-4">
          <!-- section searchForMobile -->
          <div class="row my-4 sm-my-3 sm-mt-0" id="searchForMobile">
            <div class="col">
              <form>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control form-control-dark text-bg-dark text-white"
                    value="search here"
                  />
                  <a class="btn" href="../search-results/index.html">
                    <i class="bi bi-search"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>
          <!-- section searchForMobile ends -->

          <!-- main_content -->

          @yield('content')

         

          <!-- main_content ends -->
        </div>

        <!-- footer -->
        <!-- divider for footer -->
        <div class="mt-4 sm-mt-3"></div>
        <!-- divider for footer ends -->
        @include('template.footer-template')
        <!-- footer ends -->
      </div>
      <!-- #pageContent ends -->
    </div>

    <!-- modal for application -->
    <div class="modal" id="modalApplication" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h6 class="modal-title">All Applications</h6>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- Modal body for lg screen -->
          <div class="modal-body sm-d-none modal-body-lg">
            <div class="row">
              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-cart-plus"></i>
                  <p class="py-2 mb-0">Addon Domains</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-door-open"></i>
                  <p class="py-2 mb-0">Authentication</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-copy"></i>
                  <p class="py-2 mb-0">Backup Wizard</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-calendar3"></i>
                  <p class="py-2 mb-0">Calendar</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-person-lines-fill"></i>
                  <p class="py-2 mb-0">Contact</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-database"></i>
                  <p class="py-2 mb-0">DBMS</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-diagram-3"></i>
                  <p class="py-2 mb-0">Diagram</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-folder"></i>
                  <p class="py-2 mb-0">Directory Privacy</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-envelope-at-fill"></i>
                  <p class="py-2 mb-0">Email Accounts</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-key-fill"></i>
                  <p class="py-2 mb-0">Encryption</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-file-earmark-binary"></i>
                  <p class="py-2 mb-0">File Manager</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-images"></i>
                  <p class="py-2 mb-0">Gallery</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-question-circle"></i>
                  <p class="py-2 mb-0">Help</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-mailbox"></i>
                  <p class="py-2 mb-0">Mailing Lists</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-geo-fill"></i>
                  <p class="py-2 mb-0">Maps</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-person-badge"></i>
                  <p class="py-2 mb-0">Profile</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-box-arrow-up-left"></i>
                  <p class="py-2 mb-0">Redirects</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-gear-wide-connected"></i>
                  <p class="py-2 mb-0">Settings</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-globe"></i>
                  <p class="py-2 mb-0">Subdomains</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-display"></i>
                  <p class="py-2 mb-0">System Monitor</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-bar-chart-line"></i>
                  <p class="py-2 mb-0">System Settings</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-people"></i>
                  <p class="py-2 mb-0">Management</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-braces-asterisk"></i>
                  <p class="py-2 mb-0">WYSIWYG</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="../single-page/index.html" class="box">
                  <i class="bi bi-book"></i>
                  <p class="py-2 mb-0">Zone Editor</p>
                </a>
              </div>
            </div>
          </div>
          <!-- Modal body for lg screen ends -->
          <!-- todo -->
          <div class="modal-body modal-body-sm">
            <ul class="list-group">
              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-cart-plus"></i>
                  Addon Domains
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-door-open"></i>
                  Authentication
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-copy"></i>
                  Backup Wizard
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-calendar3"></i>
                  Calendar
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-person-lines-fill"></i>
                  Contact
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-database"></i>
                  DBMS
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-diagram-3"></i>
                  Diagram
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-folder"></i>
                  Directory Privacy
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-envelope-at-fill"></i>
                  Email Accounts
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-key-fill"></i>
                  Encryption
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-file-earmark-binary"></i>
                  File Manager
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-images"></i>
                  Gallery
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-question-circle"></i>
                  Help
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-mailbox"></i>
                  Mailing Lists
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-geo-fill"></i>
                  Maps
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-person-badge"></i>
                  Profile
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-box-arrow-up-left"></i>
                  Redirects
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-gear-wide-connected"></i>
                  Settings
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-globe"></i>
                  Subdomains
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-display"></i>
                  System Monitor
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-bar-chart-line"></i>
                  System Settings
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-people"></i>
                  Management
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-braces-asterisk"></i>
                  WYSIWYG
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-book"></i>
                  Zone Editor
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- modal for application ends -->

    <!-- modal for generate report -->
    <div class="modal" id="modalGenerateReport" tabindex="-1">
      <div
        class="d-flex flex-column justify-content-center align-items-center modal-dialog modal-dialog-centered modal-xl text-center"
      >
        <div
          class="spinner-grow text-danger"
          style="width: 4rem; height: 4rem"
          role="status"
        >
          <span class="sr-only"></span>
        </div>
        <p class="mb-0 mt-4 sm-mt-3">Generating report...</p>
        <p>Just a demo, skip by pressing anywhere.</p>
      </div>
    </div>
    <!-- modal for generate report ends -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- bootstrap.bundle.min.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- jvectormap -->
    <script src="{{ asset('js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- ploty -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- script.js -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
