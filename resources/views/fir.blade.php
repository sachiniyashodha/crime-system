@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1>Fir Form</h1>
                
                <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Fir Number : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="number" name="fir_no" >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Accused ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="accused_id" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Victim ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="victim_id" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Petitiioner ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="petitioner_id" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Place of Incident : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="place_of_incident" >
                        </div>
                    </div>
               
                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Date of Incident : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="date" name="date_of_incident" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Time of Incident : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="time" name="time_of_incident" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Date Filr : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="time" name="date_filr" >
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
                                <option value="female">Not proved</option>
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
