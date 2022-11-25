@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('User Preview') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                <tr>
                    <th colspan="3">
                        List of Users
                        <a class="btn btn-warning float-end" href="{{ route('users.export') }}">Export Data</a>
                    </th>
                </tr>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <!-- <td>{{ $user->id }}</td> -->
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection