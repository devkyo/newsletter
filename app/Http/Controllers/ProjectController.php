<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::latest()->paginate(6);
        return view('projects.index',compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function edit(Project $project)
    {

        return view('projects.edit',compact('project'));
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){

        if($request->hasFile('image')){
            $file = $request->image;
            $imagename = time().$file->getClientOriginalName();
            $file->move(public_path().'/profiles/', $imagename);
        }else {
            $imagename='projectdefault.jpg';
        }

        $project = Project::create($request->except('image'));

        $project->image = $imagename;
        $project->save();
        return redirect()->route('projects.index')
            ->with('success','Proyecto creado correctamente.');

        


    }
    public function update(Request $request, Project $project){

        $request->validate([
            'name'      =>  'required',
            'bedrooms' =>  'required|min:3',
            'from'     =>  'required',
            'to'     =>  'required',
            'status'     =>  'required',
            'year'     =>  'required',
            'address' =>  'required',
            'district'     =>  'required'
        ],
        [
            'name.required'             =>  'Ingrese el nombre del proyecto.',
            'bedrooms.required'         =>  'Ingrese la cantidad de habitaciones.',
            'from.required'             =>  'Ingrese las dimensiones.',
            'to.required'               =>  'Ingrese las dimensiones.',
            'status.required'           =>  'Ingrese el estado del proyecto.',
            'year.required'             =>  'Ingrese la fecha de entrega.',
            'address.required'          =>  'Ingrese la dirección',
            'district.required'         =>  'Ingrese un distrito.'
        ]
    );

        if($request->hasFile('image')){
            $file = $request->image;
            $imagename = time().$file->getClientOriginalName();
            $file->move(public_path().'/profiles/', $imagename);
        }else {
            $imagename= $project->image;
        }

        $project->update($request->except('image'));
        $project->image = $imagename;
        $project->save();

        return redirect()->route('projects.index')
            ->with('success','Proyecto actualizado correctamente.');
    }
}

