@php $name = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">اسم العلامة</label>
    <div class="col-lg-10">
        <input name="{{$name}}" value="{{Request::old($name) ? Request::old($name) : $model->name}}" type="text" class="form-control" placeholder="اكتب اسم العلامة">
    </div>
</div>

@php $color = "color"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">اللون</label>
    <div class="col-lg-10">
        <input name="{{$color}}" type="text" value="{{Request::old($color) ? Request::old($color) : $model->color}}" class="form-control" placeholder="اللون">
    </div>
</div>

@php $user = "user"; @endphp
<div class="col-lg-10">
    <input name="{{$user}}" value="{{auth()->user()->name}}" type="hidden">
</div>

@php $status = "status"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الحالة<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select name="{{$status}}" class="form-control select-search" data-fouc data-placeholder="اختار الحاله" required>
            <option></option>
            <option value="1" {{ isset($model) && $model->{$status} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$status} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div>
