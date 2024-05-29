<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\emailMailable;
use Auth;
use Illuminate\Support\Facades\Mail;

class EmailControlleur extends Controller
{
public function send(){
    Mail::to(Auth::user()->email()->send(new emailMailable()));
    return $this->sendResponse("email sent!");
}


}
