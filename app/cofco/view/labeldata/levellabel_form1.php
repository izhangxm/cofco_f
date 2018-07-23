<form class="layui-form layui-form-pane" action="{:url()}" method="post" id="editForm">
    {php}
    if($data_info['cid']==0)
    $levellabel_option=0;
    {/php}
    <div class="layui-form-item">
        <label class="layui-form-label">上级标签</label>
        <div class="layui-input-inline">
            <select name="cid"  class="field-cid" type="select"lay-search multiple="multiple">
                {$levellabel_option}
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">标签值</label>
        <div class="layui-input-inline w300">
            <input type="text" class="layui-input field-value" name="value" lay-verify="required" autocomplete="off" placeholder="">
        </div>
        <div class="layui-form-mid layui-word-aux">请只添加一个值</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分值</label>
        <div class="layui-input-inline w300">
            <input type="text" class="layui-input field-score" name="score" lay-verify="required" autocomplete="off" placeholder="">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">状&nbsp;&nbsp;&nbsp;&nbsp;态</label>
        <div class="layui-input-inline">
            <input type="radio" class="field-status" name="status" value="1" title="启用" checked>
            <input type="radio" class="field-status" name="status" value="0" title="禁用">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" class="field-id" name="id">
            <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">提交</button>
            <a href="{:url('levellabel')}" class="layui-btn layui-btn-primary ml10"><i class="aicon ai-fanhui"></i>返回</a>
        </div>
    </div>
</form>
{include file="admin@block/layui" /}
<script>
    var formData = {:json_encode($data_info)};

</script>
<script src="__ADMIN_JS__/footer.js"></script>