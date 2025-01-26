@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card shadow">
        <!-- Card Header -->
        <div class="card-header bg-primary text-white">
            <h1 class="display-4 mb-5">قائمة المجموعات</h1>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <form action="{{ route('groups.store') }}" method="POST">
                @csrf

                <!-- Group Name Field -->
                <div class="form-group mb-4">
                    <label for="name" class="form-label">مسمي المجموعة</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="مسمي المجموعة" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Slug Field -->
                <div class="form-group mb-4">
                    <label for="slug" class="form-label">اسم الاستعارة للمجموعة</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                        placeholder="اسم الاستعارة للمجموعة" value="{{ old('slug') }}" required>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Description Field -->
                <div class="form-group mb-4">
                    <label for="description" class="form-label">وصف المجموعة</label>
                    <textarea name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror" rows="4"
                        placeholder="وصف المجموعة">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Level Field -->
                <div class="form-group mb-4">
                    <label for="level" class="form-label">مستوى المجموعة</label>
                    <input type="number" name="level" id="level"
                        class="form-control @error('level') is-invalid @enderror" value="{{ old('level', 1) }}"
                        min="1" required>
                    @error('level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Allow Guest Access Field -->
                <div class="form-group mb-4">
                    <label for="allow_guest_access" class="form-label">السماح بالوصول للضيوف</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="allow_guest_access" id="allow_guest_access"
                            class="custom-control-input @error('allow_guest_access') is-invalid @enderror" value="1"
                            {{ old('allow_guest_access') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="allow_guest_access"></label>
                    </div>
                    @error('allow_guest_access')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Status Field -->
                <div class="form-group mb-4">
                    <label for="status" class="form-label">حالة المجموعة</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="status" id="status"
                            class="custom-control-input @error('status') is-invalid @enderror" value="active"
                            {{ old('status', $group->status ?? 'active') == 'active' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status"></label>
                    </div>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Save Button -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> حفظ
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
