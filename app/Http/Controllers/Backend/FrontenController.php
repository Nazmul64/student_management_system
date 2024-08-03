<?php declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontenController extends Controller
{
   function loginpage(){
    return view('auth.login');
   }
}
