@extends('layouts.guest')
@section('contents')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                <form method="POST" action="{{ route('password.store') }}" class="signin-form">
                    @csrf
                     <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-group">
                      <label>Enter Email</label>
                      <input type="email" id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
                    </div>

                    <div class="form-group">
                        <label>Enter Password</label>
                        <input  class="form-control" id="password"  type="password" name="password" required autocomplete="new-password" >
                    </div>

                    <div class="form-group">
                        <label>Enter Password</label>
                        <input  class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password"name="password_confirmation" required autocomplete="new-password" >
                    </div>

                    <div class="signin-btn text-center">
                        <button >{{ __('Reset Password') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
