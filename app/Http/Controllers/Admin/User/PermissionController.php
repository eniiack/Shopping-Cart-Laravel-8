<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:create-permission')->only(['create' , 'store']);
    }


    public function create(User $user)
    {
        return view('panel.permissions' , compact("user"));
    }

    public function store(Request $request , User $user)
    {
        // $data = $request->validate([
        //     "roles" => "array",
        //     "permissions" => "array"
        // ]);

        // $user->permissions()->sync($data['permissions']);
        // $user->roles()->sync($data['roles']);
        $user->permissions()->sync($request->permissions);
        $user->roles()->sync($request->roles);

        alert()->success('با موفقیت ایجاد شد', 'موفقیت');
        return redirect(route('admin.users.index'));
    }

   
    
}
