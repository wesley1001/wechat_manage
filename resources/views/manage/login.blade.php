<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>后台登录 - H-ui.admin v2.3</title>
    <meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
    <!--[if lt IE 9]>
    {!! link_script('static/package/H-ui/lib/', [
    'html5.js', 'respond.min.js', 'PIE_IE678.js'
    ]) !!}
    <![endif]-->
    {!! link_css('static/package/H-ui', [
        'css/H-ui.min.css', 'css/H-ui.login.css', 'css/style.css', 'lib/Hui-iconfont/1.0.6/iconfont.css'
    ]) !!}
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value=""/>
<div class="header"></div>
<div class="loginWraper">
    <div class="loginBox">
        {!! Form::open(['url' =>  url('/manage/login'), 'method' => 'POST', 'class' => 'form form-horizontal']) !!}


        <div class="row cl">
            <label class="form-label col-3"><i class="Hui-iconfont">&#xe60d;</i></label>
            <div class="formControls col-8">
                <input name="email" type="text" placeholder="用户名" class="input-text size-L" value="{{ old('email') }}">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><i class="Hui-iconfont">&#xe60e;</i></label>
            <div class="formControls col-8">
                <input name="password" type="password" placeholder="密码" class="input-text size-L">
            </div>
        </div>
        <div class="row cl">
            <div class="formControls col-8 col-offset-3">
                @if (count($errors) > 0)
                    <div class="alert alert-danger fade in m-b-15">
                        <strong>登录失败：</strong>
                        {{$errors->has('captcha') ? '验证码错误' : '用户名或密码错误！'}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="formControls col-8 col-offset-3">
                <label for="online">
                    <input type="checkbox" name="remember">
                    使我保持登录状态</label>
            </div>
        </div>
        <div class="row">
            <div class="formControls col-8 col-offset-3">
                <input name="" type="submit" class="btn btn-success radius size-L"
                       value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                <input name="" type="reset" class="btn btn-default radius size-L"
                       value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin.v2.3</div>
{!! link_script('static/package/H-ui', [
    'lib/jquery/1.9.1/jquery.min.js',
    'js/H-ui.js'
    ]) !!}
<script>
    function refresh_captcha() {
        var url = "{{url('manage/auth/captcha')}}" + "?t=" + Math.random();
        $("#captcha").attr("src", url);
    }
</script>
</body>
</html>