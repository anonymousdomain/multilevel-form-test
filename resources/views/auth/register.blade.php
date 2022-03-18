<x-guest-layout>
    <x-jet-authentication-card>
        
        <div class="w-100">
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <h5 class="text-center  p-4">Volunteer Registration Form</h5>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              
                <div class="mb-3">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')"  />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('LastName') }}" />

                    <x-jet-input class="{{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname"
                                 :value="old('lastname')"  />
                    <x-jet-input-error for="lastname"></x-jet-input-error>
                </div>
               
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')"  />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Phone') }}" />

                    <x-jet-input class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone"
                                 :value="old('phone')"  />
                    <x-jet-input-error for="phone"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Username') }}" />

                    <x-jet-input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username"
                                 :value="old('username')"  />
                    <x-jet-input-error for="username"></x-jet-input-error>
                </div>
               
                <div class="mb-3">

                    <select class="form-control" name="usersex">
                        <option value="">Select Sex</option>
                        <option value="M"> Male</option>
                        <option value="F"> Female</option>
                    </select>

                </div>
        
                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation"  />
                </div>
               
                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
          
        </div>
        <!-- /.form-box -->
        </div>
    </x-jet-authentication-card>

</x-guest-layout>
