@extends('layouts.master')

@section('content')
<h1>Manage Permissions</h1>

<form action="{{ route('groups.permissions.update') }}" method="POST">
    @csrf
    @method('PUT')

    <table class="table table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th class="h5">Controller</th>
                <th class="h5">Function</th>
                <th class="h5">Groups</th>
                <th class="h5">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->control }}</td>
                <td>{{ $permission->function }}</td>
                <td>
                    @foreach ($groups as $group)
                    <div>
                        <label>
                            <input type="checkbox" name="actions[{{ $permission->id }}][{{ $group->id }}]" value="{{ $group->id }}">
                            {{ $group->name }}
                        </label>
                    </div>
                    @endforeach
                </td>
                <td class="text-center">
                    <div class="mt-2">
                        <button type="submit" class="btn btn-sm btn-primary">
                            حفظ التغييرات
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
@endsection
