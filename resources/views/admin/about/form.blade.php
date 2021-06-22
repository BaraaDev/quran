@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان</label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" placeholder="اكتب العنوان">
    </div>
</div>

@php $content = "content"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الوصف</label>
    <div class="col-lg-10">
        <textarea name="{{$content}}"  class="form-control summernote">{{Request::old($content) ? Request::old($content) : $model->content}}</textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div>
