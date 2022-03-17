<x-guest-layout>
    <x-jet-authentication-card>
        
        <div class="w-100">
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <h5 class="text-center  p-4">Volunteer Registration Form</h5>
            <x-jet-validation-errors class="mb-3" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3 has-feedback">
                    <input type="text" class="form-control" placeholder="First name" name="name" id="name" autofocus=""
                        value="{{ old('name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="text" class="form-control" placeholder="Last name" name="lastname" id="lastname"
                        value="{{ old('lastname') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                        value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone"
                        value="{{ old('phone') }}">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="text" class="form-control" placeholder="Usename" name="username" id="username"
                        value="{{ old('username') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="mb-3 has-feedback">
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="mb-3">

                    <select class="form-control" name="usersex">
                        <option value="">Select Sex</option>
                        <option value="M"> Male</option>
                        <option value="F"> Female</option>
                    </select>

                </div>
                <div class="row mt-4">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"
                            name="register">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="login" class="text-center">I already have an account</a>
        </div>
        <!-- /.form-box -->
        </div>
    </x-jet-authentication-card>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <div class="form-card">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">First name</label> <input type="text" id="fname"
                                    name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Last name<span class="text-danger">
                                        *</span></label> <input type="text" id="lname" name="lname"
                                    placeholder="Enter your last name" onblur="validate(2)"> </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Job title<span class="text-danger">
                                        *</span></label> <input type="text" id="job" name="job" placeholder=""
                                    onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Business email<span class="text-danger">
                                        *</span></label> <input type="text" id="email" name="email" placeholder=""
                                    onblur="validate(3)"> </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Phone number<span class="text-danger">
                                        *</span></label> <input type="text" id="mob" name="mob" placeholder=""
                                    onblur="validate(4)"> </div>
                            <div class="form-group col-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">hello<span class="text-danger"> *</span></label>
                                <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
