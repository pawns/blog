@extends('layouts.base')
@section('home')
    @section('content')
        @if(!empty($articles))
            @foreach($articles as $article)
                <div class="article">
                    <a class="clearlink" href="##">
                        <h1>{{$article->title or ''}}</h1>
                        <div class="a-content">
                            <div class="a-content-text">
                                {{$article->descripe or ''}}
                            </div>
                        </div>
                    </a>
                    <div class="read-more clearfix">
                        <div class="more-left left">
                            <span class="date">{{$article->created_at or ''}}</span>
                            &nbsp;&nbsp;<a href="#">评论</a>
                        </div>
                        <div class="more-right right">
                            <a href={{asset('/blog/get-content/'.$article->id)}}>更多</a>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="large-6 columns">
                <p class="text-left" style="padding-top:25px;"><a href="#fnref1" rev="footnote">&laquo; 上一页</a></p>
            </div>
            <div class="large-6 columns">
                <p class="text-right" style="padding-top:25px;"><a href="#fnref1" rev="footnote">下一页 &raquo;</a></p>
            </div>
        </div>
    @endsection



