@extends('layouts.app')
@section('content')
<div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>VIEW ADMIN TABLE </strong></h2>
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
                                <th>Officer id</th>
                                <th>Full Name</th>
                                <th>Rank </th>
                                <th>DOB </th>
                                <th>Gender </th>
                                <th>Contact No</th>
                                <th>Address </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group has-warning"></div>
                <div class="form-group"></div>
            </form>
        </div>
    </div>
@endsection
