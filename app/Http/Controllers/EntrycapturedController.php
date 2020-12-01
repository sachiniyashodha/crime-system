<?php

namespace App\Http\Controllers;

use App\Entrycaptured;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EntrycapturedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add_data = Validator::make(request()->all(),[
            'cr_id'          => 'required|required|string|max:250',
            'reference_no'   => 'required|string|max:250',
            'detail'         => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'cr_id'           => request()->has('cr_id'       )? request('cr_id'        ) : null,
                'reference_no'    => request()->has('reference_no')? request('reference_no' ) : null,
                'record'          => request()->has('detail'      )? request('detail'       ) : null,
            ];
            Entrycaptured::create($toInsert);
        }
        return redirect()->back()->withInput()->withErrors("hello world");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Entrycaptured  $entrycaptured
     * @return \Illuminate\Http\Response
     */
    public function show(Entrycaptured $entrycaptured)
    {
        
//        $Entrycaptureddata = Entrycaptured::all();
//        return view('Entrycaptured', [
//            'Entrycaptureddata' => $Entrycaptureddata,
//        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrycaptured  $entrycaptured
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrycaptured $entrycaptured)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrycaptured  $entrycaptured
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrycaptured $entrycaptured)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrycaptured  $entrycaptured
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrycaptured $entrycaptured)
    {
        //
    }
}


