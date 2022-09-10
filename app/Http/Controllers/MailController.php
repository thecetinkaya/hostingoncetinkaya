<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('admin@burakcetinkaya.live')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
