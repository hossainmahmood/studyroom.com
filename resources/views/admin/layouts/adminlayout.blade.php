<!doctype html>
<html lang="en">
  <head>
    <title> @yield('title') </title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"> 
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"> 
    <link href= {{-- asset('css/dashboard.css') --}} rel="stylesheet">
    <link href= {{ asset('css/sidebars.css') }} rel="stylesheet">
  </head>

  <body>
    @include('admin.layouts.header')

    <div class="container-fluid">
      <div class="row">
        @include('admin.layouts.sidebar')

        <main role="main" class="col-lg-10 col-md-auto col-sm-auto pt-3 px-3">
          @yield('content')    
        </main>

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>    
  
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src= {{ asset('js/sidebars.js') }} ></script>
    <script src= {{ asset('dist/js/bootstrap.bundle.min.js') }}></script>

  
  <script type="text/javascript">
     $(document).ready(function() {
    $('#myschoolDT').DataTable(
      {
        responsive: true,
         scrollX: true,
         scrollY: 420,
         scrollCollapse: true,
         paging: true
        }
    );
} );
 
/*
      $('#student-collapse').addClass( "collapse show" );
      alert("clicked link");   
      
  });*/

  </script>
    
  </body>
  
</html>
