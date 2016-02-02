@extends('manage.layout.base')
@section('title') 编辑模块 @stop
{!! link_css('static/package/H-ui', [
    'lib/icheck/icheck.css'
]) !!}
@section('content')
    <div class="pd-20">
        <form action="" method="post" class="form form-horizontal" id="form-article-add">
            @include('manage.module.form')
        </form>
    </div>
@stop

@section('js')
    {!! link_script('static/package/H-ui', [
        'lib/icheck/jquery.icheck.min.js'
    ]) !!}
    <script>
        handleCheck();  //初始化iCheck
    </script>
@stop