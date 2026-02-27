@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 50px;">
    <div class="card">
        <div class="card-body text-center">
            <h2>Welcome, {{ Auth::user()->name ?? 'User' }}!</h2>
            <p>You have successfully logged in to your dashboard.</p>
        </div>
    </div>
</div>
@endsection
