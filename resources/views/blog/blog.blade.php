@extends('layouts.base')
@section('title','hehq')
{{--@endsection--}}
@section('sidebar')
    {{--@parent--}}
    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection
@section('content')
    {!!$data!!}
@endsection