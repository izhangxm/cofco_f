<form class="page-list-form">
    <div class="layui-btn-group">
        <a href="{:url('tag_add')}" class="layui-btn layui-btn-primary"><i class="aicon ai-tianjia"></i>添加</a>
        <a data-href="{:url('tag_del')}" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="aicon ai-jinyong"></i>删除</a>

    </div>
    <div class="layui-form">
        <table class="layui-table mt10" lay-even="" lay-skin="row">
            <colgroup>
                <col width="50">
            </colgroup>
            <thead>
            <tr>
                <th><input type="checkbox"  lay-skin="primary" lay-filter="allChoose"></th>
                <th>标签名称</th>
                <th>所在分组</th>
                <th>状态</th>
                <th>值</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {php}
            $label=config('hs_system.label');

            {/php}
            {volist name="data_list" id="v"}
            <tr>
                <td><input type="checkbox" name="ids[]" value="{$v['id']}" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td>{$v['name']}</td>
                <td>{$label[$v['label_id']]}</td>
                <td><input type="checkbox" name="status" {if condition="$v['status'] eq 1"}checked=""{/if} value="{$v['status']}" lay-skin="switch" lay-filter="switchStatus" lay-text="正常|关闭" data-href="{:url('status?table=admin_tag&ids='.$v['id'])}"></td>
                <td>{$v.value}</td>
                <td>
                    <div class="layui-btn-group">
                        <div class="layui-btn-group">
                            <a href="{:url('tag_edit?id='.$v['id'])}" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon">&#xe642;</i></a>
                            <a data-href="{:url('tag_del?ids='.$v['id'])}" class="layui-btn layui-btn-primary layui-btn-sm j-tr-del"><i class="layui-icon">&#xe640;</i></a>
                        </div>
                    </div>
                </td>

            </tr>
            {/volist}
            </tbody>
        </table>
        {$pages}
    </div>
</form>
{include file="admin@block/layui" /}