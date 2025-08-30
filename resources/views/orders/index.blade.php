@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Orders') }}</div>

                <div class="card-body">
                    <h4>Your Orders</h4>
                    <p>Here you can view all your orders and their status.</p>
                    
                    <!-- Add your orders list here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
