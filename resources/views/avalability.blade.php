@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">

                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>AVALABILITY </strong></h2>
                        </div>
                        <form class="form-horizontal custom-form" method="GET" action="{{ url('/avalability') }}">
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
                            <div class="card-body my-4 mx-auto col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 label-column">
                                        <h4>Check Person Avalability. </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 my-2">
                                        <input class="form-control" id="query" name="query" type="search" placeholder="Search Avalability">
                                    </div>
                                    <div class="col-md-1 pl-0">
                                        <button type="submit" class="btn btn-primary">Check</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <a type="enter" href="/police_entry" class="btn btn-primary btn-block btn-lg btn-entry">
                                            Entry
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

{{--            <div class="table-responsive">--}}
{{--                <table class="table">--}}
{{--                    <thead class=" text-primary">--}}
{{--                    <th>#</th>--}}
{{--                    <th>Accused ID</th>--}}
{{--                    <th>Accused Full Name</th>--}}
{{--                    <th>DOB</th>--}}
{{--                    <th>Address</th>--}}
{{--                    <th>City</th>--}}
{{--                    <th>Gender</th>--}}
{{--                    <th>Status</th>--}}
{{--                    <th>Number of Crime</th>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($accuseddata as $index => $accused)--}}
{{--                        <tr>--}}
{{--                            <td>{{ ++$index }}</td>--}}
{{--                            <td>{{$accused->accu_id}}</td>--}}
{{--                            <td>{{$accused->accused_fullname}}</td>--}}
{{--                            <td>{{$accused->address}}</td>--}}
{{--                            <td>{{$accused->city}}</td>--}}
{{--                            <td>{{$accused->contact_no}}</td>--}}
{{--                            <td>{{$accused->gender}}</td>--}}
{{--                            <td>{{$accused->status}}</td>--}}
{{--                            <td>{{$accused->number_of_crime}}</td>--}}
{{--                        </tr>--}}

{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}

        </div>
    </div>

@endsection
