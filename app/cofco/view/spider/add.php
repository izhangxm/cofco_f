
<blockquote class="layui-elem-quote layui-text">
    为了减少爬虫爬取数量和人工审核数量，爬虫系统2.0版本支持了关键词高级搜索。
    <br>
    本页面暂时未开放
    <br>
    All of the fields are optional. Find out more about the new advanced search.
</blockquote>


<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>新建pubmed爬虫</legend>
</fieldset>

<form class="layui-form layui-form-pane" action="" lay-filter="example">

    <div class="layui-form-item">

        <div class="layui-inline w500">
            <label class="layui-form-label">爬虫关键词</label>
            <div class="layui-input-block">
                <select name="kw_id" id="kw_id" lay-verify="required" lay-search="">
                    <option value="">直接选择或搜索选择</option>
                    {volist name="pubmed_keyword_list" id="v"}
                    <option value={$v['id']}>{$v['name']}</option>
                    {/volist}
                </select>
            </div>
        </div>
        <div class="layui-inline ">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="newpubmed">新建爬虫</button>
            </div>
        </div>
    </div>

</form>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>新建science爬虫</legend>
</fieldset>

<form class="layui-form layui-form-pane" action="" lay-filter="example">

    <div class="layui-form-item">

        <div class="layui-inline w500">
            <label class="layui-form-label">爬虫关键词</label>
            <div class="layui-input-block">
                <select name="kw_id" id="kw_id" lay-verify="required" lay-search="">
                    <option value="">直接选择或搜索选择</option>
                    {volist name="science_keyword_list" id="v"}
                    <option value={$v['id']}>{$v['name']}</option>
                    {/volist}
                </select>
            </div>
        </div>
        <div class="layui-inline ">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="newscience">新建爬虫</button>
            </div>
        </div>
    </div>

</form>
{include file="admin@block/layui" /}
<script>
    layui.use('form', function(){

        submit('submit(newpubmed)',1);
        submit('submit(newscience)',2);
    });


    function submit(name,type) {
        var form = layui.form;
        form.on(name, function(data){
            var url = '{$controlspider_url}'
            var $ = layui.jquery;
            $.ajax({
                url:url,
                data:{kw_id:data.field.kw_id,action:"new",uname:'{$uname}',uid:'{$uid}',spider_type:type},
                type:"post",
                dataType:"json",
                success:function (res) {
                    console.log(url);
                    console.log(res.status);
                    if(res.status){
                        layer.open({
                            offset: 'auto',
                            content: "创建成功" //注意，如果str是object，那么需要字符拼接。
                        });

                    }
                    else{
                        layer.open({
                            offset: 'auto',
                            content: "创建失败，当前爬虫已存在" //注意，如果str是object，那么需要字符拼接。
                        });
                    }
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });
        //各种基于事件的操作，下面会有进一步介绍

    }

</script>

<link rel="stylesheet" type="text/css" href="__COFCO_CSS__/style.css">

