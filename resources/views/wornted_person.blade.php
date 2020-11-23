@extends('layouts.main')
@section('content')
<div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>wornted_person</h1>
<div class="row">
        <div class="col-md-12"><img src="assets/img/a.jpg"></div><br>
    </div>
    <div class="row">
        <div class="col-md-13">
    <p>Makandure Madush is an underworld leader and a drug kingpin, who led organized crime and drug trafficking in Sri Lanka. ... One of the notorious drug dealer and underworld kingpin operated in Colombo. He was arrested in Dubai along with Makandure Madush on 04-02-2019.</p>

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
