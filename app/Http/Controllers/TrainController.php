<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        dd($trains);

        return view('pages.trains.index', compact("trains"));
    }
}
