<?php

namespace App\Http\Controllers;

use App\entry_text;
use App\petitioner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EntryTextController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
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
                'dob'               => 'required|string|max:250',
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
                'date_of_hair'        => request()->has('dob'               )? request('dob'               ) : null,

            ];
            petitioner::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("added successfully!");
        // $add_data = request()->all();
    //    dd($add_data);
//        echo "hello world";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entry_text  $entry_text
     * @return \Illuminate\Http\Response
     */
    public function show(entry_text $entry_text)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entry_text  $entry_text
     * @return \Illuminate\Http\Response
     */
    public function edit(entry_text $entry_text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entry_text  $entry_text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entry_text $entry_text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entry_text  $entry_text
     * @return \Illuminate\Http\Response
     */
    public function destroy(entry_text $entry_text)
    {
        //
    }
}
