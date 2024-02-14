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
                @foreach ($rankData as $rank)
                    <!-- Display the rank data here -->
                @endforeach

                <!-- Display the pagination links -->
                {{ $rankData->links() }}
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
