<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    //

    public function list(){
        $list = DB::select('SELECT * FROM tarefas');
        $card =  DB::select('SELECT id,nome FROM cards');
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
    public function editAction(Request $request,$id){
        
        if($request->filled('titulo')){
            $data = DB::select('SELECT * FROM tarefas WHERE id = :id',
                [
                    'id' => $id
                ]
            );
            // print_r($data[0]);
            $titulo = $request->input('titulo');
            if(count($data) > 0){
                DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id',
                    [
                        'id' => $id,
                        'titulo' => $titulo
                    ]
                );
            }
        }else{
            return redirect()->route('tarefas.edit',['id'=>$id])->with('aviso','Você não preencheu um titulo.');   
        }

        return redirect()->route('tarefas.list');

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
