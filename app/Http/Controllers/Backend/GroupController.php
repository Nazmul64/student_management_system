<?php declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function view(){
      $group =Group::all();
      return view("backend.group.view",compact("group"));
    }
   function add(){
     return view("backend.group.add");
   }
   function store(Request $request){
     $request->validate([
        'group'=>'required',
     ]);
     Group::create([
        'group'=> $request->group,
     ]);
     return back()->with("success","Data added successful");
   }
   function edit($id){
     $edit =Group::find($id);
      return view("backend.group.edit",compact("edit"));
   }
   function update( Request $request,$id){
     Group::find($id)->update([
         'group'=> $request->group,
     ]);
      return back()->with("success","Data Update successful");
   }
   function delete($id){
      $delete=Group::find($id);
      $delete->delete();
       return back()->with("success","Data Update successful");
   }
}
