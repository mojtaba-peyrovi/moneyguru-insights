
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    @yield('stylesheets')
  </head>

  <body>
      @yield('content')



      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="bootstrap/bootstrap.js"></script>
      <script src="js/number-divider.js" charset="utf-8"></script>
      <!-- Icons -->
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
      <!-- Graphs -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script>
        feather.replace()
      </script>
      @yield('scripts')
  </body>
</html>
