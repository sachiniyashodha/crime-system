@extends('layouts.main')
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

                            <form class="form-horizontal custom-form" >
{{--                                method="POST" action="{{ route('crime_case_form') }}"--}}
                            {{ csrf_field() }}
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
                                        <!-- php -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

     <!--Modal-->
     <div id="deletecaseModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alerts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="delete_crime_case_form" >
{{--                    method="POST" action="{{ route('delete_case') }}"--}}
                    {{ csrf_field() }}
                    <input type="hidden" name="delete_case_id" id="delete_case_id" >
                    <div class="modal-body">
                        <p>Are you sure you want to delete this case?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
                $("#delete_case_id").val(this.getAttribute('data-id'))
            })
        }
    </script>
 @endsection
