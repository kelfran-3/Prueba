<?php


namespace App\Http\Controllers;

use App\Mail\MessageReceived;

use Illuminate\Support\Facades\Mail;

class messagecontroller extends Controller
{


    public function store()
    {

      $msg = request()->validate([

      'name'=>'required',
      'email'=>'required',
      'subject'=>'required',
      'contend'=>'required'

     ], [
 
         'name.required' => __('I need your name') //PARA ENVIAR MENSAJES DE ERROR PERSONALIZADO ES IMPORTANTE REALIZAR LA TRADUCCION EN {}es.json

     ]);

      mail::to('Apontekelfran@gmail.com')-> queue(new MessageReceived($msg));


      return back()->with('status','We received your message, we will answer you in 24hrs');
    }
}
