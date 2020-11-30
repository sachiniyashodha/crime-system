<?php

namespace App\Http\Controllers;

use App\accused;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AvalabilityController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        return view('avalability');
    }

    public function search()
    {
        // $search_text = $_GET['query'];
        $search = request()->query('query');
        $accuseds = accused::where('accu_id','Like','%'.$search.'%')->get();

        return view('avalability',compact('accuseds'));
    }

    public function show(accused $accused)
    {
        $accuseddata = accused::all();
        return view('avalability', ['accuseddata' => $accuseddata]);

    }
}
