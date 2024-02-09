<div class="widget-box">
    <div class="widget-title">
        <span class="icon"><span class="he16-ranking"></span></span>
        <h5>{{ __('Top 7 users') }}</h5>
        <a href="ranking"><span class="hide-phone label">{{ __('View ranking') }}</span></a>
    </div>
    <div class="widget-content nopadding border">
        <table class="table table-bordered table-striped with-check">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('User') }}</th>
                    <th>{{ __('Reputation') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($topUsers as $i => $user)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td><a href="profile?id={{ $user->userID }}">{{ $user->login }}</a></td>
                        <td>{{ number_format($user->reputation) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No Ranked Users at this time.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
