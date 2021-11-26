<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function view;

class MailController extends Controller
{
    public function sendEmail()
    {

        // to("테스트 받을 이메일 주소")
        Mail::to("yujch716@gmail.com")->send(new TestMail());
        flash('메일 보내기 성공')->success();
        return view('success');
    }
}
