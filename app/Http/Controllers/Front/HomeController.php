<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Orphan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $orphans=Orphan::latest()->simplePaginate(6);
        $events=Event::latest()->take(3)->get();
        return view('front.index',compact("events","orphans"));
    }

    public function arIndex(){
        $orphans=Orphan::latest()->simplePaginate(6);
        $events=Event::latest()->take(3)->get();
        return view('front.ar.index',compact("events","orphans"));
    }


    public function about(){

        return view('front.about');
    }
    public function contact(){
        return view('front.contact');
    }
}
