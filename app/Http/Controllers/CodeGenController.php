<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class CodeGenController extends Controller
{

    public function getName()
    {
        $fetcher = DB::select('select * from refferal');
        return response()->json($fetcher);
    }
}
