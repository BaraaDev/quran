
@php $name = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان</label>
    <div class="col-lg-10">
        <input name="{{$name}}" value="{{Request::old($name) ? Request::old($name) : $model->name}}" type="text" class="form-control" placeholder="اكتب عنوان المستوي">
    </div>
</div>

@php $document = "document"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">المذكرة</label>
    <div class="col-lg-10">
        <textarea name="{{$document}}"  class="form-control summernote">{{Request::old($document) ? Request::old($document) : $model->document}}</textarea>
    </div>
</div>

@php $icon = "icon"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الايقونة</label>
    <div class="col-lg-10">
        <input name="{{$icon}}" type="text" value="{{Request::old($icon) ? Request::old($icon) : $model->icon}}" class="form-control" placeholder="اكتب الايقونة">
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
            <option value="1" {{ isset($model) && $model->{$status} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$status} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div>
