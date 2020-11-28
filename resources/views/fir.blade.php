@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Fir Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                    <form class="form-horizontal custom-form" method="POST" action="{{ route('crime_files_form') }}">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-12">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Fir Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Fir No</th>
                                    <th>Accused ID</th>
                                    <th>Victim</th>
                                    <th>Petitioner</th>
                                    <th>Place Of Incident</th>
                                    <th>Date Of Incident</th>
                                    <th>Time Of Incident</th>
                                    <th>Date Fir</th>
                                    <th>Accused Status</th>
                                    </thead>
                                    <tbody>
                                        <!-- php -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
