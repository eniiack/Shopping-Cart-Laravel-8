<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\AttributeValues;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Rules\recaptcha;
use App\Models\Attribute;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function constant()
    {
        $this->middleware('auth');
    }

   public function home()
   {
       return view('home');
   }
   public function test(){
       return 'test';
   }
    public function shop($category)
    {
        // session()->put('searchValue' , null);
        $attributeValues = AttributeValues::orderBy('id')->groupBy('value')->get();
        $product = Category::where("name" , $category)->first();
        $allCategory = Category::all();
        $products = $product->products;
        return view('shop' , compact('products', 'allCategory' , 'attributeValues'));
    }
    public function shoping()
    {
        $attributeValues = AttributeValues::orderBy('id')->groupBy('value')->get();
        $allCategory = Category::all();
        // $allCategory = $allCategory->pluck('id')->toArray();
        $products = Product::paginate(10);
        return view('shop' , compact('products' , 'allCategory' , 'attributeValues'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function index()
    {

         if($keyword = request('search')){
             dd($keyword);
            // $users->where('email' , 'LIKE' ,  "%{$keyword}%" )->orWhere('name' , 'LIKE' ,  "%{$keyword}%" );
        }
    
        // $users = $users->paginate(2);




    //    return Cart::all();
    //    return session()->get('cart');
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

    public function product($title)
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
        $cart = collect([]);
        session()->forget('cart');
        return redirect('/');
        if($cart->count()){
            $price = $cart->sum(function($cart){
                return $cart['discount_percent'] == 0
                    ? $cart['product']->price * $cart['quantity']
                    : ($cart['product']->price - ($cart['product']->price * $cart['discount_percent'])) *  $cart['quantity'];
            });

            $orderItems = $cart->mapWithKeys(function($cart){
                return [$cart['product']->id =>['quantity' => $cart['quantity'] ]];
            });

            

          $order = auth()->user()->orders()->create([
                "status"=>"unpaid",
                "price"=>$price,
            ]);
            $order->products()->attach($orderItems);
            
         

            $token = config('services.payping.token');
            $res_number = Str::random();
            $args = [
                "amount" => 1000,
                "payerName" => auth()->user()->name,
                "returnUrl" => route('payment.callback'),
                "clientRefId" => $res_number
            ];

            $payment = new \PayPing\Payment($token);

            try {
                $payment->pay($args);
            } catch (\Exception $e) {
               throw $e;
            }
            //echo $payment->getPayUrl();
            $order->payments()->create([
                'resnumber' => $res_number,
                'price' => $price
            ]);

            return redirect($payment->getpayUrl());


        }
        return back();
    }
    public function callback()
    {
        $payment = Payment::where('resnumber', $request->clientrefid)->firstOrFail();

        $token = config('services.payping.token');

        $payping = new \PayPing\Payment($token);

        try {
            // $payment->price
            if($payping->verify($request->refid, 1000)){
                $payment->update([
                    'status' => 1
                ]);

                $payment->order()->update([
                    'status' => 'paid'
                ]);

                 alert()->success('پرداخت شما موفق بود');
                 return redirect('/products');
            }else{
                 alert()->error('پرداخت شما تایید نشد');
                 return redirect('/products');
            }
        } catch (\Exception $e) {
            $errors = collect(json_decode($e->getMessage() , true));

             alert()->error($errors->first());
             return redirect('/products');
        }
    }

    public function searchProduct (Request $request){
            
        $attributeValues = AttributeValues::orderBy('id')->groupBy('value')->get();
        // $product = Category::where("name" , $category)->first();
        $allCategory = Category::all();


        $products = Product::query();
         if($keyword = request('search')){
            $products->where('title' , 'LIKE' ,  "%{$keyword}%" )->orWhere('description' , 'LIKE' ,  "%{$keyword}%" );
        }
    
        $products = $products->paginate(10);
        return view('search', compact(['products' , 'attributeValues' , 'allCategory']));
    }

    public function search(Request $request)
    {
        
        
        if(isset($request->category)){
            $count = count($request->category);
            $arrayProduct = [];
            $arrayBrand = [];
            for($i = 0 ; $i < $count ; $i+=2){
                $search_product = strpos($request->category[$i], 'product');
                $search_brand = strpos($request->category[$i], 'brand');
                if($search_product === false){
    
                }else{
                     array_push($arrayProduct,$request->category[$i + 1]);
                     
                }
    
                if($search_brand === false){
    
                }else{
                     array_push($arrayBrand,$request->category[$i + 1]);
                }
    
                // array_push($arrayProduct,$request->category[$i + 1]);
                // $search_product ?  array_push($arrayProduct,$request->category[$i + 1]) : ``;
            }
            $productCat = Category::whereIn('id', $arrayProduct)
            ->get();
            // $productCat = $productCat->pluck('id');
    
            $search = Cart::resultSearch($productCat);
            return $search;
            // $productBrand = Category::whereIn('id', $arrayBrand)
            // ->get();
            // $productBrand = $productBrand->pluck('id');
            
             
            // return  $productCat->products;
            // return $arrayProduct;
            // return collect($request->category)->toArray();
        }else{
            session()->forget('searchValue');
        }
       
    }
}
