<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Rules\recaptcha;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{

    public function constant()
    {

        $this->middleware('auth');
    }

   
    public function shop($category)
    {
        $product = Category::where("name" , $category)->first();
        $products = $product->products;
        return view('shop' , compact('products'));
    }

    public function index()
    {
        // $product = Product::find(33);
        // return $product->attributes;
        // foreach ($product->attributes as $role) {
        //    return $role->pivot->value;
        // }
    //   return  $product->attributes[0]->pivot->value;

        // foreach ($product->roles as $role) {
        //     echo $role->pivot->created_at;
        // }
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
    //   return  URL::temporarySignedRoute('download.file' , now()->addMinutes('30') ,['path' => '/files/images (1).jpg']);
        $products = Product::orderBy('id' , "ASC" )->paginate(12);
        $popular = Product::orderBy('view_count' , "DESC" )->limit(12)->get();
        $categories = Category::all();
        return view('index', compact(['products','categories','popular']));
        
    // }
    // abort(403);

    // return $role->users()->get();
   
    }

    public function product($title )
    {
        $product = Product::where("title" , $title)->first();
        $category = $product->categories->pluck('id');
        $pp = $product->categories;
        $productCat = Category::whereIn('id', $category)
        ->get();
        $products = Category::whereIn("id" , $category)->get();
        // return $products  ;
        if($product != null){
            return view('product' , compact(["product","products"]));
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
