<!-- Admin_header -->
@include('includes.admin_header')

    <!-- Admin Side Nav -->
    @include('includes.admin_side_nav')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- Admin Top Nav -->
        @include('includes.admin_top_nav')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @yield('content')

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © MridulIslam.com 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->

<!-- Admin Footer -->
@include('includes.admin_footer')
