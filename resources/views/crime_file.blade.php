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
                            <form class="form-horizontal custom-form"  method="POST" action="{{ route('crimefile_forms') }}">

                                {{ csrf_field() }}
                                @if (\Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @elseif (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <li>{!! \Session::get('error') !!}</li>
                                        </ul>
                                    </div>
                                @endif
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
                                                    <input class="form-control" type="date" name="date_filr" >
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
                                                    <button type="button" class="btn btn-primary" onclick="submit('submit')">Submit</button>
                                                    <button type="button" class="btn btn-primary" onclick="clear('clear')">Clear</button>
                                                    <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
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
                                    <th>fir_no</th>
                                    <th>accused_id</th>
                                    <th>victim_id</th>
                                    <th>petitioner_id</th>
                                    <th>place_of_incident</th>
                                    <th>date_of_incident</th>
                                    <th>time_of_incident</th>
                                    <th>date_filr</th>
                                    <th>accused_status</th>
                                    </thead>
                                    <tbody>
                                    @foreach($crimefiledata as $index => $crimefile)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$crimefile->fir_no}}</td>
                                            <td>{{$crimefile->accused_id}}</td>
                                            <td>{{$crimefile->victim_id}}</td>
                                            <td>{{$crimefile->petitioner_id}}</td>
                                            <td>{{$crimefile->place_of_incident}}</td>
                                            <td>{{$crimefile->date_of_incident}}</td>
                                            <td>{{$crimefile->time_of_incident}}</td>
                                            <td>{{$crimefile->date_filr}}</td>
                                            <td>{{$crimefile->accused_status}}</td>
                                        </tr>
                                    @endforeach
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
