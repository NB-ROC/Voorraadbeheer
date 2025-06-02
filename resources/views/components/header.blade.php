<header>
    <img class="site-logo" src="{{ asset('images/site-logo.png') }}" alt="Logo">
    @if (Route::has('login'))
            @auth
                    <a class="login-link" href="{{ url('/dashboard') }}">
                        <div class="login-button">Profile</div>
                    </a>
            @else
                    <a class="login-link" href="{{ route('login') }}">
                        <div class="login-button">Log in</div>
                    </a>
            @endauth
    @endif
</header>
