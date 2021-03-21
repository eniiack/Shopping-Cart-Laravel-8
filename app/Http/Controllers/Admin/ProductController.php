<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('panel.products.index' , compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {

        $data = $request->validate([
            'title' => ['required', 'string', 'max:255' , Rule::unique('products')->ignore($product->id)],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'integer'],
            'count' => ['required', 'integer'],
            'categories' => ['required']
        ]);


        $data['user_id'] = Auth::user()->id;
        $alldata = auth()->user()->products()->create($data);
        $alldata->categories()->sync($data['categories']);
        alert()->success('با موفقیت ساخته شد', 'موفقیت');
        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('panel.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255' , Rule::unique('products')->ignore($product->id)],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'integer'],
            'count' => ['required', 'integer'],
            'categories' => ['required']
        ]);


        $product->update($data);
        $product->categories()->sync($data['categories']);
        alert()->success('با موفقیت ویرایش شد', 'موفقیت');
        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
