<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regisztráció</p>

                                        <form class="mx-1 mx-md-4">

                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-outline flex-fill mb-0">

                                                    <input id="form3Example1c" class="form-control" id="name"
                                                        type="text" name="name" :value="old('name')" required
                                                        autofocus />
                                                    <label class="form-label" for="form3Example1c" for="name"
                                                        :value="__('Name')">
                                                        Felhasználó név</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" id="form3Example3c" class="form-control"
                                                        name="email" :value="old('email')" required autofocus />
                                                    <label class="form-label" for="form3Example3c" for="email"
                                                        name="email" :value="__('Email')">
                                                        Email</label>


                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" id="form3Example4cd" class="form-control"
                                                        name="password" required autocomplete="new-password" />
                                                    <label class="form-label" for="form3Example4cd"
                                                        class="block mt-1 w-full" for="password"
                                                        :value="__('Password')">Jelszó</label>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" id="form3Example4c" class="form-control"
                                                        name="password_confirmation" required />
                                                    <label class="form-label" for="form3Example4c"
                                                        for="password_confirmation"
                                                        :value="__('Confirm Password')">Jelszó ismétlése</label>
                                                </div>
                                            </div>



                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Regisztráció') }}</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div
                                        class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                            class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div> --}}

        </form>
    </x-auth-card>
</x-guest-layout>
