@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Fir Form</h1>
                
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Fir Number : </label><br>
                        <input class="form-control" type="number" name="fir_no">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Accused ID:</label><br>
                        <input class="form-control" type="text" name="accused_id">
                    </div>
                   
                </div>

                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field"> Victim ID : </label><br>
                        <input class="form-control" type="text" name="victim_id">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Petitiioner ID : </label><br>
                        <input class="form-control" type="text" name="petitioner_id">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Place of Incident : </label><br>
                        <input class="form-control" type="text" name="place_of_incident">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Date of Incident : </label><br>
                        <input class="form-control" type="date" name="date_of_incident">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Time of Incident : </label><br>
                        <input class="form-control" type="time" name="time_of_incident">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Date Filr : </label><br>
                        <input class="form-control" type="date" name="date_filr">
                    </div>
                    
                </div>
                
                <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Accused Status</label><br>
                            <select class="custom-select" id="accused_status" name="accused_status">
                                <option selected>Choose...</option>
                                <option value="male">proved</option>
                                <option value="female">not_proved</option>
                            </select>
                        </div>
                        
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
