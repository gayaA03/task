<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('role', User::ROLE_USER)->paginate(12);
        return view('admin.index',compact('users') );
    }


    public function statusBlock(int $id )
    {
        $user = User::where([
            'id' => $id,
            'status' => UserStatus::active
        ])->first();

        if ($user) {
            Mail::send('emails.warning', [], function ($message) use ($user) {
                $message->to($user->email);
            });
            $user->status = UserStatus::blocked;
            $user->save();
        }
        return  redirect()->route('admin.index');
    }

    public function statusDelete(int $id)
    {
        $user = User::where('id',$id)->where('status','!=',UserStatus::deleted )->first();

        if ($user) {
            $user->status = UserStatus::deleted;
            $user->save();
        }

        return redirect()->route('admin.index');
    }

    public function statusActive(int $id)
    {
        User::where('id',$id)->update(['status'=> UserStatus::active]);
        return redirect()->route('admin.index');
    }
}
