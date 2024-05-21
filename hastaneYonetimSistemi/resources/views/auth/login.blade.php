@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Giriş Yap') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">{{ __('E-Posta Adresi') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">{{ __('Şifre') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Kullanıcı Tipi Seçimi -->
                            <div class="form-group">
                                <label for="user_type">{{ __('Kullanıcı Tipi') }}</label>
                                <select id="user_type" class="form-control" name="user_type" required>
                                    <option value="doktor">Doktor</option>
                                    <option value="hasta">Hasta</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Giriş Yap') }}
                                </button>
                            </div>

                            <div class="form-group mb-0">
                                <a href="{{ route('register') }}" class="btn btn-link">
                                    {{ __('Kayıt Ol') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
