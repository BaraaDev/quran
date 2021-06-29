@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان</label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" placeholder="اكتب عنوان الموعد">
    </div>
</div>

@php $content = "content"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">المحتوي</label>
    <div class="col-lg-10">
        <textarea name="{{$content}}" rows="3" cols="3" class="form-control summernote" placeholder="اكتب محتوي المقال">{{Request::old($content) ? Request::old($content) : $model->content}}</textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة</label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
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
