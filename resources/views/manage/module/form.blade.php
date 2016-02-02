<div class="row cl">
    {!! Form::label('ident', '模块名称：', ['class' => 'form-label col-2']) !!}
    <div class="formControls col-10">
        {!! Form::input('text', 'name', null, ['class' => 'input-text']) !!}
    </div>
</div>

<div class="row cl">
    <label class="form-label col-2"><span class="c-red">*</span>选择模块：</label>
    <div class="formControls col-10">
        <span class="select-box">
            {!! Form::select('ident', $moduleList, null, ['class' => 'select']) !!}
        </span>
    </div>
</div>

<div class="row cl">
    {!! Form::label('ident', '模块描述：', ['class' => 'form-label col-2']) !!}
    <div class="formControls col-10">
        {!! Form::input('text', 'name', null, ['class' => 'input-text']) !!}
    </div>
</div>

<div class="row cl">
    {!! Form::label('status', '启用模块：', ['class' => 'form-label col-2']) !!}
    <div class="formControls col-2 skin-minimal">
        <div class="check-box">
            {!! Form::input('checkbox', 'status', null, ['id' => 'status']) !!}
            {!! Form::label('status', ' ') !!}
        </div>
    </div>
</div>

<div class="row cl">
    <div class="col-10 col-offset-2">
        <button class="btn btn-secondary radius" type="button" id="create-module">
            <i class="Hui-iconfont">&#xe632;</i> 添加
        </button>
        <button class="btn btn-default radius" type="reset">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
    </div>
</div>