@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card shadow">
        <!-- Card Header -->
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">تعديل المجموعة</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="{{ route('groups.update', $group->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- إضافة method PUT -->

                <!-- Group Name Field -->
                <div class="form-group mb-4">
                    <label for="name" class="form-label">مسمي المجموعة</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="مسمي المجموعة" value="{{ old('name', $group->name) }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Slug Field -->
                <div class="form-group mb-4">
                    <label for="slug" class="form-label">اسم الاستعارة للمجموعة</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                        placeholder="اسم الاستعارة للمجموعة" value="{{ old('slug', $group->slug) }}" required>
                    @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Group Description Field -->
                <div class="form-group mb-4">
                    <label for="description" class="form-label">وصف المجموعة</label>
                    <textarea name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror" rows="4"
                        placeholder="وصف المجموعة">{{ old('description', $group->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Group Level Field -->
                <div class="form-group mb-4">
                    <label for="level" class="form-label">مستوى المجموعة</label>
                    <input type="number" name="level" id="level"
                        class="form-control @error('level') is-invalid @enderror"
                        value="{{ old('level', $group->level) }}" min="1" required>
                    @error('level')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Allow Guest Access Field -->
                <div class="form-group mb-4">
                    <label for="allow_guest_access" class="form-label">السماح بالوصول للضيوف</label>
                    <div class="custom-control custom-switch">
                        <input type="hidden" name="allow_guest_access" value="0">
                        <input type="checkbox" name="allow_guest_access" id="allow_guest_access"
                            class="custom-control-input @error('allow_guest_access') is-invalid @enderror" value="1" {{
                            old('allow_guest_access', $group->allow_guest_access) ? 'checked' : '' }}>
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
                        <!-- Hidden Input لإرسال القيمة الافتراضية -->
                        <input type="hidden" name="status" value="inactive">
                        <!-- Checkbox لإرسال القيمة "active" عند التحديد -->
                        <input type="checkbox" name="status" id="status"
                            class="custom-control-input @error('status') is-invalid @enderror" value="active" {{
                            old('status', $group->status) == 'active' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status"></label>
                    </div>
                    @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Save Button -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> تحديث
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
