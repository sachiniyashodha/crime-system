@extends('layouts.app')
@section('content')
        
<div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>INVESTIGATION TABLE</h1><br>
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
                                <th>Investigation ID</th>
                                <th>Case ID</th>
                                <th>Officer Name</th>
                                <th>Date start</th>
                                <th>Date end</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
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
                   <button type="button" class="btn btn-primary" onclick="delete('delete')">Delete</button>
                   <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                    
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
            </form>
        </div>
    </div>
            </form>
        </div>
    </div>
@endsection
