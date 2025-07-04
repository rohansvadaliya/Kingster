<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')

<style>
    #loginFormSubmit{
        width: 100% !important;
    }


    #toggleLoginPassword:hover,
    #toggleLoginPassword:focus,
    #toggleLoginPassword.focus,
    #toggleLoginPassword:active,
    #toggleLoginPassword.active,
    #toggleLoginPassword {
        border: 1px solid #dcdcdc !important;
        color: #dcdcdc !important;
        background: #fff !important;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mx-auto">
            <form method="post">
                @csrf
                <div class="d-flex flex-column justify-content-center">
                    <div class="card p-sm-4 my-5">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h3 class="mb-2">Welcome</h3>
                                <p>Enter your credentials to access your account</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control" id="username" autocomplete="off">
                                <div class="text-danger error-message" id="error-username"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" autocomplete="off">
                                    <button class="btn btn-outline-secondary" type="button" id="toggleLoginPassword" tabindex="-1">
                                        <i class="fa fa-eye" id="toggleLoginPasswordIcon"></i>
                                    </button>
                                </div>
                                <div class="text-danger error-message" id="error-password"></div>
                                <div class="text-danger error-message" id="error-login"></div>
                            </div>
                            <div>
                                <button type="submit" id="loginFormSubmit" class="btn btn-primary" data-url="{{ route('ajax.login') }}">Login</button>
                            </div>
                        </div>
                        <div>
                            <img src="@prodImage('assets/img/bg/authentication-bg.png')" class="bg-left-top" alt="Img">
                            <img src="@prodImage('assets/img/bg/authentication-bg.png')" class="bg-right-bottom" alt="Img">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
