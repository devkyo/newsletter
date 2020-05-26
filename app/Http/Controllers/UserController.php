<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Charge;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\MessageCreateAccount;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Egulias\EmailValidator\EmailValidator;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->beforeFilter(function() {
        //     if(Auth::user()->rol->name != 'Administrador') return redirect::to('/'); // home
        // });
        $this->middleware('admin');
    }

    public function index()
    {  
        $users = User::latest()->paginate(5);
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

 
    public function create()
    {
        $roles = Role::all();
        $charges = Charge::all();
        return view('users.create',compact('charges','roles'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'      =>  'required|min:4',
            'first_surname' =>  'required|min:3',
            'email'     =>  'required|email|unique:users',
            'password'  =>  'sometimes',
            'charge_id' =>  'required',
            'rol_id'    =>  'required'
        ],
        [
            'charge_id.required'            =>  'Selecionar un cargo es obligatorio.',
            'rol_id.required'               =>  'Selecionar un rol es obligatorio',
            'first_surname.required'        =>  'El Apellido Parterno es obligatorio.',
            'first-surname.min:3'           =>  'El apellido debe contener minimo 3 caracteres.'
        ]);

        if($request->hasFile('avatar')){
            $file = $request->avatar;
            $avatarname = time().$file->getClientOriginalName();
            $file->move(public_path().'/profiles/', $avatarname);
        }else {
            $avatarname='profiledefault.jpg';
        }

        $password = Str::random(8);
        $request['password'] = $password;

        $message = $request->all();

        Mail::to($request->email)->send(new MessageCreateAccount($message));

        $user = User::create($request->except('avatar'));
        $user->avatar = $avatarname;
        $user->password = Hash::make($password);
        $user->save();
        return redirect()->route('users.index')
            ->with('success','Usuario creado correctamente.');

    }


    public function show(User $user)
    {
        // return view('users.show',compact('user'));
        return User::find($user->id);
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $charges = Charge::all();
        return view('users.edit',compact('user','charges','roles'));
    }


    public function update(Request $request, User $user)
    {

        $request->validate([
            'name'      =>  'required|min:4',
            'first_surname' =>  'required|min:3',
            'password'  =>  'sometimes',
            'charge_id' =>  'required',
            'rol_id'    =>  'required'
        ],
        [
            'charge_id.required'            =>  'Selecionar un cargo es obligatorio.',
            'rol_id.required'               =>  'Selecionar un rol es obligatorio',
            'first_surname.required'        =>  'El Apellido Parterno es obligatorio.',
            'first-surname.min:3'           =>  'El apellido debe contener minimo 3 caracteres.'
        ]);

        if($request->hasFile('avatar')){
            $file = $request->avatar;
            $avatarname = time().$file->getClientOriginalName();
            $file->move(public_path().'/profiles/', $avatarname);
            // File::delete(public_path().'/profiles/'.$user->avatar);
        }else {
            $avatarname= $user->avatar;
        }

        $user->update($request->except('avatar'));
        $user->avatar = $avatarname;
        $user->rol_id = $request->rol_id;
        $user->charge_id = $request->charge_id;

        // return dd($request->all());
        $user->save();
        return redirect()->route('users.index')
            ->with('success','Usuario actualizado correctamente.');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('success','Usuario eliminado');
    }


    // public function passwordUpdate(Request $request, User $user){

    //     if($request->password === $user->password){

    //         $password['password'] = $request->new_password;


    //         $user->update($request->except('avatar'));
    
    //         $user->avatar = $avatarname;
    //         $user->rol_id = $request->rol_id;
    //         $user->charge_id = $request->charge_id;
    
    //         $user->save();


    //         return dd($request->all());
    

    //     }else {
    //         return 'La contraseña actual es incorrecta';
    //     }
        
        
    // }

    public function getUser($id){
        // return User::bind($id);
        return 'Hola'.$id;
    }


    public function changePasswordForm()
    {
        return view('users.change');
    }
    
    
    public function changePassword(Request $request)
    {
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
            return back()->with('error','La contraña ingresada es incorrecta.');
        }
    }
    

}
