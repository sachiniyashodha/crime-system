@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Accused Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('accused_form') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
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
                                            <label class="control-label" for="name-input-field">Accused Full Name : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="accused_fullname" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Date Of Birth : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="date" name="date_of_birth" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Address : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="address" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">City : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="city" >
                                        </div>
                                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Contact No : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="number" name="contact_no" >
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
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Number of Crimes : </label>
                        </div>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="number" name="number_of_crime" >
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
                            <h2 class="card-title"><strong>Accused Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Accused ID</th>
                                    <th>Accused Full Name</th>
                                    <th>DOB</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Number of Crime</th>
                                    </thead>
                                    <tbody>
                                    @foreach($accuseddata as $index => $accused)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$accused->accu_id}}</td>
                                            <td>{{$accused->accused_fullname}}</td>
                                            <td>{{$accused->address}}</td>
                                            <td>{{$accused->city}}</td>
                                            <td>{{$accused->contact_no}}</td>
                                            <td>{{$accused->gender}}</td>
                                            <td>{{$accused->status}}</td>
                                            <td>{{$accused->number_of_crime}}</td>
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
