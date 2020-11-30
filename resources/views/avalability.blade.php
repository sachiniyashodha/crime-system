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

                        <div class="card-body my-4 mx-auto col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 label-column">
                                    <h4>Check Person Avalability. </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a type="enter" href="/police_entry" class="btn btn-primary btn-block btn-lg btn-entry">
                                        Entry
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
