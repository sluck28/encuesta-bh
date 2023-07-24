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

    function finish()
     {
        
        return view('finish');
      }


    public function store(Request $request)
    {
             

        $respuestas = $request->input('question_id');
        foreach ($respuestas as $preguntaId => $respuesta) 
        {            
            $respuestaString = implode(',', $respuesta);            
            $respuestaModel = new Answers();
            $respuestaModel->question_id = $preguntaId;
            $respuestaModel->answer = $respuestaString;            
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }

}