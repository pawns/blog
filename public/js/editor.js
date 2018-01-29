/**
 * Created by hongqiaohe on 2018/1/19.
 */
var testEditor;
$(function() {
    testEditor = editormd("test-editormd", {
        width   : "90%",
        height  : 640,
        syncScrolling : "single",
        path    : "/editor/lib/"
    });


    layui.use('form', function(){
        var form = layui.form(); //只有执行了这一步，部分表单元素才会修饰成功
    });
});

$(".editor-submit").bind('click', function(){
    var content = testEditor.getMarkdown();
    var title =$.trim($("#editor-title").val());
    var value = $("#article_num").val();
    if(title==''){
        alert("请填写你的标题");
        return false;
    }
    if(title.length>100){
        alert('标题不能超过100个字');
        return false;
    }
    if($.trim(content)==''){
        alert("内容为空");
        return false;
    }
    $.post('/blog/store-blog',{
        content: content,
        title: title,
        value: value,
        '_token': $('meta[name=csrf-token]').attr('content')
    },
    function(result){
        if(result.code==1)
        {
            $("#article_num").val(result.data.id);
            alert("保存成功");
        }else {
            alert('保存失败');
        }
    });

});