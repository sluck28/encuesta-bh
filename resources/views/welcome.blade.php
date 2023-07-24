<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <link rel="stylesheet" href="sweetalert2.min.css">
    <title>EVALUACIÓN CLIMA LABORAL</title>
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
        <div id="introduccion">
            <section class="bg-white p-4 rounded shadow-lg">
                <p class="fw-bold">
                    ¡Bienvenido(a) estimado(a) colaborador(a) de BH TRADE MARKET S.A. DE C.V.!
                    El siguiente cuestionario tiene como objetivo conocer que tan satisfechos (as) se sienten nuestros
                    (as) colaboradores(as) en su posición actual dentro de esta empresa y que Dirección General pueda
                    conocer el sentir y la opinión cada uno de ustedes para tomar decisiones que ayuden al desarrollo
                    personal y profesional de sus equipos de trabajo.
                    Pedimos de tu valioso apoyo con tu respuesta de la manera más honesta y objetiva, recordando que no
                    existen respuestas buenas o malas, ya que buscamos mejorar de manera continua las condiciones
                    laborales de BH TRADE MARKET.
                    Este cuestionario será respondido de manera anónima y toda la información recopilada será utilizada
                    con fines estadísticos.
                    Te recomendamos leer cuidadosamente cada pregunta y no dejar ninguna pregunta son responder.
                    La duración aproximada de este cuestionario es de 10 minutos.
                    ¡Muchas gracias por tu apoyo!

                </p>
            </section>
        </div>
        @if (session('success'))
            <div class="mt-4 alert alert-sm alert-success">
                {{ session('success') }}
            </div>
        @endif
        <hr>

        <form action="{{ route('encuesta.save') }}" method="POST">
            @csrf
            @foreach ($preguntas as $pregunta)
                @php
                    $opciones = json_decode($pregunta->options);
                @endphp
                @switch($pregunta->type)
                    @case('Titulo')
                        <div class="card mb-3 text-center">
                            <div class="card-header bg-warning fw-bold">
                                {{ $pregunta->question }}
                            </div>
                        </div>
                    @break

                    @case('Unica')
                    <div class="card mb-3">
                        <div id="pregunta" class="card-header bg-info fw-bold">
                            {{ $pregunta->question }}
                        </div>
                        <div class="card-title">
                            <div class="form-check">
                                @if ($opciones !== null)
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($opciones as $opcion)
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <label>
                                                        <input class="mt-3" type="radio" name="question_id[{{ $pregunta->id }}][]"
                                                            value="{{ $opcion }}" required>
                                                        {{ $opcion }}
                                                    </label>                                                   
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                           
                        </div>
                    </div>
                    
                    @break

                    @case('Multiple')
                        <div class="card mb-3 ">
                            <div id="pregunta" class="card-header bg-info fw-bold">
                                {{ $pregunta->question }}
                            </div>
                            <div class="card-title">
                                <div class="form-check">
                                    @if ($opciones !== null)
                                <div class="container">
                                    <div class="row">
                                        @foreach ($opciones as $opcion)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <label>
                                                <input class="mt-3" type="checkbox" name="question_id[{{ $pregunta->id }}][]"
                                                value="{{ $opcion }}" onclick="limitarCasillas(this)" data-question-id="{{ $pregunta->id }}">
                                                {{ $opcion }}
                                            </label><br>
                                    </div>
                                        @endforeach
                                    </div>
                                </div>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    @break

                    @case('Libre')
                        <div class="card mb-3">
                            <div class="card-header bg-info fw-bold">
                                {{ $pregunta->question }}
                            </div>
                            <div class="card-title">
                                <div class="form-check">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <input class="mt-4 form-control rounded" type="text"name="question_id[{{ $pregunta->id }}][]" placeholder="Escribe tu respuesta" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @break
                    @default
                @endswitch              
            @endforeach
            @error('question_id')
                        <p>Faltan datos por llenar</p>
            @enderror
            <button id="btnEnviar" class="btn btn-success" type="submit">Enviar</button>
    </div>
    </form>
    <footer class="bg-light mt-4 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-muted">
                    BH TRADE MARKET S.A. DE C.V.&copy; 2023
                </div>
                <div class="col-md-6 text-end">
                   
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <script>
             function limitarCasillas(checkbox) {
        // Obtener todas las casillas de verificación en el grupo
        var checkboxes = document.querySelectorAll('input[name^="question_id[' + checkbox.dataset.questionId + '][]"]');

        // Contar las casillas seleccionadas
        var seleccionadas = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                seleccionadas++;
            }
        }

        // Permitir hasta dos casillas seleccionadas
        if (seleccionadas > 2) {
            checkbox.checked = false; // Desmarcar la casilla que se acaba de marcar
        }
    }
        </script>
</body>
</html>
