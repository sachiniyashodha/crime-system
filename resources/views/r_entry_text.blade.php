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
                <label for="search-input">Enter ID Number :</label>
                <div class="form-group has-error has-feedback">
                    <div class="input-group">
                        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                        <input class="form-control" type="search" name="search" id="search-input">
                    </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
    
    
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

                <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">

                   <button type="button" class="btn btn-primary" onclick="copy('copy')">Copy</button>
                   <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                

            </form>
        </div>
    </div>
@endsection
