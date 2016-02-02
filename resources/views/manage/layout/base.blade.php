<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="cache-control" content="no-siteapp"/>
    <meta name="keywords" content="微信管理系统">
    <meta name="description" content="微信管理系统，是一款由国人开发的系统，完全免费开源。">
    <title>wx-admin - @section('title') @stop</title>
    <link rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    {!! link_script('static/package/H-ui/lib/', [
    'html5.js', 'respond.min.js', 'PIE_IE678.js'
    ]) !!}
    <![endif]-->
    {!! link_css('static/package/H-ui', [
        'css/H-ui.min.css', 'css/H-ui.admin.css', 'lib/Hui-iconfont/1.0.6/iconfont.css', 'css/style.css',
    ]) !!}
    {!! link_css('static/css', 'admin-app.css') !!}
    <script>
        $(function () {
            //设置AJAX header头
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
        });
    </script>
    @section('css')
    @show
</head>
<body>
@yield('content')
{!! link_script('static/package/H-ui', [
    'lib/jquery/1.9.1/jquery.min.js', 'lib/layer/2.1/layer.js', 'js/H-ui.js', 'js/H-ui.admin.js'
]) !!}
{!! link_script('static/js', 'admin-app.js') !!}
@section('js')
@show
</body>
</html>