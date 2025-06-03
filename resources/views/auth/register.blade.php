<x-guest-layout>
    <form class="register-inputs-container" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="register-name-input-container">
            <x-text-input
                class="input-properties name-input"
                placeholder="Typ je voornaam"
            />

            <x-text-input
                class="input-properties name-input"
                placeholder="Tussenvoegsel"
                name="tussenvoegsel"
                type="text"
                :value="old('name')"
                autofocus
                autocomplete="name" />

            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div>
            <x-text-input
                class="input-properties big-input"
                placeholder="Achternaam"
            />
        </div>

        <!-- Email Address -->
        <div>
            <x-text-input
                id="email"
                class="input-properties big-input"
                type="email"
                name="email"
                :value="old('email')"
                placeholder="Typ je e-mail adress"
                required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div>
            <x-text-input
                id="password"
                class="input-properties big-input"
                type="password"
                placeholder="Wachtwoord"
                name="password"
                required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-text-input
                id="password_confirmation"
                class="input-properties big-input"
                placeholder="Confirm Wachtwoord"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div class="register-buttons-cont">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="submit-button">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
