<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/felhasznaloRegisztracio">
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
                                                    <input type="text" id="allapot" class="form-control allapot"
                                                        name="allapot" value="0" required autofocus />
                                                </div>
                                            </div>


                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <select name="Jogosultsag" id="jogosultsag">
                                                        @foreach ($jogosultsagok as $jogosultsag)
                                                            <option value="{{ $jogosultsag->id }}">
                                                                {{ $jogosultsag->megnevezes }}</option>
                                                        @endforeach
                                                    </select>
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
        </form>
    </x-auth-card>
</x-guest-layout>
