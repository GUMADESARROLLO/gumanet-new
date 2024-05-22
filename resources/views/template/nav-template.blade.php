<nav id="mainSidebar" class="h-100">
        <div class="d-flex flex-column flex-shrink-0 p-3">
          <!-- first a -->
          <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0 me-md-auto w-100">
            <!-- logo for LG screen -->
            <span class="fs-4 logo-lg only-d-lg">
              <a href="#!">
                <img src="{{ asset('img/logo-100x25.png') }}" alt="" />
              </a>
            </span>
            <!-- logo for SM screen -->
            <span class="fs-4 logo-sm only-d-sm">
              <img src="{{ asset('img/logo-40x25.png') }}" alt="" />
            </span>

            <!-- for SM screen - close -->
            <span class="d-none" id="sidebarUntoggleBtn">
              <i class="bi bi-x-circle-fill"></i>
            </span>
          </div>
          <!-- first a ends -->
          <hr />
          <ul class="nav nav-pills flex-column mb-auto">
            <!-- accounts -->
            <p class="mt-2 mb-1 text-secondary text-small">DASHBOARD</p>
            <li class="nav-item">
              <a
                href="../index.html"
                class="nav-link active"
                aria-current="page"
              >
                <i class="bi bi-house-door-fill me-2"></i>
                Home v.1
              </a>
            </li>
            <!-- todo -->
            <li class="d-none">
              <a href="index.html#" class="nav-link">
                <i class="bi bi-marker-tip me-2"></i>
                Widgets
              </a>
            </li>
            <!-- todo -->
            <li class="d-none">
              <a href="index.html#" class="nav-link">
                <i class="bi bi-ui-checks-grid me-2"></i>
                Forms
              </a>
            </li>
            <!-- products -->
            <p class="mt-2 mb-1 text-secondary text-small">PRODUCTS</p>
            <li>
              <a href="../products/index.html" class="nav-link">
                <i class="bi bi-table me-2"></i>
                Products
              </a>
            </li>
            <li>
              <a href="../sales/index.html" class="nav-link">
                <i class="bi bi-bank me-2"></i>
                Sales
              </a>
            </li>
            <li>
              <a href="../expenses/index.html" class="nav-link">
                <i class="bi bi-receipt me-2"></i>
                Expense
              </a>
            </li>

            <!-- accounts -->
            <p class="mt-2 mb-1 text-secondary text-small">ACCOUNTS</p>
            <li>
              <a href="../accounts/login/index.html" class="nav-link">
                <i class="bi bi-box-arrow-right me-2"></i>
                Sign in
              </a>
            </li>
            <li>
              <a href="../profile/index.html" class="nav-link">
                <i class="bi bi-person-circle me-2"></i>
                My Profile
              </a>
            </li>
            <li>
              <a href="../accounts/registration/index.html" class="nav-link">
                <i class="bi bi-at me-2"></i>
                Registration
              </a>
            </li>
            <!-- Theme -->
            <p class="mt-2 mb-1 text-secondary text-small">THEME</p>
            <li>
              <a href="../components/index.html" class="nav-link">
                <i class="bi bi-file-font me-2"></i>
                Components
              </a>
            </li>
            <!-- others -->
            <p class="mt-2 mb-1 text-secondary text-small">OTHERS</p>
            <li>
              <a href="../404/index.html" class="nav-link">
                <i class="bi bi-4-circle-fill me-2"></i>
                404
              </a>
            </li>
            <li>
              <a href="index.html" class="nav-link">
                <i class="bi bi-file-earmark-fill me-2"></i>
                Blank Page
              </a>
            </li>
            <li>
              <!-- "sys logs = timeline" -->
              <a href="../system-logs/index.html" class="nav-link">
                <i class="bi bi-body-text me-2"></i>
                Sys Logs
              </a>
            </li>
            <li>
              <a href="../faq/index.html" class="nav-link">
                <i class="bi bi-person-raised-hand me-2"></i>
                FAQ
              </a>
            </li>
            <li>
              <a href="../documentation/index.html" class="nav-link">
                <i class="bi bi-file-earmark-text me-2"></i>
                Documentation
              </a>
            </li>
          </ul>
        </div>
      </nav>