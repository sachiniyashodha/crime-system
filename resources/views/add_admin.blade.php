@extends('layouts.app')
@section('content')

<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Admin Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                    <form class="form-horizontal custom-form" method="POST" action="{{ route('admin_forms') }}">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Admin ID :</label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="admin_id">
                    </div>
                    </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Officer ID: </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="officer_id">
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Officer Name :</label>
                            </div>
                            <div class="col-sm-6 ">
                            <input class="form-control" type="text" name="officer_name">
                </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Rank : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="rank">
                    </div>
                    </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">DOB </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="date" name="dob">
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
                            <h2 class="card-title"><strong>Admin Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Admin ID</th>
                                    <th>Officer ID</th>
                                    <th>Officer Name</th>
                                    <th>Address</th>
                                    <th>rank</th>
                                    <th>DOB</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                    <th>Gender</th>
                                    </thead>
                                    <tbody>
                                        <!-- php -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
 @endsection