@extends('manage.layout.base')
@section('title')添加用户@stop
@section('css')
    {!! link_css('static/package/H-ui', [
        'lib/icheck/icheck.css'
    ]) !!}
@stop
@section('content')
    <div class="pd-20">
        <form action="" method="post" class="form form-horizontal" id="form-user-add">
            @include('manage.user.form')
        </form>
    </div>
@stop
@section('js')
    {!! link_script('static/package/H-ui', [
            'lib/icheck/jquery.icheck.min.js',
            'lib/Validform/5.3.2/Validform.min.js'
        ]) !!}
    <script>
        handleCheck();
        validFormInit('#form-admin-add');
        $(document).on('click', "input[type='submit']", function () {

            return false;
        });
    </script>
@stop