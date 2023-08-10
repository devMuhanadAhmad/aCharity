<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Orphan;
use Illuminate\Http\Request;

class OrphanController extends Controller
{

    public function allOrphanFrontShow(){
        $orphans=Orphan::latest()->simplePaginate(28);
        return view('front.orphans',compact('orphans'));
    }
    public function singleOrphanFrontShow($id){
        $orphan=Orphan::findOrFail($id);
        return view('front.orphan',compact('orphan'));
    }
    public function allemergenciesShow(){
        $orphans=Orphan::where('case','yes')->latest()->simplePaginate(28);
        return view('front.emergencies',compact('orphans'));
    }
}

