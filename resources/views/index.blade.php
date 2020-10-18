@extends('layouts.header')

    <div class="container">
        <h1 class="text-center">Crime Management system</h1>
    </div>
    <div class="col-md-12">
        <div class="login-card"><img src="assets/img/login.png" class="profile-img-card">
            <p class="profile-name-card">ADMIN ONLY</p>
            <span class="reauth-email"> Enter your user name and password.</span>
            <form class="form-signin">
                <input class="form-control" type="text">
                <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
                <div class="checkbox">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                </div>
                <a class="btn btn-primary btn-block btn-lg btn-signin" role="button" href="home.html">Sign in</a>
                <a href="#" class="forgot-password">Forgot your password?</a>
            </form>
        </div>
    </div>
@extends('layouts.footer')