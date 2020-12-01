<?php

namespace App\Http\Controllers;

use App\admin_form;
use App\entry_text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminFormController extends Controller
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
        // $add_data = request()->all();
        //  dd($add_data);

        $add_data = Validator::make(request()->all(),[
            'admin_id'     => 'required',
            'officer_id'   => 'required|string|max:250',
            'officer_name' => 'required|string|max:250',
            'rank'         => 'required|string|max:250',
            'dob'          => 'nullable|max:15|string',
            'address'      => 'required|string|max:250',
            'contact_no'   => 'required|string|max:250',
            'gender'       => 'required|string|max:250',
        ]);

        if($add_data->fails()){
            $add_data->errors()->add('from', 'ADD');
        }else{
            $toInsert = [  //Todo : Get the Confirmation for validations
                'admin_id'     => request()->has( 'admin_id'    )? request( 'admin_id'    ) : null,
                'officer_id'   => request()->has( 'officer_id'  )? request( 'officer_id'  ) : null,
                'officer_name' => request()->has( 'officer_name')? request( 'officer_name') : null,
                'rank'         => request()->has( 'rank'        )? request( 'rank'        ) : null,
                'dob'          => request()->has( 'dob'         )? request( 'dob'         ) : null,
                'address'      => request()->has( 'address'     )? request( 'address'     ) : null,
                'contact_no'   => request()->has( 'contact_no'  )? request( 'contact_no'  ) : null,
                'gender'       => request()->has( 'gender'      )? request( 'gender'      ) : null
            ];
            admin_form::create($toInsert);
        }
        return  redirect()->back()->withInput()->withErrors("hello world");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin_form  $admin_form
     * @return \Illuminate\Http\Response
     */
    public function show(admin_form $admin_form)
    {
        $adminformdata = admin_form::all();
        return view('add_admin', ['adminformdata' => $adminformdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin_form  $admin_form
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_form $admin_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin_form  $admin_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin_form $admin_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin_form  $admin_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_form $admin_form)
    {
        $id = request('delete_id');
        admin_form::where('admin_id', $id)->delete();
        return redirect()->back();
    }
}
