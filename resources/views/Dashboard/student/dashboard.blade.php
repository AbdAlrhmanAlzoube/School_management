<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pro</title>

    <!-- Include CSS -->
    {{-- @include('Admin.Layouts.css.main_css') --}}
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="styles<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-XYZ123..." crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ABC123..." crossorigin="anonymous" />

   
</head>
<body>
 

   
   
      
    <div class="body-wrapper">
       
        <!-- partial:partials/_sidebar.html -->
       
          @include('Dashboard.student.layouts.sidebar')

    
        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
          <!-- partial:partials/_navbar.html -->
          @include('Dashboard.student.layouts.navbar')
       
            @yield('student_content')


          <!-- partial -->
         
        </div>
      </div>    



        <!-- partial:partials/_footer.html -->
      
        <!-- partial -->
      </div>
           
       
        
    <!-- Footer Section -->
    @include('Dashboard.student.Layouts.footer')

    <!-- Include JavaScript -->
    {{-- @include('Admin.Layouts.js.main_js') --}}
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/material.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    
</body>
</html>
