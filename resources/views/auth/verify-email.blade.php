@extends('layouts.guest')
@section('contents')

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3 signin-form">
            <div class="create-btn text-center">
                <p>Not have an account?
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                        <div class="signin-btn text-center">
                            <button > {{ __('Resend Verification Email') }}</button>
                        </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="signin-btn text-center">
                        <button >  {{ __('Log Out') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
    @endsection
