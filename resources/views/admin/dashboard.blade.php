@extends('admin.layouts.master')
@section('title')
    Dashboard
@endsection

@section('content')
    <div>
        {{-- <h2 class="d-flex justify-content-center align-items-center">Welcome Admin</h2>
        <h1 class="text-bold d-flex justify-content-center align-items-center">{{ Auth::user()->name }}</h1>
        <h3 class="d-flex justify-content-center align-items-center"> to your website</h3> --}}
        <div style="text-align: center; background-color: #f5f5f5; padding: 20px;">
            <h1
                style="font-size: 48px; color: #333; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-shadow: 2px 2px #ddd;">
                Welcome, {{ Auth::user()->name }}!</h1>
            <p
                style="font-size: 24px; color: #666; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-shadow: 1px 1px #ccc;">
                Thank you for logging in.</p>
        </div>
        {{-- @if (Auth::user()->hasRole('superadmin'))
            @forelse($notifications as $notification)
                <div class="alert alert-success main-cls">
                    [{{ $notification->created_at }}] User {{ $notification->data['name'] }}
                    ({{ $notification->data['email'] }})
                    has just registered.
                    <a href="#" class="mark-as-read" data-id="{{ $notification->id }}">Mark as read</a>
                </div>
                @if ($notification)
                    @if ($loop->last)
                        <a href="#" id="mark-all">Mark all as read</a>
                    @endif
                @endif
            @empty
                <p>There are no new notifications.</p>
            @endforelse
        @endif --}}

    </div>
@endsection
{{-- <script>
    $(function() {
        $('.mark-as-read').click(function() {
            var request = sendRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('.main-cls').remove();
            });
        });
        $('#mark-all').click(function() {
            var request = sendRequest();
            request.done(() => {
                $('.main-cls').remove();
            })
        });
    });

    function sendRequest(id = null) {
        var _token = "{{ csrf_token() }}";
        return $.ajax("{{ route('markAsNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }
</script> --}}
