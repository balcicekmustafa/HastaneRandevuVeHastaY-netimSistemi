@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kayıt Ol') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Ad -->
                            <div class="form-group">
                                <label for="ad">{{ __('Ad') }}</label>
                                <input id="ad" type="text" class="form-control @error('ad') is-invalid @enderror" name="ad" value="{{ old('ad') }}" required autocomplete="ad" autofocus>
                                @error('ad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Email Adresi -->
                            <div class="form-group">
                                <label for="email">{{ __('E-Posta Adresi') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Şifre -->
                            <div class="form-group">
                                <label for="password">{{ __('Şifre') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Şifreyi Onayla -->
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Şifreyi Onayla') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                                    {{ __('Kayıt Ol') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
