<?php

namespace App\Http\Controllers;

use App\petitioner;
use App\victim;
use App\wornted_person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VictimController extends Controller
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
            'victim_id'         => 'required',
            'victim_name'   => 'required|string|max:250',
            'address'           => 'required|string|max:250',
            'city'              => 'required|string|max:250',
            'contact_no'        => 'nullable|max:15|string',
            'status'         => 'required|string|max:250',
            'gender'            => 'required|string|max:250',
            'detail'           => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            return redirect()->back()->with('error', 'Form Has Been Error');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'victim_id'       => request()->has('victim_id'   )? request('victim_id'   ) : null,
                'victim_fullname' => request()->has('victim_name' )? request('victim_name' ) : null,
                'address'         => request()->has('address'     )? request('address'     ) : null,
                'city'            => request()->has('city'        )? request('city'        ) : null,
                'contact_no'      => request()->has('contact_no'  )? request('contact_no'  ) : null,
                'condition'       => request()->has('status'      )? request('status'      ) : null,
                'gender'          => request()->has('gender'      )? request('gender'      ) : null,
                'details'         => request()->has('detail'     )? request('detail'      ) : null,

            ];
            victim::create($toInsert);
        }
        return redirect()->back()->with('success', 'Add successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\victim  $victim
     * @return \Illuminate\Http\Response
     */
    public function show(victim $victim)
    {
        $victimdata = victim::all();
        return view('victim', ['victimdata' => $victimdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\victim  $victim
     * @return \Illuminate\Http\Response
     */
    public function edit(victim $victim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\victim  $victim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, victim $victim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\victim  $victim
     * @return \Illuminate\Http\Response
     */
    public function destroy(victim $victim)
    {
        //
    }
}
