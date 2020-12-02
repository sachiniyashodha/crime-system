@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>VICTIM TABLE </strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="row py-4">
                                <div class="col-sm-3 pr-0">
                                    <input class="form-control" id="searchdata" type="text" placeholder="Search..">
                                </div>
                                <div class="col-1 pt-2 ">
                                    <icons-image _ngcontent-ebe-c22="" _nghost-ebe-c19="">
                                        <span _ngcontent-ebe-c19="" class="material-icons icon-image-preview">search</span>
                                    </icons-image>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Victim ID</th>
                                            <th>Victim Full Name</th>
                                            <th>Address </th>
                                            <th>city </th>
                                            <th>Contact no</th>
                                            <th>Condition </th>
                                            <th>Gender </th>
                                            <th>details </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($victimdata as $index =>$victim)
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
                                </table>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-6">
                                   <button type="button" class="btn btn-primary" onclick="delete('delete')">Delete</button>
                                   <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
