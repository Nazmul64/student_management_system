<?php declare(strict_types=1);

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function view(){
        $student_class =StudentClass::all();
      return view('backend.setup.student_class.view',compact('student_class'));
    }
    function add (){
        return view('backend.setup.student_class.add');
    }
    function store(Request $request){
        $request->validate([
           'name' =>'required',
        ]);
        StudentClass::create([
            'name' => $request->name,
        ]);
        return back()->with('success','Data added successful');
    }
    function edit($id){
        $edit=StudentClass::find($id);
         return view('backend.setup.student_class.edit',compact('edit'));
    }
 function update(Request $request, $id){
    StudentClass::find($id)->update([
        'name'=> $request->name,
    ]);
     return back()->with('success','Data added successful');
 }
 function delete($id){
    $delete=StudentClass::find($id);
    $delete->delete();
     return back()->with('success','Data added successful');
 }
 
}
