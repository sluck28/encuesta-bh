<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        
        <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Encuesta</title>
</head>

<style>
    body {
        background-color: rgb(211, 246, 255)
    }
</style>
<body class="antialiased">
    <header>
        <nav class="navbar  bg-body-tertiary" style="background-color: rgb(181, 234, 248);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/bhtrade.png') }}" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                    BH TRADE MARKET S.A. DE C.V.
                </a>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <div class="row ">
            <div class="col-md-2">
                <img src="{{ asset('img/bhtrade.png') }}" alt="" width="80" height="80">
            </div>
            <div class="col-md-9">
                <h1 class="">EVALUACIÓN CLIMA LABORAL 2023</h1>
            </div>
        </div>
        <hr>
        <div class="card shadow rounded-3 card-sm">
            <div class="card-body">
              <h5 class="card-title text-center fs-1">Encuesta enviada correctamente. !Gracias!</h5>                      
            </div>
          </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>
</html>
