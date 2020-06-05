<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('profile.password');
    }
    
    
    public function store(Request $request)
    {
               $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ],
        [
            'current_password.required' => 'Ingrese su contraseña actual.',
            'new_password.required' => 'Ingrese su nueva contraseña.',
            'new_password.confirmed' => 'La confirmación de la nueva contraseña no coincide.',
        ]);


        if (!(Hash::check($request->current_password, Auth::user()->password))) {

            return redirect()->back()->with("error","La contreña actual no coincide con la contraseña que ingreso. Inténtelo de nuevo.");
        }

        if(strcmp($request->current_password, $request->new_password) == 0){
            return redirect()->back()->with("error","La nueva contraseña no puede ser la misma que su contraseña actual. Por favor elija una contraseña diferente.");
        }

 


        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();


        return redirect()->route('profile.index')->with("success","Su contraseña ha cambio exitosamente!");


        // return dd($request->current_password);

        // return var
    }
}
