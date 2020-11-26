<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormularioControlador extends Controller
{
    public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'marisol.her'){
            $url='login';
        } else {
            $url='notlogin';
        }
        return view($url,[
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
    }
}
