<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/';

    protected $redirectAfterLogout = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Logout, Clear Session, and Return.
     *
     * @return void
     */
    public function logout()
    {
        // $user = Auth::user();
        // Log::info('User Logged Out. ', [$user]);
        Auth::logout();
        Session::flush();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    public function index()
    {
        if(!empty($_SESSION['user'])){
            return redirect('/');
        }else{
            return view('templates.login');
        }
    }

    public function authenticate(Request $request)
    {
        $creds = $request->only(['email','password']);
        try{
            $user = User::where('email',$creds['email'])->where('password',md5($creds['password']))->get();

            if ($user->count() == 1) {

                session_start();
                foreach ($user as $value) {
                    $request->session()->put('id',$value->id);
                }

                $status = 200;
                $mensagem = 'Usuario logado com sucesso';
                
            } else{
                $status = 404;
                $mensagem = 'Usuario não existe';
            }
        }catch(Exception $e){
            $status = 404;
            $mensagem = $e->getMessage();
        }
        return [
            'status' => $status,
            'mensagem' => $mensagem,
            'user' => $user
        ];  
        
    }
}
