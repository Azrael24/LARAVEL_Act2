@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/text-1677205069340.png') !!}" alt="" >
        
        <h4 class="h4 mb-3" style="font-weight: bold; color:dimgrey;">LOGIN</h4>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-2">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-2">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-50 btn btn-sm btn-outline-dark" type="submit" style="float: left;">Login</button>
        <a href="{{ route('register.perform') }}" class="w-30 btn btn-sm " type="submit" style="float: right;">Register</a>
        

    </form>
@endsection