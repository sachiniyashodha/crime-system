@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-mx-auto">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1>Case Outcome Form</h1>
                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Case out Come ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="case_outcome_id">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Case ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="case_id">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Section of Low ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="section_of_low_id">
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
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Status</label>
                        </div>
                        <div class="col-sm-6 ">
                            <select class="custom-select" id="status" name="status">
                                <option selected>Choose...</option>
                                <option value="male">Proved</option>
                                <option value="female">Not Proved</option>
                            </select>
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