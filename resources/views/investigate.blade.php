@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 mx-auto">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1> Investigate Form</h1>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Investigation ID : </label>
                    </div>
                    <div class="col-sm-6 ">   
                        <input class="form-control" type="text" name="Investigation">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Case lD : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="case_id">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Officer lD : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="officer_id">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right"> 
                        <label class="control-label" for="name-input-field">Offiicer Name :</label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="officer_name">
                    </div>
                   
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Date Start : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="date" name="date_start">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Date End :</label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="date" name="date_end">
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
                </div>
            </form>
        </div>
    </div>
@endsection
