@extends('layouts.app')
@section('content')
   

<div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title"><strong>CASE OUTCOME TABLE </strong></h2>
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
                                <th>Out come ID</th>
                                <th>Case ID </th>
                                <th>Section of low ID</th>
                                <th>Section of low</th>
                                <th>deatails </th>
                                <th>Status </th>
                                <th> </th>
                                <th> </th>
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
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td> </td>
                                <td> </td>
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
