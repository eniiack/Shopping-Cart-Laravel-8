<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        // Auth::loginUsingId(6);
        // $user = User::find(8);
        
        // dd(Gate::allows('edit-user' , $user));
           
         //   var_dump(Auth()->user()->name);
    // var_dump(Auth()->check());
    // $users = User::query();

    // if($keyword = request('search')){
    //     $users->where('email' , 'LIKE' ,  "%{$keyword}%" );
    // }

    // $users = $users->paginate(20);
    // $role = Role::find(1);
    if(Gate::allows('edit-user')){
        return view('index' );
    }
    abort(403);

    // return $role->users()->get();
   
    }
}
