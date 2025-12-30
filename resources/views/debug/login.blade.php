@if (config('app.debug'))
    @guest
        {{-- Visible to unauthenticated (guest) users --}}
        <div style="background-color: #000000; color: #ff0000; text-align: center; padding: 6px 0;">
            Logged Out
        </div>
    @endguest

    @auth
        {{-- Visible to authenticated users --}}
        <div style="background-color: #000000; color: #00ff00; text-align: center; padding: 6px 0;">
            Logged In
        </div>
    @endauth
@endif
