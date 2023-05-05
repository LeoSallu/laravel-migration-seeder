<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        $train = Train::whereDate('departure_time', Carbon::today())->get();
        return view('home', compact('train','trains'));
    }
 
}
