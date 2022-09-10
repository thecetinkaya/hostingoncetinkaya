<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $skills = Skills::all();
        return view('admin.pages.skills.index',compact('skills'));    
    }
    public function addSkill(){
        return view('admin.pages.skills.addSkill');    
    }
    public function addSkillPost(Request $request){
        $request->validate([
            "icon" => "required",
            "title" => "required",
            "content" => "required",
        ]);
        $post = new Skills();
        $post->icon= $request->icon;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->save();
        if($post->save()){
            return back()->with('message','Your skill information has been successfully added');
        }
        else {
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }    
    }
    public function deleteSkill($id){
        $skills = Skills::find($id);
        if ($skills) {
            $skills->delete();
            return back()->with('message','Your skill information has been successfully deleted');
        }
        else{
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }
    }
    public function viewSkill($id){
        $skill = Skills::find($id);
        return view('admin.pages.skills.viewSkill',compact('skill'));
    }
    public function editSkill($id, Request $request){
        $post = Skills::find($id);
        $request->validate([
            "icon" => "required",
            "title" => "required",
            "content" => "required",
        ]);
        $post->icon= $request->icon;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->save();
        if($post->save()){ 
            return back()->with('message','Your skill information has been successfully edited');
        }
        else {
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }
    }
}
