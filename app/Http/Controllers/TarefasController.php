<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Tarefa;
use Exception;

class TarefasController extends Controller
{
    public function list(){
        $list = Tarefa::all();
        $card =  Card::all();
        return view('tarefas.list',[
            'list'=>$list,
            'card'=>$card
        ]);
    }
    
    public function add(){
        return view('tarefas.add');
        
    }
    public function addAction(Request $request){
       if($request->filled('titulo')){
            $titulo = $request->input('titulo');
            DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)',[
                'titulo'=> $titulo
            ]);

            return redirect()->route('tarefas.list');   
        }else{
            return redirect()->route('tarefas.add')->with('aviso','Você não preencheu um titulo.');    
        }
    }
    public function edit($id){
        
        $data = DB::select('SELECT * FROM tarefas WHERE id = :id',
            [
                'id' => $id
            ]
        );
        // print_r($data[0]);
        if(count($data)){
            return view('tarefas.edit',['data' => $data[0]]);
        }else{
            return redirect()->route('tarefas.list');
        }

        
    }

    public function editAction(int $id,int $card){
        
        try{
            if(!empty($id) && !empty($card)){

                $tarefa = Tarefa::find($id);
                $tarefa->id_card = $card;
                $tarefa->save();

                $status = 220;
                $mensagem = 'Item alterado com sucesso';
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
    
    public function del($id){
        DB::delete('DELETE FROM tarefas WHERE id = :id',['id' => $id]);
        return redirect()->route('tarefas.list');
    }

    public function done($id){
        DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', 
            [
                'id' => $id
            ]
        );
        
        return redirect()->route('tarefas.list');
    }
}
