@extends('layouts.app')

<x-auth.form type="Sign In" id='logModal'>
                    <form method="POST" class="sing-register-form" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #014675">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                            <button type="submit" class="custom-button w-100">{{ __('Login') }}</button>
                            </div>
                        </div>
                        <div class="row text-center mb-3">
                            @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none; color: #014675;">
                                            <small>{{ __('Forgot Your Password?') }}</small>
                                        </a>
                                    @endif
                            </div>
    
                    </form>

</x-auth.form>
