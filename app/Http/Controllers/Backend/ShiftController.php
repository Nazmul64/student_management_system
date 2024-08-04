<?php declare(strict_types=1); 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Studentshift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    function view(){
        $shift=Studentshift::all();
        return view('backend.shift.view',compact('shift'));
    }
    function add(){
        return view('backend.shift.add');
    }
    function store(Request $request){
        $request->validate([
            'shift'=>'required',
        ]);
     Studentshift::create([
         'shift'=>$request->shift,
     ]);
     return back()->with('success','Data Insert Successfully Added');
    }
 function edit($id){
    $edit=Studentshift::find($id);
     return view('backend.shift.edit',compact('edit'));
 }
 function update(Request $request, $id){
     Studentshift::find($id)->update([
          'shift'=>$request->shift,
     ]);
      return back()->with('success','Data Update Successfully ');
 }
 function delete($id){
    $delete=Studentshift::find($id);
    $delete->delete();
    return back()->with('success','Data Deleteded Successfully ');
 }
}
