<?php

namespace App\Http\Controllers\Api;

use App\Entities\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function get()
    {

        $entries = Flight::get();
        // dd($entries);
        return response()->json($entries,200);
    }
}
