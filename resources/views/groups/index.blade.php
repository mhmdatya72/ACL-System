@extends('layouts.master')
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <div>
            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">قائمة المجموعات</h2>
            <p class="mg-b-0">عرض جميع المجموعات المتاحة في النظام.</p>
        </div>
    </div>
    <div class="main-dashboard-header-right">
        <div>
            <label class="tx-13">عدد المجموعات</label>
            <h5>{{ $groups->total() }}</h5>
        </div>
        <div>
            <label class="tx-13">المجموعات المفعلة</label>
            <h5>{{ $groups->where('status', 'active')->count() }}</h5>
        </div>
        <div>
            <label class="tx-13">المجموعات المعطلة</label>
            <h5>{{ $groups->where('status', 'inactive')->count() }}</h5>
        </div>
    </div>
</div>
<!-- /breadcrumb -->
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">قائمة الموظفين</h3>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class="h5">ID</th>
                    <th class="h5">اسم المجموعة</th>
                    <th class="h5">اسم مستعار</th>
                    <th class="h5">حالة التسجيل</th>
                    <th class="h5">تاريخ الإدخال</th>
                    <th class="h5">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($groups as $group)
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->slug }}</td>
                    <td>{{ $group->status == 'active' ? 'مفعل' : 'معطل' }}</td>
                    <td>{{ $group->created_at->format('d') }} {{ $group->created_at->format('F') }} {{
                        $group->created_at->format('Y') }}</td>
                    <td class="d-flex">
                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-outline-success mr-2">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST"
                            onsubmit="return confirm('هل أنت متأكد من حذف هذه المجموعة؟');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">لا توجد مجموعات</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $groups->links() }}
        </div>
    </div>
</div>

@endsection
