<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>用户名：</label>
    <div class="formControls col-5">
        {!! Form::input('text', 'name', null, ['class' => 'input-text', 'datatype' => '*2-16', 'nullmsg' => '用户名不能为空']) !!}
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>初始密码：</label>
    <div class="formControls col-5">
        {!! Form::input('password', 'password', null, ['class' => 'input-text', 'placeholder' => '密码', 'autocomplete' => 'off', 'datatype' => '*6-20', 'nullmsg' => '密码不能为空']) !!}
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>确认密码：</label>
    <div class="formControls col-5">
        {!! Form::input('password', 'password_confirmation', null, ['class' => 'input-text Validform_error', 'placeholder' => '确认新密码', 'autocomplete' => 'off', 'errormsg' => '您两次输入的新密码不一致', 'datatype' => '*', 'nullmsg' => '请再输入一次新密码', 'recheck' => 'password_confirmation']) !!}
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>性别：</label>
    <div class="formControls col-5 skin-minimal">
        <div class="radio-box">
            {!! Form::input('radio', 'sex', null, ['datatype' => '*', 'nullmsg' => '请选择性别', 'id' => 'sex-1']) !!}
            {!! Form::label('sex-1', '男') !!}
        </div>
        <div class="radio-box">
            {!! Form::input('radio', 'sex', null, ['id' => 'sex-2']) !!}
            {!! Form::label('sex-2', '男') !!}
        </div>
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>手机：</label>
    <div class="formControls col-5">
        {!! Form::input('text', 'mobile', null, ['class' => 'input-text', 'datatype' => 'm', 'nullmsg' => '手机不能为空']) !!}
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3"><span class="c-red">*</span>邮箱：</label>
    <div class="formControls col-5">
        {!! Form::input('text', 'email', null, ['class' => 'input-text', 'placeholder' => '@', 'datatype' => 'e', 'nullmsg' => '请输入邮箱']) !!}
    </div>
    <div class="col-4"> </div>
</div>
<div class="row cl">
    <label class="form-label col-3">角色：</label>
    <div class="formControls col-5 skin-minimal">
        <div class="check-box">
            {!! Form::input('checkbox', 'status', null, ['id' => 'status']) !!}
            {!! Form::label('status', '管理员') !!}
        </div>
        <div class="check-box">
            {!! Form::input('checkbox', 'status', null, ['id' => 'status']) !!}
            {!! Form::label('status', '管理员') !!}
        </div>
        <div class="check-box">
            {!! Form::input('checkbox', 'status', null, ['id' => 'status']) !!}
            {!! Form::label('status', '管理员') !!}
        </div>
        <div class="check-box">
            {!! Form::input('checkbox', 'status', null, ['id' => 'status']) !!}
            {!! Form::label('status', '管理员') !!}
        </div>
    </div>
</div>
<div class="row cl">
    <div class="col-9 col-offset-3">
        {!! Form::submit('  提交  ', ['class' => 'btn btn-primary radius']) !!}
    </div>
</div>