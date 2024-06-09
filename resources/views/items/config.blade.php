<!doctype html>
<html lang="en">

@include('bar.tab')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('bar.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    @include('bar.topbar')
      <!--  Header Start -->

      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
              <p class="mb-0">This is a sample page </p>
            </div>
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
