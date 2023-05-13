@extends('layouts.app-master')

@section('content')
<body style="background-color: #202020;">
    <div class=" w-60px p-4 rounded" style="margin-top: 50px;">
        <h4 style="color: white;">C.R.U.D Table</h4>

        <div class="lead" style="float: right; margin-bottom: 10px;" >
        
        <a href="{{ route('users.create') }}" class="btn btn-outline-success btn-sm"> + New Record</a>
    </div>

        <div class="input-group" style="width: 30%;">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
        </form>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-dark table-striped table-bordered">
            <thead>
            <tr style="text-align: center;">
                <th scope="col" width="1%">ID</th>
                <th scope="col" width="1%">Name</th>
                <th scope="col"width="1%">Email</th>
                <th scope="col"width="1%">Username</th>
                <th width="1%">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr style="text-align: center;">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-warning btn-sm">Show</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

        <div style="float: right;">
            <a href="{{ route('home.index') }}" class="btn btn-outline-light btn-sm">Go Back</a>
        </div>

    </div>
@endsection