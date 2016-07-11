<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MessageRequest;

use App\Message;
use Alert;

class MessageController extends Controller
{
   	
   	public function store(MessageRequest $request)
	{
	    $input 	= $request->all();

	    $nome   = $input['nome']; 
	    $email  = $input['email']; 
	    $endereco  = $input['endereco']; 
	    $telefone  = $input['telefone']; 
	    $celular  = $input['celular']; 
	    $whatsapp  = $input['whatsapp']; 
	    $sugestao  = $input['sugestao']; 

		Message::create($request->all());

	    Alert::success('Sua sugestão foi enviada!')->autoclose(4000);

	    Mail::send('mail.mail', [
         		'nome' => $nome, 
         		'email' => $email, 
            	'endereco' => $endereco, 
            	'telefone' => $telefone, 
            	'celular' => $celular, 
            	'whatsapp' => $whatsapp, 
            	'sugestao' => $sugestao
         	], function ($m) use ($nome, $email, $endereco, $telefone, $celular, $whatsapp, $sugestao) {
            
            $m->to($email)
              ->cc('carlosserrao23@gmail.com', 'Muda São Caetano')
              ->subject("Muda São Caetano - Nova sugestão");
        });

	    return redirect()->intended('/');
	}	
}




