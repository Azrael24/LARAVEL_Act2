@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded" style="width: 40%; margin:auto; margin-top: 100px; border: 1px solid black;">
        <h5>User Information</h5>
        <div class="lead">
            
        </div>
        
        <div class="container">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>
    
    <div style="margin-top: 50px;">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
    </div>
@endsection