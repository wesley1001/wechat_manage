var appInit = function () {
    $(document).on('click', '.btn-refresh', function () {
        location.replace(location.href);
    });
};
//表格处理
var handleTable = function () {
    $('.table-sort').dataTable({
        "aaSorting": [[1, "desc"]],//默认第几个排序
        "bStateSave": true,//状态保存
        //"bPaginate": false,
        //"bLengthChange": false,
        "bInfo": false,
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable": false, "aTargets": [0, 8]}// 制定列不参与排序
        ]
    });
};

//处理input check
var handleCheck = function () {
    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });
};

var validFormInit = function (targetId) {
    $(targetId).Validform({
        tiptype: 2,
        callback: function (form) {
            form[0].submit();
            var index = parent.layer.getFrameIndex(window.name);
            parent.$('.btn-refresh').click();
            parent.layer.close(index);
        }
    });
};

