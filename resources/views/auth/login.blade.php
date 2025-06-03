<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email"
                          class="login-input"
                          type="email"
                          name="email"
                          placeholder="Typ je e-mail adress"
                          :value="old('email')"
                          required
                          autofocus
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div>
            <x-text-input id="password"
                          class="login-input"
                          type="password"
                          name="password"
                          placeholder="Typ je wachtwoord"
                          required
                          autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div>
            <a href="{{ asset('register') }}">
                Register
            </a>

            <x-primary-button class="submit-button">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
