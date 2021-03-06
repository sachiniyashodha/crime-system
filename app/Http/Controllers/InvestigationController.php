<?php

namespace App\Http\Controllers;

use App\crime_file;
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
        $investigationdata = investigation::all();
        return view('r_investigation', [ 'investigationdata' => $investigationdata]);
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
            'investigation_id'  => 'required',
            'case_id'           => 'required|string|max:250',
            'officer_fullname'  => 'required|string|max:250',
            'date_start'        => 'nullable|max:15|string',
            'date_end'          => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            return redirect()->back()->with('error', 'Form Has Been Error');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'investigation_id'    => request()->has('investigation_id'  )? request('investigation_id'  ) : null,
                'case_id'             => request()->has('case_id'           )? request('case_id'           ) : null,
                'officer_fullname'    => request()->has('officer_fullname'  )? request('officer_fullname'  ) : null,
                'date_start'          => request()->has('date_start'        )? request('date_start'        ) : null,
                'date_end'            => request()->has('date_end'          )? request('date_end'          ) : null,
            ];
            investigation::create($toInsert);
            return redirect()->back()->with('success', 'Add successfully!');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function show(investigation $investigation)
    {
        $investigationdata = investigation::all();
        return view('investigate', [
            'investigationdata' => $investigationdata,
        ]);
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
