<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){

        return view('templates.forgotPassword');

    }

    public function verifyUserExist(Request $request)
    {
        $creds = $request->only(['name']);

        if (User::where('name',$creds['name'])->get()->count() == 1) {
            $user = User::where('name',$creds['name'])->get();
            foreach ($user as $value) {
                $dados['id'] = $value->id;                
            }
            $status = 200;
            $message = 'Usuario Existe';
        }else{
            $user = null;
            $status = 404;
            $message = 'Usuario não Existe';
        }

        return [
            'status' => $status,
            'message' => $message,
            'user' => $dados
        ];

    }

    public function updateUser(Request $request, $idUser)
    {
        $creds = $request->only(['password']);
        $user = User::find($idUser);
        if($user){
            $user->password = md5($creds['password']);
            $user->save();
            $status = 200;
            $message = 'Senha alterada com sucesso';
        }else{
            $status = 404;
            $message = 'Erro ao salvar os dados';
        }

        return [
            'status' => $status,
            'message' =>$message,
        ];
        
    }

}
