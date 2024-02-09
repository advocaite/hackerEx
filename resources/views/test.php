
<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Panel - Hacker Wars</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/he.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>
<body class="index">
<div id="header">
<h1><a href="#">Hacker Wars</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
<ul class="nav btn-group">
<li class="btn btn-inverse"><a href="profile"><i class="fa fa-inverse fa-user"></i> <span class="text">My Profile</span></a></li>
<li class="btn btn-inverse"><a href="mail"><i class="fa fa-inverse fa-envelope"></i> <span class="text">E-Mail</span> <span class="mail-unread"></span></a></li>
<li class="btn btn-inverse"><a href="settings"><i class="fa fa-inverse fa-wrench"></i> <span class="text">Settings</span></a></li>
<li class="btn btn-inverse"><a href="logout"><i class="fa fa-power-off fa-inverse"></i> <span class="text">Logout</span></a></li>
</ul>
</div>
<span id="notify"></span>
<div id="sidebar">
<a href="#" class="visible-phone"><i class="fa fa-inverse fa-chevron-down"></i> Control Panel</a>
<ul>
<li class="active"><a href="index"><i class="fa fa-inverse fa-home"></i> <span>Home</span></a></li>
<li><a href="processes"><i class="fa fa-inverse fa-tasks"></i> <span>Task Manager</span></a></li>
<li id="menu-software"><a href="software"><i class="fa fa-inverse fa-folder-open"></i> <span>Software</span></a></li>
<li id="menu-internet"><a href="internet"><i class="fa fa-inverse fa-globe"></i> <span>Internet</span></a></li>
<li><a href="log"><i class="fa fa-inverse fa-book"></i> <span>Log File</span></a></li>
<li><a href="hardware"><i class="fa fa-inverse fa-desktop"></i> <span>Hardware</span></a></li>
<li><a href="university"><i class="fa fa-inverse fa-flask"></i> <span>University</span></a></li>
<li><a href="finances"><i class="fa fa-inverse fa-briefcase"></i> <span>Finances</span></a></li>
<li><a href="list"><i class="fa fa-inverse fa-terminal"></i> <span>Hacked Database</span></a></li>
<li id="menu-mission"><a href="missions"><i class="fas fa-inverse fa-building"></i> <span>Missions</span></a></li>
<li><a href="utilities"><i class="fa fa-inverse fa-cogs"></i> <span>Utilities</span></a></li>
<li><a href="clan"><i class="fa fa-inverse fa-users"></i> <span>Clan</span></a></li>
<li><a href="ranking"><i class="fa fa-inverse fa-bars"></i> <span>Ranking</span></a></li>
<li><a href="fame"><i class="fa fa-inverse fa-star"></i> <span>Hall of Fame</span></a></li>
<li><a href="doom"><i class="fa fa-bullseye" style="opacity: 1;"></i> <span>Doom!</span></a></li>
</ul>
</div>
<div id="content">
<div id="content-header">
<h1>Control Panel</h1>
<div class="header-ip hide-phone">
<div style="text-align: right;">
<span class="header-ip-show"></span>
</div>
<div class="header-info">
<div class="pull-right">
<span class="icon-tab he16-time" title="Server Time"></span> <span class="small nomargin" style="margin-right: 7px;">2023-03-30 15:55</span>
 <span class="online"></span>
<div class="reputation-info"></div><div class="finance-info"></div>
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
<div class="widget-box">
<div class="widget-title">
<a href="hardware"><span class="icon"><i class="he16-server"></i></span></a>
<h5>Hardware Information</h5>
</div>
<div class="widget-content nopadding border">
<table class="table table-cozy table-bordered table-striped table-fixed with-check">
<tbody>
<tr>
<td><span class="he16-cpu heicon"></span></td>
<td><span class="item">Processor</span></td>
<td>0.5 GHz</td>
</tr>
<tr>
<td><span class="he16-hdd heicon"></span></td>
<td><span class="item">Hard Drive</span></td>
<td>100 MB</td>
</tr>
<tr>
<td><span class="he16-ram heicon"></span></td>
<td><span class="item">Memory</span></td>
<td>256 MB</td>
</tr>
<tr>
<td><i class="he16-net heicon"></i></td>
<td><span class="item">Internet</span></td>
<td>1 Mbit/s</td>
</tr>
<tr>
<td><span class="he16-xhd heicon"></span></td>
<td><span class="item">External HD</span></td>
<td>None</td>
</tr>
</tbody>
</table>
</div>
</div>
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
<a href="news?id=3612">Doom revealed</a></span><span class="small">2023-03-28 16:26:29</span>
</td>
</tr>
<tr>
<td>
<a href="news?id=3611">Dooby69 seized FBI suspect known as Medic_Jesus</a></span><span class="small">2023-03-28 13:09:24</span>
</td>
</tr>
<tr>
<td>
<a href="news?id=3610">Dooby69 seized FBI suspect known as KlaimsaS</a></span><span class="small">2023-03-28 12:55:29</span>
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
<a href="internet?ip=44.87.51.38"><span class="label hide1024">FBI</span></a>
</div>
<div class="widget-content nopadding border">
<table class="table table-cozy table-bordered table-striped">
<tbody>
<tr>
<td><a class="black" href="internet?ip=187.219.92.196">187.219.92.196</a></td>
<td><font color="green">$98,456</font></td>
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
<div class="widget-box">
<div class="widget-title">
<span class="icon"><span class="he16-ranking"></span></span>
<h5>Top 7 users</h5>
<a href="ranking"><span class="hide-phone label">View ranking</span></a>
</div>
<div class="widget-content nopadding border">
 <table class="table table-bordered table-striped with-check">
