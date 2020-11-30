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
                'entry_id'          => 'required',
                'reference_no'      => 'required|string|max:250',
                'branch_name'       => 'required|string|max:250',
                'date'              => 'required|string|max:250',
                'time'              => 'nullable|max:15|string',
                'fir_no'            => 'required|string|max:250',
                'police_entry'      => 'required|string|max:250',
                'details'           => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'entry_id'     => request()->has('entry_id'    )? request('entry_id'     ) : null,
                'reference_no' => request()->has('reference_no')? request('reference_no' ) : null,
                'branch_name'  => request()->has('branch_name' )? request('branch_name'  ) : null,
                'date'         => request()->has('date'        )? request('date'         ) : null,
                'time'         => request()->has('time'        )? request('time'         ) : null,
                'fir_no'       => request()->has('fir_no'      )? request('fir_no'       ) : null,
                'police_entry' => request()->has('police_entry')? request('police_entry' ) : null,
                'details'      => request()->has('details'     )? request('details'      ) : null,

            ];
            entry_text::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("added successfully!");
//         $add_data = request()->all();
//        dd($add_data);
//        echo "hello world";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entry_text  $entry_text
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show()
    {
       $entrytextdata = entry_text::all();
       return view('entry_text', ['entrytextdata' => $entrytextdata,]);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        $id = request('delete_entry_text_id');
        entry_text::where('entry_id', $id)->delete();

        return redirect()->back();
    }
}
