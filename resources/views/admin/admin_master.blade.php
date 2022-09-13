<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('public/backend/images/favicon.ico')}}">

  <title> RMU University Management System - Dashboard</title>

  <!-- Vendors Style-->
  <link rel="stylesheet" href="{{ asset('/public/backend/css/vendors_css.css') }}">

  <!-- Style-->
  <link rel="stylesheet" href="{{ asset('public/backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/backend/css/skin_color.css') }}">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

  <div class="wrapper">

    @include('admin.body.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.body.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('admin')
    <!-- /.content-wrapper -->

    @include('admin.body.footer')

    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->


  <!-- Vendor JS -->
  <script src="{{ asset('public/backend/js/vendors.min.js') }}"></script>
  <script src="{{ asset('public/assets/icons/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
  <script src="{{ asset('public/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
  <script src="{{ asset('public/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>


  <script src="{{asset('public/assets/vendor_components/datatable/datatables.min.js')}}"></script>
  <script src="{{asset('public/backend/js/pages/data-table.js')}}"></script>


  <!-- Sunny Admin App -->
  <script src="{{ asset('public/backend/js/template.js') }}"></script>
  <script src="{{ asset('public/backend/js/pages/dashboard.js') }}"></script>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script type="text/javascript">
    $(function() {
      $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
          title: 'Are you sure?',
          text: "Delete This Data?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })


      });

    });
  </script>

<script type="text/javascript">
  $(function() {
    $(document).on('click', '#added', function(e) {
      e.preventDefault();
      var link = $(this).attr("href");


      Swal.fire({
        title: 'Are you sure?',
        text: "Add This Data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Add it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link
          Swal.fire(
            'Added!',
            'Your file has been added.',
            'success'
          )
        }
      })


    });

  });
</script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
      case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

      case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

      case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

      case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
  </script>



</body>

</html>