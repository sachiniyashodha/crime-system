@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-mx-auto">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1>ENTRY (text) Form</h1>
                
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Entry ID :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="entry_id">
                    </div>
                    </div>
                
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Reference No :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="reference_no">
                    </div>
                    </div>
               
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Branch Name :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="branch_name">
                    </div>
                    </div>
               
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Date :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="date" name="date">
                    </div>
                    </div>
                
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Time :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="time" name="time">
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Fir ID :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="fir_id">
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Police Entry Text :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <textarea class="form-control" name="police_entry"></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="email-input-field">Details : </label>
                            </div>
                            <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="details">
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
