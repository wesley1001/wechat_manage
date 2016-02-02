@extends('manage.layout.base')
@section('title') 编辑模块 @stop
{!! link_css('static/package/H-ui', [
    'lib/icheck/icheck.css'
]) !!}
@section('content')
    <div class="pd-20">
        {!! Form::open(['url' => route('manage.module.store'), 'method' => 'POST', 'class' => 'form form-horizontal', 'id' => 'form-module-add']) !!}
        @include('manage.module.form')
        {!! Form::close() !!}
    </div>
@stop

@section('js')
    {!! link_script('static/package/H-ui', [
        'lib/icheck/jquery.icheck.min.js'
    ]) !!}
    <script>
        handleCheck();  //初始化iCheck
        $(document).on('click', '#create-module', function () {
            $.ajax({
                url: "{{route('manage.module.store')}}",
                type: "POST",
                data: $("#form-module-add").serialize(),
                success: function () {
                    layer.msg(data.msg, {icon: 6, time: 1000});
                },
                error: function (data) {
                    layer.msg(data.msg, {icon: 6, time: 1000});
                }
            });
            return false;
        });
    </script>
@stop