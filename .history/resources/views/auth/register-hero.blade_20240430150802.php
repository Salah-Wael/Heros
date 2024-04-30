@extends('auth.register')

@section('title')
Heros | register as Hero
@endsection
@section('h2')
Sign Up as Hero
@endsection
{{-- @dd($countries) --}}
{{-- @dd($sports) --}}
@section('sign')
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
                <span class="input-group-text">M</span>
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
                <input type="number" class="form-control" name="weight" value="{{ old('weight') }}" min="0.0" step="0.1" required>
                <span class="input-group-text">Kg</span>
            </div>
        </div>
        @if($errors->has('weight'))
            <div class="alert alert-danger">
                @error('weight')
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
        
        
        <div class="form-group">
            <label class="form-label" for="country">Birth Country</label>
            <select class="form-select" id="country" name="country">
                <option value="">__</option>
                @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->country }}</option>
                @endforeach
            </select>
        </div>
        @if($errors->has('country'))
            <div class="alert alert-danger">
                @error('country')
                    {{ $message }}
                @enderror
            </div>
        @endif
        <div class="form-group">
            <label class="form-label" for="country">Birth Country</label>
            <select class="form-select" id="country" name="country">
                <option value="">__</option>
                @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->country }}</option>
                @endforeach
            </select>
        </div>
        @if($errors->has('country'))
            <div class="alert alert-danger">
                @error('country')
                    {{ $message }}
                @enderror
            </div>
        @endif
        
        <div class="form-group">
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