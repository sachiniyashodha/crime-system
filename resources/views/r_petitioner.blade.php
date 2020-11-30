@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>PETITIONER  TABLE</strong></h2>
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
                                <table id="petitionertable" class="table table-striped" >
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>petitioner id</th>
                                            <th>petitiioner Full Name</th>
                                            <th>Address </th>
                                            <th>city </th>
                                            <th>Contact no</th>
                                            <th>Gender </th>
                                            <th>canplan </th>
                                            <th>details </th>
                                            <th>officer id</th>
                                            <th>officer name</th>
                                            <th>Date of hair</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($petitionerdata as $index =>$petitioner)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$petitioner->petitioner_id}}</td>
                                            <td>{{$petitioner->petitioner_fullname}}</td>
                                            <td>{{$petitioner->address}}</td>
                                            <td>{{$petitioner->city}}</td>
                                            <td>{{$petitioner->contact_no}}</td>
                                            <td>{{$petitioner->gender}}</td>
                                            <td>{{$petitioner->canplan}}</td>
                                            <td>{{$petitioner->details}}</td>
                                            <td>{{$petitioner->officer_id}}</td>
                                            <td>{{$petitioner->officer_name}}</td>
                                            <td>{{$petitioner->date_of_hair}}</td>     
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
                $("#petitionertable tr").filter(function() {
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
