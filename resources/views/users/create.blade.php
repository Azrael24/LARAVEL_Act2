@extends('layouts.auth-master')

@section('content')
<body style="background-color: light; width: 30%; height: 80%; margin:auto; margin-top: 50px; border: 1px solid black;"> 
    <form method="post" action="{{ route('users.create') }} ">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/text-1677205069340.png') !!}" alt="" >

        <h4 class="h4 mb-3" style="font-weight: bold; color:dimgrey;">NEW RECORD</h4>

        <div class="form-group form-floating mb-2">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-2">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
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

        <div class="form-group form-floating mb-2">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <button class="w-50 btn btn-sm btn-outline-success" type="submit" style="float: left;" >Create</button>
        <a href="{{ route('users.index') }}" class="w-30 btn btn-sm " type="submit" style="float: right;">Go Back</a>
    </form>
</body>
@endsection