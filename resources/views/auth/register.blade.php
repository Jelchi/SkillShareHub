@extends('layouts.app')
@section('title')
    {{ __('navbar.register') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('register.title') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                        <!-- Profil -->
                        <div class="row mb-3">
                            <label for="profil" class="col-md-4 col-form-label text-md-end">{{ __('register.profile_picture') }}</label>
                            <div class="col-md-6">
                                <input id="profil" type="file" class="form-control @error('profil') is-invalid @enderror" name="profil">
                                @error('profil')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Nama -->
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('register.name') }}</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="name" autofocus>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('register.email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Jenis Kelamin -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('register.gender') }}</label>
                            <div class="col-md-6 pt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="pria" value="pria" {{ old('jenis_kelamin') == 'pria' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="pria">{{ __('register.male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="wanita" value="wanita" {{ old('jenis_kelamin') == 'wanita' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="wanita">{{ __('register.female') }}</label>
                                </div>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Tanggal Lahir -->
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('register.birth_date') }}</label>
                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Negara -->
                        <div class="row mb-3">
                            <label for="negara" class="col-md-4 col-form-label text-md-end">{{ __('register.country') }}</label>
                            <div class="col-md-6">
                                <select id="negara" class="form-select @error('negara') is-invalid @enderror" name="negara" required>
                                    <option value="" disabled {{ old('negara') ? '' : 'selected' }}>{{ __('register.select_country') }}</option>
                                    <option value="indonesia" {{ old('negara') == 'indonesia' ? 'selected' : '' }}>{{ __('register.indonesia') }}</option>
                                    <option value="singapore" {{ old('negara') == 'singapore' ? 'selected' : '' }}>{{ __('register.singapore') }}</option>
                                    <option value="malaysia" {{ old('negara') == 'malaysia' ? 'selected' : '' }}>{{ __('register.malaysia') }}</option>
                                    <option value="thailand" {{ old('negara') == 'thailand' ? 'selected' : '' }}>{{ __('register.thailand') }}</option>
                                </select>
                                @error('negara')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Skill -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('register.skill_category') }}</label>
                            <div class="col-md-6 pt-2">
                                <div class="form-check">
                                    <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="design" id="skill_design" {{ is_array(old('skills')) && in_array('design', old('skills')) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="skill_design">{{ __('register.design') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="copywriting" id="skill_copywriting" {{ is_array(old('skills')) && in_array('copywriting', old('skills')) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="skill_copywriting">{{ __('register.copywriting') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="web" id="skill_web" {{ is_array(old('skills')) && in_array('web', old('skills')) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="skill_web">{{ __('register.web') }}</label>
                                </div>
                                @error('skills')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('register.password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <!-- Confirm Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('register.confirm_password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('register.submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
