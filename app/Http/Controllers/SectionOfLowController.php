<?php

namespace App\Http\Controllers;


use App\petitioner;
use App\section_of_low;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectionOfLowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectionoflowdata = section_of_low::all();
        return view('r_section_of_low', [ 'sectionoflowdata' => $sectionoflowdata]);
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
            'section_id'     => 'required',
            'section_of_low' => 'required|string|max:250',
            'sentence'       => 'required|string|max:250',
            'detail'         => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            return redirect()->back()->with('error', 'Form Has Been Error');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'section_id'     => request()->has('section_id'    )? request('section_id'    ) : null,
                'section_of_low' => request()->has('section_of_low')? request('section_of_low') : null,
                'sentence'       => request()->has('sentence'      )? request('sentence'      ) : null,
                'detail'         => request()->has('detail'        )? request('detail'        ) : null,

            ];
            section_of_low::create($toInsert);
            return redirect()->back()->with('success', 'Add successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\section_of_low  $section_of_low
     * @return \Illuminate\Http\Response
     */
    public function show(section_of_low $section_of_low)
    {
        $sectionoflowdata = section_of_low::all();
        return view('section_of_low', ['sectionoflowdata' => $sectionoflowdata,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\section_of_low  $section_of_low
     * @return \Illuminate\Http\Response
     */
    public function edit(section_of_low $section_of_low)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\section_of_low  $section_of_low
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, section_of_low $section_of_low)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\section_of_low  $section_of_low
     * @return \Illuminate\Http\Response
     */
    public function destroy(section_of_low $section_of_low)
    {
        //
    }
}
