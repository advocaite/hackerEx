@extends('layout.layout')
@section('title')
    Control Pannel
@endsection
@section('content')
    <div id="content">
        <div id="content-header">
            <h1>Control Panel</h1>

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
            <a href="index" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><span class="he16-monitor"></span></span>
                        <h5>Control Panel</h5>
                    </div>
                    <div class="widget-content padding noborder">
                        <div class="span5">
                            {{ $data['hardware'] }}
                        </div>
                        <div class="span7">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon"><i class="he16-pda"></i></span>
                                    <h5>General Info</h5>
                                    <span class="hide-phone label label-success">Basic</span>
                                </div>
                                <div class="widget-content nopadding border">
                                    <table class="table table-cozy table-bordered table-striped with-check">
                                        <tbody>
                                            <tr>
                                                <td><span class="he16-reputation heicon"></span></td>
                                                <td><span class="item">Reputation</span></td>
                                                <td>
                                                    1 <span class="small">Ranked #460</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="he16-taskmanager heicon"></span></td>
                                                <td><span class="item">Running tasks</span></td>
                                                <td><a class="black" href="processes">0</a></span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="he16-world heicon"></i></td>
                                                <td><span class="item">Connected to</span></td>
                                                <td>No one</td>
                                            </tr>
                                            <tr>
                                                <td><i class="he16-missions heicon"></i></td>
                                                <td><span class="item">Mission</span></td>
                                                <td>None</td>
                                            </tr>
                                            <tr>
                                                <td><i class="he16-clan heicon"></i></td>
                                                <td><span class="item">Clan</span></td>
                                                <td>Not a member </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span7">
                                <div class="widget-box">
                                    <div class="widget-title">
                                        <span class="icon"><i class="he16-news"></i></span>
                                        <h5>News</h5>
                                        <a href="news"><span class="label">View all</span></a>
                                    </div>
                                    <div class="widget-content nopadding border">
                                        <table class="table table-cozy table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="news?id=3612">Doom revealed</a></span><span
                                                            class="small">2023-03-28 16:26:29</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="news?id=3611">Dooby69 seized FBI suspect known as
                                                            Medic_Jesus</a></span><span class="small">2023-03-28
                                                            13:09:24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="news?id=3610">Dooby69 seized FBI suspect known as
                                                            KlaimsaS</a></span><span class="small">2023-03-28
                                                            12:55:29</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><span class="he16-thief"></span></span>
                                                <h5>FBI Wanted List</h5>
                                                <a href="internet?ip=44.87.51.38"><span
                                                        class="label hide1024">FBI</span></a>
                                            </div>
                                            <div class="widget-content nopadding border">
                                                <table class="table table-cozy table-bordered table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td><a class="black"
                                                                    href="internet?ip=187.219.92.196">187.219.92.196</a>
                                                            </td>
                                                            <td>
                                                                <font color="green">$98,456</font>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><span class="icon-tab he16-tag_blue"></span></span>
                                                <h5>Round Info</h5>
                                                <span class="label label-info hide1024">Round 38</span>
                                            </div>
                                            <div class="widget-content nopadding border">
                                                <table class="table table-cozy table-bordered table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="item">Name</span></td>
                                                            <td>ROUND-38</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="item">Started</span></td>
                                                            <td>2023-02-23</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="item">Age</span></td>
                                                            <td>35 days</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                {{ $data['top7'] }}
                            </div>
                            <div>
                                <div class="widget-box">
                                    <div class="widget-title">
                                        <span class="icon"><i class="he16-news"></i></span>
                                        <h5>Game News & Announcements</h5>
                                        <a href="blog"><span class="label">View all</span></a>
                                    </div>
                                    <div class="widget-content nopadding border">
                                        <table class="table table-cozy table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                <tr>
                                                <tr>
                                                    <td class="hide-phone">2022-12-11 09:34</td>
                                                    <td><a href="blog?id=14">Round 35 - Hardware Price Balance</a></td>
                                                    <td>Hacker Wars Development Team</td>
                                                </tr>
                                                <tr>
                                                    <td class="hide-phone">2022-11-06 05:33</td>
                                                    <td><a href="blog?id=13">Round 34 - Game Balancing, Clan Rework,
                                                            Anti-Cheat & Alt Prevention</a></td>
                                                    <td>Hacker Wars Development Team</td>
                                                </tr>
                                                <tr>
                                                    <td class="hide-phone">2021-02-27 12:43</td>
                                                    <td><a href="blog?id=12">Round 16 Updates - Whois 3 & 4 Release,
                                                            Firewall Rework and Referral Program</a></td>
                                                    <td>Hacker Wars Development Team</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
