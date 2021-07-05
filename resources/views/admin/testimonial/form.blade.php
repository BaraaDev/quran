@php $name = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$name}}" value="{{Request::old($name) ? Request::old($name) : $model->name}}" type="text" class="form-control" required placeholder="اكتب اسم الشخص">
    </div>
</div>

@php $content = "content"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الوصف<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <textarea required name="{{$content}}" class="form-control summernote">{{Request::old($content) ? Request::old($content) : $model->content}}</textarea>
    </div>
</div>

@php $job = "job"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">المهنة<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$job}}" type="text" value="{{Request::old($job) ? Request::old($job) : $model->job}}" class="form-control" required placeholder="اكتب المهنة/الوظيفة">
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
