<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent' , 0)->latest()->paginate(10);
        return view('panel.category.index' , compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Category $category)
    {
        if($request->parent) {
            $request->validate([
               'parent' => 'exists:categories,id'
            ]);
            $img = "null";
            Category::create([
                'name' => $request->name,
                'parent' => $request->parent ?? 0 ,
            'image' => $img  

            ]);
        }
        else{
        $request->validate([
            'name' => ['required', 'string', 'max:255' , 'unique:App\Models\Category,name'],
            'image' => ['required']
        ]);
        
        $file = $request->file('image');
        $fileName = Category::where('image' , '/images/category/'.$file->getClientOriginalName() )->first();
        if(! is_null($fileName)){
            $fileNewName = rand(1,100000).$file->getClientOriginalName();
        $file->move(public_path('/images/category/') ,$fileNewName );
        $img = '/images/category/'. $fileNewName;

        }
        else{
            $file->move(public_path('/images/category/') ,$file->getClientOriginalName() );
            $img = '/images/category/' . $file->getClientOriginalName();

        }


       

      
        
        Category::create([
            'name' => $request->name,
            'parent' => $request->parent ?? 0 ,
            'image' => $img  
        ]);
        }
        alert()->success('با موفقیت ساخته شد', 'موفقیت');
        return redirect(route('admin.categories.index'));
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
    public function edit(Category $category)
    {
        return view('panel.category.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($request->parent) {
            $request->validate([
                'parent' => 'exists:categories,id'
            ]);
        }

        $request->validate([
            'name' => 'required|min:3'
        ]);

        $category->update([
            'name' => $request->name,
            'parent' => $request->parent
        ]);

        alert()->success('با موفقیت ویرایش شد', 'موفقیت');
        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
