@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="page-header">Nova Categoria</h1>

<ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="/category"><i class="fa fa-user"></i> Categoria</a></li>
    <li class="active"><i class="fa fa-user"></i> Nova Categoria</li>
</ol>
@stop
@section('content')
<form  method="post" action="{{action('CategoryController@update', $category->id)}}" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PUT">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="form-group col-sm-12 ">
                            <label class="control-label">Categoria:</label>
                        <input type="text" value="{{$category->name}}" class="form-control" name="name" placeholder="Nome">            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop