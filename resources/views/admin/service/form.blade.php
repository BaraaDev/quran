@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" required placeholder="اكتب عنوان الخدمة">
    </div>
</div>

@php $description = "description"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الوصف<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <textarea name="{{$description}}" required class="form-control summernote">{{Request::old($description) ? Request::old($description) : $model->description}}</textarea>
    </div>
</div>

@php $icon = "icon"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الايقونة<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$icon}}" type="text" value="{{Request::old($icon) ? Request::old($icon) : $model->icon}}" class="form-control" required placeholder="اكتب الايقونة">
    </div>
</div>

@php $user = "user"; @endphp
<div class="col-lg-10">
    <input required name="{{$user}}" value="{{auth()->user()->name}}" type="hidden">
</div>


@php $status = "status"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الحالة<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select name="{{$status}}" class="form-control select-search" data-fouc data-placeholder="اختار الحاله" required>
            <option value="1" {{ isset($model) && $model->{$status} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$status} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة</label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div>
