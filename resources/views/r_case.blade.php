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
        <li><a href="row_data.html">PETITIONER </a></li>
        <li><a href="r_victim.html">VICTIM </a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">ENTRY </a>
            <ul class="dropdown-menu" role="menu">
                <li role="presentation">
                    <a href="r_avalability.html"> </a>
                </li>
                <li role="presentation"><a href="r_accused.html">Accused Table</a></li>
                <li role="presentation"><a href="r_entry_text.html">View Entry Statement</a></li>
            </ul>
        </li>
        <li><a href="r_fir.html">FIR </a></li>
        <li><a href="r_investigation.html">INVESTIGATION </a></li>
        <li><a href="r_case.html">CASES </a></li>
        <li><a href="r_case_outcome.html">CASE OUTCOME</a></li>
        <li><a href="r_section_of_low.html">SECTION OF LOW</a></li>
    </ul>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <div class="checkbox">
                    <label>CASES TABLE</label>
                </div>
                <label for="search-input">Search ID</label>
                <div class="input-group">
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input class="form-control" type="search" name="search" id="search-input">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Case ID</th>
                                <th>Officer ID</th>
                                <th>Fir number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
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
    <h4 class="text-center">CRIME MANAGEMENT SYSTEM- 2020</h4>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>