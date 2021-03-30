<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DropzoneController extends Controller
{
    function index()
    {
     return view('panel.gallery.dropzone');
    }

    function upload(Request $request , Gallery $gallery )
    {
     $image = $request->file('file');
     $product_id = $request->input('product_id');
    $imageName = '/images/'. $image->getClientOriginalName();
     $image->move(public_path('images'), $imageName);
    $data = ([
        'image' => $imageName,
        'product_id' => $product_id
    ]);
    $gallery->create($data);
     return response()->json(['success' => $product_id]);
    }

    function fetch()
    {
     $images = File::allFiles(public_path('images'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    function delete(Request $request )
    {
     if($request->get('name'))
     {
    //   File::delete(public_path($request->get('name')));
    File::delete(public_path($request->get('name')));
    $gallery = Gallery::where('image' , $request->get('name'))->first();
    $gallery->delete();
     }
   
    }
}
