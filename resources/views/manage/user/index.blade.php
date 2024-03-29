@extends('manage.layout.base')
@section('title') 管理员列表 @stop
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span
                class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r mr-20"
                                                       style="line-height:1.6em;margin-top:3px"
                                                       href="javascript:location.replace(location.href);" title="刷新"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="pd-20">
        <div class="text-c"> 日期范围：
            <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin"
                   class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})"
                   id="datemax" class="input-text Wdate" style="width:120px;">
            <input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
            <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户
            </button>
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l">
                <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">
                        &#xe6e2;</i> 批量删除</a>
                <a href="javascript:;" onclick="admin_add('添加管理员','admin-add.html','800','500')"
                   class="btn btn-primary radius">
                    <i class="Hui-iconfont">&#xe600;</i> 添加管理员
                </a>
            </span>
            <span class="r">共有数据：<strong>54</strong> 条</span></div>
        <table class="table table-border table-bordered table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="9">用户列表</th>
            </tr>
            <tr class="text-c">
                <th width="25">{!! Form::input('checkbox', '') !!}</th>
                <th width="40">ID</th>
                <th width="150">登录名</th>
                <th width="90">手机</th>
                <th width="150">邮箱</th>
                <th>角色</th>
                <th width="130">加入时间</th>
                <th width="100">是否已启用</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><input type="checkbox" value="1" name=""></td>
                <td>1</td>
                <td>admin</td>
                <td>13000000000</td>
                <td>admin@mail.com</td>
                <td>超级管理员</td>
                <td>2014-6-11 11:11:42</td>
                <td class="td-status"><span class="label label-success radius">已启用</span></td>
                <td class="td-manage">
                    <a style="text-decoration:none" onClick="admin_stop(this,'10001')" href="javascript:;" title="停用">
                        <i class="Hui-iconfont">&#xe631;</i>
                    </a>
                    <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.html','1','800','500')"
                       class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6df;</i>
                    </a>
                    <a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5"
                       style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@stop