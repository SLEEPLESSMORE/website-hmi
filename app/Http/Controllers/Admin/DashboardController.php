<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $member = Member::count();
        $mail = Mail::count();


        return view('pages.admin.dashboard',[
            'user' => $user,
            'member' => $member,
            'mail' => $mail,
        ]);
    }
}
