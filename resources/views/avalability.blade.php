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
                <div class="form-group">
                    <div class="col-sm-12 label-column">
                        <header></header>
                        <h4>Check Person Avalability. </h4></div>
                </div>
                <div class="form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text">
                    </div>
                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-6">
                                     
                                        <button type="button" class="btn btn-primary" onclick="entry('entry')">Entry</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



@endsection
