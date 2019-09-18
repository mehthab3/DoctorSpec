<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctors;

class doctorController extends Controller
{
    public function add(Request $request){
        
        $this->validate($request,[
            'name' => 'required'
        ]);

        $newEmp = new doctors;
        $newEmp->name = $request->input('name');
        $newEmp->age = $request->input('age');
        $newEmp->specialization = $request->input('speciality');
        
        $newEmp->save();
        
        return redirect('/doctors')->with('info','Employer added successfully');
    }
    public function viewDoc(){

    $docs = doctors::all();
    // print_r($docs);exit();
        return view('doctors',['docs'=>$docs]);
	}
	public function update($id){
        $docs = doctors::find($id);
        return view('updateDoc',['docs'=>$docs]);
    }


    public function edit(Request $request,$id){
// echo "string";exit();
        // $this->validate($request,[
        //     'name' => 'required'
        // ]);
        
        $data = array(
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'specialization' => $request->input('speciality'),
        );
        doctors::where('id',$id)->update($data);
        
        
        return redirect('/doctors')->with('info','doctor updated successfully');

    }

    public function delete($id){
        doctors::where('id',$id)->delete();
        return redirect('/doctors')->with('info','doctor deleted successfully');
    }

}
