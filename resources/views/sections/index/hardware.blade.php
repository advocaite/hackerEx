<div class="widget-box">
    <div class="widget-title">
        <a href="hardware"><span class="icon"><i class="he16-server"></i></span></a>
        <h5>{{ __('Hardware Information') }}</h5>
    </div>
    <div class="widget-content nopadding border">
        <table class="table table-cozy table-bordered table-striped table-fixed with-check">
            <tbody>
                <tr>
                    <td><span class="he16-cpu heicon"></span></td>
                    <td><span class="item">{{ __('Processor') }}</span></td>
                    <td>{{ $cpu }}</td>
                </tr>
                <tr>
                    <td><span class="he16-hdd heicon"></span></td>
                    <td><span class="item">{{ __('Hard Drive') }}</span></td>
                    <td>{{ $hdd }}</td>
                </tr>
                <tr>
                    <td><span class="he16-ram heicon"></span></td>
                    <td><span class="item">{{ __('Memory') }}</span></td>
                    <td>{{ $ram }}</td>
                </tr>
                <tr>
                    <td><i class="he16-net heicon"></i></td>
                    <td><span class="item">{{ __('Internet') }}</span></td>
                    <td>{{ $net }}</td>
                </tr>
                <tr>
                    <td><span class="he16-xhd heicon"></span></td>
                    <td><span class="item">{{ __('External HD') }}</span></td>
                    <td>{{ $xhd }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
