<?php declare(strict_types=1); 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    function view(){
        $user =User::find(Auth::user()->id);
        return view('backend.profile.view',compact('user'));
    }
function edit($id){
    $edit =User::find(Auth::user()->id);
  return view('backend.profile.edit',compact('edit'));
}
function update(Request $request){
  if($request->file('image')){
    $file=$request->file('image');
     unlink(public_path('upload/user_images/'.auth::user()->image));
    $fileName=time().'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/user_images'),$fileName);
    User::find(auth::id())->update([
     'image'=>$fileName
   ]);
  }


    User::find(Auth::user()->id)->update([
    'name'=>$request->name,
    'email'=>$request->email,
    'mobile'=>$request->mobile,
    'address'=>$request->address,
    'gender'=>$request->gender,
    ]);
    return back()->with('success','Data update successful');
}
}
