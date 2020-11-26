@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Wornted Person Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                    <form class="form-horizontal custom-form" >
{{--                        method="POST" action="{{ route('wornted_person_form') }}"--}}
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
            <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Person Name : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="person_name">
                    </div>
                </div>   

            <div class="form-group row">
                <div class="col-sm-4 label-column img-right">
                     <div class="col-md-12"><img src="assets/img/a.jpg"></div>
                    </div>
                    <div class="row">
                          <div class="col-md-13">
                     <p>Makandure Madush is an underworld leader and a drug kingpin, who led organized crime and drug trafficking in Sri Lanka. ... One of the notorious drug dealer and underworld kingpin operated in Colombo. He was arrested in Dubai along with Makandure Madush on 04-02-2019.</p>
                     <input class="form-control" type="text" name="text" >
                        </div>
                    </div>

                <div class="form- group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="email-input-field">Detail </label>
                            </div>
                            <div class="col-sm-6 ">
                            <input type="file" id="file-input" name="detail" >
                        </div>
                    </div>
                    <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                   
                   <button type="button" class="btn btn-primary" onclick="update('update')">Update</button>
               
                </div>
                </div>
                    
                

                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label text-left" for="invalidCheck">
                            I've read and accept the terms and conditions
                        </label>
                        <div class="invalid-feedback text-left">
                            You must agree before submitting.
                        </div>
                    </div>
                    </div>
                </div>


                <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                   <button type="button" class="btn btn-primary" onclick="submit('submit')">Submit</button>
                    <button type="button" class="btn btn-primary" onclick="clear('clear')">Clear</button>
                    <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="delete('delete')">Delete</button>
                </div>
            </div>

                    
        </form>
    </div>
    </div>  

@endsection
