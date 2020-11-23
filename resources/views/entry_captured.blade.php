@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Entry Caputured Form </h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Reference No: </label>
                        <input class="form-control" type="text" name="reference_no" require>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group"></div>
                <button class="btn btn-default submit-button" type="button">Please Record Entry Audio</button>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group has-warning"></div>
                <div class="form-group"></div><a class="btn btn-default submit-button" role="button" href="police_entry.html">Back To Entry Page</a></form>
       
                <div class="form-row">
                <button class="btn btn-primary" onclick="submit('submit')">Submit</button>
                    <button class="btn btn-primary" onclick="clear('clear')">Clear</button>
                    <button class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    </div>
       
        </div>
    </div>
    </form>
    
 @endsection

