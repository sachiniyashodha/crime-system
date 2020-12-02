<?php

namespace App\Http\Controllers;

use App\crime_case;
use App\investigation;
use App\petitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrimeCaseController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $add_data = Validator::make(request()->all(),[
            'case_id'      => 'required',
            'officer_id'   => 'required|required|string|max:250',
            'fir_number'   => 'required|string|max:250',
        ]);

        if($add_data != ''){
            return redirect()->back()->with('error', 'Form Has Been Error');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'case_id'       => request()->has('case_id'      )? request('case_id'      ) : null,
                'officer_id'    => request()->has('officer_id'   )? request('officer_id'   ) : null,
                'fir_number'    => request()->has('fir_number'   )? request('fir_number'   ) : null,
            ];
            crime_case::create($toInsert);
            return redirect()->back()->with('success', 'Add successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crime_case  $crime_case
     * @return \Illuminate\Http\Response
     */
    public function show(crime_case $crime_case)
    {
        $crimecasedata = crime_case::all();
        return view('cases', ['crimecasedata' => $crimecasedata,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crime_case  $crime_case
     * @return \Illuminate\Http\Response
     */
    public function edit(crime_case $crime_case)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crime_case  $crime_case
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crime_case $crime_case)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crime_case  $crime_case
     * @return \Illuminate\Http\Response
     */
    public function destroy(crime_case $crime_case)
    {
        //
    }
}
