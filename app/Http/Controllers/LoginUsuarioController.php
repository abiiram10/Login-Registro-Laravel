<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_usuario;
use \Illuminate\Support\Facades\Validator ;
use Auth;


class LoginUsuarioController extends Controller
{
    public function RegistroCliente(Request $request)
    {
        $validacion = Validator ::make($request->all(),
            [
               'vchNombre' => 'required|max:50',
                'vchAPaterno' => 'required|max:50',
                'vchAMaterno' => 'required|max:50',
                'email' => 'email|unique:tbl_usuario',
                'password' => 'required|min:6'
            ]);
        if ($validacion->fails())
        {
            return redirect('/#register')
                ->withInput()
                ->withErrors($validacion);
        }

        $user = new tbl_usuario();
        $user->vchNombre = $request->vchNombre;
        $user->vchAPaterno = $request->vchAPaterno;
        $user->vchAMaterno = $request->vchAMaterno;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return 'Completado';

    }


    public  function  LoginUsuario()
    {
        $credenciales = $this->Validate(request(),
        [
            'email' => 'email',
            'password' => 'min:6'
        ]);

        if (Auth::attempt($credenciales))
        {
            return 'Login ok';
        }
        else
        {
            return back()
                ->withErrors(['email'=>trans('auth.failed')])
                ->withInput(request(['email']));
        }
    }
}
