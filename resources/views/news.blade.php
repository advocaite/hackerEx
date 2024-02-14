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
                        <h5>News</h5>
                    </div>
                    <div class="widget-content padding noborder">
                        <table class="table table-cozy table-bordered table-striped">
                            <tbody>
                                @foreach ($newsList as $newsItem)
                                    <tr>
                                        <td>
                                            <a
                                                href="{{ route('news.show', $newsItem['id']) }}">{{ $newsItem['title'] }}</a></span><span
                                                class="small">{{ $newsItem['date'] }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
