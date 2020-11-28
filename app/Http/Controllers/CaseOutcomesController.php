<?php

namespace App\Http\Controllers;

use App\case_outcomes;
use App\crime_file;
use App\petitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaseOutcomesController extends Controller
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
            'case_outcome_id'     => 'required',
            'case_id'             => 'required|string|max:250',
            'section_of_low_id'   => 'required|string|max:250',
            'details'             => 'required|string|max:250',
            'status'              => 'nullable|max:15|string',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'case_outcome_id'   => request()->has('case_outcome_id'  )? request('case_outcome_id'  ) : null,
                'case_id'           => request()->has('case_id'          )? request('case_id'          ) : null,
                'section_of_low_id' => request()->has('section_of_low_id')? request('section_of_low_id') : null,
                'details'           => request()->has('details'          )? request('details'          ) : null,
                'status'            => request()->has('status'           )? request('status'           ) : null,
            ];
            case_outcomes::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\case_outcomes  $case_outcomes
     * @return \Illuminate\Http\Response
     */
    public function show(case_outcomes $case_outcomes)
    {
        $case_outcomesdata = case_outcomes::all();
        return view('case_outcome', [
            'case_outcomesdata' => $case_outcomesdata,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\case_outcomes  $case_outcomes
     * @return \Illuminate\Http\Response
     */
    public function edit(case_outcomes $case_outcomes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\case_outcomes  $case_outcomes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, case_outcomes $case_outcomes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\case_outcomes  $case_outcomes
     * @return \Illuminate\Http\Response
     */
    public function destroy(case_outcomes $case_outcomes)
    {
        //
    }
}
