@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Petitioner Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">

                            <form class="form-horizontal custom-form" method="POST" action="{{ route('petitioner_form') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">Petitioner ID : </label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="text" name="petitioner_id" >
                                            </div>
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="email-input-field">Canplan : </label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <textarea class="form-control form-control-lg" name="canplan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">Full Name : </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control form-control-lg" type="text" name="petitioner_name" >
                                            </div>
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="email-input-field">Details : </label>
                                            </div>
                                            <div class="col-sm-3 py-2">
                                                <input class="form-control border-0"  type="file" id="file-input" name="details" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">Address :</label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="text" name="petitioner_address">
                                            </div>
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="email-input-field">Officer ID : </label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="number" name="officer_id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">City :</label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="text" name="petitioner_city">
                                            </div>
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="email-input-field">Officer Name : </label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="text" name="officer_name">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">Contact No :</label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="number" name="contact_no">
                                            </div>
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="email-input-field">Date of hair : </label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <input class="form-control form-control-lg" type="date" name="date_of_hair">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 label-column text-right">
                                                <label class="control-label col-form-label-lg pt-1" for="name-input-field">Gender</label>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <select class="custom-select" id="gender" name="gender">
                                                    <option selected>Choose...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3 label-column text-right">
                                                <div class="form-check text-left">
                                                    <input class="" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class=" text-left" for="invalidCheck">
                                                        I've read and accept the terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback text-left">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                                <div class="form-check text-left">
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
                            <h2 class="card-title"><strong>Petitioner Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Petitioner ID</th>
                                    <th>Name</th>
                                    <th>Address/th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Action</th>
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
    <div id="deletePetitionerModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alerts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="delete_petitioner_form" method="POST" action="{{ route('delete_petitioner') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="delete_petitioner_id" id="delete_petitioner_id" >
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Petitioner?</p>
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
                $("#delete_petitioner_id").val(this.getAttribute('data-id'))
            })
        }
    </script>
@endsection
