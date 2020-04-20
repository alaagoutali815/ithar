<?php

namespace App\Http\Controllers;
use App\BBenevolet;
use Illuminate\Http\Request;

class citoyenController extends Controller
{
    public function registred(){

        $benevolat = Benevolet::All();
        return view('citoyens.Aregister')->with('benevolat',$benevolat);
    }
    public function registrededit(Request $request, $id){
        $benevolat = Benevolet::findOrFail($id);
        return view('citoyens.edit')->with('benevolat',$benevolat);
        
    }
    public function registreupdate(Request $request, $id){
        $benevolat = Benevolet::find($id);
        $benevolat->user_id=$request->input('user_id');
        $benevolat->dureeBenevolat=$request->input('dureeBenevolat');
        $benevolat->description=$request->input('description');
        $benevolat->update();
        return redirect('/Aregister')->with('status','your data has been updated');
}
public function createe()
{
    return view('citoyens.create');

    }
public function registrecreate(Request $request){
    $this->validate($request, [
        'user_id' => 'required',
        'dureeBenevolat' => 'required',
        'description' => 'required',
      

    ]);

    $input = $request->all();

    Benevolet::create($input);

    Session::flash('status', 'Task successfully added!');

    return redirect('citoyens.Aregister')->with('status','your data has been added');
}
    public function registredelete(Request $request, $id){
        $benevolat = Benevolet::findOrFail($id);
        $benevolat->delete();
        return redirect('citoyens.Aregister')->with('status','your data has been deleted');

    }
}
