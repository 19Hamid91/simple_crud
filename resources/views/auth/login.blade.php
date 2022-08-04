@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">{{ __('Login') }}</h2>
                <p class="text-white-50 mb-5">{{ __('Masukkan Email dan Password!') }}</p>

                
                    <div class="form-outline form-white mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <label class="form-label" for="email">{{ __('Email') }}</label>
                    </div>
    
                    <div class="form-outline form-white mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    </div>
    
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="{{ route('password.request') }}">{{ __('Lupa Password?') }}</a></p>
    
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Login') }}</button>
    
                </div>
    
                <div>
                    <p class="mb-0">{{ __('Belum Punya Akun? ') }}<a href="{{ route('register') }}" class="text-white-50 fw-bold">{{ __('Register') }}</a>
                    </p>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
