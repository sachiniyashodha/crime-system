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
        <li><a href="add_data.html">PETITIONER </a></li>
        <li><a href="victm.html">VICTM </a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">ENTRY <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a href="avalability.html">Avalability </a></li>
                <li role="presentation"><a href="accused.html">Registration </a></li>
                <li role="presentation"><a href="r_accused.html">Copy </a></li>
                <li role="presentation"><a href="r_accused.html">View </a></li>
                <li role="presentation"><a href="police_entry.html">Entry Statement</a></li>
            </ul>
        </li>
        <li><a href="fir.html">FIR </a></li>
        <li><a href="investigate.html">INVESTIGATION </a></li>
        <li><a href="cases.html">CASES </a></li>
        <li><a href="case_outcome.html">CASE OUTCOME</a></li>
        <li><a href="section_of_low.html">SECTION OF LOW</a></li>
    </ul>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Section of Low Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Section ID : </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Section of low: </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Sentence : </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Detail </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="radio">
                    <label> </label>
                </div>
                <div class="form-group has-warning"></div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I've read and accept the terms and conditions</label>
                </div>
                <div class="form-group"></div>
                <button class="btn btn-default submit-button" type="button">Submit Form</button>
            </form>
        </div>
    </div>
    <h4 class="text-center">CRIME MANAGEMENT SYSTEM- 2020 </h4>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>