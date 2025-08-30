@extends('layouts.app')
@section('title')
    {{ __('app.home') }}
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="card">
                        <div class="card-header">{{ __('app.choose_language') }}</div>
                        <div class="card-body">
                            <h1 class="display-4">{{ __('app.welcome_message') }}!</h1>
                            <p class="lead">{{ __('app.language_instruction') }}</p>
                            <hr>
                            <div>
                                <a href="{{ route('lang.switch', 'id') }}" class="btn btn-primary btn-lg mx-2">
                                    Bahasa Indonesia (ID)
                                </a>
                                <a href="{{ route('lang.switch', 'en') }}" class="btn btn-secondary btn-lg mx-2">
                                    English (EN)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @auth
            {{-- KONTEN UNTUK PENGGUNA YANG SUDAH LOGIN --}}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">{{ __('home.dashboard') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('home.tokens') }}</h5>
                                            <p class="display-4">{{ $user->poin }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('home.skills_sold') }}</h5>
                                            <p class="display-4">{{ $skillsSold }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
@endsection