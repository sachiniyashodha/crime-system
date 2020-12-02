@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Victim Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('victim_forms') }}">
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
                                                <label class="control-label" for="name-input-field">Victim ID : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="victim_id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Full Name : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="victim_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Address : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">City  : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="city">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Contact No  : </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" type="text" name="contact_no">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Condition</label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <select class="custom-select" id="status" name="status">
                                                    <option selected>Choose...</option>
                                                    <option value="male">Live</option>
                                                    <option value="female">Deth</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="name-input-field">Gender</label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <select class="custom-select" id="gender" name="gender">
                                                    <option selected>Choose...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form- group row">
                                            <div class="col-sm-4 label-column text-right">
                                                <label class="control-label" for="email-input-field">Detail </label>
                                                </div>
                                                <div class="col-sm-6 ">
                                                <input type="file" id="file-input" name="detail" >
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
                            <h2 class="card-title"><strong>Victim Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Victim ID</th>
                                    <th>Victim Full Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Condition</th>
                                    <th>Gender</th>
                                    <th>Details</th>
                                    </thead>
                                    <tbody>
                                    @foreach($victimdata as $index => $victim)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$victim->victim_id}}</td>
                                            <td>{{$victim->victim_fullname}}</td>
                                            <td>{{$victim->address}}</td>
                                            <td>{{$victim->city}}</td>
                                            <td>{{$victim->contact_no}}</td>
                                            <td>{{$victim->condition}}</td>
                                            <td>{{$victim->gender}}</td>
                                            <td>{{$victim->details}}</td>
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
