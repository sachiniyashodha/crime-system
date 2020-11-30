<?php

namespace App\Http\Controllers;

use App\accused;
use Illuminate\Http\Request;

class AvalabilityController extends Controller
{
    public function index()
    {
        return view('avalability');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $accuseds = accused::Where('accused_id','Like','%'.$search_text.'%')->get();

        return view('accuseds.search' ,compact('accuseds'));
    }
}
