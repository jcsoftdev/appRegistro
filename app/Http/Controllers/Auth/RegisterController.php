<?php

namespace RegistroAsistencia\Http\Controllers\Auth;

use RegistroAsistencia\User;
use RegistroAsistencia\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'id'=>['required', 'number'],
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required', 'string', 'max:30'],
            'estado' => ['required', 'string', 'max:30'],
            'tipo_documento' => ['required', 'string', 'max:20'],
            'num_doc' => ['required', 'string', 'min:8'],
            'fech_nac' => ['required', 'string'],
            'celular' => ['required', 'string', 'min:9'],
            'direccion' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \RegistroAsistencia\User
     */
    protected function create(array $data)
    {
        return User::create([
            //'id' => $data['id'],
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
            'estado' => $data['estado'],
            'tipo_documento' => $data['tipo_documento'],
            'num_doc' => $data['num_doc'],
            'fech_nac' => $data['fech_nac'],
            'celular' => $data['celular'],
            'direccion' => $data['direccion'],
        ]);
    }
}
