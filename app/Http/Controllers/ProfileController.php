<?php

namespace App\Http\Controllers;


use App\Role;
use App\User;
use App\Charge;
use App\Mailing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
 
        $this->middleware('auth');
    }

    public function index(){
        $charges = Charge::all();
        $user = Auth::user();
        $mailings = Mailing::where('user_id', $user->id)->count();

        return view('profile.edit', compact('user','charges','mailings'));
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

   
}
