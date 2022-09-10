<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Education;
use App\Models\Skills;
use App\Models\Experience;




class HomeController extends Controller
{
    public function index(){
        $portfolios = Portfolio::take(3)->get();
        $educations = Education::all();
        $skills= Skills::all();
        $experiences= Experience::all();
        $count=Portfolio::count();

        return view('frontend.home',compact('portfolios','educations','skills','experiences','count'));

    }
    public function portfolio(){
        $portfolios = Portfolio::all();
        $count=Portfolio::count();
        return view('frontend.portfolio',compact('portfolios','count'));

    }
    public function portfolioView($id){
        $portfolio = Portfolio::find($id);
        return view('frontend.portfolioView', compact('portfolio'));

    }
}
