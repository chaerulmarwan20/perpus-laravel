@extends('frontend.templates.default')

@section('content')
  <div class="col s12 m7">
    <h4 class="header">{{ __('Verify Your Email Address') }}</h4>
    @if (session('resent'))
      <div class="card-panel" style="background-color: #26a69a; color: #fff">
        {{ __('A fresh verification link has been sent to your email address.') }}
      </div>
    @endif
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <p>
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
          </p>
        </div>
        <div class="card-action">
          <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="waves-effect waves-light btn">{{ __('click here to request another') }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
