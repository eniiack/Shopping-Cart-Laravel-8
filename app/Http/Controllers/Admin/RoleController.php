<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:create-permission')->only(['create' , 'store' , 'index' , 'edit' , 'update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        
        return view('panel.roles.index' , compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|max:255|unique:App\Models\Role,name",
            "label" => "required",
            "permissions" => "required|array"
        ]);
       $role = Role::create($data);
       $role->permissions()->sync($data['permissions']);
        alert()->success('با موفقیت ایجاد شد', 'موفقیت');
        return redirect(route('admin.roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('panel.roles.edit' , compact("role"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            "name" => ["required","max:255", Rule::unique('roles')->ignore($role->id)],
            "label" => "required",
            "permissions" => "required|array"
        ]);


        $role->update($data);
        $role->permissions()->sync($data['permissions']);
        alert()->success('با موفقیت ویرایش شد', 'موفقیت');
        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        alert()->success('با موفقیت حذف شد', 'موفقیت');
        return back();
    }
}
