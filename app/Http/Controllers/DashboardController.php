<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FireExtinguisher;
use App\Models\User;
use App\Models\Branch;

class DashboardController extends Controller
{
    public function index(){

        $fireExtinguishers = FireExtinguisher::count();
        $staffs = User::count();   
        $branches = Branch::count();  

         return view('dashboard', 
         compact('staffs', 'fireExtinguishers', 'branches'));
    }
}
