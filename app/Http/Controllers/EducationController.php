<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
   public function index(){
    $educations=Education::all();
    return view('admin.pages.education.index',compact('educations'));
   }
   public function addEducation(){
      return view('admin.pages.education.addEducation');
   }
   public function addEducationPost(Request $request){
      $request->validate([
         "title"=>"required",
         "content"=>"required",
      ]);
      $post = new Education();
      $post->title=$request->title;
      $post->content=$request->content;
      $post->save();
      if($post->save()){
         return back()->with('message','Your education information has been successfully added');
      }
      else{
         return back()->withErrors([
            'title'=>'asdasdasas'
         ]);
      }

   }
   public function deleteEducation($id){
      $education=Education::find($id);
      if($education){
         $education->delete();
         return back()->with('message','Your education information has been successfully deleted');

      }
      else{
         return back()->withErrors([
            'title'=>'asdasdasd'
         ]);
      }
      
   }
   public function viewEducation($id){
      $education=Education::find($id);
      return view('admin.pages.education.viewEducation',compact('education'));
   }
   public function editEducation($id,Request $request){
      $post = Education::find($id);
      $request->validate([
         "title"=>"required",
         "content"=>"required",
      ]);
      $post->title=$request->title;
      $post->content=$request->content;
      $post->save();
      if($post->save()){
         return back()->with('message','Your education information has been successfully edited');

      }
      else{
         return back()->withErrors([
            'title'=>'asdasdasds'
         ]);
      }

   }

}
