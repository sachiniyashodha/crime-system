@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>FIR TABLE </strong></h2>
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
                                            <th>Fir Number:</th>
                                            <th>Accused ID:</th>
                                            <th>Victim ID</th>
                                            <th>Petitioner ID </th>
                                            <th>Place of Incident</th>
                                            <th> Date of Incident&nbsp; </th>
                                            <th>Time of incident</th>
                                            <th>Date Filr</th>
                                            <th>Accused status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($crimefiledata as $index =>$crime_file)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$crime_file->fir_no}}</td>
                                            <td>{{$crime_file->accused_id}}</td>
                                            <td>{{$crime_file->victim_id}}</td>
                                            <td>{{$crime_file->petitioner_id}}</td>
                                            <td>{{$crime_file->place_of_incident}}</td>
                                            <td>{{$crime_file->date_of_incident}}</td>
                                            <td>{{$crime_file->time_of_incident}}</td>
                                            <td>{{$crime_file->date_filr}}</td>
                                            <td>{{$crime_file->accused_status}}</td>

                                           
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
    </div>


@endsection
