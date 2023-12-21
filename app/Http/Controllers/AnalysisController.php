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
        $startDate = '2021-08-01';
        $endDate = '2023-12-19';

        // 1. 購買ID毎にまとめる
        
        // dd($data);


        return Inertia::render("Analysis");
    }
}
