<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $experiences=Experience::all();
        return view('admin.pages.experience.index',compact('experiences'));
    }
    public function addExperience(){
        return view('admin.pages.experience.addExperience');
    }
    public function addExperiencePost(Request $request){
        $request->validate([
            "company"=>"required",
            "job"=>"required",
            "position"=>"required",
            "year"=>"required",
        ]);
        $post=new Experience();
        $post->company=$request->company;
        $post->job=$request->job;
        $post->position=$request->position;
        $post->year=$request->year;
        $post->save();
        if($post->save()){
            return back()->with('message','Your experience information has been successfully added');
        }
        else{
            return back()->withErrors([
                'company'=>'asdasddassd'
            ]);
        }
    }
    public function deleteExperience($id){
        $experience=Experience::find($id);
        if($experience){
            $experience->delete();
            return back()->with('message','Your experience information has been successfully deleted');

        }
        else{
            return back()->withErrors([
                'company'=>'asdasdas'
            ]);
        }
    }
    public function viewExperience($id){
        $experience=Experience::find($id);
        return view('admin.pages.experience.viewExperience',compact('experience'));
        
    }
    public function editExperience($id,Request $request){
        $post = Experience::find($id);
        $request->validate([
           "company"=>"required",
           "job"=>"required",
           "position"=>"required",
           "year"=>"required",
        ]);
        $post->company=$request->company;
        $post->job=$request->job;
        $post->position=$request->position;
        $post->year=$request->year;
        $post->save();
        if($post->save()){
           return back()->with('message','Your experience information has been successfully edited');
  
        }
        else{
           return back()->withErrors([
              'title'=>'asdasdasds'
           ]);
        }
  
     }
  

}
