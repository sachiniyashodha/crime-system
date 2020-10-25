@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Accused Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Accused ID : </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Accused Full Name: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">DOB :</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Address: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">City: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Contact No :</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Number of Crimes:</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Gender: </label>
                    </div>
                    <div class="col-sm-4 label-column">
                        <div class="form-group has-success">
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group"> Male</label>
                            </div>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group" checked=""> Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Status : </label>
                    </div>
                    <div class="col-sm-4 label-column">
                        <div class="form-group has-success">
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group"> Proved</label>
                            </div>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group" checked=""> Not Proved</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group has-warning"></div>
                <div class="form-group"></div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I've read and accept the terms and conditions</label>
                </div>
                <button class="btn btn-default submit-button" type="button">Submit Form</button>
            </form>
        </div>
    </div>
    
    @endsection