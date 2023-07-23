<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Encuesta</title>
 </head>
    <body class="antialiased">
        <header>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
                  </a>
                </div>
              </nav>
        </header>
        <h1>EVALUACIÒN CLIMA LABORAL 2023</h1>
            <div id="introduccion">
                <section>
                    <p><span class="fw-bold">¡Bienvenido(a) estimado(a) colaborador(a) de BH TRADE MARKET S.A. DE C.V.!</span>
                        El siguiente cuestionario tiene como objetivo conocer que tan satisfechos (as) se sienten nuestros (as) colaboradores(as) en su posición actual dentro de esta empresa y que  Dirección General pueda conocer el sentir y la opinión cada uno de ustedes para tomar decisiones que ayuden al desarrollo personal y profesional de sus equipos de trabajo.
                        Pedimos de tu valioso apoyo con tu respuesta de la manera más honesta y objetiva, recordando que no existen respuestas buenas o malas, ya que buscamos mejorar de manera continua las condiciones laborales de BH TRADE MARKET.
                        Este cuestionario será respondido de manera anónima y toda la información recopilada será utilizada con fines estadísticos.
                        Te recomendamos leer cuidadosamente cada pregunta y no dejar ninguna pregunta son responder.
                        La duración aproximada de este cuestionario es de 10 minutos.</p>
                        <p><span class="fw-bold">¡Muchas gracias por tu apoyo!</span></p>
                </section>
            </div>
            <br>
            <hr>
            <div id="encuesta">
                <span class="fw-bold">INFORMACIÓN DE PERSONAL</span>
            </div>
            @foreach($preguntas as $pregunta)
            <div class="card">
                <div class="card-header">                    
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $loop->iteration }}.-{{$pregunta}}</h5>                                                    
                </div>
              </div>
            @endforeach
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p> BH TRADE MARKET S.A. DE C.V.&copy; 2023</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
