<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.add-user');
    }

    public function view_user(Request $request)
    {
        $data['user'] = DB::table('users')->paginate(30);
        return view('user.view-user', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|unique:users,mobile',
            'password' => 'required',
            'role' => 'required',
        ], [
            'email.unique' => 'The email has already been taken.',
            'mobile.unique' => 'The mobile number has already been taken.',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->pass_word = $request->password;
        $user->role = $request->role;
        $user->created_by = $request->created_by;
        $user->save();
        return back()->with('status', 'User Added Successfully');
    }
  
}
