@extends('layouts.app')
@section('content')
<div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Person Avalability</h1><br>
                <label for="search-input">Enter ID Number :</label>
                <div class="form-group has-error has-feedback">
                    <div class="input-group">
                        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                        <input class="form-control" type="search" name="search" id="search-input">
                    </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
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
                 </div>
             </div>
         </div>
                                            
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
