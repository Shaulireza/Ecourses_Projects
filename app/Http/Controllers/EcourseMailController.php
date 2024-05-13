<?php

namespace App\Http\Controllers;

use App\Mail\EcourseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EcourseMailController extends Controller
{
    public function ecourse(){
        Mail::to('shauliritu96@gmail.com')->send (new EcourseMail());
    }
}
