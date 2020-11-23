@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Accused Form</h1>
                <div class="form-row">
                        <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Accused ID : </label><br>
                        <input class="form-control" type="text" name="accused_id" require>
                    </div>
                    
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Accused Full Name: </label><br>
                        <input class="form-control" type="text" name="accused_full_name" require>
                    </div>

                </div> 
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">DOB :</label><br>
                        <input class="form-control" type="date" name="dob">
                    </div>

                    <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Address :</label><br>
                            <input class="form-control" type="text" name="address">
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">City: </label><br>
                        <input class="form-control" type="text" name="city">
                    </div>

                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Contact No :</label><br>
                        <input class="form-control" type="number" name="contact_no">
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Number of Crimes:</label><br>
                        <input class="form-control" type="number" name="number_of_crime">
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
                    

            </form>
        </div>
    </div>
    
    @endsection