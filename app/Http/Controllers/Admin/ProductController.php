<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\each;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id' , 'ASC')->get();
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

        // Storage::disk('public')->putFileAs('files' , $request->file('file') , $request->file('file')->getClientOriginalName());
        // Storage::putFileAs('files' , $request->file('image') , $request->file('image')->getClientOriginalName());
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255' , 'unique:products,title,' . $product->id ],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'integer'],
            'image' => ['required'],
            'inventory' => ['required', 'integer'],
            'categories' => ['required'],
            'attributes' => ['array']
        ]);



        // $file = $request->file('image');
        
        // $fileName = Product::where('image' , '/images/'.$file->getClientOriginalName() )->first();
        // if(! is_null($fileName)){
        //     $fileNewName = rand(1,100000).$file->getClientOriginalName();
        // $file->move(public_path('/images/') ,$fileNewName );
        // $data['image'] = '/images/'. $fileNewName;

        // }
        // else{
        //     $file->move(public_path('/images/') ,$file->getClientOriginalName() );
        //     $data['image'] = '/images/' . $file->getClientOriginalName();

        // }
       
       
        $data['user_id'] = Auth::user()->id;
        $alldata = auth()->user()->products()->create($data);
        $alldata->categories()->sync($data['categories']);
        if(isset($data['attributes'])){
        $attribute = collect($data['attributes']);

        $attribute->each(function($item) use($alldata , $data) {
            if(is_null($item['name']) || is_null($item['value'])) return;
            $attr = Attribute::firstOrCreate(['name' => $item['name']]);
            $attr_value = $attr->values()->firstOrCreate(['value' => $item['value']]);
            $alldata->attributes()->attach($attr->id , ['value_id' => $attr_value->id]);
        });
    }
        
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
            'title' => ['required', 'string', 'max:255' , 'unique:products,title,' . $product->id ],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'integer'],
            'image' => ['required'],
            'count' => ['required', 'integer'],
            'categories' => ['required'],
            'attributes' => ['array']
        ]);

        // if($request->file('image')) {
        //     $request->validate([
        //         'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        //     ]);

        //     if(File::exists(public_path($product->image)))
        //         File::delete(public_path($product->image));
            
        //     $file = $request->file('image');
        //     $destinationPath = '/images/';
        //     $file->move( public_path($destinationPath), $file->getClientOriginalName());

        //     $data['image'] = $destinationPath . $file->getClientOriginalName();
        // }

        $product->update($data);
        $product->categories()->sync($data['categories']);
        $product->attributes()->detach();
        if(isset($data['attributes'])){
            $attribute = collect($data['attributes']);

            $attribute->each(function($item) use($product , $data) {
                if(is_null($item['name']) || is_null($item['value'])) return;
                $attr = Attribute::firstOrCreate(['name' => $item['name']]);
                $attr_value = $attr->values()->firstOrCreate(['value' => $item['value']]);
                $product->attributes()->attach($attr->id , ['value_id' => $attr_value->id]);
            });
        }   



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
        File::delete(public_path($product->image));
        $product->delete();
        return back();
    }
}
