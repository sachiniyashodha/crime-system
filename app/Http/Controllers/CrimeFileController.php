<?php

namespace App\Http\Controllers;

use App\crime_file;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrimeFileController extends Controller
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
            'fir_no'             => 'required',
            'accused_id'         => 'required|string|max:250',
            'victim_id'          => 'required|string|max:250',
            'petitioner_id'      => 'required|string|max:250',
            'place_of_incident'  => 'nullable|max:15|string',
            'date_of_incident'   => 'required|string|max:250',
            'time_of_incident'   => 'required|string|max:250',
            'date_filr'          => 'required|string|max:250',
            'accused_status'     => 'required',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'fir_no'            => request()->has('fir_no'       )? request('fir_no'       ) : null,
                'accused_id'        => request()->has('accused_id'   )? request('accused_id'   ) : null,
                'victim_id'         => request()->has('victim_id'    )? request('victim_id'    ) : null,
                'petitioner_id'     => request()->has('petitioner_id')? request('petitioner_id') : null,
                'place_of_incident' => request()->has('contact_no'   )? request('contact_no'   ) : null,
                'date_of_incident'  => request()->has('canplan'      )? request('canplan'      ) : null,
                'time_of_incident'  => request()->has('canplan'      )? request('canplan'      ) : null,
                'date_filr'         => request()->has('details'      )? request('details'      ) : null,
                'accused_status'    => request()->has('officer_id'   )? request('officer_id'   ) : null,
            ];
            crime_file::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crime_file  $crime_file
     * @return \Illuminate\Http\Response
     */
    public function show(crime_file $crime_file)
    {
            $crimefiledata = crime_file::all();
            return view('crime_file', [
                'crimefiledata' => $crimefiledata,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crime_file  $crime_file
     * @return \Illuminate\Http\Response
     */
    public function edit(crime_file $crime_file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crime_file  $crime_file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crime_file $crime_file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crime_file  $crime_file
     * @return \Illuminate\Http\Response
     */
    public function destroy(crime_file $crime_file)
    {
        //
    }
}
