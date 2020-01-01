@extends('layouts.layout')

@section('contents')
    <h1 class="title" align="center" style="margin: 40px 0px;">登入</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div align="center" style="margin: 50px 0px;">
            <div class="box" style="width:40%;">
                <div class="login" style="width:100%">
                    <div style="width:100%">
                        <div style="width:20%;display: inline-block; margin: 10px 0px; " ><label class="label">{{ __('E-Mail') }}</label></div>
                        <div style="width:70%; display: inline-block;  margin: 10px 0px;"><input id="email" type="email" class="input" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus
                                   ></div>
                        @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="width:100%">
                        <div style="width:20%;display: inline-block;  margin: 10px 0px;"><label class="label">{{ __('密碼') }}</label></div>
                        <div style="width:70%; display: inline-block;  margin: 10px 0px;"><input id="password" type="password" class="input"
                                   name="password" required autocomplete="current-password"></div>
                        @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="width:100%">
                        <div><label class="checkbox">
                                <input type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('記住我') }}
                            </label>
                        </div>
                    </div>

                    <div style="width:100%">
                        <div>
                            <button type="submit" class="button is-link" style="width:100px;  margin: 10px 0px; ">{{ __('登入') }}</button>
                        </div>


                        {{--@if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif--}}
                    </div>
                </div>


            </div>
        </div>

    </form>

@endsection
