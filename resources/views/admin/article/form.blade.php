@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" required placeholder="اكتب عنوان المقال">
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
    <label class="col-form-label col-lg-2">المستوي<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        @inject('level','App\Models\Level')
        {!! Form::select('level_id',$level->status()->pluck('title','id'),Request::old('level_id') ? Request::old('level_id') : $model->level_id,[
            'placeholder' => 'اختر من المستويات',
            'class' => 'form-control form-control-select2'
        ]) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">العلامات  <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('tag','App\Models\Tag')

        {!! Form::select('tag_id[]',$tag->status()->pluck('name','id'),null,[
            'class' => 'form-control form-control-select2',
            'value' => 'tag->id',
            'multiple' => 'multiple',
            'data-container-css-class' => 'bg-teal-400',
        ]) !!}
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

@php $link = "link"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">رابط الفيديو<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input name="{{$link}}" value="{{Request::old($link) ? Request::old($link) : $model->link}}" type="url" required class="form-control" placeholder="أدخل رابط الفيديو">
    </div>
</div>
