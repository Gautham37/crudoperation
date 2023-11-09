<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="{{asset('assets').'/'}}" data-template="vertical-menu-template-semi-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php /*/ @vite(['resources/sass/app.scss', 'resources/js/app.js']) /*/ ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/plyr/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />

    <!-- Vendors CSS -->
    
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-statistics.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-analytics.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>

    <!-- Toast Alert -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/izitoast/dist/css/iziToast.min.css">

</head>
<body>
    

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
   <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
         <div class="app-brand demo mt-3 mb-2">
            <a href="{{url('/')}}" class="app-brand-link ">
               <span class="app-brand-logo demo">
                  <img width="80%" src="{{asset('assets/img/logo.png')}}" />
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
               <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z" fill="currentColor" fill-opacity="0.6" />
                  <path d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z" fill="currentColor" fill-opacity="0.38" />
               </svg>
            </a>
         </div>
         <div class="menu-inner-shadow"></div>
         <ul class="menu-inner py-1">
            <!-- Dashboards -->

            <li class="menu-item  {{  (Request::is('/*') || Request::is('home*')) ? 'active' : '' }}">
               <a href="{{route('home')}}" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                  <div>Dashboard</div>
               </a>
            </li>

            <li class="menu-item  {{  (Request::is('companies*')) ? 'active' : '' }}">
               <a href="{{route('companies.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-factory"></i>
                  <div>Companies</div>
               </a>
            </li>

            <li class="menu-item  {{  (Request::is('employees*')) ? 'active' : '' }}">
               <a href="{{route('employees.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-account"></i>
                  <div>Employees</div>
               </a>
            </li>

         </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
         <!-- Navbar -->
         <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
               <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
               <i class="mdi mdi-menu mdi-24px"></i>
               </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
               <!-- Search -->
               <div class="navbar-nav align-items-center">
                  <div class="nav-item navbar-search-wrapper mb-0">
                     <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                     <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                     <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                     </a>
                  </div>
               </div>
               <!-- /Search -->
               <ul class="navbar-nav flex-row align-items-center ms-auto">
                  
                  
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                     <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                           <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                           <a class="dropdown-item">
                              <div class="d-flex">
                                 <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                       <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                 </div>
                                 <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                                    <small class="text-muted">Admin</small>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                     </ul>
                  </li>
                  <!--/ User -->
               </ul>
            </div>
            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper  d-none">
               <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
               <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
         </nav>
         <!-- / Navbar -->
         <!-- Content wrapper -->
         <div class="content-wrapper">
            
            @yield('content')

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
               <div class="container-xxl">
                  <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                     <div class="mb-2 mb-md-0">
                        © <script>document.write(new Date().getFullYear())</script>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
         </div>
         <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
   </div>
   <!-- Overlay -->
   <div class="layout-overlay layout-menu-toggle"></div>
   <!-- Drag Target Area To SlideIn Menu On Small Screens -->
   <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
    


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
    <!-- Toast Alert -->
    <script src="https://unpkg.com/izitoast/dist/js/iziToast.min.js"></script>
    <!-- Toast Alert -->

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/extended-ui-media-player.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>  
    <script type="text/javascript">
      function deleteItemLoad(elem) {

         var id  = $(elem).data('id');
         var url = $(elem).data('url');

         iziToast.show({
            theme: 'dark',
            icon: 'fa fa-trash',
            overlay: true,
            title: 'Delete',
            message: 'Are you sure?',
            position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'yellow',
            backgroundColor: '#ff4d49', 
            messageColor: '#fff', 
            buttons: [
               ['<button>Yes</button>', function (instance, toast) {
                  
                     var token = "{{ csrf_token() }}";
                     $.ajax({
                        type: 'POST',
                        url: url,
                        data: {'_token': token, 'id': id, '_method': 'DELETE'},
                        success: function (response) {
                           iziToast.success({
                                 backgroundColor: '#72e128',
                                 messageColor: '#fff',
                                 timeout: 3000, 
                                 icon: 'fa fa-check', 
                                 position: "topRight", 
                                 iconColor:'#fff',
                                 message: 'Deleted Sucessfully'
                           });
                           instance.hide({transitionOut: 'fadeOutUp'}, toast, 'buttonName');  
                           setTimeout(function () { location.reload(); }, 1000);
                        }
                     }); 

               }, true], // true to focus
               ['<button>No</button>', function (instance, toast) {
                     instance.hide({
                        transitionOut: 'fadeOutUp',
                        onClosing: function(instance, toast, closedBy){
                           console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                        }
                     }, toast, 'buttonName');
               }]
            ]
         });

         }

    </script>
    @stack('scripts')

</body>
</html>
