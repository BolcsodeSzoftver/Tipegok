<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">      
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="form-container">
                            <div class="form-icon"><i class="fa fa-user"></i></div>
                            <h3 class="title">Bejelentkezés</h3>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" :value="__('Email')">Email cím</label>
                                    <input class="form-control" id="email" class="block mt-1 w-full" type="email"
                                        name="email" :value="old('email')" required autofocus placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password" :value="__('Password')">Jelszó</label>
                                    <input class="form-control" type="password" id="password"
                                        class="block mt-1 w-full" type="password" name="password" required
                                        autocomplete="current-password" placeholder="Jelszó">
                                </div>
                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="ml-2 btn btn-default" >
                                        {{ __('Belépés') }}
                                    </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
