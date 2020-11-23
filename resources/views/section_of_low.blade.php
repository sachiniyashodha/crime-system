@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Section of Low Form</h1>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Section ID : </label><br>
                        <input class="form-control" type="text" name="section_id" require>
                    </div>
                    <//div class="col-sm-6 input-column">
                        <//input class="form-control" type="text">
                    <//div>
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Section of low: </label><br>
                        <input class="form-control" type="text" name="section_of_low" require>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Sentence : </label><br>
                        <input class="form-control" type="text" name="sentence" require>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Detail </label><br>
                        <input class="form-control" type="text" name="detail" require>
                    </div>
                </div>
                <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Details : </label><br>
                            <input class="form-control" type="text" name="details">
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
                    
            </form>
        </div>
    </div>
@endsection