{include file="admin@block/layui" /}
<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="spider_new">新建爬虫</button>
        <button class="layui-btn layui-btn-warm layui-btn-sm" lay-event="sync_journal">同步分区表数据到文章列表</button>
    </div>
</script>

<script type="text/html" id="barDemo">
        <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="pause">暂停</a>
        <a class="layui-btn  layui-btn-xs" lay-event="resume">恢复</a>
        <a class="layui-btn layui-btn-warm layui-btn-xs" lay-event="terminate">终止</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<blockquote class="layui-elem-quote layui-text">
    <div class="row">
        <div class="layui-col-md-10">
            <h3>重要说明</h3>
        </div>
        <div class="layui-col-md-10">
            <ul>
                <li>中科院分区网站由于登录方法加入了智能验证，所以暂时无法实现自动登录，需要用户输入登录完成后的cookie<br>
                    当提示您需要输入cookie的时候，请重新登录中科院分区表网站，并更新cookie
                </li>
                <li>登录进程状态显示合并到了普通爬虫上，关键词名称表示正在使用的中科院账户名称</li>
                <li>Pubmed和ScienceDirect爬虫默认只查询缓存到本地的影响因子、分区等信息，无法查询到的期刊置为空</li>
                <li>目前仅爬取了中科院分区网站2018年所有期刊数据，共计8978本期刊，影响因子为2015-2017三年平均值</li>
            </ul>
        </div>
    </div>
</blockquote>


<table class="layui-hide" id="test" lay-filter="test"></table>

<script src="__COFCO_JS__/spider.js"></script>
<script>
    layui.use(['jquery', 'table','tablePlug','layer'], function () {
        var table = layui.table;
        var tablePlug = layui.tablePlug;
        var layer = layui.layer;
        var $ = layui.$;
        tablePlug.smartReload.enable(true);

        var STATUS_NAME = {'-2':'失败', '-1': '未初始化', '0': '未运行', '1': '运行中', '2': '已暂停', '3':'已完成', '4':'已终止', '5':'混合状态','6':'等待用户输入Cookies'}
        table.render({
            elem: '#test'
            ,id: 'testReload'
            , url: '{$getthreadstatus_url}'
            , toolbar: '#toolbarDemo'
            , title: '用户数据表'
            , totalRow: false
            , cellMinWidth: 80
            // , height: 'full-200'
            , smartReloadModel:true
            , reloaddingShow:false
            , cols: [[
                {field: 'uid', title: 'ID', width: 50, unresize: true, sort: true, totalRowText: '合计行'}
                , {field: 'uname', title: '用户名', width: 100}
                , {field: 'kw_name', title: '关键词名', width: 120}
                , {field: 'sp_t', title: '爬虫', width: 140}
                , {field: 'w_num', title: '爬虫数目'}
                // , {field: 'pN', title: '页数'}
                // , {field: 'f_pN', title: '完成页数'}
                // , {field: 'fail_pN', title: '失败页数'}
                , {field: 'total_num', title: '总文章'}
                , {field: 'f_num', title: '完成文章'}
                , {field: 'fail_num', title: '失败文章'}
                , {field: 'idsP_status', title: '翻页进程', templet: function (d) {return STATUS_NAME[d.idsP_status]},width: 80}
                , {field: 'cP_status', title: '文章获取进程',templet: function (d) {return STATUS_NAME[d.cP_status]}, width: 120}
                , {field: 'c_time', title: '创建时间', width: 165}
                , {field: 's_time', title: '最后启动时间', width: 165}
                , {field: 'status', fixed: 'right',title: '状态',templet: function (d) {return STATUS_NAME[d.status]},width:80}
                // , {field: 'operation', title: '操作'}
                , {title: '操作', fixed: 'right', width: 260, align: 'center', toolbar: '#barDemo'}

            ]]
            , page: false
            , parseData: function (res) { //将原始数据解析成 table 组件所规定的数据
                return {
                    "code": res.code, //解析接口状态
                    "msg": res.msg, //解析提示文本
                    "count": res.count, //解析数据长度
                    "data": res.data.threadlist, //解析数据列表
                };
            }
        });

        table.on('toolbar(test)', function (obj) {
            if(obj.event === 'spider_new'){
                layer.open({
                    type:2,
                    content:'add',
                    offset: 'auto',
                    area: ['800px', '85%'] //自定义文本域宽高
                });
            }else if(obj.event === 'sync_journal'){
                // var index = layer.load(1, {
                //     offset:'auto',
                //     shade: [0.6,'#000'] //0.1透明度的白色背景
                // });
                var index =  layer.msg('正在执行，请稍后... <br/>如果长时间没有反应，请刷新并通知管理员', {
                    icon: 16,
                    offset:'auto',
                    time:4000000,
                    shade: [0.6,'#000'] //0.1透明度的白色背景
                });

                $.post()



            }
        });

        function reload_table (){
            table.reload('testReload', {})
        }
        setInterval(reload_table, 1500);
        addBarEvent(table,'{$controlspider_url}');
    });

</script>

