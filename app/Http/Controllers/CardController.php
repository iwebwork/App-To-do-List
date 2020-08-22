<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //

    public function addListAction(Request $request){

        $titulo = $request->input('nome');

        if(!empty($titulo)){

            $lista = new Card();
            $lista->nome = $titulo;
            $lista->save();

            $status = 200;
            $mensagem = 'Os dados foram enviados com successo';
        }else{
            $status = 404;
            $mensage = 'Os dados não foram enviados';
        }

        return[
            'status' => $status,
            'mensagem' => $mensagem
        ];
    }
}
