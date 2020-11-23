@extends('layouts.main')
@section('content')

    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Admin Form</h1>
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Admin ID :</label><br>
                        <input class="form-control" type="text" name="admin_id">
                    </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Officer ID: </label><br>
                        <input class="form-control" type="text" name="officer_id">
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Officer Name :</label><br>
                            <input class="form-control" type="text" name="officer_name">
                </div>

                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Rank : </label><br>
                        <input class="form-control" type="text" name="rank">
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">DOB </label><br>
                        <input class="form-control" type="date" name="dob">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Address: </label><br>
                        <input class="form-control" type="text" name="address">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Contact No :</label><br>
                        <input class="form-control" type="number" name="contact_no">
                    </div>
                    
                
                <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Gender</label><br>
                            <select class="custom-select" id="gender" name="gender">
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
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