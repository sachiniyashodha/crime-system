@extends('layouts.main')
@section('content')
    <<div class="content">
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
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Investigation ID : </label>
                    </div>
                    <div class="col-sm-6 ">   
                        <input class="form-control" type="text" name="Investigation">
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
                        <label class="control-label" for="name-input-field">Officer lD : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="officer_id">
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
