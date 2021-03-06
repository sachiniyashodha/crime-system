@extends('layouts.app')
@section('content')
        
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>INVESTIGATION TABLE </strong></h2>
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
                                            <th>Investigation ID</th>
                                            <th>Case ID</th>
                                            <th>Officer Name</th>
                                            <th>Date start</th>
                                            <th>Date end</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($investigationdata as $index =>$investigation)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$investigation->investigation_id}}</td>
                                            <td>{{$investigation->case_id}}</td>
                                            <td>{{$investigation->officer_fullname}}</td>
                                            <td>{{$investigation->date_start}}</td>
                                            <td>{{$investigation->date_end}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
