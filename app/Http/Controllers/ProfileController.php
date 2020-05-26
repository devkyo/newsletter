<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Charge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $charges = Charge::all();
        $user = Auth::user();
        return view('profile.edit', compact('user','charges'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'      =>  'required|min:4',
            'first_surname' =>  'required|min:3',
            'password'  =>  'sometimes',
            'charge_id'    =>  'required'
        ],
        [
            'charge_id.required'            =>  'Selecionar un cargo es obligatorio.',
            'first_surname.required'        =>  'El Apellido Parterno es obligatorio.',
            'first-surname.min:3'           =>  'El apellido debe contener minimo 3 caracteres.'
        ]);

        if($request->hasFile('avatar')){
            $file = $request->avatar;
            $avatarname = time().$file->getClientOriginalName();
            $file->move(public_path().'/profiles/', $avatarname);
        }else {
            $avatarname= $user->avatar;
        }

        $user->update($request->except('avatar'));
        $user->avatar = $avatarname;
        $user->charge_id = $request->charge_id;
        $user->email = $user->email;
        $user->save();
        return redirect()->route('profile.index')
            ->with('success','Usuario actualizado correctamente.');

    }

    // public function edit(){
    //     $charges = Charge::all();
    //     $user = Auth::user();
    //     return view('profile.edit',compact('user','charges'));
    // }


    public function changePasswordForm()
    {
        return view('profile.password');
    }
    
    
    public function changePassword(Request $request)
    {
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
            return back()->with('error','La contraña ingresada es incorrecta.');
        }
    }
}
