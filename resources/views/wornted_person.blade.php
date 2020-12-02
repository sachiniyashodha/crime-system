@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>Wornted Person Form </strong></h2>
                        </div>
                        <div class="card-body pt-5 ">
                            <form class="form-horizontal custom-form" method="POST" action="{{ route('wornted_person_form') }}">
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
                                            <label class="control-label" for="name-input-field">Person ID  : </label>
                                        </div>
                                         <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="person_id" >
                                         </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Person Name : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input class="form-control" type="text" name="person_name">
                                        </div>
                                    </div>
                                    <div class="form- group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="email-input-field">Images </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                            <input type="file" id="file-input" name="images" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="name-input-field">Information : </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <textarea class="form-control form-control-lg" name="information"></textarea>
                                        </div>
                                    </div>
                                    <div class="form- group row">
                                        <div class="col-sm-4 label-column text-right">
                                            <label class="control-label" for="email-input-field">Details </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input type="file" id="file-input" name="details" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-6">
                                           <button type="button" class="btn btn-primary" onclick="submit('submit')">Submit</button>
                                            <button type="button" class="btn btn-primary" onclick="clear('clear')">Clear</button>
                                            <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
{{--                                            <button type="button" class="btn btn-primary" onclick="update('update')">Update</button>--}}
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
                            <h2 class="card-title"><strong>Wornted Person Table</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Person ID</th>
                                    <th>person Name</th>
                                    <th>Images</th>
                                    <th>Information</th>
                                    <th>Details</th>
                                   
                                    </thead>
                                    <tbody>
                                    @foreach($wornted_persondata as $index =>$wornted_person)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$wornted_person->person_id}}</td>
                                            <td>{{$wornted_person->person_name}}</td>
                                            <td>{{$wornted_person->images}}</td>
                                            <td>{{$wornted_person->information}}</td>
                                            <td>{{$wornted_person->details}}</td>
                                              
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
