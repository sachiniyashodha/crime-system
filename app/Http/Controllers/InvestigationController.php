<?php

namespace App\Http\Controllers;

use App\investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvestigationController extends Controller
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
            'investigation_id'  => 'required',
            'case_id'           => 'required|string|max:250',
            'officer_id'        => 'required|string|max:250',
            'officer_fullname'  => 'required|string|max:250',
            'date_start'        => 'nullable|max:15|string',
            'date_end'          => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'investigation_id'    => request()->has('investigation_id'  )? request('investigation_id'  ) : null,
                'case_id'             => request()->has('case_id'           )? request('case_id'           ) : null,
                'officer_id'          => request()->has('petitioner_address')? request('petitioner_address') : null,
                'officer_fullname'    => request()->has('officer_fullname'  )? request('officer_fullname'  ) : null,
                'date_start'          => request()->has('officer_id'        )? request('officer_id'        ) : null,
                'date_end'            => request()->has('date_end'          )? request('date_end'          ) : null,
            ];
            investigation::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function show(investigation $investigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function edit(investigation $investigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, investigation $investigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(investigation $investigation)
    {
        //
    }
}
