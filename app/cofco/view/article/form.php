{include file="cofco@block/edit_form"/}
<script>
    var formData = {:json_encode($data_info)};
    var pre_status = formData['status'];
    console.log(pre_status);
    var text1='';var text2='';
    function func(data) {
        var $ = layui.jquery;
        for(var i=0;i<data.length;i++){
            if (i==0){
                text1= data[i]['name'];
                text2= data[i]['title'];
            }
            else{
                text1=text1+'#'+data[i]['name'];
                text2=text2+'#'+data[i]['title'];
            }
        }
        $('input[name="tag_id"]').val(text1);
        $('input[name="value"]').val(text2);
    }

</script>
<script src="__ADMIN_JS__/footer.js"></script>
<script>
    $('#formSubmit').click(function (e) {
        var form_s = $('#editForm');
        var form_data = form_s.serializeArray();
        form_data.push({
            name:  "pre_status",
            value: pre_status
        });
        console.log(form_data);
        var article_api_url_edit = "{$article_api_url}/edit";
        $.post(article_api_url_edit,form_data,function (res) {
            console.log(res);
            if(res.code===0){
                layer.msg(
                    res.message
                    ,{time:1000}
                    ,function () {
                    var index = parent.layer.getFrameIndex(window.name);
                    parent.layer.close(index);//关闭当前页
                });

            }
            else {
                layer.msg(res.message);
            }
        });
        if(e.preventDefault){ e.preventDefault(); }else{ window.event.returnValue == false;}
    });
</script>