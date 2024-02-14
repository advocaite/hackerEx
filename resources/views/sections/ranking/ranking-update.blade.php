@extends('layout.layout')
@section('title')
    Ranking
@endsection
@section('content')
    <div id="content">
        <div id="content-header">
            <h1>Ranking</h1>

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
                <div class="widget-box">
                    <div class="widget-title">
                        <ul class="nav nav-tabs">
                            <li class="link active"><a href="{{ route('ranking.indexget', ['display' => 'user']) }}"><span
                                        class="icon-tab he16-rank_user"></span><span class="hide-phone">User
                                        ranking</span></a></li>
                            <li class="link"><a href="{{ route('ranking.indexget', ['display' => 'clan']) }}"><span
                                        class="icon-tab he16-rank_clan"></span><span class="hide-phone">Clan
                                        ranking</span></a></li>
                            <li class="link"><a href="{{ route('ranking.indexget', ['display' => 'software']) }}"><span
                                        class="icon-tab he16-rank_software"></span><span class="hide-phone">Software
                                        ranking</span></a></li>
                            <li class="link"><a href="{{ route('ranking.indexget', ['display' => 'ddos']) }}"><span
                                        class="icon-tab he16-rank_ddos"></span><span class="hide-phone">DDoS
                                        Ranking</span></a></li>
                        </ul>
                    </div>
                    <div>
                        <p>Ranking is being updated. Please, refresh in a few seconds.</p>
                    </div>
                </div>
            </div>
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
