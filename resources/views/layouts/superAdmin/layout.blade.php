<!DOCTYPE html>
<html lang="en">
  
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <title>{{$settings->first()->name}} - Admin Dashboard</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('superAdmin/lib/remixicon/fonts/remixicon.css') }} ">
    <link rel="stylesheet" href="{{ asset('superAdmin/lib/prismjs/themes/prism.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('superAdmin/lib/jqvmap/jqvmap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('superAdmin/lib/apexcharts/apexcharts.css') }} ">
            <link href="{{ asset('superAdmin/lib/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('superAdmin/css/style.min.css') }} ">

    <!-- DataTables -->
    <link href="{{ asset('superAdmin/lib/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('superAdmin/lib/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('superAdmin/lib/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />   
  </head>
  <body >

    @yield('content')

   
    <script src="{{ asset('superAdmin/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('superAdmin/lib/prismjs/prism.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/apexcharts/apexcharts.min.js') }}"></script>
    <!--Wysiwig js-->
    <script src="{{ asset('superAdmin/lib/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('superAdmin/js/jquery.form-editor.init.js') }}"></script>

    <script src="{{ asset('superAdmin/js/script.js') }}"></script>
    <script src="{{ asset('superAdmin/js/db.data.js') }}"></script>
    <script src="{{ asset('superAdmin/js/db.analytics.js') }}"></script>
    <script src="{{ asset('superAdmin/js/jquery.core.js') }}"></script>
     <!-- Required datatable js -->
    <script src="{{ asset('superAdmin/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/dataTables.bootstrap5.min.js') }}"></script>

      <!-- lib/amples -->
    <script src="{{ asset('superAdmin/lib/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/buttons.colVis.min.js') }}"></script>
     <!-- Responsive examples -->
    <script src="{{ asset('superAdmin/lib/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('superAdmin/pages/jquery.datatable.init.js') }}"></script>
    
     <script src="{{ asset('superAdmin/lib/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('superAdmin/lib/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('superAdmin/pages/jquery.form-repeater.js') }}"></script>

    
   
    <script>
      'use script'

      var skinMode = localStorage.getItem('skin-mode');
      if(skinMode) {
        $('html').attr('data-skin', 'dark');
      }
      // Multiple
      $('#select2D').select2({
        placeholder: 'Choose multiple',
        minimumResultsForSearch: Infinity
      });
    </script>

<script>
    'use strict'

    var toastTrigger = document.getElementById('liveToastBtn')
    var toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
      toastTrigger.addEventListener('click', function () {
        var toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
      })
    }

  </script>
  <script>
    document.querySelector('form').addEventListener('submit', function (event) {
        // Show the loading spinner
        document.getElementById('saveChangesBtn').classList.add('d-none');
        document.getElementById('loadingSpinner').classList.remove('d-none');
    });
</script>

  </body>

</html>
