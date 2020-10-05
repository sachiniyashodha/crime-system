<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime_management_system</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Refresh </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="home.html">Home </a></li>
                    <li role="presentation"><a href="main.html">Main </a></li>
                    <li role="presentation"><a href="add_data.html">Add Data</a></li>
                    <li role="presentation"><a href="row_data.html">Row Data</a></li>
                    <li role="presentation"><a href="administratr.html">Administratr </a></li>
                    <li role="presentation"><a href="index.html">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="nav nav-tabs">
        <li><a href="add_admin.html">ADD ADMIN</a></li>
        <li><a href="view_admin.html">VIEW ADMIN</a></li>
        <li><a href="delete,html">DELETE ADMIN</a></li>
    </ul>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Admin Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Officer ID: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Officer Full Name: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Rank : </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">DOB </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Address: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Contact No :</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Gender: </label>
                    </div>
                    <div class="col-sm-4 label-column">
                        <div class="form-group has-success">
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group"> Male</label>
                            </div>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="radio-group" checked=""> Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group has-warning"></div>
                <div class="form-group"></div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I've read and accept the terms and conditions</label>
                </div>
                <button class="btn btn-default submit-button" type="button">Submit Form</button>
            </form>
        </div>
    </div>
    <h4 class="text-center">CRIME MANAGEMENT SYSTEM- 2020 </h4>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>