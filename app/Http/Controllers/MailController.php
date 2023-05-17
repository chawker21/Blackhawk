<?php

namespace App\Http\Controllers;

use Models\App\Models\Mail\SendNewUserMail;
use Illuminate\Http\Request;
use App\Models\Jobs\ProcessUpdateMembers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use Mail;
use App\Models\Notifications\UpdateMembers;
class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    use Notifiable;

    public function send()
    {


        $mail['greeting'] = "Greetings";
        Notification::send(user::all(), new UpdateMembers($mail));
//        dispatch(new ProcessUpdateMembers($mail));


    }
    public function SendMessage(){
        return view('Mail.SendMessage');
    }
}
