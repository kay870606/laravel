@extends('layouts.layout')

@section('content')
    <h1 class="title" align="center">登入</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div align="center">
            <div class="box" style="background: rgb(198,211,255); width:40%;">
                <table width="100%">
                    <div class="field">

                        <label class="label">{{ __('E-Mail') }}</label>
                        <input id="email" type="email" class="input" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 60%;">

                        @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">{{ __('密碼') }}</label>
                        <input id="password" type="password" class="input"
                               name="password" required autocomplete="current-password" style="width: 60%;">

                        @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 60%;">
                            {{ __('記住我') }}
                        </label>
                    </div>

                    <div class="field">
                        <button type="submit" class="button is-link">{{ __('登入') }}</button>

                        {{--@if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif--}}
                    </div>
                </table>



            </div>
        </div>

    </form>

@endsection
