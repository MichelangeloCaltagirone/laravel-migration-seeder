<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where("data_partenza", "2024-10-28")->get();


        return view('pages.trains.index', compact("trains"));
    }
}
