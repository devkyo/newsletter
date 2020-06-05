<?php

namespace App\Http\Controllers;

use App\Mailing;
use App\Project;
use App\Mail\AtomTemplate;

// templates 
use App\Mail\AlterTemplate;
use App\Mail\SensseTemplate;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Egulias\EmailValidator\EmailValidator;


class MailingController extends Controller
{
    public function index(Request $request){   
        $mailings = Mailing::latest()->paginate(10);
        return view('mailings.index',compact('mailings'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }   
    
    public function create(){
        $projects = Project::all();
        return view('mailings.create',compact('projects'));
    }

    public function getProject($id){

        $project = Project::all();
        return $project->find($id);

    }

    public function store(Request $request){

        $request->validate([
            'project_id'      =>  'required',
            'client' =>  'required|min:3',
            'email'     =>  'required|email',
            'subject' =>  'required',
        ],
        [
            'project_id.required'            =>  'Necesita selecionar un proyecto.',
            'client.required'               =>  'Ingrese el nombre de su cliente',
            'email.required'        =>  'Ingrese un correo del cliente.',
            'subject.required'           =>  'Ingrese un asunto del mensaje.'
        ]
    );

        $asesor = Auth::user();
        
        $allProjects = Project::all();
        $project =  $allProjects->find($request->project_id);
        
        $message = $request->all();

        $message['fullname'] = $asesor->name.' '. $asesor->first_surname;
        $message['phone'] = $asesor->phone;
        $message['avatar'] = $asesor->avatar;
        $message['charge'] = $asesor->charge->name;
        $message['email_asesor'] = $asesor->email;

        $message['projectname'] = $project->name;
        $message['bedrooms'] = $project->bedrooms;
        $message['from'] = $project->from;
        $message['to'] = $project->to;
        $message['status'] = $project->status;
        $message['year'] = $project->year;
        $message['address'] = $project->address;
        $message['district'] = $project->district;
        $message['image'] = $project->image;
        
        $subject = $request->subject; 

        if($request->project_id === '1'){
            Mail::to($request->email)->send(new AtomTemplate($message, $subject)); 
        }elseif($request->project_id === '3'){
            Mail::to($request->email)->send(new SensseTemplate($message, $subject));
        }elseif($request->project_id === '4'){
            Mail::to($request->email)->send(new AlterTemplate($message, $subject));
        }




  
        $request['project_id'] = intval($request->project_id);
        $request['user_id'] = Auth::user()->id;
      
        $mailing = Mailing::create($request->all());
        $mailing->save();

        return redirect()->route('mailings.index')
            ->with('success','Correo enviado correctamente.');



     
    }

    public function destroy(Request $request)
    {
        $mailing = Mailing::findOrFail($request->mailing_id);

        $mailing->delete();
        return redirect()->route('mailings.index')
            ->with('success','Mail eliminado');

        // return dd($request->all());
    }


    public function preview(Request $request){

        $asesor = Auth::user();
        
        $allProjects = Project::all();
        $project =  $allProjects->find($request->project_id);
        
        $message = $request->all();

        $message['fullname'] = $asesor->name.' '. $asesor->first_surname;
        $message['phone'] = $asesor->phone;
        $message['avatar'] = $asesor->avatar;
        $message['charge'] = $asesor->charge->name;
        $message['email_asesor'] = $asesor->email;

        $message['projectname'] = $project->name;
        $message['bedrooms'] = $project->bedrooms;
        $message['from'] = $project->from;
        $message['to'] = $project->to;
        $message['status'] = $project->status;
        $message['year'] = $project->year;
        $message['address'] = $project->address;
        $message['district'] = $project->district;
        $message['image'] = $project->image;
        $request['project_id'] = intval($request->project_id);
        $request['user_id'] = Auth::user()->id;

        $request['subject'] = $request->subject; 
 
        if($request->project_id == '1'){
            return view('templates.atom')->with('msg', $message);
        }else if($request->project_id == '2'){
            return view('templates.sensse')->with('msg', $message);
        }else if($request->project_id == '3'){
            return view('templates.alter25')->with('msg', $message);
        } else if($request->project_id == '4'){
            return view('templates.mane')->with('msg', $message);
        }else if($request->project_id == '5'){
            return view('templates.rua')->with('msg', $message);
        }
    }



    
    
}
