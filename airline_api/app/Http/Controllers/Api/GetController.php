<?php

namespace App\Http\Controllers\Api;

use App\Entities\Airport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function get()
    {
        // $entries = [

        //         [
        //             "from" => "HN",
        //             "to" => "TP.HCM",
        //             "price" => "399.000đ",
        //             "airline" => "VietJet",
        //             "depature_time" => "2020-06-05"
        //         ],
        //         [
        //             "from" => "HN",
        //             "to" => "Nha Trang",
        //             "price" => "199.000đ",
        //             "airline" => "Vietnam Airlines",
        //             "depature_time" => "2020-05-31"
        //         ],
        //         [
        //             "from" => "HN",
        //             "to" => "Huế",
        //             "price" => "199.000đ",
        //             "airline" => "Vietnam Airlines",
        //             "depature_time" => "2020-06-01"
        //         ],
        //         [
        //             "from" => "TP.HCM",
        //             "to" => "Nha Trang",
        //             "price" => "55.000đ",
        //             "airline" => "Jestar",
        //             "depature_time" => "2020-06-02"
        //         ]
        // ];
        $entries = Airport::get();
        // dd($entries);
        return response()->json($entries,200);
    }
}
