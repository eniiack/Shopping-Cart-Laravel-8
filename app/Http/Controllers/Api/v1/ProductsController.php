<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\User as ResourceUser;
use App\Http\Resources\UserCollection;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return new ProductCollection($products);
    }  

    public function product (Product $product)
    {
        if($product = Product::whereId($product)->first()){
            return new ResourcesProduct($product);
        }
        abort(404);
    }

    public function users()
    {
        $users = User::all();
        return new UserCollection($users);
    }

    public function username($user)
    {
        $user = User::whereName($user)->first();
        return new ResourceUser($user);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|unique:App\Models\Product,title',
            'body' => 'required|',
        ],[
            'body' => 'فیلد متن الزامی است'
        ]);
        // $validator = Validator::make($request->all() , [
        //     'title' => 'required|unique:App\Models\Product,title',
        //     'body' => 'required|',
        // ],[
        //     'body' => 'فیلد متن الزامی است'
        // ]);

        // if($validator->fails()){
        //     return response([
        //         'data' =>  $validator->errors(),
        //         'status' => 'errors'
        //     ],422);
        // }

        return response([
            'data' =>  [],
            'status' => 'success',
        ],200);
    }
}
