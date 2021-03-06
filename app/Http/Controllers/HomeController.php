<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         //   var_dump(Auth()->user()->name);
    // var_dump(Auth()->check());
    // $users = User::query();

    // if($keyword = request('search')){
    //     $users->where('email' , 'LIKE' ,  "%{$keyword}%" );
    // }

    // $users = $users->paginate(20);
    return view('index' );
    }
}
