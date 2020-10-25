@extends('layouts.main')
@section('content')
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Admin Table</h1>
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
                <div class="btn-toolbar">
                    <div class="btn-group" role="group"></div>
                    <div class="btn-group btn-group-lg" role="group"></div>
                </div>
                <div class="form-group"></div>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group has-warning"></div>
                <div class="form-group"></div>
                <button class="btn btn-default submit-button" type="button">Delete </button>
                <button class="btn btn-default submit-button" type="button">Update </button>
                <button class="btn btn-default submit-button" type="button">Clear </button>
            </form>
        </div>
    </div>

@endsection
