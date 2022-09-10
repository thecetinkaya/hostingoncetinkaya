<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('admin.pages.portfolio.index',compact('portfolios'));    
    }
    public function addPortfolio(){
        return view('admin.pages.portfolio.addPortfolio');    
    }
    public function addPortfolioPost(Request $request){
        $request->validate([
            "title" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "content" => "required",
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/portfolio'), $imageName);
        $post = new Portfolio();
        $post->title= $request->title;
        $post->image= $imageName;
        $post->content= $request->content;
        $post->save();
        if($post->save()){
            return back()->with('message','Your portfolio information has been successfully added');
        }
        else {
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }    
    }
    public function deletePortfolio($id){
        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $portfolio->delete();
            return back()->with('message','Your portfolio information has been successfully deleted');
        }
        else{
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }
    }
    public function viewPortfolio($id){
        $portfolio = Portfolio::find($id);
        return view('admin.pages.portfolio.viewPortfolio',compact('portfolio'));
    }
    public function editPortfolio($id, Request $request){
        
        $post = Portfolio::find($id);
        $request->validate([
            "title" => "required",
            "content" => "required",
        ]);
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/portfolio'), $imageName);
            $post->image = $imageName;
        }
        $post->title= $request->title;
        $post->content= $request->content;
        $post->save();
        if($post->save()){ 
            return back()->with('message','Your portfolio information has been successfully edited');
        }
        else {
            return back()->withErrors([
                'email' => 'asşdaksdşlsakd'
            ]);
        }
    }
}
