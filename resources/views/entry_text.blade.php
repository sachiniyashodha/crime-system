@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Entry (Text) Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">
                        <form class="form-horizontal custom-form"  method="POST" action="{{ route('entrytext_form') }}">

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
                                            <label class="control-label" for="name-input-field">Entry ID :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="entry_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Reference No :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="reference_no">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Branch Name :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="branch_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Date :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" name="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Time :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="time" name="time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Fir No :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="fir_no">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Police Entry Text :</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" name="police_entry"></textarea>
                                        </div>
                                    </div>
                                    <div class="form- group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="email-input-field">Detail </label>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <input type="file" id="file-input" name="detail" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <br><br>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" onclick="submit('submit')">Submit</button>
                                            <button type="button" class="btn btn-primary" onclick="clear('clear')">Clear</button>
                                            <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                                            <a type="back" href="/police_entry" class="btn btn-primary  btn-back">Back</a>
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
                            <h2 class="card-title"><strong>Entry text Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Entry ID</th>
                                    <th>Reference No</th>
                                    <th>Branch Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Fir ID</th>
                                    <th>Police Entry</th>
                                    <th>Details</th>
{{--                                    <th>Action</th>--}}
                                    </thead>
                                    <tbody>
                                        @foreach($entrytextdata as $index => $entrytext)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$entrytext->entry_id}}</td>
                                            <td>{{$entrytext->reference_no}}</td>
                                            <td>{{$entrytext->branch_name}}</td>
                                            <td>{{$entrytext->date}}</td>
                                            <td>{{$entrytext->time}}</td>
                                            <td>{{$entrytext->fir_id}}</td>
                                            <td>{{$entrytext->police_entry}}</td>
                                            <td>{{$entrytext->other_details}}</td>
{{--                                            <td><a type="back" href="/entry_text/{{$entrytext->entry_id}}" class="btn btn-primary  btn-back"> Update</a></td>--}}
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
