@extends('layouts.app')
@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>CASE TABLE </strong></h2>
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
                                            <th>Case ID</th>
                                            <th>Officer ID</th>
                                            <th>Fir number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($crimecasedata as $index =>$crime_case)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$crime_case->case_id}}</td>
                                            <td>{{$crime_case->officer_id}}</td>
                                            <td>{{$crime_case->fir_number}}</td>
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
