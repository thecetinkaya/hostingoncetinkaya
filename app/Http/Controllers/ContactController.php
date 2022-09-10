<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use Carbon\Carbon;
use App\Mail\AutoMail;

class ContactController extends Controller
{
    public function index(){
        $messages = Contact::all();
        return view('admin.pages.contact.index',compact('messages'));    
    }
    public function view($id){
        $message = Contact::find($id);
        return view('admin.pages.contact.messageView',compact('message'));
    }
    public function delete($id){
        $message = Contact::find($id);
        if ($message) {
            $message->delete();
            return back()->with('message','Mesaj başarıyla silindi');
        }
        else{
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }
    }
    public function contactPost(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required",
        ]);
        $post = new Contact();
        $post->name= $request->name;
        $post->email= $request->email;
        $post->subject= $request->subject;
        $post->message= $request->message;
        $post->save();
        $date=Carbon::now();
        if($post->save()){
            Mail::to("admin@burakcetinkaya.live")->send(new DemoMail($post,$date));
            Mail::to($post->email)->send(new AutoMail($post));
            toastr()->success('Mesajınız gönderildi','BAŞARILI');
            return back();
        }
        else {
            toastr()->error('Mesajınız gönderilirken bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyin.','HATA');
            return back();
        }
    }
    
}
