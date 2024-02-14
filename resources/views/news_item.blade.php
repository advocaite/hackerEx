@extends('layout.layout')
@section('title')
    News
@endsection
@section('content')
    <div id="content">
        <div id="content-header">
            <h1>News</h1>
            <!-- Header information -->
        </div>
        <div id="breadcrumb">
            <a href="index" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><span class="he16-monitor"></span></span>
                        <h5>{{ $news['title'] }}</h5>
                    </div>
                    <div class="widget-content padding noborder">
                        <div class="span12">
                            <div class="span8">
                                <ul class="recent-posts">
                                    <li>
                                        <div class="mail-thumb pull-left">
                                            <img width="60" height="60" alt="User" src="{{ $news['image'] }}" />
                                        </div>
                                        <div class="article-post">
                                            <strong>{{ $news['title'] }}</strong>
                                            <p class="news-content">
                                                {{ $news['content'] }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mission-margin"></div>
                                <a href="news" class="btn btn-info">Back to news</a>
                            </div>
                            <!-- Show sidebar if needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
