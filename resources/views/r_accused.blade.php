@extends('layouts.app')
@section('content')

<div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>ACCUSED TABLE </strong></h2>
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
                                <table id="accusedtable" class="table table-striped" >
                                    <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Accused ID</th>
                                    <th>Accused Full Name</th>
                                    <th>DOB </th>
                                    <th>Address </th>
                                    <th>City </th>
                                    <th>Contact no</th>
                                    <th>Gender </th>
                                    <th>status </th>
                                    <th>Number of crimes</th>
                                    </thead>
                                    <tbody>
                                    @foreach($accuseddata as $index => $accused)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$accused->accu_id}}</td>
                                            <td>{{$accused->accused_fullname}}</td>
                                            <td>{{$accused->dob}}</td>
                                            <td>{{$accused->address}}</td>
                                            <td>{{$accused->city}}</td>
                                            <td>{{$accused->contact_no}}</td>
                                            <td>{{$accused->gender}}</td>
                                            <td>{{$accused->status}}</td>
                                            <td>{{$accused->number_of_crime}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#searchdata").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#accusedtable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
      <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                   <button type="button" class="btn btn-primary" onclick="delete('delete')">Delete</button>
                   <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    
                    </div>
                 </div>
                 </div>
            
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
