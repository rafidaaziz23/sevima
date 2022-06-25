<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

    class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User;
        return view('admin.user.create', compact(
            'users',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validator Form
        // $validator = Validator::make($request->all(), [
        //     'user_photo'     => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'user_username'    => 'required',
        //     'user_email'    => 'required',
        //     'user_password'   => 'required',
        //     'user_telp'   => 'required|min:11',
        //     'user_alamat'   => 'required',
        //     'user_role_id'   => 'required',
        // ]);
        
        // if ($validator->fails()) {
        //     return redirect()->route('user.create')
        //     ->with('failed', 'User Create Not Success');
        // }

        // upload image
        // $file = $request->file('user_photo');
        // $file_name = $file->hashName();
        // $file_path = storage_path('app/public/uploads/users');
        // $file->move($file_path, $file_name);
    
        //create user
        User::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        return redirect()->route('user.index')
            ->with('success', 'User Created successfully');
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
        $users = User::find($user);
        // $roles = Role::all();
        return view('master.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        // Validator Form
        $validator = Validator::make($request->all(), [
            'user_photo'     => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.create')
            ->with('failed', 'User Update Not Success');
        }

        $users = User::find($user);

        //check if image is uploaded
        if ($request->hasFile('user_photo')){
            
             //upload new image
            $file = $request->file('user_photo');
            $file_name = $file->hashName();
            $file_path = storage_path('app/public/uploads/users');
            $file->move($file_path, $file_name);

            //delete old image
            Storage::delete('public/uploads/users/'.$file_name);

            //Update user
            $users->update([
                'user_photo'     => $file_name,
                'user_name' => $request['user_name'],
                'user_username' => $request['user_username'],
                'user_telp' => $request['user_telp'],
                'user_alamat' => $request['user_alamat'],
                'user_role_id' => $request['user_role_id'],
            ]);

        }else{
            //Update user
             $users->update([
                'user_name' => $request['user_name'],
                'user_username' => $request['user_username'],
                'user_telp' => $request['user_telp'],
                'user_alamat' => $request['user_alamat'],
                'user_role_id' => $request['user_role_id'],
            ]);

        }

        //  return to redirect
         return redirect()->route('user.index')
                ->with('success', 'User Created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //delete image
        Storage::delete('public/uploads/users/'. $user->user_photo);

        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}


