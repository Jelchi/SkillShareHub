@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notifications') }}</div>

                <div class="card-body">
                    <h4>Your Notifications</h4>
                    <p>Here you can view all your notifications.</p>
                    
                    <!-- Add your notifications list here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
