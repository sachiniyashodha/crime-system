<?php

namespace App\Http\Controllers;

use App\petitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetitionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitionerdata = petitioner::all();
        return view('r_petitioner', [ 'petitionerdata' => $petitionerdata]);
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
            'petitioner_id'     => 'required',
            'petitioner_name'   => 'required|string|max:250',
            'petitioner_address'=> 'required|string|max:250',
            'petitioner_city'   => 'required|string|max:250',
            'contact_no'        => 'nullable|max:15|string',
            'canplan'           => 'required|string|max:250',
            'gender'            => 'required|string|max:250',
            'details'           => 'required|string|max:250',
            'officer_id'        => 'required',
            'officer_name'      => 'required|string|max:250',
            'date_of_hair'      => 'required|string|max:250',
        ]);
        

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'petitioner_id'       => request()->has('petitioner_id'     )? request('petitioner_id'     ) : null,
                'petitioner_fullname' => request()->has('petitioner_name'   )? request('petitioner_name'   ) : null,
                'address'             => request()->has('petitioner_address')? request('petitioner_address') : null,
                'city'                => request()->has('petitioner_city'   )? request('petitioner_city'   ) : null,
                'contact_no'          => request()->has('contact_no'        )? request('contact_no'        ) : null,
                'gender'              => request()->has('canplan'           )? request('canplan'           ) : null,
                'canplan'             => request()->has('canplan'           )? request('canplan'           ) : null,
                'details'             => request()->has('details'           )? request('details'           ) : null,
                'officer_id'          => request()->has('officer_id'        )? request('officer_id'        ) : null,
                'officer_name'        => request()->has('officer_name'      )? request('officer_name'      ) : null,
                'date_of_hair'        => request()->has('date_of_hair'      )? request('date_of_hair'               ) : null,

            ];
            petitioner::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\petitioner  $petitioner
     * @return \Illuminate\Http\Response
     */
    public function show(petitioner $petitioner)
    {
        $petitionerdata = petitioner::all();
        return view('petitioner', [
            'petitionerdata' => $petitionerdata,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\petitioner  $petitioner
     * @return \Illuminate\Http\Response
     */
    public function edit(petitioner $petitioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\petitioner  $petitioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, petitioner $petitioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\petitioner  $petitioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(petitioner $petitioner)
    {
        //
    }
}
