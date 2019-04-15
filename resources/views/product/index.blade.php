@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row margin-bottom">
    <div class="col-sm-2">
        <a href="/product/create" class="btn btn-app">
            <i class="fa fa-plus-circle"></i>
            Cadastrar
        </a>
    </div>
</div>

@if (session()->get('error') != null)
    <div class="alert alert-danger alert-dismissible">    
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {!! session()->get('error') !!}
    </div>
@endif 
@stop
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Produtos</h3>
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}.</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                     {{$product->category->name}}
                                </td>     
                                <td class="text-center">
                                    <a href="{{url('/product/' . $product->id . '/edit')}}"
                                        class="btn btn-primary btn-xs"
                                        title="Editar Registro">
                                         <i class="fa fa-edit"></i>
                                     </a>
                                </td>
                                <td>
                                    <form action="{{action('ProductController@destroy', $product->id)}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger fa fa-times btn-xs" type="submit"></button>
                                    </form>                                 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>
@stop