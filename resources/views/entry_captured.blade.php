@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Entry Caputured Form  </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                    <form class="form-horizontal custom-form" method="POST" action="{{ route('entry_captured_forms') }}">
                    {{ csrf_field() }}
                
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Case ID : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="cr_id">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Reference No : </label>
                        </div>
                        <div class="col-sm-6 ">
                        <input class="form-control" type="text" name="reference_no">
                    </div>
                </div>


                

                <div class="form- group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="email-input-field">Detail :</label>
                            </div>
                            <div class="col-sm-6 ">
                            <input type="file" id="file-input" name="detail" >
                        </div>
                    </div>
                

                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group has-warning"></div>
               
                
       
                <div class="form-row">
                <button class="btn btn-primary" onclick="submit('submit')">Submit</button>
                    <button class="btn btn-primary" onclick="clear('clear')">Clear</button>
                    <button class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    </div>
       
        </div>
    </div>
    </form>
    
 @endsection

