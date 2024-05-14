<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        // $trains = Train::all();
        $trains = Train::orderBy('departure_time')->paginate(15);
        return view('home', compact ('trains'));
    }

    public function detail($id){
        $title = 'details';
        $train = Train::find($id);

        return view('detail', compact('train', 'title'));
    }
}
