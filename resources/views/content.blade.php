@extends('layouts.base')
@section('title','view content')
@section('content')
<div id="test-editormd-view2">
        <textarea id="append-test" style="display:none;">
            {{$article->content or ''}}
        </textarea>
</div>
    <script src={{asset('/editor/examples/js/jquery.min.js')}}></script>
    <script src={{asset('/editor/lib/marked.min.js')}}></script>
    <script src={{asset('/editor/lib/prettify.min.js')}}></script>
    <script src={{asset('/editor/lib/raphael.min.js')}}></script>
    <script src={{asset('/editor/lib/underscore.min.js')}}></script>
    <script src={{asset('/editor/lib/sequence-diagram.min.js')}}></script>
    <script src={{asset('/editor/lib/flowchart.min.js')}}></script>
    <script src={{asset('/editor/lib/flowchart.min.js')}}></script>
    <script src={{asset('/editor/lib/jquery.flowchart.min.js')}}></script>
    <script src={{asset('/editor/editormd.js')}}></script>
    <script type="text/javascript">
        $(function() {
            var testEditormdView, testEditormdView2;
            $.get("test.md", function(markdown) {
                testEditormdView = editormd.markdownToHTML("test-editormd-view", {
                    markdown        : markdown ,//+ "\r\n" + $("#append-test").text(),
                    htmlDecode      : "style,script,iframe",  // you can filter tags decode
                    //toc             : false,
                    tocm            : true,    // Using [TOCM]
                    emoji           : true,
                    taskList        : true,
                    tex             : true,  // 默认不解析
                    flowChart       : true,  // 默认不解析
                    sequenceDiagram : true,  // 默认不解析
                });
            });
            testEditormdView2 = editormd.markdownToHTML("test-editormd-view2", {
                htmlDecode      : "style,script,iframe",  // you can filter tags decode
                emoji           : true,
                taskList        : true,
                tex             : true,  // 默认不解析
                flowChart       : true,  // 默认不解析
                sequenceDiagram : true,  // 默认不解析
            });
        });
    </script>

@endsection
