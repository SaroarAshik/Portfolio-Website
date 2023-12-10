<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactController extends Controller{
    function ContactPage(){
        return view('Contact');
    }
}