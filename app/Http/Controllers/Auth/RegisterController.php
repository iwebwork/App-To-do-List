<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/activate';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'except' => 'logout',
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make(
            $data,
            [
                'name'      => 'required|max:100|unique:users',
                'email'     => 'required|email|max:200',
                'password'  => 'required|min:4|max:200',
                'token'     => 'min:4|max:200'
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
    
        $user = User::create([
            'name'              => strip_tags($data['name']),
            'email'             => $data['email'],
            'password'          => Hash::make($data['password']),
            'token'             => Hash::make(random_bytes(200))
        ]);

        return $user;
    }

    public function index()
    {
        return view('templates.register');
    }

    public function insert(Request $request)
    {
        $data = $request->only(['name','email', 'password']);
        $confirmation['password_confirmation'] = $request->input('password_confirmation');
        $confirmation['password'] = $request->input('password');
        $validator = $this->validator($data);

        if($validator->fails()){
            $status = 404;
            $mensagem = $validator->errors();
            
        }else if(!empty($confirmation['password']) && !empty($confirmation['password'])){
            if($confirmation['password_confirmation'] === $confirmation['password']){
                $user = $this->create($data);
                $status = 200;
                $mensagem['mensagem'] = 'Usuario inserido com sucesso';
            }else{
                $status = 404;
                $mensagem['mensagem'] = 'As senha não conferem';
            }
    
        } 
    
        return [
            'status' => $status,
            'mensagem' => $mensagem       
        ];
    }
}
