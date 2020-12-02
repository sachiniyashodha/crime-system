@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Case Outcome Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                        <form class="form-horizontal custom-form" method="POST" action="{{ route('caseoutcome_form') }}">
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
                                            <label class="control-label" for="name-input-field">Case out Come ID : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="case_outcome_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Case ID : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="case_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Section of Low ID : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="section_of_low_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="email-input-field">Details : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="details">
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
                                                <option value="female">Not Proved</option>
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
                            <h2 class="card-title"><strong>Case Outcome Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Case_outcome ID</th>
                                    <th>Case ID</th>
                                    <th>Section Of Low ID</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    </thead>
                                    <tbody>
                                    @foreach($case_outcomesdata as $index => $case_outcomes)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$case_outcomes->case_outcome_id}}</td>
                                            <td>{{$case_outcomes->case_id}}</td>
                                            <td>{{$case_outcomes->section_of_low_id}}</td>
                                            <td>{{$case_outcomes->deatails}}</td>
                                            <td>{{$case_outcomes->status}}</td>
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
