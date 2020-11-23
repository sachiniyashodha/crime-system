@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Case Outcome Form</h1>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Case out Come ID : </label><br>
                        <input class="form-control" type="text" name="case_outcome_id">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Case ID : </label><br>
                        <input class="form-control" type="text" name="case_id">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Section of Low ID : </label><br>
                        <input class="form-control" type="text" name="section_of_low_id">
                    </div>
                    
                </div>
                <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Details : </label><br>
                            <input class="form-control" type="text" name="details">
                        </div>

                    </div>

                </div>

                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Status : </label><br>
                        <select class="custom-select" id="status" name="status">
                                <option selected>Choose...</option>
                                <option value="proved">Proved</option>
                                <option value="not_proved">not_proved</option>
                            </select>
                    </div>

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