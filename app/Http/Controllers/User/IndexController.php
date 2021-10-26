<?php

namespace App\Http\Controllers\User;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $users = User::with('image');

       if (Auth()->user()->role === User::ROLE_ADMIN){
           $users =    $users->where('role',User::ROLE_USER);
       }
        $users =    $users->get();

        return view('user.index', compact('users'));
    }

    public function logout(){
        if (auth()->check()) {
            Auth::logout();
        }

        return redirect()->route('login')->with('error', 'Your Account is suspended, please contact Admin.');
    }


}
