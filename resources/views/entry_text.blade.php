@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>ENTRY (text) Form</h1>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Entry ID: </label><br>
                        <input class="form-control" type="text" name="entry_id" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Reference No: </label><br>
                        <input class="form-control" type="text" name="reference_no" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Branch Name:</label><br>
                        <input class="form-control" type="text" name="branch_name" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Date : </label><br>
                        <input class="form-control" type="date" name="date" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Time : </label><br>
                        <input class="form-control" type="time" name="branch_name" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Fir ID : </label><br>
                        <input class="form-control" type="text" name="fir_id" require>
                    </div>
                   
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Police Entry Text: </label><br>
                        <textarea class="form-control" name="police_entry"></textarea>
                    </div>
                    
                </div>
                
                <div class="form-row">
                    <label class="control-label" for="file-input">Other Details</label><br>
                    <input class="form-control" type="text" name="other_details" require>
                </div>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                I've read and accept the terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
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
