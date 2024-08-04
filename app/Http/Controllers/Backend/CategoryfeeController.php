<?php declare(strict_types=1); 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categoryfee;
use Illuminate\Http\Request;

class CategoryfeeController extends Controller
{
    function view(){
        $category=Categoryfee::all();
        return view('backend.categoryfee.view',compact('category'));
    }
 function add(){
    return view('backend.categoryfee.add');
 }
 function store(Request $request){
     $request->validate([
        'categoryfee' =>'required',
     ]);
  Categoryfee::create([
      'categoryfee' =>$request->categoryfee,
  ]);
  return back()->with('success','Data added successful');
 }
 function edit($id){
    $edit=Categoryfee::find($id);
     return view('backend.categoryfee.edit',compact('edit'));
 }
 function update(Request $request, $id){
     $request->validate([
        'categoryfee'=> 'required',
     ]);
     Categoryfee::find($id)->update([
        'categoryfee' =>$request->categoryfee,
     ]);
      return back()->with('success','Data Update successful');
 }
 function delete($id){
    Categoryfee::find($id)->delete();
     return back()->with('success','Data Delete successful');
 }
}
