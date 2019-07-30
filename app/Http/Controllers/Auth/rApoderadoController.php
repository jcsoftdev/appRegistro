<?php

namespace RegistroAsistencia\Http\Controllers;


use Illuminate\Http\Request;
use RegistroAsistencia\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class rApoderadoController extends Controller
{

    public function showregistrarAForm()
    {
        return view('vistas.registrarApoderado');
    }

    public function registrar(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function registered(Request $request, $user)
    {
        //
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'id'=>['required', 'number'],
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'celular' => ['required', 'string', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            //'id' => $data['id'],
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'direccion' => $data['direccion'],
            'celular' => $data['celular'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
            
        ]);
    }




}
