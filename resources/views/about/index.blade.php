@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="row" id="app">
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="form-group col-sm-12 ">
                    <div class="panel-heading">  <h4 >Perfil</h4></div>
                    <div class="panel-body">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img alt="User Pic" src="pp.jpeg" id="profile-image1" class="img-circle img-responsive"> 
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                    <div class="container" >
                    <h2>David Richard</h2>
                    <p>vaga: <b> Programador Jr.PHP</b></p>   
                </div>
                    <hr>
                        <ul class="container details" >
                            <li><p><span class="fa fa-skype" style="width:50px;"></span>daviddrms</p></li>
                            <li><p><span class="fa fa-envelope-o" style="width:50px;"></span>davidrichard.ms@gmail.com</p></li>
                            <li><p><span class="fa fa-phone" style="width:50px;"></span>(44) 9 9916-5636</p></li>
                            <li><p><span class="fa fa-linkedin" style="width:50px;"></span><a href="https://www.linkedin.com/in/david-richard-2227a0b5/">Linkedin</a></p></li>
                            <li><p><span class="fa fa-github" style="width:50px;"></span><a href="https://github.com/pandabk">GitHub</a></p></li>
                            <li><p><span class="fa fa-facebook" style="width:50px;"></span><a href="https://www.facebook.com/david.san.106?ref=bookmarks">Facebook</a></p></li>
                        </ul>
                    <hr>
                </div>
            </div>  
        </div>
    </div>
</div>

@stop