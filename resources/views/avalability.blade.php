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
                        <form class="form-horizontal custom-form" method="GET" action="{{ route('avalability') }}">
                            {{ csrf_field() }}
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

        </div>
    </div>

@endsection
