<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smarthen</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('./assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include ('bar.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    @include('bar.topbar')
</div>
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
                </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
              <body>
              <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

              <script>
              const xValues = [100,'rate',300];
            
              new Chart("myChart", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{ 
                    data: [0,{{$dataSen->first()-> temperature ?? 0}},0],
                    borderColor: "red",
                    fill: false
                  }, { 
                    data: [0,{{$dataSen->first()-> humidity ?? 0}},0],
                    borderColor: "green",
                    fill: false
                  }, { 
                    data: [0,{{$dataSen->first()-> lux ?? 0}},0],
                    borderColor: "blue",
                    fill: false
                  }]
                },
                options: {
                  legend: {display: false}
                }
              });
              </script>
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
                    <h6 class="mb-0 fw-medium">{{$dataSen->first()-> temperature ?? 0}}°C</h6>
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
                      <h4>{{$dataSen->first()-> lux ?? 0}}</h4>
                      <span class="fs-11 text-success fw-semibold"></span>
                    </div>
                    <div class="col-6">
                      <div id="total-income">{{$dataSen->first()-> lux ?? 0}}</div>
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
                    <h6 class="mb-0 fw-medium">{{$dataSen->first()-> humidity ?? 0}} %</h6>
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
          <div>
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="card-body p-4">
                          <div class="mb-4">
                           <h5 class="card-title fw-semibold">Log Aktivitas</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="card-body p-4">
                          <div class="mb-4">
                           <h5 class="card-title fw-semibold">status heater </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="card-body p-4">
                          <div class="mb-4">
                           <h5 class="card-title fw-semibold">status lampu </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    
          </div>
       <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">all right reserved <a href="https://adminmart.com/" target="_blank"
            class="pe-1 text-primary text-decoration-underline">-</a></p>
      </div>
    </div>
  </div>
</div>
  </div>
    @include('script.dash')

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>