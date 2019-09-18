<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;

class specialityController extends Controller
{
    public function add(Request $request){
        
        $this->validate($request,[
            'name' => 'required'
        ]);

        $newEmp = new Speciality;
        $newEmp->field = $request->input('name');
        $newEmp->desciption = $request->input('desc');
        // $newEmp->specialization = $request->input('speciality');
        
        $newEmp->save();
        
        return redirect('/speciality')->with('info','speciality added successfully');
    }
    public function viewDoc(){

    $specs = Speciality::all();
    // print_r($specs);exit();
        return view('specilaity',['specs'=>$specs]);
	}
	public function update($id){
        $specs = Speciality::find($id);
        return view('updateSpec',['specs'=>$specs]);
    }


    public function edit(Request $request,$id){
// echo "string";exit();
        // $this->validate($request,[
        //     'name' => 'required'
        // ]);
        
        $data = array(
            'field' => $request->input('name'),
            'desciption' => $request->input('desc'),
        );
        Speciality::where('id',$id)->update($data);
        
        
        return redirect('/speciality')->with('info','speciality updated successfully');

    }

    public function delete($id){
        Speciality::where('id',$id)->delete();
        return redirect('/speciality')->with('info','speciality deleted successfully');
    }

}
