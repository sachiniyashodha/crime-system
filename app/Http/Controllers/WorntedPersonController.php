<?php

namespace App\Http\Controllers;

use App\wornted_person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorntedPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wornted_persondata = wornted_person::all();
        return view('view_wornted_p', [ 'wornted_persondata' => $wornted_persondata]);
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
                'person_id'          => 'required',
                'person_name'        => 'required|string|max:250',
                'images'             => 'required|string|max:250',
                'information'        => 'required|string|max:250',
                'details'            => 'required|string|max:250',
            ]);

            if($add_data->fails()){
                $add_data->errors()->add('from', 'ADD');
            }else{
                $toInsert = [  //Todo : Get the Confirmation for validations
                    'person_id'     => request()->has('person_id'   )? request('person_id'  ) : null,
                    'person_name'   => request()->has('person_name' )? request('person_name') : null,
                    'images'        => request()->has('images'      )? request('images'      ) : null,
                    'information'   => request()->has('information' )? request('information') : null,
                    'details'       => request()->has('details'     )? request('details'    ) : null,
                ];
                wornted_person::create($toInsert);
            }
            return redirect()->back()->withInput()->withErrors("hello world");

            //$add_data = request()->all();
            //dd($add_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wornted_person  $wornted_person
     * @return \Illuminate\Http\Response
     */
    public function show(wornted_person $wornted_person)
    {
        $wornted_persondata = wornted_person::all();
        return view('wornted_person', ['wornted_persondata' => $wornted_persondata]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wornted_person  $wornted_person
     * @return \Illuminate\Http\Response
     */
    public function edit(wornted_person $wornted_person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wornted_person  $wornted_person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wornted_person $wornted_person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wornted_person  $wornted_person
     * @return \Illuminate\Http\Response
     */
    public function destroy(wornted_person $wornted_person)
    {
        //
    }
}
