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
                <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" width="35" height="35" aria-labelledby="drop2">
                <div class="message-body" >
                  <form method="POST" action="<?php echo e(url( 'auth/logout' )); ?>">  
                    <?php echo csrf_field(); ?>
                    <button type="submit"  class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--  Header End -->
  </div>
</div><?php /**PATH D:\PHP\proyek_utama\smarthen\resources\views/bar/topbar.blade.php ENDPATH**/ ?>