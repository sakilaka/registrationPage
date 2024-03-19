<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Country -->

        <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />



            <select class="block mt-1 w-full" name="country" :value="old('country')" id="country" required>
                <option value="">Choose a country</option>
                <option value="America">America</option>
                <option value="Dubai">Dubai</option>
                <option value="Bangladesh">Bangladesh</option>
            </select>




            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>

        <!-- Address  -->

        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <!-- <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" /> -->

            <textarea class="block mt-1 w-full" name="address" :value="old('address')" id="address" required></textarea>

            <x-input-error :messages="$errors->get('country')" class="mt-2" />

            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2 text-white" for="flexCheckDefault">
                    Show address on pedigree
                </label>
            </div>
        </div>


        <hr class="mt-2">

        <!-- Loft logo -->

        <div class="mt-4">
            <x-input-label for="loft_logo" :value="__('Loft Logo')" />

            <!-- <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" /> -->

            <input class="" type="file" name="loft_logo" id="loft_logo">

            <x-input-error :messages="$errors->get('loft_logo')" class="mt-2" />
        </div>

        <!-- pedigree background -->

        <div class="mt-4">
            <x-input-label for="pedigree" :value="__('Loft Logo')" />

            <!-- <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" /> -->

            <input class="" type="file" name="pedigree" id="pedigree">

            <x-input-error :messages="$errors->get('pedigree')" class="mt-2" />
        </div>


        <!-- Results GR  -->

        <div class="mt-4">
            <x-input-label for="result_QR" :value="__('PiQson result QR')" />


            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2 text-white" for="flexCheckDefault">
                    Yes show on pedigree
                </label>
            </div>
        </div>

        <!-- broobder results  -->

        <div class="mt-4">
            <x-input-label for="broobder" :value="__('Broobder results')" />


            <textarea class="block mt-1 w-full" name="broobder" :value="old('broobder')" id="broobder" required></textarea>

            <x-input-error :messages="$errors->get('broobder')" class="mt-2" />


        </div>

        <hr class="mt-2">



        <!-- Results GR  -->

        <div class="mt-4">
            <x-input-label for="my_web" :value="__('My web')" />


            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2 text-white" for="flexCheckDefault">
                    Yes show
                </label>
            </div>
        </div>

        <!-- broobder description  -->

        <div class="mt-4">
            <x-input-label for="broobder_description" :value="__('Broobders description')" />


            <textarea class="block mt-1 w-full" name="broobder_description" :value="old('broobder_description')" id="broobder_description" required></textarea>

            <x-input-error :messages="$errors->get('broobder_description')" class="mt-2" />


        </div>



        <!-- my web link  -->

        <div class="mt-4">
            <x-input-label for="web_link" :value="__('My web link')" />


            <x-text-input id="webLink" class="block mt-1 w-full" type="webLink" name="webLink" required autocomplete="new-webLink" />

            <x-input-error :messages="$errors->get('web_link')" class="mt-2" />


        </div>


        <hr class="mt-2">



        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <hr class="mt-2">


        <div class="d-grid">
            <button class="g-recaptcha btn btn-primary btn-lg " data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}" data-callback="onSubmit" data-action="submitContact">Submit</button>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>