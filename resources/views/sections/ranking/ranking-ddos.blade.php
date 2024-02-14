@extends('layout.layout')
@section('title')
    Rankings
@endsection
@section('content')
    <div id="content">
        <div id="content-header">
            <h1>Ddos Rankings</h1>

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
                            <li class="link "><a href="{{ route('ranking.indexget', ['display' => 'user']) }}"><span
                                        class="icon-tab he16-rank_user"></span><span class="hide-phone">User
                                        ranking</span></a></li>
                            <li class="link"><a href="{{ route('ranking.indexget', ['display' => 'clan']) }}"><span
                                        class="icon-tab he16-rank_clan"></span><span class="hide-phone">Clan
                                        ranking</span></a></li>
                            <li class="link"><a href="{{ route('ranking.indexget', ['display' => 'software']) }}"><span
                                        class="icon-tab he16-rank_software"></span><span class="hide-phone">Software
                                        ranking</span></a></li>
                            <li class="link active"><a href="{{ route('ranking.indexget', ['display' => 'ddos']) }}"><span
                                        class="icon-tab he16-rank_ddos"></span><span class="hide-phone">DDoS
                                        Ranking</span></a></li>
                        </ul>
                    </div>
                    <div class="widget-content padding noborder center">
                        <table class="table table-cozy table-bordered table-striped table-hover with-check">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo _('Attacker'); ?></th>
                                    <th><?php echo _('Victim'); ?></th>
                                    <th><?php echo _('Power'); ?></th>
                                    <th><?php echo _('Servers used'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rankData as $i => $rank)
                                    <tr>
                                        <td>
                                            <center>{{ $i + 1 }}</center>
                                        </td>
                                        <td><a
                                                href="{{ route('profile.show', ['id' => $rank->attID]) }}">{{ $rank->attUser }}</a>
                                        </td>
                                        <td>Unknown</td>
                                        <td>
                                            <center>{{ $rank->power }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $rank->servers }}</center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- Display the pagination links -->
                        {{ $rankData->links() }}
                    </div>
                @endsection
