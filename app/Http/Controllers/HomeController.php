<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
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
    public function shoping()
    {
     
        $products = Product::paginate(10);
        return view('shop' , compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function index()
    {
       
        // return $users = User::where('role', 1)
        // ->where('name', 'LIKE', "%{$request->search}%")->orwhere('is_superuser', 1)->where('lastName', 'LIKE', "%{$request->search}%")->get();
        // return Cart::all();
        // return Cart::get('k4TNGaViRD')['product']['id'];
        // dd(Cart::get('2'));
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

    public function payment()
    {
        $cart = Cart::all();
        if($cart->count()){
            $price = $cart->sum(function($cart){
                return $cart['product']->price * $cart['quantity'];
            });

            $orderItems = $cart->mapWithKeys(function($cart){
                return [$cart['product']->id =>['quantity' => $cart['quantity'] ]];
            });

            

          $order = auth()->user()->orders()->create([
                "status"=>"unpaid",
                "price"=>$price,
            ]);
            $order->products()->attach($orderItems);
            return 'ok';
        }
        return back();
    }
}
