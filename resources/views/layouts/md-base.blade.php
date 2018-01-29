<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <link rel="stylesheet" href={{asset("/editor/examples/css/style.css")}} />
    <link rel="stylesheet" href={{asset("/editor/css/editormd.css")}} />
    <link rel="stylesheet" href={{ asset("/css/blog.css") }}/>

    <link rel="stylesheet" href={{ asset("layui/css/layui.css") }} media="all" />
    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />

    <title>@yield('title','blog')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
@section('sidebar')
    {{--This is the master sidebar.--}}
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
