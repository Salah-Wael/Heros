@extends('auth.register')

@section('sign')

    <div style="width:100%;display: flex;height:200px;align-items:center;">
        <h1 class="mb-0" style="width:100%;padding:0px 0px 120px 0px;">Sign Up</h1>
        <a class="sign-in-logo mb-5" style="padding:0px 0px 40px 0;" href="/register">
            <img src="{{ asset('/assets/images/login/sign.png') }}"
                style="width:100%;height:200px;display: block;margin-left: auto;margin-right: auto;"
                class="img-fluid"
                alt="logo">
        </a>
        </div>
            <form style="height:440px;margin-top:-60px" action="/register-hero" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="exampleInputName1">First name</label>
                <input type="text" class="form-control mb-0" name='firstName' value="{{ old('firstName') }}" required id="exampleInputName1" placeholder="First name">
            </div>
            @if($errors->has('firstName'))
                <div class="alert alert-danger">
                    @error('firstName')
                        {{ $message }}
                    @enderror
                </div>
            @endif

            <div class="form-group">
                <label class="form-label" for="exampleInputName2">Last name</label>
                <input type="text" class="form-control mb-0" name='lastName' value="{{ old('lastName') }}" required id="exampleInputName2" placeholder="Last name">
            </div>
            @if($errors->has('lastName'))
                <div class="alert alert-danger">
                    @error('lastName')
                        {{ $message }}
                    @enderror
                </div>
            @endif

            <div class="form-group">
                <label class="form-label" for="exampleInputName3">Short name</label>
                <input type="text" class="form-control mb-0" name='shortName' value="{{ old('shortName') }}" required id="exampleInputName3" placeholder="Short name">
            </div>
            @if($errors->has('shortName'))
                <div class="alert alert-danger">
                    @error('shortName')
                        {{ $message }}
                    @enderror
                </div>
            @endif
            
            <div class="form-group">
                <label class="form-label" for="height">Height</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="height" value="{{ old('height') }}" min="0.0" max="2.50" step="0.01" required>
                    <span class="input-group-text">CM</span>
                </div>
            </div>
            @if($errors->has('height'))
                <div class="alert alert-danger">
                    @error('height')
                        {{ $message }}
                    @enderror
                </div>
            @endif

            <div class="form-group">
                <label class="form-label" for="height">Weight</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="height" value="{{ old('weight') }}" min="0.0" max="2.50" step="0.01" required>
                    <span class="input-group-text">CM</span>
                </div>
            </div>
            @if($errors->has('height'))
                <div class="alert alert-danger">
                    @error('height')
                        {{ $message }}
                    @enderror
                </div>
            @endif

            
            <div class="form-group">
                <label class="form-label" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control mb-0" name='email' value="{{ old('email') }}" id="exampleInputEmail2" placeholder="Enter email" required>
            </div>
            @if($errors->has('email'))
            <div class="alert alert-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            @endif

            <div class="form-group">
                <label class="form-label" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mb-0" name='password' id="exampleInputPassword1" placeholder="Password" required>
            </div>
            @if($errors->has('password'))
                <div class="alert alert-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            @endif
            <div class="form-group">
                <label class="form-label" for="exampleInputPassword2">Confirm Password</label>
                <input type="password" class="form-control mb-0" name='password_confirmation' id="exampleInputPassword2" placeholder="Confirm Password" required>
            </div>

            <div>
                <label class="form-label" for="birthDate">Bith Date</label>
                <input type="date" class="form-control mb-0" value="{{ old('birthDate') }}"  id="birthDate" name="birthDate" required>
            </div>

            <div>
            <br>
                <label class="form-label" for="gender">Gender:</label>

            <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div>
            @if($errors->has('gender'))
                <div class="alert alert-danger">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            @endif

            <div class="d-inline-block w-100">
                <div class="form-check d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="form-check-input" id="customCheck1">
                    <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                </div>

                <button type="submit" class="btn btn-primary float-end">Sign Up</button>
            </div>
            <div class="sign-info">
                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="login">Log In</a></span>
                <span class="dark-color d-inline-block line-height-2">You're not a Player <a href="register">Sign up as user</a></span>
            </div>
        </form>
    @endsection