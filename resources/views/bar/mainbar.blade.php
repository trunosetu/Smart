<div class="body-wrapper">
  <!--  Header Start -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="javascript:void(0)">
            <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
        </li>
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
         <!--  <a href="https://adminmart.com/product/matdash-free-bootstrap-5-admin-dashboard-template/" target="_blank" class="btn btn-primary">Download Free</a>
          -->
         <li class="nav-item dropdown">
            <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="{{asset('/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                  <form method="POST" action="{{ url( 'logout' )}}">  
                  <button type="submit"  class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--  Header End -->
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <!--  Row 1 -->
      <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
          <div class="card w-100">
            <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                  <h5 class="card-title fw-semibold">Sensor Chart</h5>
                </div>
                <div>
                  <select class="form-select">
                    <option value="1">Humidity</option>
                    <option value="2">Temperature</option>
                    <option value="3">Lux Light</option>
                  </select>
                </div>
              </div>
              <div id="revenue-forecast"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                    <span
                      class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                      <iconify-icon icon="solar:football-outline" class="fs-6 text-secondary"> </iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Temperatur</h6>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-6">
                    <h6 class="mb-0 fw-medium"> °C</h6>
                    <h6 class="mb-0 fw-medium">valu</h6>
                  </div>
                  <!--
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                    <div class="progress-bar bg-secondary" style="width: 83%"></div>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-6 mb-4">
                    <span
                      class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                      <iconify-icon icon="solar:box-linear" class="fs-6 text-danger"></iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Lux</h6>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h4>-</h4>
                      <span class="fs-11 text-success fw-semibold">-</span>
                    </div>
                    <div class="col-6">
                      <div id="total-income"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                    <span
                      class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                      <iconify-icon icon="solar:football-outline" class="fs-6 text-secondary"> </iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Kelembaban</h6>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-6">
                    <h6 class="mb-0 fw-medium">val</h6>
                    <h6 class="mb-0 fw-medium">valu</h6>
                  </div>
                  <!--
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                    <div class="progress-bar bg-secondary" style="width: 83%"></div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="mb-4">
                <h5 class="card-title fw-semibold">Log Aktivitas</h5>
              </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">all right deserved <a href="https://adminmart.com/" target="_blank"
            class="pe-1 text-primary text-decoration-underline">-</a></p>
      </div>
    </div>
  </div>
</div>