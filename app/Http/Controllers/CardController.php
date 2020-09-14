<?php

namespace App\Http\Controllers;

use App\Card;
use App\Tarefa;
use Exception;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //

    public function addListAction(Request $request){

        $titulo = $request->input('nome');

        try{
            if(!empty($titulo)){

                $lista = new Card();
                $lista->nome = $titulo;
                $lista->id_user = $request->session()->get('id');
                $lista->save();
    
                $status = 200;
                $mensagem = 'Os dados foram enviados com successo';
            }else{
                $status = 404;
                $mensagem = 'Os dados não foram enviados';
            }
        }catch(Exception $e){
            $status = 404;
            $mensagem = $e->getMessage();
        }

        return[
            'status' => $status,
            'mensagem' => $mensagem
        ];
    }

    public function delAction($idCard){
        if(!empty($idCard)){

            $card = Card::find($idCard);
            $tarefa = Tarefa::where('id_card', '=', $idCard)->delete();
            $card->delete();

            $status = 200;
            $mensagem = 'Dados deletados com sucesso';
        }else{
            $status = 404;
            $mensagem = 'Dados não foram enviados';
        }   

        return [
            'status' => $status,
            'mensagem' => $mensagem
        ];
    }
}
