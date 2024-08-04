<?php declare(strict_types=1); 

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Addyear;
use Illuminate\Http\Request;

class YearController extends Controller
{
    function view(){
       $addyear=Addyear::all();
       return view('backend.year.view',compact('addyear'));
    }
function add(){
 return view('backend.year.add');
}
function store(Request $request){
        $request->validate([
           'year' =>'required',
        ]);
        Addyear::create([
            'year' => $request->year,
        ]);
        return back()->with('success','Data added successful');
    }
    function edit($id){
        $edit=Addyear::find($id);
        return view('backend.year.edit',compact('edit'));
    }
    function update(Request $request, $id){
        Addyear::find($id)->update([
           'year' => $request->year,
        ]);
       return back()->with('success','Data added successful');
    }
    function delete($id){
        $delete=Addyear::find($id);
        $delete->delete();
        return back()->with('success','Data added successful');
    }
}
