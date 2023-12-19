<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AnalysisController extends Controller
{
    public function index(Request $request){
        $startDate = '2022-08-01';
        $endDate = '2022-08-10';

        // dd($data);
        return Inertia::render("Analysis");
    }
}
