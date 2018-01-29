@extends('layouts.md-base')

@section('title','editor')
@section('content')
    <form class="layui-form" action="">
    <div class="layui-form-item" style="margin-top: 25px;">
        <div class="layui-inline" style="width: 50%;float: left;">
            <label class="layui-form-label">标题:</label>
            <div class="layui-input-block">
                <input type="text" name="title" id="editor-title"  lay-verify="title" autocomplete="off" placeholder="请输入标题"
                       class="layui-input">
            </div>
        </div>
        <div style="float: left;">
            <label class="layui-form-label">标签:</label>
            <div class="layui-input-block">
                <input type="checkbox" name="like1[write]" lay-skin="primary" title="php"{{-- checked=""--}}>
                <input type="checkbox" name="like1[read]" lay-skin="primary" title="java">
                <input type="checkbox" name="like1[read]" lay-skin="primary" title="mysql">
                <input type="checkbox" name="like1[read]" lay-skin="primary" title="redis">
                <input type="checkbox" name="like1[game]" lay-skin="primary" title="linux" {{--disabled=""--}}>
                <input type="checkbox" name="like1[game]" lay-skin="primary" title="other" {{--disabled=""--}}>
            </div>
        </div>
    </div>
    </form>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">描述:</label>
        <div class="layui-input-block">
            <textarea placeholder="描述少于255个字" class="layui-textarea" style="width: 45%;"></textarea>
        </div>
    </div>
    <div id="test-editormd">
        <textarea style="display:none;"></textarea>
    </div>
    <input type="button" class="button editor-submit" value="保存">
    <a href="/" class="button" >返回</a>
    <input type="hidden" name="article_num" id="article_num">
    <script src={{asset("/editor/examples/js/jquery.min.js")}}></script>
    <script src={{asset("/editor/editormd.min.js")}}></script>
    <script src={{asset("/js/editor.js")}}></script>
    <script type="text/javascript" src={{asset("layui/layui.js")}}></script>
@endsection
