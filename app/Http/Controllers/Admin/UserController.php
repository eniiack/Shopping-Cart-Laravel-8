<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::query();

        // if($keyword = request('search')){
        //     $users->where('email' , 'LIKE' ,  "%{$keyword}%" )->orWhere('name' , 'LIKE' ,  "%{$keyword}%" );
        // }
    
        // $users = $users->paginate(2);
         $users = User::all();
        
        return view('panel.users' , compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.create');
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
            "name" => "required|min:5|max:50",
            "email" => "required|email|unique:App\Models\User,email",
            "password" => "required|min:8|regex:/[a-z]/|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
            "password_confirmation" =>"required|same:password",
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect(route('admin.users.index'));
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
    public function edit(User $user)
    {
        // if(Gate::allows('edit' , $user)){
            $this->authorize('edit' , $user);
            return view('panel.edit' , compact("user"));
        // }
        // abort(403) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ]);

        if(! is_null($request->password)){
            $request->validate([
                "password" => "required|min:8|regex:/[a-z]/|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/"
                
            ]);
        $data['password'] = $request->password;
        $data['password'] = Hash::make($data['password']);
        if (! Hash::check($data['password'], $user->password)) {
            $request->validate([
                "password_confirmation" =>"required|same:password"
            ]);
        }

        }

        $user->update($data);
        alert()->success('با موفقیت ویرایش شد', 'موفقیت');
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
