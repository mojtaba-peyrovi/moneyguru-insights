<?php

namespace App\Http\Controllers;
use App\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function loadData(){
        $data = Chart::where('day','Tuesday')->get();
        $sum = Chart::where('day','Tuesday')->sum('price');
        
        return view('dashboard',compact('data','sum'));
    }

}
