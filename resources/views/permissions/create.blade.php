@extends('layouts.master')
@section('content')
<h1>Add New Permission</h1>

<form action="{{ route('permissions.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="control">Control:</label>
        <input type="text" name="control" id="control" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="function">Function:</label>
        <input type="text" name="function" id="function" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success mt-3">Save</button>
    <a href="{{ route('permissions.index') }}" class="btn btn-secondary mt-3">Cancel</a>
</form>
@endsection
