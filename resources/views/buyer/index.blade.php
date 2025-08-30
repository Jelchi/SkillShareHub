@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buyer Dashboard') }}</div>

                <div class="card-body">
                    <h4>Welcome to the Buyer Dashboard!</h4>
                    <p>Here you can browse and purchase skills from other users.</p>
                    
                    <!-- Add your buyer-specific content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
