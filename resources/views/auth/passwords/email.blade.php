@extends('layouts._auth-blank')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="authbox shadow">

                <div class="authbox__bg" style="background-image: url('{{url(Storage::url('public/gift-auth.jpg'))}}')"></div>
                                            {{-- style="background-image:url('{{ url(Storage::url($chanchita->url_img)) }}')" --}}
                <div class="authbox__content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary button__base">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
