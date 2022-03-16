<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />
        <div class="w-100">
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
            <div class="register-box-body">
                <p class="login-box-msg">Volunteer Registration Form</p>
                <x-jet-validation-errors class="mb-3" />
                <form action="/register.php" method="post" id="registrationForm">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="First name" name="fname" id="fnameInput"
                            autofocus="">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Last name" name="lname" id="lnameInput">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="emailInput">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone"
                            id="phoneInput">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Usename" name="username"
                            id="usernameInput">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="repassword" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="form-group">

                        <select class="form-control" name="userSex">
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
</x-guest-layout>
