<!-- Header -->
@include('includes.admin_header')

    <!-- Navigation -->
    @include('includes.admin_nav')



<!-- Container -->
<div class="container" style="margin-top: 10px">
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

        @yield('content')

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <hr>
                            <p>Copyright © 2022 Car-House. All rights reserved. By Mridul Islam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>
    <!-- ../Page Content -->
</div>




<!-- Footer -->
@include('includes.admin_footer')
