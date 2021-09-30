
<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.partials.head')
  <body>
    <!-- Loader starts-->
    {{-- <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div> --}}
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.backend.partials.header')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        @include('layouts.backend.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body" id="app">

            @yield('content')
          <!-- Container-fluid starts-->

          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('layouts.backend.partials.footer')
      </div>
    </div>
    <!-- latest jquery-->
    @include('layouts.backend.partials.scripts')
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
