@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 bg-white">
            <form class="form-horizontal custom-form" method="POST" action="{{ route('petitioner_form') }}">
                {{ csrf_field() }}

                    <h1>Petitioner Form</h1>
                    <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Petitioner ID :</label><br>
                            <input class="form-control" type="text" name="petitioner_id" require>
                        </div>
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Full Name :</label><br>
                            <input class="form-control" type="text" name="petitioner_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Address :</label><br>
                            <input class="form-control" type="text" name="petitioner_address">
                        </div>
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">City :</label><br>
                            <input class="form-control" type="text" name="petitioner_city">
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
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Canplan </label><br>
                            <textarea class="form-control" name="canplan"></textarea>
                        </div>
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Details </label><br>
                            <input type="file" id="file-input" name="details" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Officer ID : </label><br>
                            <input class="form-control" type="number" name="officer_id">
                        </div>
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Officer Name : </label><br>
                            <input class="form-control" type="text" name="officer_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Date of hair : </label><br>
                            <input class="form-control" type="date" name="date_of_hair">
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
    </div>
@endsection
