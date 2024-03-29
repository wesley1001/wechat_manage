@extends('manage.layout.base')
@section('title')角色管理@stop
@section('content')
    <nav class="breadcrumb">
        <i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span> 管理员管理
        <span class="c-gray en">&gt;</span> 角色管理
        <a class="btn btn-success radius r mr-20 btn-refresh" title="刷新">
            <i class="Hui-iconfont">&#xe68f;</i>
        </a>
    </nav>
    <div class="pd-20">
        <div class="cl pd-5 bg-1 bk-gray">
            <span class="l">
                <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">
                        &#xe6e2;</i> 批量删除</a>
                <a class="btn btn-primary radius" href="javascript:;"
                   onclick="admin_role_add('添加角色','admin-role-add.html','800')">
                    <i class="Hui-iconfont">&#xe600;</i> 添加角色
                </a>
            </span> <span class="r">共有数据：<strong>54</strong> 条</span>
        </div>
        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="6">角色列表</th>
            </tr>
            <tr class="text-c">
                <th width="25"><input type="checkbox" value="" name=""></th>
                <th width="40">ID</th>
                <th width="200">角色名</th>
                <th>用户列表</th>
                <th width="300">描述</th>
                <th width="70">操作</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><input type="checkbox" value="" name=""></td>
                <td>1</td>
                <td>超级管理员</td>
                <td><a href="#">admin</a></td>
                <td>拥有至高无上的权利</td>
                <td class="f-14">
                    <a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','1')"
                       style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6df;</i>
                    </a>
                    <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5"
                       style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script>
        $(document).on('click', '#aaa', function () {
            layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
                //此处请求后台程序，下方是成功后的前台处理……

                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        });
    </script>
@stop