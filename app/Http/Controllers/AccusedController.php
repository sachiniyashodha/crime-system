<?php

namespace App\Http\Controllers;

use App\accused;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccusedController extends Controller
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
            'accused_id'       => 'required',
            'accused_fullname' => 'required|string|max:250',
            'date_of_birth'    => 'required|string|max:250',
            'address'          => 'required|string|max:250',
            'city'             => 'required|string|max:250',
            'contact_no'       => 'nullable|max:15|string',
            'gender'           => 'required|string|max:250',
            'status'           => 'nullable|max:15|string',
            'number_of_crime'  => 'nullable|max:15|string',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'accused_id'       => request()->has('accused_id'      )? request('accused_id'      ) : null,
                'accused_fullname' => request()->has('accused_fullname')? request('accused_fullname') : null,
                'date_of_birth'    => request()->has('date_of_birth'   )? request('date_of_birth'   ) : null,
                'address'          => request()->has('address'         )? request('address'         ) : null,
                'city'             => request()->has('city'            )? request('city'            ) : null,
                'contact_no'       => request()->has('contact_no'      )? request('contact_no'      ) : null,
                'gender'           => request()->has('gender'          )? request('gender'          ) : null,
                'status'           => request()->has('status'          )? request('status'          ) : null,
                'number_of_crime'  => request()->has('number_of_crime' )? request('number_of_crime' ) : null,
            ];
            accused::create($toInsert);
        }
        return redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accused  $accused
     * @return \Illuminate\Http\Response
     */
    public function show(accused $accused)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accused  $accused
     * @return \Illuminate\Http\Response
     */
    public function edit(accused $accused)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accused  $accused
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accused $accused)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accused  $accused
     * @return \Illuminate\Http\Response
     */
    public function destroy(accused $accused)
    {
        //
    }
}
