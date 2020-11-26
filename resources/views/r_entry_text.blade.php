@extends('layouts.app')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <div class="checkbox">
                    <label>ENTRY VIEW TABLE</label>
                </div>
                <label for="search-input">Search Reference No</label>
                <div class="input-group">
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input class="form-control" type="search" name="search" id="search-input">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Reference number</th>
                                <th>Branch name</th>
                                <th>Date </th>
                                <th>Time </th>
                                <th>Petitioner id </th>
                                <th>Police entry text</th>
                                <th>Other details</th>
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
                                <td>Cell 7</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
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
