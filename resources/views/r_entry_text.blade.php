@extends('layouts.app')
@section('content')
    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>ENTRY VIEW TABLE </strong></h2>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1 py-4 px-0 text-right">
                                        <label for="search-input">Enter ID Number :</label>
                                    </div>
                                    <div class="col-sm-4 pt-2 ">
                                        <div class="form-group has-error has-feedback">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span> <i class="glyphicon glyphicon-search"></i></span>
                                                </div>
                                                <input class="form-control" type="search" name="search" id="search-input">
                                            </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 py-4 text-right">
                                        <button type="button" class="btn btn-primary" onclick="printDiv()">Print</button>
                                        <a type="button" class="btn btn-primary text-white" herf="#">Bank</a>
                                    </div>
                                </div>
                                <div class="table-responsive" id="printableTable">
                                    <table class="table" data-show-print="true" data-url="json/data1.json">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Entry ID</th>
                                                <th>Reference number</th>
                                                <th>Branch name</th>
                                                <th>Date </th>
                                                <th>Time </th>
                                                <th>Fir No </th>
                                                <th>Police entry text</th>
                                                <th>details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $entrytextdata as $index => $entrytext)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$entrytext->entry_id}}</td>
                                            <td>{{$entrytext->reference_no}}</td>
                                            <td>{{$entrytext->branch_name}}</td>
                                            <td>{{$entrytext->date}}</td>
                                            <td>{{$entrytext->time}}</td>
                                            <td>{{$entrytext->fir_id}}</td>
                                            <td>{{$entrytext->police_entry}}</td>
                                            <td>{{$entrytext->other_details}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        {{-- <script src="{{ asset('js/bootstrap-table-print.js') }}"></script>--}}
        <script>
            function printDiv() {
                window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
                window.frames["print_frame"].window.focus();
                window.frames["print_frame"].window.print();
            }
        </script>
    @endsection
