<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Rules\recaptcha;
class HomeController extends Controller
{

    public function constant()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // Auth::loginUsingId(6);
        // $user = User::find(8);
        
        // dd(Gate::allows('edit-user' , $user));
        // $product = Product::find(3);
        // $product->comments()->create([
        //     'user_id' => auth()->user()->id,
        //     'comment' => "this is second comment"
        // ]);

        // return $product->comments()->get();
    // var_dump(Auth()->check());
    // $users = User::query();

    // if($keyword = request('search')){
    //     $users->where('email' , 'LIKE' ,  "%{$keyword}%" );
    // }

    // $users = $users->paginate(20);
    // $role = Role::find(1);
    // if(Gate::allows('edit-user')){
        $products = Product::latest()->paginate(12);
        return view('index', compact('products'));
    // }
    // abort(403);

    // return $role->users()->get();
   
    }

    public function product($title)
    {
        $product = Product::where("title" , $title)->first();
        if($product != null){
            return view('product' , compact("product"));
        }
        abort(404);
    }

    public function comment(Request $request)
    {
        $data = $request->validate([
            "commentable_id" => "required",
            "commentable_type" => "required",
            "comment" => "required|max:255",
            "g-recaptcha-response" => ['required' , new recaptcha()]
        ]);
        
        auth()->user()->comments()->create($data);
        
        alert()->success('با موفقیت ثبت شد', 'موفقیت');
        return back();
    }
}
