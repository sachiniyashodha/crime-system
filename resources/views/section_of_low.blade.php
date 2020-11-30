@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Section Of Low</strong></h2>
                            </div>
                        <div class="card-body pt-5 ">
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('section_of_low_form') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Section ID : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="section_id">
                    </div>
                    </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Section of low : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="section_of_low">
                    </div>
                    </div>

                <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Sentence : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="sentence">
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
                            <h2 class="card-title"><strong>Section Of Low Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Section ID</th>
                                    <th>Section of Low</th>
                                    <th>Sentence</th>
                                    <th>detail</th>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($section_of_lowdata as $index => $section_of_low)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$section_of_low->section_id}}</td>
                                            <td>{{$section_of_low->section_of_low}}</td>
                                            <td>{{$section_of_low->sentence}}</td>
                                            <td>{{$section_of_low->detail}}</td>
                                            <td>{{$section_of_low->contact_no}}</td>
                                            <td>{{$section_of_low->gender}}</td>
                                            <td>{{$section_of_low->details}}</td>
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
    
<!-- {{--     <div id="deletesection_of_lowModal" class="modal" tabindex="-1" role="dialog">--}} -->
<!-- {{--        <div class="modal-dialog" role="document">--}} -->
<!-- {{--            <div class="modal-content">--}} -->
<!-- {{--                <div class="modal-header">--}} -->
<!-- {{--                    <h5 class="modal-title">Alerts</h5>--}} -->
<!-- {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}} -->
<!-- {{--                        <span aria-hidden="true">&times;</span>--}} -->
<!-- {{--                    </button>--}} -->
<!-- {{--                </div>--}} -->
<!-- {{--                <form name="delete_section_of_low_form" method="POST" action="{{ route('delete_section_of_low') }}">--}} -->
<!-- {{--                    {{ csrf_field() }}--}} -->
<!-- {{--                    <input type="hidden" name="delete_section_id" id="delete_section_id" >--}} -->
<!-- {{--                    <div class="modal-body">--}} -->
<!-- {{--                        <p>Are you sure you want to delete this section of low?</p>--}} -->
<!-- {{--                    </div>--}} -->
<!-- {{--                    <div class="modal-footer">--}} -->
<!-- {{--                        <button type="submit" class="btn btn-primary">Delete</button>--}} -->
<!-- {{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}} -->
<!-- {{--                    </div>--}} -->
<!-- {{--                </form>--}} -->
<!-- {{--            </div>--}} -->
<!-- {{--        </div>--}} -->
<!-- {{--    </div>--}} -->




    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
                $("#delete_section_id").val(this.getAttribute('data-id'))
            })
        }
    </script>
@endsection
