@extends('layouts.app')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <div class="checkbox">
                    <label>ACCUSED TABLE</label>
                    
                    <label for="search-input">Enter ID Number :</label>
                <div class="form-group has-error has-feedback">
                    <div class="input-group">
                        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                        <input class="form-control" type="search" name="search" id="search-input">
                    </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>

                <//div>
                <//label for="search-input">Search ID<//label>
                <//div class="input-group">
                    <//div class="input-group-addon"><//span> <//i class="glyphicon glyphicon-search"><//i><//span><//div>
                    <//input class="form-control" type="search" name="search" id="search-input">
                <//div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Accused ID</th>
                                <th>Accused Full Name</th>
                                <th>DOB </th>
                                <th>Address </th>
                                <th>City </th>
                                <th>Contact no</th>
                                <th>Gender </th>
                                <th>status </th>
                                <th>Number of crimes</th>
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
