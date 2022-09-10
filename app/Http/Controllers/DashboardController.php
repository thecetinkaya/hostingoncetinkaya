<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Models\Education;
use App\Models\Skills;
use App\Models\Experience;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        $skillCount = Skills::count();
        $portfolioCount = Portfolio::count();
        $educationCount = Education::count();
        $experienceCount = Experience::count();

        

        return view('admin.dashboard',compact('skillCount','portfolioCount','educationCount','experienceCount'));

    }
}
