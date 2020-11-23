@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-mx-auto">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1>Case Form</h1>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Case ID : </label>
                    </div>
                    <div class="col-sm-6 "> 
                        <input class="form-control" type="text" name="case_id" >
                    </div> 
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Officer ID : </label>
                    </div>
                    <div class="col-sm-6 "> 
                        <input class="form-control" type="text" name="officer_id" >
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field"> Fir Number : </label>
                    </div>
                    <div class="col-sm-6 "> 
                        <input class="form-control" type="number" name="fir_number" >
                    </div>
                    
                </div>
                </div>
                    <div class="form-row">
                    <button class="btn btn-primary" onclick="submit('submit')">Submit</button>
                    <button class="btn btn-primary" onclick="clear('clear')">Clear</button>
                    <button class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    </div>
                    </div>

            </form>
        </div>
    </div>
 @endsection