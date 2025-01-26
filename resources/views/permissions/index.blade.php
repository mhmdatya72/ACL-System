@extends('layouts.master')
@section('content')
    <h1>Permissions</h1>
    <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-3">Add New Permission</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Control</th>
                <th>Function</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $permission->control }}</td>
                    <td>{{ $permission->function }}</td>
                    <td>{{ $permission->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

