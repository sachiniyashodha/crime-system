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
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('section_of_low_forms') }}">
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
                                    
                                    @foreach($sectionoflowdata as $index => $section_of_low)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$section_of_low->section_id}}</td>
                                            <td>{{$section_of_low->section_of_low}}</td>
                                            <td>{{$section_of_low->sentence}}</td>
                                            <td>{{$section_of_low->detail}}</td>
                                    @endforeach 
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    

@endsection