<thead>
<tr>
<th>#</th>
<th>User</th>
<th>Reputation</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><a href="profile?id=21">bobo</a></td>
<td>10,478,637</td>
</tr>
<tr>
<td>2</td>
<td><a href="profile?id=23">Dooby69</a></td>
<td>8,374,253</td>
</tr>
<tr>
<td>3</td>
<td><a href="profile?id=18299">netcat</a></td>
<td>670,131</td>
</tr>
<tr>
 <td>4</td>
<td><a href="profile?id=9399">Nephilim</a></td>
<td>486,220</td>
</tr>
<tr>
<td>5</td>
<td><a href="profile?id=17067">BasisPrimary402</a></td>
<td>456,325</td>
</tr>
<tr>
<td>6</td>
<td><a href="profile?id=6617">Areschi</a></td>
<td>337,241</td>
</tr>
<tr>
<td>7</td>
<td><a href="profile?id=1514">tekhead2004</a></td>
<td>311,948</td>
</tr>
</tbody>
</table>
</div>
</div>
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
<td><a href="blog?id=13">Round 34 - Game Balancing, Clan Rework, Anti-Cheat & Alt Prevention</a></td>
<td>Hacker Wars Development Team</td>
</tr>
<tr>
<td class="hide-phone">2021-02-27 12:43</td>
<td><a href="blog?id=12">Round 16 Updates - Whois 3 & 4 Release, Firewall Rework and Referral Program</a></td>
<td>Hacker Wars Development Team</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script type="4c0d3a1361c5b59d1022e48d-text/javascript">
            var indexdata = {
                ip: '251.91.242.181',
                pass: 'u70hTB9s',
                up: '7 days and 6 hours',
                chg: 'change'
            };
        </script>
<span id="modal"></span>
</div>
</div>
</div>
</div>
<div id="breadcrumb" class="center">
<span class="pull-left hide-phone" style="margin-left: 10px;"><a href="TOS" target="_blank"><font color="">Terms of Service and Use</font></a></span>
<span class="pull-left hide-phone"><a href="privacy" target="_blank">Privacy Policy</a></span>
<span class="pull-left hide-phone"><a href="https://discordapp.com/invite/8qXvhHR" target="_blank"><font color="">Discord</font></a></span>
<span class="pull-left hide-phone"><a href="stats">Stats</a></span>
<span class="center">2023 - <b>Hacker Wars</b><a target="_blank" href="https://dash.evolushost.com/?language=english">‌‌Powered by Evolushost</a></span>
<span id="credits" class="pull-right hide-phone link"><a>Credits</a></span>
 <span id="report-bug-remove-me" class="pull-right hide-phone link"><a href="https://github.com/hackerwars-io/issue-tracker" target="_blank">Report Bug</a></span>
<span id="report-bug-remove-me" class="pull-right hide-phone link"><a href="/report" target="_blank">Report Player</a></span>
<span class="pull-right hide-phone"><a href="premium"><font color="">Premium</font></a></span>
<span class="pull-right hide-phone"><a href="">v1.0.0</a></span>
</div>
<!--[if IE]><script src="js/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.min.js" type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>
<script src="js/bootstrap.min.js" type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>
<script src="js/jquery.flot.min.js" type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>


<script src="js/jquery.validate.js" type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>
<script src="js/main.js?epoch=1680191710962" type="4c0d3a1361c5b59d1022e48d-text/javascript"></script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4c0d3a1361c5b59d1022e48d-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7b01890ffcf25aa4","version":"2023.3.0","r":1,"token":"3662001e69e642849d6abf5fec0f99b6","si":100}' crossorigin="anonymous"></script>
</body>
</html>
