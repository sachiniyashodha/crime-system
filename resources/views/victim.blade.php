@extends('layouts.main')
@section('content')
    <div class="row register-form">
    <div class="col-md-8 col-mx-auto">
            <form class="form-horizontal custom-form" method="post" action="">
                <h1>Victim Form</h1>

            <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Victim ID : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="victim_id">
                    </div>
                </div>

            <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Full Name : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="victim_name">
                    </div>
                    </div>

            <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Address : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="address">
                    </div>
                    </div> 
            
            <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">City  : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="city">
                    </div>
                    </div> 

                    <div class="form-group row">
                    <div class="col-sm-4 label-column text-right">
                        <label class="control-label" for="name-input-field">Contact No  : </label>
                    </div>
                    <div class="col-sm-6 ">  
                        <input class="form-control" type="text" name="contact_no">
                    </div>
                    </div> 
                        
                    <div class="form-group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="name-input-field">Gender</label>
                        </div>
                        <div class="col-sm-6 ">
                            <select class="custom-select" id="gender" name="gender">
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                         </div>  
                    
                    <div class="form- group row">
                        <div class="col-sm-4 label-column text-right">
                            <label class="control-label" for="email-input-field">Detail </label>
                            </div>
                            <div class="col-sm-6 ">
                            <input type="file" id="file-input" name="detail" >
                        </div>
                    </div>
                

                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label text-left" for="invalidCheck">
                            I've read and accept the terms and conditions
                        </label>
                        <div class="invalid-feedback text-left">
                            You must agree before submitting.
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                   <button type="button" class="btn btn-primary" onclick="submit('submit')">Submit</button>
                    <button type="button" class="btn btn-primary" onclick="clear('clear')">Clear</button>
                    <button type="button" class="btn btn-primary" onclick="cancel('cancel')">Cancel</button>
                </div>
</div>
            </form>
        </div>
    </div>
@endsection