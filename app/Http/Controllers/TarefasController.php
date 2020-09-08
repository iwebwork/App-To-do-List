<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Tarefa;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class TarefasController extends Controller
{

    public function selecionarEvento($idTarefa){

        if(!empty($idTarefa)){

            $tarefa = Tarefa::find($idTarefa);
            $cards = Card::all();

            $dados = [
                'tarefa' => $tarefa,
                'cards' => $cards
            ];
            $status = 200;
            $mensagem = 'Os dados foram enviados';

        }else{
            $dados = null;
            $status = 404;
            $mensagem = 'Os dados não foram selecionados corretamente';
        }
        return [
            'dados' => $dados,
            'status' => $status,
            'mensagem' => $mensagem
        ];

    }

    public function list(Request $request){
        $user = User::find($request->session()->get('id'));

        if($user){
            $list = Tarefa::all();
            $card =  Card::all();
                    
            return view('tarefas.list',[
                'list'=>$list,
                'card'=>$card,
                'user'=>$user->name
            ]);
        }else{
            return redirect('/login');
        }

    }
    public function addAction(Request $request){

       if(!empty($request->filled('titulo')) && !empty($request->filled('idCard'))){
            $titulo = $request->input('titulo');
            $idCard = $request->input('idCard');

            $tarefa = new Tarefa();
            $tarefa->titulo = $titulo;
            $tarefa->id_card = $idCard;
            $tarefa->save();

            $status = 200;
            $mensagem = 'Dados enviados';
        }else{
            $status = 404;
            $mensagem = 'Dados não foram enviados';
        }

        return [
            'status' => $status,
            'mensagem' => $mensagem
        ];    
    }
    public function edit(Request $request){
        $idEvento = $request->input('idEvento');
        
        
        if(!empty($idEvento)){
            $tarefa = Tarefa::find($idEvento);

            if (!empty($request->input('idCard'))){
                $idCard = $request->input('idCard');
                $tarefa->id_card = $idCard;
            }
            
            if(!empty($request->input('tituloEvento'))){
                $tituloEvento = $request->input('tituloEvento');
                $tarefa->titulo = $tituloEvento;
            }

            $tarefa->save();

            $status = 200;
            $mensagem = 'Operação realizada com sucesso';
        }else{
            $status = 404;
            $mensagem = 'Os dados não foram enviados';
        }

        return [
            'status' => $status,
            'mensagem' => $mensagem
        ];

    }

    public function editAction(int $id,int $card){
        
        try{
            if(!empty($id) && !empty($card)){

                $tarefa = Tarefa::find($id);

                if(Tarefa::where('id_card','=',$card)->where('id','=',$id)->count() > 0){
                    $status = 404;
                    $mensagem = 'Não pode cadastrar o registro no mesmo evento';    
                }else{
                    $tarefa->id_card = $card;
                    $tarefa->save();

                    $status = 220;
                    $mensagem = 'Item alterado com sucesso';
                }
            }else{
                $status = 404;
                $mensagem = 'Os dados não foram enviados';
            }
    
        }catch(Exception $e){
            $status = 500;
            $mensagem = $e->getMessage();
        }
        
        return [
            'status' => $status,
            'mensagem' => $mensagem,
        ];

        
    }
    
    public function delAction($id){
        if(!empty($id)){

            $tarefa = Tarefa::find($id);
            $tarefa->delete();

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
