@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Case Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('crimecase_forms') }}">
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
                                                <label class="control-label" for="name-input-field">Case ID : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="case_id" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Officer ID : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="officer_id" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field"> Fir Number : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="number" name="fir_number" >
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
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Cases Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Case ID</th>
                                    <th>Officer ID </th>
                                    <th>Fir Number</th>
                                    </thead>
                                    <tbody>
                                    @foreach($crimecasedata as $index => $crimecase)
                                        <tr>
                                            <td>{{ ++$index }}</td>'
                                            <td>{{$crimecase->case_id}}</td>
                                            <td>{{$crimecase->officer_id}}</td>
                                            <td>{{$crimecase->fir_number}}</td>
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
