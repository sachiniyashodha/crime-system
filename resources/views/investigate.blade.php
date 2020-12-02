@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Investigations Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                         <form class="form-horizontal custom-form" method="POST" action="{{ route('investigation_forms') }}">
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
                                            <label class="control-label" for="name-input-field">Investigation ID : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="investigation_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Case lD : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="case_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Offiicer  Full Name :</label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="officer_fullname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Date Start : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="date" name="date_start">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Date End :</label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="date" name="date_end">
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
                            <h2 class="card-title"><strong>Investigation Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>investigation ID</th>
                                    <th>case ID</th>
                                    <th>Officer Full Name</th>
                                    <th>Date Start</th>
                                    <th>Date End</th>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($investigationdata as $index => $investigation)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$investigation->investigation_id}}</td>
                                            <td>{{$investigation->case_id}}</td>
                                            <td>{{$investigation->officer_fullname}}</td>
                                            <td>{{$investigation->date_start}}</td>
                                            <td>{{$investigation->date_end}}</td>
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
