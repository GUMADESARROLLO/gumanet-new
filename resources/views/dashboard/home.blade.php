@extends('template.main')
@section('content') 

 <!-- page title -->
 <div class="pageTitle pt-3 pb-3 md-pt-0">
            <h3 class="md-mb-0">Blank Page</h3>
            <div class="btn-toolbar mb-2">
              <div class="btn-group me-2">
                <button
                  id="generateReport"
                  type="button"
                  class="btn btn-sm btn-outline-secondary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalGenerateReport"
                >
                  Report
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Export
                </button>
              </div>
              <button
                type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span data-feather="calendar"></span>
                More options
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="index.html#">
                    <small>
                      <i class="bi bi-1-square me-2"></i>
                      Option one
                    </small>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index.html#">
                    <small>
                      <i class="bi bi-2-square me-2"></i>
                      Option two
                    </small>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- page title ends -->

          <div class="row mt-4">
            <div class="col">
              <p>This is the blank page example.</p>
            </div>
          </div>

@endsection