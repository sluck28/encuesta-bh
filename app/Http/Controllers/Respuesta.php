<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;

class Respuesta extends Controller
{
    //
    function index()
    {
        $preguntas = Questions::all();
        return view('welcome', compact('preguntas'));
    }



    public function store(Request $request)
    {


        $request->validate([
            'question_id.*' => 'required', // Asegura que al menos una opción esté seleccionada para cada pregunta
        ], [
            'question_id.*.required' => 'Debes seleccionar al menos una opción para cada pregunta.',
        ]);
        $respuestas = $request->input('question_id');
        foreach ($respuestas as $preguntaId => $respuesta) 
        {            
            $respuestaString = implode(',', $respuesta);            
            $respuestaModel = new Answers();
            $respuestaModel->question_id = $preguntaId;
            $respuestaModel->answer = $respuestaString;            
            $respuestaModel->save();
        }                
        return redirect()->back();
    }
}
