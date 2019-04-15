@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="page-header">Novo Produto</h1>

<ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="/category"><i class="fa fa-user"></i> Produto</a></li>
    <li class="active"><i class="fa fa-user"></i> Nova Produto</li>
</ol>
@stop
@section('content')
<form action="{{url('/product')}}" role="form" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="form-group col-sm-12 ">
                            <label class="control-label">Produto:</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome">            
                        </div>
                        <div class="form-group col-sm-12 ">
                                <label class="control-label">Categoria:</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach                                
                                </select>          
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