<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title') - Fiocruz</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- Font Awesome CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

   @stack('styles')
</head>
<body>
   
  <main class="bg-light vh-100 d-flex justify-content-center align-items-center">
      <div style="width:1045px">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  @yield('content')
               </div>
            </div>
         </div>
      </div>
  </main>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>