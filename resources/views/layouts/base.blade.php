<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title','blog')</title>
    <link rel="stylesheet" href={{asset("asset/css/foundation.min.css")}} />
    <link rel="stylesheet" href={{asset("asset/css/docs.css")}} />
    <script src={{asset("asset/js/vendor/modernizr.js")}}></script>
</head>
<body class="antialiased hide-extras">
<div class="marketing off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <nav class="top-bar docs-bar hide-for-small" data-topbar>
            <section class="top-bar-section">
                <div class="row">
                    <div style="position: relative;width:100%;"><div style="position: absolute; width:100%;">
                            <ul id="main-menu" class="left">
                                <li class="is_active"><a href={{asset('/')}}>主页</a></li>
                                <li><a href="#">档案</a></li>
                                <li><a target="_blank" href={{asset("/blog/md-editor")}}>新建blog</a></li>
                            </ul>
                            <ul class="right" id="search-wrap">
                                <li><form>
                                        <input tabindex="1" id="search-input" type="search" placeholder="Search">
                                    </form></li>
                            </ul>
                        </div></div>

                </div>
            </section>
        </nav>
        <section id="main-content" role="main" class="scroll-container">
            <div class="row">
                <div class="large-8 medium-8 columns">
                    <div class="markdown-body home-categories">
                        @yield('content')
                    </div>
                </div>
                <div class="large-4 medium-4 columns">
                    <div class="hide-for-small">
                        <div id="sidebar" class="sidebar">
                            <div id="site-info" class="site-info">
                                <div class="site-a-logo"><img src={{asset("asset/img/icon.jpg")}} /></div>
                                <h1>Hehq</h1>
                                <div class="site-des">签名</div>
                                <div class="social">
                                    <a class="weibo" target="_blank" href="http://weibo.com/oulvhai" title="weibo">Weibo</a>
                                    <a class="github" target="_blank" href="https://github.com/oulvhai" title="GitHub">GitHub</a>
                                    <a class="twitter" target="_blank" href="http://twitter.com/oulvhai" title="Twitter">Twitter</a>
                                    <a class="rss" href="atom.xml" title="RSS">RSS</a>
                                </div>
                            </div>
                            <div id="site-categories" class="side-item ">
                                <div class="side-header">
                                    <h2>Categories</h2>
                                </div>
                                <div class="side-content">
                                    <p class="cat-list"><a href="OS%20X.html">OS X</a><a href="%E7%94%BB%E7%94%BB.html">画画</a><a href="ZBrush.html">ZBrush</a><a href="Maya%20LT.html">Maya LT</a><a href="%E6%B8%B8%E6%88%8F%E3%80%81Unity3d.html">游戏、Unity3d</a><a href="iOS.html">iOS</a><a href="%E5%85%B6%E4%BB%96.html">其他</a>
                                    </p>
                                    <ul class="categories-list">
                                        <li class="post">
                                            <a href="%E6%97%A5%E8%AE%B0.html"><strong>日记</strong></a>
                                            <p class="cat-list"><a href="OS%20X.html">OS X</a><a href="%E7%94%BB%E7%94%BB.html">画画</a><a href="ZBrush.html">ZBrush</a><a href="Maya%20LT.html">Maya LT</a><a href="%E6%B8%B8%E6%88%8F%E3%80%81Unity3d.html">游戏、Unity3d</a><a href="iOS.html">iOS</a><a href="%E5%85%B6%E4%BB%96.html">其他</a>
                                            </p>
                                        </li>
                                        <li class="post">
                                            <a href="%E6%88%91%E7%9A%84APP.html"><strong>我的APP&nbsp;(36)</strong></a>
                                            <p class="cat-list">
                                                <a href="Bug.html">Bug&nbsp;(1)</a>&nbsp;&nbsp;
                                            </p>
                                        </li>
                                        <li class="post">
                                            <a href="%E5%8F%A4%E9%A3%8E%E9%9F%B3%E4%B9%90.html"><strong>古风音乐&nbsp;(14)</strong></a>
                                        </li>
                                        <li class="post">
                                            <a href="%E5%B8%B8%E7%94%A8%E4%BB%BB%E5%8A%A1.html"><strong>常用任务&nbsp;(5)</strong></a>
                                        </li>
                                        <li class="post">
                                            <a href="Demo.html"><strong>Demo&nbsp;(7)</strong></a>
                                        </li>
                                        <li class="post">
                                            <a href="Demo%20EN.html"><strong>Demo EN&nbsp;(5)</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="site-categories" class="side-item">
                                <div class="side-header">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="side-content">
                                    <ul class="posts-list">
                                        <li class="post">
                                            <a href="14405682462449.html">MWeb 的预览资源直接引用 App 包里的、减小 MathJax 包大小</a>
                                        </li>
                                        <li class="post">
                                            <a href="14402998724415.html">【草木拾遗系列】——豆蔻 《绘若心愫》- 诗雪</a>
                                        </li>
                                        <li class="post">
                                            <a href="14402996218466.html">倩女幽魂2主题曲《前世》half - 诗雪</a>
                                        </li>
                                        <li class="post">
                                            <a href="14402978029088.html">木樨香随 - 诗雪</a>
                                        </li>
                                        <li class="post">
                                            <a href="14402964442200.html">簪花引 - 诗雪</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="page-bottom clearfix">
                <div class="row">
                    <p class="copyright">Copyright &copy; 2015
                        Powered by <a target="_blank" href="http://www.mweb.im">MWeb</a>,&nbsp;
                        Theme used <a target="_blank" href="http://github.com">GitHub CSS</a>.</p>
                </div>
            </div>
        </section>
    </div>
</div>
<script src={{asset("asset/js/vendor/jquery.js")}}></script>
<script src={{asset("asset/js/foundation.min.js")}}></script>
<script>
    $(document).foundation();
    $(window).load(function(){
        var w1 = $('.markdown-body').height();
        var w2 = $('#sidebar').height();
        if (w1 > w2) { $('#sidebar').height(w1); };
    });

</script>
</body>
</html>

