@extends('layout.layout')
@section('title')
    News
@endsection
@section('content')
    <div id="content">
        <div id="content-header">
            <h1>News</h1>

            <div class="header-ip hide-phone">
                <div style="text-align: right;">
                    <span class="header-ip-show"></span>
                </div>
                <div class="header-info">
                    <div class="pull-right">
                        <span class="icon-tab he16-time" title="Server Time"></span> <span class="small nomargin"
                            style="margin-right: 7px;">2023-03-30 15:55</span>
                        <span class="online"></span>
                        <div class="reputation-info"></div>
                        <div class="finance-info"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="breadcrumb">
            <a href="{{ route('index_in') }}" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <ul class="nav nav-tabs">
                                <li class="link active"><a href="news.php"><span class="he16-news icon-tab"></span>News</a>
                                </li>
                                <a href="#"><span class="label label-info">Help</span></a>
                            </ul>
                        </div>
                        <table class="table table-cozy table-bordered table-striped">
                            <tbody>
                                @foreach ($newsInfo as $news)
                                    <tr>
                                        <td>
                                            <a
                                                href="{{ route('news.show', ['id' => $news->id]) }}">{{ $news->title }}</a></span><span
                                                class="small">{{ $news->date }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </div>
                </div>

                </table>
            @endsection


            @push('js')
                <script type="4c0d3a1361c5b59d1022e48d-text/javascript">
    var indexdata = {
        ip: '251.91.242.181',
        pass: 'u70hTB9s',
        up: '7 days and 6 hours',
        chg: 'change'
    };
</script>
            @endpush
