@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" required placeholder="اكتب عنوان الموعد">
    </div>
</div>

@php $content = "content"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">المحتوي<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <textarea name="{{$content}}" rows="3" cols="3" class="form-control summernote" required placeholder="اكتب محتوي المقال">{{Request::old($content) ? Request::old($content) : $model->content}}</textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة</label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-2">بداية الموعد<span class="text-danger">*</span></label>
    <div class="col-md-10">
        <input class="form-control" type="time" name="start_at" required value="{{Request::old('start_at') ? Request::old('start_at') : $model->start_at}}">
     </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-2">نهاية الموعد<span class="text-danger">*</span></label>
    <div class="col-md-10">
        <input class="form-control" type="time" name="end_at" required value="{{Request::old('end_at') ? Request::old('end_at') : $model->end_at}}">
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
        <select  name="{{$status}}" class="form-control select-search" data-fouc data-placeholder="اختار الحاله" required>

            <option value="1" {{ isset($model) && $model->{$status} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$status} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div>
