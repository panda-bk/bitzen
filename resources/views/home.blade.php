@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')


@stop

@section('content')
<div class="row" id="app">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="form-group col-sm-12 ">
                            <label class="control-label">Dashboard:</label>

                             <example-component></example-component>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop